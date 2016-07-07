<?php

interface CartInterface
{
    /**
     * @param ProductInterface $product
     * @return CartInterface
     */
    public function addProduct(ProductInterface $product): self;

    /**
     * @param ProductInterface $product
     * @return CartInterface
     */
    public function removeProduct(ProductInterface $product): self;

    /**
     * @return array
     */
    public function getProducts(): array;

    /**
     * @return MoneyInterface
     */
    public function getSubtotal(): MoneyInterface;

    /**
     * @return MoneyInterface
     */
    public function getVatAmount(): MoneyInterface;

    /**
     * @return MoneyInterface
     */
    public function getTotal(): MoneyInterface;
}
