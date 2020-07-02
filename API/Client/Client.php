<?php

namespace ConnectHolland\KvkApiBundle\API\Client;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function companiesGetCompaniesBasicV2(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\KvkApiBundle\API\Client\Endpoint\CompaniesGetCompaniesBasicV2($queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function companiesGetCompaniesExtendedV2(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\KvkApiBundle\API\Client\Endpoint\CompaniesGetCompaniesExtendedV2($queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function companiesTestGetCompaniesBasicV2(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\KvkApiBundle\API\Client\Endpoint\CompaniesTestGetCompaniesBasicV2($queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function companiesTestGetCompaniesExtendedV2(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\KvkApiBundle\API\Client\Endpoint\CompaniesTestGetCompaniesExtendedV2($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function versionGetVersion(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ConnectHolland\KvkApiBundle\API\Client\Endpoint\VersionGetVersion(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://api.kvk.nl/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ConnectHolland\KvkApiBundle\API\Client\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}