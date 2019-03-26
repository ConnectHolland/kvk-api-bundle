<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API;

use ConnectHolland\KvkApiBundle\API\Client\Client as BaseClient;

class Client extends BaseClient
{
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins    = [];
            $uri        = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://api.kvk.nl');
            $plugins[]  = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory  = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer     = new \Symfony\Component\Serializer\Serializer(
            array_merge([new \ConnectHolland\KvkApiBundle\Normalizer\ApiResponseNormalizer()], \ConnectHolland\KvkApiBundle\API\Client\Normalizer\NormalizerFactory::create()),
            [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]
        );

        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
