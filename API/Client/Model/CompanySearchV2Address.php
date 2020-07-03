<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanySearchV2Address
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $street;
    /**
     * 
     *
     * @var string
     */
    protected $houseNumber;
    /**
     * 
     *
     * @var string
     */
    protected $houseNumberAddition;
    /**
     * 
     *
     * @var string
     */
    protected $postalCode;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }
    /**
     * 
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street) : self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHouseNumber() : string
    {
        return $this->houseNumber;
    }
    /**
     * 
     *
     * @param string $houseNumber
     *
     * @return self
     */
    public function setHouseNumber(string $houseNumber) : self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHouseNumberAddition() : string
    {
        return $this->houseNumberAddition;
    }
    /**
     * 
     *
     * @param string $houseNumberAddition
     *
     * @return self
     */
    public function setHouseNumberAddition(string $houseNumberAddition) : self
    {
        $this->houseNumberAddition = $houseNumberAddition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
}