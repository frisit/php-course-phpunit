<?php

use PHPUnit\Framework\TestCase;

class LessonFourTest extends TestCase
{
    protected function safeUp(): void
    {
    }

    protected function tearDown(): void
    {
    }

    public function testStringSuccess()
    {
        $this->expectOutputString('success');
        echo 'success';
    }

    public function testIntegerWithRegExp()
    {
        $this->expectOutputRegex('/\d/');

        echo 234;
    }

    public function testCallbackFunction()
    {
        $this->expectOutputString("success");

        $this->setOutputCallback(function($str) {
            return trim($str);
        });

        echo "success ";
    }

    public function testArrayAssert()
    {
        $firstArr = [123, 235, 5, 2, 56, 6, 2, 4, 8];
        $secondArr = [123, 235, 5, 2, 56, 6, 2, 4, 8];

        $this->assertSame($firstArr, $secondArr);
//        $this->assertEquals($firstArr, $secondArr);
    }

}