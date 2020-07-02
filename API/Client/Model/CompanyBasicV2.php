<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanyBasicV2
{
    /**
     * 
     *
     * @var string
     */
    protected $kvkNumber;
    /**
     * 
     *
     * @var string
     */
    protected $branchNumber;
    /**
     * 
     *
     * @var string
     */
    protected $rsin;
    /**
     * 
     *
     * @var CompanySearchV2TradeNames
     */
    protected $tradeNames;
    /**
     * 
     *
     * @var bool
     */
    protected $hasEntryInBusinessRegister;
    /**
     * 
     *
     * @var bool
     */
    protected $hasNonMailingIndication;
    /**
     * 
     *
     * @var bool
     */
    protected $isLegalPerson;
    /**
     * 
     *
     * @var bool
     */
    protected $isBranch;
    /**
     * 
     *
     * @var bool
     */
    protected $isMainBranch;
    /**
     * At most 1 address is returned
     *
     * @var CompanySearchV2Address[]
     */
    protected $addresses;
    /**
     * 
     *
     * @var string[]
     */
    protected $websites;
    /**
     * 
     *
     * @return string
     */
    public function getKvkNumber() : string
    {
        return $this->kvkNumber;
    }
    /**
     * 
     *
     * @param string $kvkNumber
     *
     * @return self
     */
    public function setKvkNumber(string $kvkNumber) : self
    {
        $this->kvkNumber = $kvkNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBranchNumber() : string
    {
        return $this->branchNumber;
    }
    /**
     * 
     *
     * @param string $branchNumber
     *
     * @return self
     */
    public function setBranchNumber(string $branchNumber) : self
    {
        $this->branchNumber = $branchNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRsin() : string
    {
        return $this->rsin;
    }
    /**
     * 
     *
     * @param string $rsin
     *
     * @return self
     */
    public function setRsin(string $rsin) : self
    {
        $this->rsin = $rsin;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchV2TradeNames
     */
    public function getTradeNames() : CompanySearchV2TradeNames
    {
        return $this->tradeNames;
    }
    /**
     * 
     *
     * @param CompanySearchV2TradeNames $tradeNames
     *
     * @return self
     */
    public function setTradeNames(CompanySearchV2TradeNames $tradeNames) : self
    {
        $this->tradeNames = $tradeNames;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasEntryInBusinessRegister() : bool
    {
        return $this->hasEntryInBusinessRegister;
    }
    /**
     * 
     *
     * @param bool $hasEntryInBusinessRegister
     *
     * @return self
     */
    public function setHasEntryInBusinessRegister(bool $hasEntryInBusinessRegister) : self
    {
        $this->hasEntryInBusinessRegister = $hasEntryInBusinessRegister;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasNonMailingIndication() : bool
    {
        return $this->hasNonMailingIndication;
    }
    /**
     * 
     *
     * @param bool $hasNonMailingIndication
     *
     * @return self
     */
    public function setHasNonMailingIndication(bool $hasNonMailingIndication) : self
    {
        $this->hasNonMailingIndication = $hasNonMailingIndication;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsLegalPerson() : bool
    {
        return $this->isLegalPerson;
    }
    /**
     * 
     *
     * @param bool $isLegalPerson
     *
     * @return self
     */
    public function setIsLegalPerson(bool $isLegalPerson) : self
    {
        $this->isLegalPerson = $isLegalPerson;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsBranch() : bool
    {
        return $this->isBranch;
    }
    /**
     * 
     *
     * @param bool $isBranch
     *
     * @return self
     */
    public function setIsBranch(bool $isBranch) : self
    {
        $this->isBranch = $isBranch;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMainBranch() : bool
    {
        return $this->isMainBranch;
    }
    /**
     * 
     *
     * @param bool $isMainBranch
     *
     * @return self
     */
    public function setIsMainBranch(bool $isMainBranch) : self
    {
        $this->isMainBranch = $isMainBranch;
        return $this;
    }
    /**
     * At most 1 address is returned
     *
     * @return CompanySearchV2Address[]
     */
    public function getAddresses() : array
    {
        return $this->addresses;
    }
    /**
     * At most 1 address is returned
     *
     * @param CompanySearchV2Address[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses) : self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWebsites() : array
    {
        return $this->websites;
    }
    /**
     * 
     *
     * @param string[] $websites
     *
     * @return self
     */
    public function setWebsites(array $websites) : self
    {
        $this->websites = $websites;
        return $this;
    }
}