<?php

namespace App\Entity\Order;

use App\Entity\Customer\CustomerInterface;

interface OrderInterface extends \Sylius\Component\Core\Model\OrderInterface
{
    public function getCustomer(): CustomerInterface;
}
