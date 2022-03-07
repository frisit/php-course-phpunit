<?php

use PHPUnit\Framework\TestCase;

class LessonFiveTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function setUp(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function assertPreConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /////////////////////// сами тесты

    public function testOneWithAssert()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(true);
    }

    public function testTwoWithAssert()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(true);
    }

    /////////////////////// сами тесты

    public function assertPostConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function tearDown(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public static function tearDownAfterClass(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function onNotSuccessfulTest(Throwable $t): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        throw $t;
    }

}