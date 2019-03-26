<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Endpoint;

class CompaniesGetCompaniesBasicV2 extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var string $kvkNumber KvK number, identifying number for a registration in the Netherlands Business Register. Consists of 8 digits
     *     @var string $branchNumber Branch number (Vestigingsnummer), identifying number of a branch. Consists of 12 digits
     *     @var string $rsin RSIN is an identification number for legal entities and partnerships. Consist of only digits
     *     @var string $street Street of an address
     *     @var string $houseNumber House number of an address
     *     @var string $postalCode Postal code or ZIP code, example 1000AA
     *     @var string $city City or Town name
     *     @var string $tradeName The name under which a company or a branch of a company operates;
     *     @var bool $includeFormerTradeNames Indication (true/false) to search through expired trade names and expired registered names and/or include these in the results. Default is false
     *     @var bool $includeInactiveRegistrations Indication (true/false) to include searching through inactive dossiers/deregistered companies. Default is false.
     *     @var bool $mainBranch Search includes main branches. Default is true
     *     @var bool $branch Search includes branches. Default is true
     *     @var bool $legalPerson Search includes legal persons. Default is true
     *     @var string $startPage Number indicating which page to fetch for pagination. Default = 1, showing the first 10 results
     *     @var string $site Defines the search collection for the query
     *     @var string $context User can optionally add a context to identify his result later on
     *     @var string $q Free format text search for in the compiled search description.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/v2/search/companies';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['kvkNumber', 'branchNumber', 'rsin', 'street', 'houseNumber', 'postalCode', 'city', 'tradeName', 'includeFormerTradeNames', 'includeInactiveRegistrations', 'mainBranch', 'branch', 'legalPerson', 'startPage', 'site', 'context', 'q']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('kvkNumber', ['string']);
        $optionsResolver->setAllowedTypes('branchNumber', ['string']);
        $optionsResolver->setAllowedTypes('rsin', ['string']);
        $optionsResolver->setAllowedTypes('street', ['string']);
        $optionsResolver->setAllowedTypes('houseNumber', ['string']);
        $optionsResolver->setAllowedTypes('postalCode', ['string']);
        $optionsResolver->setAllowedTypes('city', ['string']);
        $optionsResolver->setAllowedTypes('tradeName', ['string']);
        $optionsResolver->setAllowedTypes('includeFormerTradeNames', ['bool']);
        $optionsResolver->setAllowedTypes('includeInactiveRegistrations', ['bool']);
        $optionsResolver->setAllowedTypes('mainBranch', ['bool']);
        $optionsResolver->setAllowedTypes('branch', ['bool']);
        $optionsResolver->setAllowedTypes('legalPerson', ['bool']);
        $optionsResolver->setAllowedTypes('startPage', ['string']);
        $optionsResolver->setAllowedTypes('site', ['string']);
        $optionsResolver->setAllowedTypes('context', ['string']);
        $optionsResolver->setAllowedTypes('q', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \ConnectHolland\KvkApiBundle\API\Client\Model\ResultDataCompanyBasicV2|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\ResultDataCompanyBasicV2', 'json');
        }
    }
}
