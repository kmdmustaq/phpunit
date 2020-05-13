<?php

use PHPUnit\Framework\TestCase;
use App\Model\User;

class UserTest extends TestCase
{
    private $user;

    public function setup(): void
    {
        $this->user = new User;    
    }

    // @test
    public function testcheckFirstName()
    {
        

        $this->user->setFirstName('Testing');

        $this->assertEquals($this->user->getFirstName(), 'Testing');
        
    }

    public function testCheckLastName()
    {
        $this->user = new User;

        $this->user->setLastName('Tested');

        $this->assertEquals($this->user->getLastName(), 'Tested');
    }
}