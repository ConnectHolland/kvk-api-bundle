<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanyProfileV2BusinessActivity
{
    /**
     * @var string
     */
    protected $sbiCode;
    /**
     * @var string
     */
    protected $sbiCodeDescription;
    /**
     * @var bool
     */
    protected $isMainSbi;

    /**
     * @return string
     */
    public function getSbiCode(): ?string
    {
        return $this->sbiCode;
    }

    /**
     * @param string $sbiCode
     *
     * @return self
     */
    public function setSbiCode(?string $sbiCode): self
    {
        $this->sbiCode = $sbiCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSbiCodeDescription(): ?string
    {
        return $this->sbiCodeDescription;
    }

    /**
     * @param string $sbiCodeDescription
     *
     * @return self
     */
    public function setSbiCodeDescription(?string $sbiCodeDescription): self
    {
        $this->sbiCodeDescription = $sbiCodeDescription;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMainSbi(): ?bool
    {
        return $this->isMainSbi;
    }

    /**
     * @param bool $isMainSbi
     *
     * @return self
     */
    public function setIsMainSbi(?bool $isMainSbi): self
    {
        $this->isMainSbi = $isMainSbi;

        return $this;
    }
}
