<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Middleware;
use Http\Adapter\Guzzle6\Client as HttpClient;
use Psr\Http\Message\RequestInterface;

class ClientFactory
{
    public static function createApiClient(ClientInterface $client, string $apiToken, string $testUsername, string $testPassword, bool $useTestingAccount): Client
    {
        $client->getConfig('handler')->unshift(Middleware::mapRequest(function (RequestInterface $request) use ($apiToken, $testUsername, $testPassword, $useTestingAccount) {
            if ($useTestingAccount) {
                return self::addTestingAuthentication($request, $testUsername, $testPassword);
            }

            return self::addApiToken($request, $apiToken);
        }));

        return Client::create(new HttpClient($client));
    }

    /**
     * Add testing authentication.
     */
    private static function addTestingAuthentication(RequestInterface $request, string $testUsername, string $testPassword): RequestInterface
    {
        return $request->withHeader('Authorization', sprintf('Basic %s', base64_encode($testUsername.':'.$testPassword)));
    }

    /**
     * Add api token for production.
     */
    private static function addApiToken(RequestInterface $request, string $apiToken): RequestInterface
    {
        $uri = $request->getUri();
        parse_str($uri->getQuery(), $query);
        $query['user_key'] = $apiToken;
        $uri               = $uri->withQuery(http_build_query($query));

        return $request->withUri($uri);
    }
}
