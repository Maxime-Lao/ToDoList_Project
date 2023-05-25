<?php
    use PHPUnit\Framework\TestCase; 
    require __DIR__ . '/../vendor/autoload.php';
    include __DIR__ . "/../User.class.php";

    class UserTest extends TestCase
    {
        public function testValidUser()
        {
            $user = new User("sfarnault@gmail.com", "FARNAULT", "Simon", "31/01/2000", "Azerty12345");
            $this->assertTrue($user->isValid());
        }
        public function testInvalideAge()
        {
            $user = new User("samallah@gmail.com", "AMALLAH", "Samy", "08/06/2019", "Azerty12345");
            $this->assertFalse($user->isValid());
        }
        public function testMissingName()
        {
            $user = new User("abedda@gmail.com", "16/09/1999", "Azerty12345");
            $this->assertFalse($user->isValid());
        }
        public function testInvalidEmail()
        {
            $user = new User("achab.com", "CHAB", "Antoine", "26/04/2006", "Azerty12345");
            $this->assertFalse($user->isValid());
        }
        public function testInvalidPassword(){
            $user = new User("mlao@gmail.com", "LAO", "Maxime", "20/04/1956", "azerty");
            $this->assertFalse($user->isValid());
        }
    }
