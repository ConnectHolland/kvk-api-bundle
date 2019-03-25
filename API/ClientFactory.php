<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API;

use GuzzleHttp\ClientInterface;
use Http\Adapter\Guzzle6\Client as HttpClient;

class ClientFactory
{
    public static function createApiClient(ClientInterface $client): Client
    {
        return Client::create(new HttpClient($client));
    }
}
