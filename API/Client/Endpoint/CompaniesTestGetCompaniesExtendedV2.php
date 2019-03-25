<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Endpoint;

class CompaniesTestGetCompaniesExtendedV2 extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var string $kvkNumber KvK number, identifying number for a registration in the Netherlands Business Register. Consists of 8 digits
     *     @var string $branchNumber Branche number (Vestigingsnummer), identifying number of a branch. Consists of 12 digits
     *     @var string $rsin RSIN is an identification number for legal entities and partnerships. Consist of only digits
     *     @var bool $includeInactiveRegistrations Indication (true/false) to include searching through inactive dossiers/deregistered companies. Default is false.
     *     @var bool $restrictToMainBranch Search is restricted to main branches. Default is false.
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
        return '/api/v2/testprofile/companies';
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
        $optionsResolver->setDefined(['kvkNumber', 'branchNumber', 'rsin', 'includeInactiveRegistrations', 'restrictToMainBranch', 'site', 'context', 'q']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('kvkNumber', ['string']);
        $optionsResolver->setAllowedTypes('branchNumber', ['string']);
        $optionsResolver->setAllowedTypes('rsin', ['string']);
        $optionsResolver->setAllowedTypes('includeInactiveRegistrations', ['bool']);
        $optionsResolver->setAllowedTypes('restrictToMainBranch', ['bool']);
        $optionsResolver->setAllowedTypes('site', ['string']);
        $optionsResolver->setAllowedTypes('context', ['string']);
        $optionsResolver->setAllowedTypes('q', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \ConnectHolland\KvkApiBundle\API\Client\Model\ResultDataCompanyExtendedV2|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\ResultDataCompanyExtendedV2', 'json');
        }
    }
}
