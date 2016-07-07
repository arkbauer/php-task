<?php

interface StockInterface
{
    /**
     * @param ProductInterface $product
     * @return StockInterface
     */
    public function addProduct(ProductInterface $product): self;

    /**
     * @param ProductInterface $product
     * @return StockInterface
     */
    public function removeProduct(ProductInterface $product): self;

    /**
     * @return array
     */
    public function getProducts(): array;
}
