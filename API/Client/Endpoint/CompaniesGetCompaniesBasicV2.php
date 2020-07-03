<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Endpoint;

class CompaniesGetCompaniesBasicV2 extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
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
    Note: History of inactive companies is after 1 January 2013
    *     @var bool $mainBranch Search includes main branches. Default is true
    *     @var bool $branch Search includes branches. Default is true
    *     @var bool $legalPerson Search includes legal persons. Default is true
    *     @var string $startPage Number indicating which page to fetch for pagination. Default = 1, showing the first 10 results
    *     @var string $site Defines the search collection for the query
    *     @var string $context User can optionally add a context to identify his result later on
    *     @var string $q Free format text search for in the compiled search description.
    * }
    */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/api/v2/search/companies';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('kvkNumber', 'branchNumber', 'rsin', 'street', 'houseNumber', 'postalCode', 'city', 'tradeName', 'includeFormerTradeNames', 'includeInactiveRegistrations', 'mainBranch', 'branch', 'legalPerson', 'startPage', 'site', 'context', 'q'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('kvkNumber', array('string'));
        $optionsResolver->setAllowedTypes('branchNumber', array('string'));
        $optionsResolver->setAllowedTypes('rsin', array('string'));
        $optionsResolver->setAllowedTypes('street', array('string'));
        $optionsResolver->setAllowedTypes('houseNumber', array('string'));
        $optionsResolver->setAllowedTypes('postalCode', array('string'));
        $optionsResolver->setAllowedTypes('city', array('string'));
        $optionsResolver->setAllowedTypes('tradeName', array('string'));
        $optionsResolver->setAllowedTypes('includeFormerTradeNames', array('bool'));
        $optionsResolver->setAllowedTypes('includeInactiveRegistrations', array('bool'));
        $optionsResolver->setAllowedTypes('mainBranch', array('bool'));
        $optionsResolver->setAllowedTypes('branch', array('bool'));
        $optionsResolver->setAllowedTypes('legalPerson', array('bool'));
        $optionsResolver->setAllowedTypes('startPage', array('string'));
        $optionsResolver->setAllowedTypes('site', array('string'));
        $optionsResolver->setAllowedTypes('context', array('string'));
        $optionsResolver->setAllowedTypes('q', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }
}