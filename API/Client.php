<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API;

use ConnectHolland\KvkApiBundle\API\Client\Client as BaseClient;
use ConnectHolland\KvkApiBundle\API\Client\Normalizer\NormalizerFactory;
use ConnectHolland\KvkApiBundle\Normalizer\ApiResponseNormalizer;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class Client extends BaseClient
{
    public static function create($httpClient = null)
    {
        $client             = parent::create($httpClient);
        $client->serializer = new Serializer(
            array_merge([new ApiResponseNormalizer()], NormalizerFactory::create()),
            [new JsonEncoder(new JsonEncode(), new JsonDecode())]
        );

        return $client;
    }
}
