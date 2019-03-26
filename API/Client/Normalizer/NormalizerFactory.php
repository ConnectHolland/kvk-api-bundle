<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers   = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new \Jane\JsonSchemaRuntime\Normalizer\ReferenceNormalizer();
        $normalizers[] = new ResultDataCompanyBasicV2Normalizer();
        $normalizers[] = new CompanyBasicV2Normalizer();
        $normalizers[] = new CompanySearchV2TradeNamesNormalizer();
        $normalizers[] = new CompanySearchV2AddressNormalizer();
        $normalizers[] = new CompanySearchCriteriaExtendedV2Normalizer();
        $normalizers[] = new ResultDataCompanyExtendedV2Normalizer();
        $normalizers[] = new CompanyExtendedV2Normalizer();
        $normalizers[] = new CompanyProfileV2TradeNamesNormalizer();
        $normalizers[] = new CompanyProfileV2BusinessActivityNormalizer();
        $normalizers[] = new CompanyProfileV2AddressNormalizer();

        return $normalizers;
    }
}
