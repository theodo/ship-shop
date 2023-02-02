<?php

namespace App\Entity\Customer;

interface CustomerInterface extends \Sylius\Component\Core\Model\CustomerInterface
{
    public function getLoyaltyPoints(): int;

    public function setLoyaltyPoints(int $loyaltyPoints): void;

}
