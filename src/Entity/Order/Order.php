<?php

declare(strict_types=1);

namespace App\Entity\Order;

use App\Entity\Customer\CustomerInterface;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Order as BaseOrder;
/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_order")
 */
class Order extends BaseOrder implements OrderInterface
{
    /**
     * @ORM\Column(type="integer")
     */
    private int $loyaltyPoints = 0;

    /** @var CustomerInterface */
    protected $customer;

    public function getLoyaltyPoints(): int
    {
        return $this->loyaltyPoints;
    }

    public function setLoyaltyPoints(int $loyaltyPoints): void
    {
        $this->loyaltyPoints = $loyaltyPoints;
    }

    public function getCustomer(): CustomerInterface
    {
        return $this->customer;
    }

    public function getLoyaltyPointsOfCustomerAfterOrder(): int
    {
        return $this->getCustomer()->getLoyaltyPoints() + $this->getLoyaltyPoints();
    }
}
