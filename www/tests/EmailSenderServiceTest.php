<?php
use PHPUnit\Framework\TestCase as TestCase;
use PHPUnit\Framework\MockObject\MockBuilder;


include __DIR__ . "/../User.class.php";
include __DIR__ . "/../EmailSenderService.php";

class EmailSenderServiceTest extends TestCase
{
    public function testSend()
    {
        $user = new User('test@gmail.com', 'Test', 'Lan', '01/01/1990', 'Test@123');

        $mock = $this->getMockBuilder(EmailSenderService::class)
            ->onlyMethods(['send'])
            ->getMock();

        $mock->expects($this->once())
            ->method('send')
            ->with($user);

        $mock->send($user);    
    }
}

