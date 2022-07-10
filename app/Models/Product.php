<?php

namespace App\Models;

class Product
{
    private $productSeq;
    private $createDateTime;
    private $modifyDateTime;
    private $productName;
    private $productPrice;

    /**
     * @return mixed
     */
    public function getProductSeq()
    {
        return $this->productSeq;
    }

    /**
     * @param mixed $productSeq
     */
    public function setProductSeq($productSeq): void
    {
        $this->productSeq = $productSeq;
    }

    /**
     * @return mixed
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * @param mixed $createDateTime
     */
    public function setCreateDateTime($createDateTime): void
    {
        $this->createDateTime = $createDateTime;
    }

    /**
     * @return mixed
     */
    public function getModifyDateTime()
    {
        return $this->modifyDateTime;
    }

    /**
     * @param mixed $modifyDateTime
     */
    public function setModifyDateTime($modifyDateTime): void
    {
        $this->modifyDateTime = $modifyDateTime;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param mixed $productPrice
     */
    public function setProductPrice($productPrice): void
    {
        $this->productPrice = $productPrice;
    }
}