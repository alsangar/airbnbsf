<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Token;

/**
 * PaymentToken
 *
 * @ORM\Table(name="paymenttoken")
 * @ORM\Entity
 */
class PaymentToken extends Token
{
    
}
