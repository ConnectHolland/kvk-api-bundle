<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanyExtendedV2
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
     * @var CompanyProfileV2TradeNames
     */
    protected $tradeNames;
    /**
     * 
     *
     * @var string
     */
    protected $legalForm;
    /**
     * 
     *
     * @var CompanyProfileV2BusinessActivity[]
     */
    protected $businessActivities;
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
    protected $hasCommercialActivities;
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
     * 
     *
     * @var int
     */
    protected $employees;
    /**
     * 
     *
     * @var string
     */
    protected $foundationDate;
    /**
     * 
     *
     * @var string
     */
    protected $registrationDate;
    /**
     * 
     *
     * @var string
     */
    protected $deregistrationDate;
    /**
     * 
     *
     * @var CompanyProfileV2Address[]
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
     * @return CompanyProfileV2TradeNames
     */
    public function getTradeNames() : CompanyProfileV2TradeNames
    {
        return $this->tradeNames;
    }
    /**
     * 
     *
     * @param CompanyProfileV2TradeNames $tradeNames
     *
     * @return self
     */
    public function setTradeNames(CompanyProfileV2TradeNames $tradeNames) : self
    {
        $this->tradeNames = $tradeNames;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLegalForm() : string
    {
        return $this->legalForm;
    }
    /**
     * 
     *
     * @param string $legalForm
     *
     * @return self
     */
    public function setLegalForm(string $legalForm) : self
    {
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyProfileV2BusinessActivity[]
     */
    public function getBusinessActivities() : array
    {
        return $this->businessActivities;
    }
    /**
     * 
     *
     * @param CompanyProfileV2BusinessActivity[] $businessActivities
     *
     * @return self
     */
    public function setBusinessActivities(array $businessActivities) : self
    {
        $this->businessActivities = $businessActivities;
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
    public function getHasCommercialActivities() : bool
    {
        return $this->hasCommercialActivities;
    }
    /**
     * 
     *
     * @param bool $hasCommercialActivities
     *
     * @return self
     */
    public function setHasCommercialActivities(bool $hasCommercialActivities) : self
    {
        $this->hasCommercialActivities = $hasCommercialActivities;
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
     * 
     *
     * @return int
     */
    public function getEmployees() : int
    {
        return $this->employees;
    }
    /**
     * 
     *
     * @param int $employees
     *
     * @return self
     */
    public function setEmployees(int $employees) : self
    {
        $this->employees = $employees;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoundationDate() : string
    {
        return $this->foundationDate;
    }
    /**
     * 
     *
     * @param string $foundationDate
     *
     * @return self
     */
    public function setFoundationDate(string $foundationDate) : self
    {
        $this->foundationDate = $foundationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegistrationDate() : string
    {
        return $this->registrationDate;
    }
    /**
     * 
     *
     * @param string $registrationDate
     *
     * @return self
     */
    public function setRegistrationDate(string $registrationDate) : self
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeregistrationDate() : string
    {
        return $this->deregistrationDate;
    }
    /**
     * 
     *
     * @param string $deregistrationDate
     *
     * @return self
     */
    public function setDeregistrationDate(string $deregistrationDate) : self
    {
        $this->deregistrationDate = $deregistrationDate;
        return $this;
    }
    /**
     * 
     *
     * @return CompanyProfileV2Address[]
     */
    public function getAddresses() : array
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param CompanyProfileV2Address[] $addresses
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