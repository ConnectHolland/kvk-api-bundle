<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class CompanyProfileV2Address
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $bagId;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $houseNumber;
    /**
     * @var string
     */
    protected $houseNumberAddition;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var float
     */
    protected $gpsLatitude;
    /**
     * @var float
     */
    protected $gpsLongitude;
    /**
     * @var float
     */
    protected $rijksdriehoekX;
    /**
     * @var float
     */
    protected $rijksdriehoekY;
    /**
     * @var float
     */
    protected $rijksdriehoekZ;

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getBagId(): ?string
    {
        return $this->bagId;
    }

    /**
     * @param string $bagId
     *
     * @return self
     */
    public function setBagId(?string $bagId): self
    {
        $this->bagId = $bagId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     *
     * @return self
     */
    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumberAddition(): ?string
    {
        return $this->houseNumberAddition;
    }

    /**
     * @param string $houseNumberAddition
     *
     * @return self
     */
    public function setHouseNumberAddition(?string $houseNumberAddition): self
    {
        $this->houseNumberAddition = $houseNumberAddition;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return float
     */
    public function getGpsLatitude(): ?float
    {
        return $this->gpsLatitude;
    }

    /**
     * @param float $gpsLatitude
     *
     * @return self
     */
    public function setGpsLatitude(?float $gpsLatitude): self
    {
        $this->gpsLatitude = $gpsLatitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getGpsLongitude(): ?float
    {
        return $this->gpsLongitude;
    }

    /**
     * @param float $gpsLongitude
     *
     * @return self
     */
    public function setGpsLongitude(?float $gpsLongitude): self
    {
        $this->gpsLongitude = $gpsLongitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getRijksdriehoekX(): ?float
    {
        return $this->rijksdriehoekX;
    }

    /**
     * @param float $rijksdriehoekX
     *
     * @return self
     */
    public function setRijksdriehoekX(?float $rijksdriehoekX): self
    {
        $this->rijksdriehoekX = $rijksdriehoekX;

        return $this;
    }

    /**
     * @return float
     */
    public function getRijksdriehoekY(): ?float
    {
        return $this->rijksdriehoekY;
    }

    /**
     * @param float $rijksdriehoekY
     *
     * @return self
     */
    public function setRijksdriehoekY(?float $rijksdriehoekY): self
    {
        $this->rijksdriehoekY = $rijksdriehoekY;

        return $this;
    }

    /**
     * @return float
     */
    public function getRijksdriehoekZ(): ?float
    {
        return $this->rijksdriehoekZ;
    }

    /**
     * @param float $rijksdriehoekZ
     *
     * @return self
     */
    public function setRijksdriehoekZ(?float $rijksdriehoekZ): self
    {
        $this->rijksdriehoekZ = $rijksdriehoekZ;

        return $this;
    }
}
