<?php
/**
 * Created by PhpStorm.
 * User: Klay
 * Date: 09.03.15
 * Time: 16:13
 */

namespace ScrumSecurity\Bundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use ScrumSecurity\Bundle\Entity\User;

class Registration {

    /**
     * @Assert\Type(type="ScrumSecurity\Bundle\Entity\User")
     * @Assert\Valid()
     * @var User
     */
    private $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



}