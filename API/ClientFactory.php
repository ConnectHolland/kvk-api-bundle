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
    private const TEST_ACCOUNT_CREDENTIALS = 'testourapis:testourapis';

    public static function createApiClient(ClientInterface $client, string $apiToken, bool $useTestingAccount): Client
    {
        $client->getConfig('handler')->unshift(Middleware::mapRequest(function (RequestInterface $request) use ($apiToken, $useTestingAccount) {
            if ($useTestingAccount) {
                return self::addTestingAuthentication($request);
            }

            return self::addApiToken($request, $apiToken);
        }));

        return Client::create(new HttpClient($client));
    }

    /**
     * Add testing authentication.
     */
    private static function addTestingAuthentication(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', sprintf('Basic %s', base64_encode(self::TEST_ACCOUNT_CREDENTIALS)));
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
