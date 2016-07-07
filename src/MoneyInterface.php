<?php

interface MoneyInterface
{
    /**
     * @param int $cents
     * @return MoneyInterface
     */
    public function setCents(int $cents): self;

    /**
     * @return int
     */
    public function getCents(): int;

    /**
     * @param int $euros
     * @return MoneyInterface
     */
    public function setEuros(int $euros): self;

    /**
     * @return int
     */
    public function getEuros(): int;
}
