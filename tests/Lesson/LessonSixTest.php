<?php

use PHPunit\Framework\TestCase;

class LessonSixTest extends TestCase
{
    public function safeUp(): void
    {

    }

    public function tearDown(): void
    {

    }

    public function testOne()
    {
        $this->markTestIncomplete('Houston...');
    }

    public function testTwo()
    {
        if(true) {
            $this->markTestSkipped('Because i want');
        }
    }

    /**
     * Если версия PHP будет 7.4 или выше, то тест выполнится, если нет, то будет проставлен флаг S
     *
     * @requires PHP 7.4
     */
    public function testThree()
    {
        sleep(5);
        $this->assertEquals(5,5);
    }


}