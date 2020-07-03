<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanySearchV2TradeNames
{
    /**
     * 
     *
     * @var string
     */
    protected $businessName;
    /**
     * 
     *
     * @var string
     */
    protected $shortBusinessName;
    /**
     * 
     *
     * @var string[]
     */
    protected $currentTradeNames;
    /**
     * 
     *
     * @var string[]
     */
    protected $formerTradeNames;
    /**
     * 
     *
     * @var string[]
     */
    protected $currentStatutoryNames;
    /**
     * 
     *
     * @var string[]
     */
    protected $formerStatutoryNames;
    /**
     * 
     *
     * @var string[]
     */
    protected $currentNames;
    /**
     * 
     *
     * @var string[]
     */
    protected $formerNames;
    /**
     * 
     *
     * @return string
     */
    public function getBusinessName() : string
    {
        return $this->businessName;
    }
    /**
     * 
     *
     * @param string $businessName
     *
     * @return self
     */
    public function setBusinessName(string $businessName) : self
    {
        $this->businessName = $businessName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortBusinessName() : string
    {
        return $this->shortBusinessName;
    }
    /**
     * 
     *
     * @param string $shortBusinessName
     *
     * @return self
     */
    public function setShortBusinessName(string $shortBusinessName) : self
    {
        $this->shortBusinessName = $shortBusinessName;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getCurrentTradeNames() : array
    {
        return $this->currentTradeNames;
    }
    /**
     * 
     *
     * @param string[] $currentTradeNames
     *
     * @return self
     */
    public function setCurrentTradeNames(array $currentTradeNames) : self
    {
        $this->currentTradeNames = $currentTradeNames;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getFormerTradeNames() : array
    {
        return $this->formerTradeNames;
    }
    /**
     * 
     *
     * @param string[] $formerTradeNames
     *
     * @return self
     */
    public function setFormerTradeNames(array $formerTradeNames) : self
    {
        $this->formerTradeNames = $formerTradeNames;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getCurrentStatutoryNames() : array
    {
        return $this->currentStatutoryNames;
    }
    /**
     * 
     *
     * @param string[] $currentStatutoryNames
     *
     * @return self
     */
    public function setCurrentStatutoryNames(array $currentStatutoryNames) : self
    {
        $this->currentStatutoryNames = $currentStatutoryNames;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getFormerStatutoryNames() : array
    {
        return $this->formerStatutoryNames;
    }
    /**
     * 
     *
     * @param string[] $formerStatutoryNames
     *
     * @return self
     */
    public function setFormerStatutoryNames(array $formerStatutoryNames) : self
    {
        $this->formerStatutoryNames = $formerStatutoryNames;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getCurrentNames() : array
    {
        return $this->currentNames;
    }
    /**
     * 
     *
     * @param string[] $currentNames
     *
     * @return self
     */
    public function setCurrentNames(array $currentNames) : self
    {
        $this->currentNames = $currentNames;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getFormerNames() : array
    {
        return $this->formerNames;
    }
    /**
     * 
     *
     * @param string[] $formerNames
     *
     * @return self
     */
    public function setFormerNames(array $formerNames) : self
    {
        $this->formerNames = $formerNames;
        return $this;
    }
}