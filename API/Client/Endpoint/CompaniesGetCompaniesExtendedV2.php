<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Endpoint;

class CompaniesGetCompaniesExtendedV2 extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $kvkNumber KvK number, identifying number for a registration in the Netherlands Business Register. Consists of 8 digits
    *     @var string $branchNumber Branche number (Vestigingsnummer), identifying number of a branch. Consists of 12 digits
    *     @var string $rsin RSIN is an identification number for legal entities and partnerships. Consist of only digits
    *     @var bool $includeInactiveRegistrations Indication (true/false) to include searching through inactive dossiers/deregistered companies. Default is false.
    Note: History of inactive companies is after 1 January 2013
    *     @var bool $restrictToMainBranch Search is restricted to main branches. Default is false.
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
        return '/api/v2/profile/companies';
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
        $optionsResolver->setDefined(array('kvkNumber', 'branchNumber', 'rsin', 'includeInactiveRegistrations', 'restrictToMainBranch', 'site', 'context', 'q'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('kvkNumber', array('string'));
        $optionsResolver->setAllowedTypes('branchNumber', array('string'));
        $optionsResolver->setAllowedTypes('rsin', array('string'));
        $optionsResolver->setAllowedTypes('includeInactiveRegistrations', array('bool'));
        $optionsResolver->setAllowedTypes('restrictToMainBranch', array('bool'));
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