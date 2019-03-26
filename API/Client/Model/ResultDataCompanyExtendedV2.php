<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Model;

class ResultDataCompanyExtendedV2
{
    /**
     * Amount of search results per page used for the query.
     *
     * @var int
     */
    protected $itemsPerPage;
    /**
     * The current page of the results.
     *
     * @var int
     */
    protected $startPage;
    /**
     * Total amount of results spread over multiple pages.
     *
     * @var int
     */
    protected $totalItems;
    /**
     * Link to next set of ItemsPerPage result items.
     *
     * @var string
     */
    protected $nextLink;
    /**
     * Link to previous set of ItemsPerPage result items.
     *
     * @var string
     */
    protected $previousLink;
    /**
     * Original query.
     *
     * @var string
     */
    protected $query;
    /**
     * Actual search results.
     *
     * @var CompanyExtendedV2[]
     */
    protected $items;

    /**
     * Amount of search results per page used for the query.
     *
     * @return int
     */
    public function getItemsPerPage(): ?int
    {
        return $this->itemsPerPage;
    }

    /**
     * Amount of search results per page used for the query.
     *
     * @param int $itemsPerPage
     *
     * @return self
     */
    public function setItemsPerPage(?int $itemsPerPage): self
    {
        $this->itemsPerPage = $itemsPerPage;

        return $this;
    }

    /**
     * The current page of the results.
     *
     * @return int
     */
    public function getStartPage(): ?int
    {
        return $this->startPage;
    }

    /**
     * The current page of the results.
     *
     * @param int $startPage
     *
     * @return self
     */
    public function setStartPage(?int $startPage): self
    {
        $this->startPage = $startPage;

        return $this;
    }

    /**
     * Total amount of results spread over multiple pages.
     *
     * @return int
     */
    public function getTotalItems(): ?int
    {
        return $this->totalItems;
    }

    /**
     * Total amount of results spread over multiple pages.
     *
     * @param int $totalItems
     *
     * @return self
     */
    public function setTotalItems(?int $totalItems): self
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    /**
     * Link to next set of ItemsPerPage result items.
     *
     * @return string
     */
    public function getNextLink(): ?string
    {
        return $this->nextLink;
    }

    /**
     * Link to next set of ItemsPerPage result items.
     *
     * @param string $nextLink
     *
     * @return self
     */
    public function setNextLink(?string $nextLink): self
    {
        $this->nextLink = $nextLink;

        return $this;
    }

    /**
     * Link to previous set of ItemsPerPage result items.
     *
     * @return string
     */
    public function getPreviousLink(): ?string
    {
        return $this->previousLink;
    }

    /**
     * Link to previous set of ItemsPerPage result items.
     *
     * @param string $previousLink
     *
     * @return self
     */
    public function setPreviousLink(?string $previousLink): self
    {
        $this->previousLink = $previousLink;

        return $this;
    }

    /**
     * Original query.
     *
     * @return string
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * Original query.
     *
     * @param string $query
     *
     * @return self
     */
    public function setQuery(?string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Actual search results.
     *
     * @return CompanyExtendedV2[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Actual search results.
     *
     * @param CompanyExtendedV2[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
