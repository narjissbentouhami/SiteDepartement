<?php

namespace App\Tests;

use App\Entity\Evenement;
use PHPUnit\Framework\TestCase;

class EvenementUnitTest extends TestCase
{
    public function testIsTrue(){
        $user = new \App\Entity\Evenement();

        $user->setNom('narjis');
        $user->setDescription('desc');
        $user->setImage('img');

        $this->assertTrue($user->getNom()==='narjis');
        $this->assertTrue($user->getDescription()==='desc');
        $this->assertTrue($user->getImage()==='img');

    }

    public function testIsFalse(){
        $user=new \App\Entity\Evenement();

        $user->setNom('narjis');
        $user->setDescription('desc');
        $user->setImage('img');

        $this->assertFalse($user->getNom()==='false');
        $this->assertFalse($user->getDescription()==='false');
        $this->assertFalse($user->getImage()==='false');

    }

    public function testIsEmpty(){
        $user=new \App\Entity\Evenement();

        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getDescription());
        $this->assertEmpty($user->getImage());
        
    }
}
