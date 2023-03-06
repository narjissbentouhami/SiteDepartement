<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(){
        $user = new \App\Entity\User();

        $user->setEmail('true@test.com');
        $user->setName('name');
        $user->setPassword('pass');

        $this->assertTrue($user->getEmail()==='true@test.com');
        $this->assertTrue($user->getName()==='name');
        $this->assertTrue($user->getPassword()==='pass');

    }

    public function testIsFalse(){
        $user=new \App\Entity\User();

        $user->setEmail('true@test.com');
        $user->setName('name');
        $user->setPassword('pass');

        $this->assertFalse($user->getEmail()==='false@test.com');
        $this->assertFalse($user->getName()==='false');
        $this->assertFalse($user->getPassword()==='false');

    }

    public function testIsEmpty(){
        $user=new \App\Entity\User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getName());
    }
}