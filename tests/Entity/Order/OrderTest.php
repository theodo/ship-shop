<?php

namespace App\Tests\Entity\Order;

use App\Entity\Customer\Customer;
use App\Entity\Order\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    public function testGetLoyaltyPointsOfShopUserAfterOrder(): void
    {
        $order = new Order();
        $order->setLoyaltyPoints(10);
        $order->setCustomer($this->createMockCustomer(20));
        $this->assertEquals(30, $order->getLoyaltyPointsOfCustomerAfterOrder());
    }

    private function createMockCustomer(int $loyaltyPoints): Customer
    {
        $customer = $this->createMock(Customer::class);
        $customer->method('getLoyaltyPoints')->willReturn($loyaltyPoints);
        return $customer;
    }
}
