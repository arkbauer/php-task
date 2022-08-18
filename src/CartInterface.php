<?php

interface CartInterface
{
    public function addProduct(ProductInterface $product): self;

    public function removeProduct(ProductInterface $product): self;

    public function getProducts(): array;

    public function getSubtotal(): MoneyInterface;

    public function getVatAmount(): MoneyInterface;

    public function getTotal(): MoneyInterface;
}
