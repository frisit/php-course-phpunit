<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new Backend\Classes\Models\User($name = 'Stan', $email = 'Satan', $pass = 'password', $age = 0);
        $this->user->setAge(33);
        $this->user->setEmail('text');

    }

    protected function tearDown(): void
    {
    }

    /**
     * Тестируе
     */
    public function testAge()
    {
        $this->assertEquals(33, $this->user->getAge());
    }

    /**
     * @dataProvider userProvider
     */
    public function testAgeAnother($age, $age2)
    {
        $this->user->setAge($age);

        $this->assertEquals($age, $this->user->getAge());
    }

    public function userProvider()
    {
        return [
            'one' => [1, 1],
            'two' => [2, 2],
            'correct' => [33, 33]
        ];
    }




}










