<?php


namespace tests\unit\models;


use app\models\tests\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testValidateEmptyValues() {
        $user = new User();

        $this->assertFalse($user->validate(), 'validate empty username and email');
        $this->assertArrayHasKey( 'username', $user->getErrors() ,'check empty username error');
        $this->assertArrayHasKey( 'email', $user->getErrors() ,'check empty email error');
    }

    public function testValidateEmptyyValues() {
        $user = new User();

        $this->assertFalse(true, 'validate empty username and email');
        $this->assertArrayHasKey( 'username', $user->getErrors() ,'check empty username error');
        $this->assertArrayHasKey( 'email', $user->getErrors() ,'check empty email error');
    }
}