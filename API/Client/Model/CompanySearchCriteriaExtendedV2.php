<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanySearchCriteriaExtendedV2
{
    /**
     * KvK number, identifying number for a registration in the Netherlands Business Register. Consists of 8 digits
     *
     * @var string
     */
    protected $kvkNumber;
    /**
     * Branche number (Vestigingsnummer), identifying number of a branch. Consists of 12 digits
     *
     * @var string
     */
    protected $branchNumber;
    /**
     * RSIN is an identification number for legal entities and partnerships. Consist of only digits
     *
     * @var string
     */
    protected $rsin;
    /**
    * Indication (true/false) to include searching through inactive dossiers/deregistered companies. Default is false.
    Note: History of inactive companies is after 1 January 2013
    *
    * @var bool
    */
    protected $includeInactiveRegistrations;
    /**
     * Search is restricted to main branches. Default is false.
     *
     * @var bool
     */
    protected $restrictToMainBranch;
    /**
     * 
     *
     * @var bool
     */
    protected $isValid;
    /**
     * Defines the search collection for the query
     *
     * @var string
     */
    protected $site;
    /**
     * User can optionally add a context to identify his result later on
     *
     * @var string
     */
    protected $context;
    /**
     * Free format text search for in the compiled search description.
     *
     * @var string
     */
    protected $q;
    /**
     * KvK number, identifying number for a registration in the Netherlands Business Register. Consists of 8 digits
     *
     * @return string
     */
    public function getKvkNumber() : string
    {
        return $this->kvkNumber;
    }
    /**
     * KvK number, identifying number for a registration in the Netherlands Business Register. Consists of 8 digits
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
     * Branche number (Vestigingsnummer), identifying number of a branch. Consists of 12 digits
     *
     * @return string
     */
    public function getBranchNumber() : string
    {
        return $this->branchNumber;
    }
    /**
     * Branche number (Vestigingsnummer), identifying number of a branch. Consists of 12 digits
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
     * RSIN is an identification number for legal entities and partnerships. Consist of only digits
     *
     * @return string
     */
    public function getRsin() : string
    {
        return $this->rsin;
    }
    /**
     * RSIN is an identification number for legal entities and partnerships. Consist of only digits
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
    * Indication (true/false) to include searching through inactive dossiers/deregistered companies. Default is false.
    Note: History of inactive companies is after 1 January 2013
    *
    * @return bool
    */
    public function getIncludeInactiveRegistrations() : bool
    {
        return $this->includeInactiveRegistrations;
    }
    /**
    * Indication (true/false) to include searching through inactive dossiers/deregistered companies. Default is false.
    Note: History of inactive companies is after 1 January 2013
    *
    * @param bool $includeInactiveRegistrations
    *
    * @return self
    */
    public function setIncludeInactiveRegistrations(bool $includeInactiveRegistrations) : self
    {
        $this->includeInactiveRegistrations = $includeInactiveRegistrations;
        return $this;
    }
    /**
     * Search is restricted to main branches. Default is false.
     *
     * @return bool
     */
    public function getRestrictToMainBranch() : bool
    {
        return $this->restrictToMainBranch;
    }
    /**
     * Search is restricted to main branches. Default is false.
     *
     * @param bool $restrictToMainBranch
     *
     * @return self
     */
    public function setRestrictToMainBranch(bool $restrictToMainBranch) : self
    {
        $this->restrictToMainBranch = $restrictToMainBranch;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsValid() : bool
    {
        return $this->isValid;
    }
    /**
     * 
     *
     * @param bool $isValid
     *
     * @return self
     */
    public function setIsValid(bool $isValid) : self
    {
        $this->isValid = $isValid;
        return $this;
    }
    /**
     * Defines the search collection for the query
     *
     * @return string
     */
    public function getSite() : string
    {
        return $this->site;
    }
    /**
     * Defines the search collection for the query
     *
     * @param string $site
     *
     * @return self
     */
    public function setSite(string $site) : self
    {
        $this->site = $site;
        return $this;
    }
    /**
     * User can optionally add a context to identify his result later on
     *
     * @return string
     */
    public function getContext() : string
    {
        return $this->context;
    }
    /**
     * User can optionally add a context to identify his result later on
     *
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context) : self
    {
        $this->context = $context;
        return $this;
    }
    /**
     * Free format text search for in the compiled search description.
     *
     * @return string
     */
    public function getQ() : string
    {
        return $this->q;
    }
    /**
     * Free format text search for in the compiled search description.
     *
     * @param string $q
     *
     * @return self
     */
    public function setQ(string $q) : self
    {
        $this->q = $q;
        return $this;
    }
}