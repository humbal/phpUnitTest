<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * @dataProvider emailsProvider
     */
    public function testValidEmail($email) {
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $email);
    }

    public function emailsProvider(){
        return[
            ['abc@def.com'],
            ['xyz@pqrs.com'],
            ['ghik12@klosp.com'],
        ];
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testMath($a, $b, $expected) {
        $result = $a * $b;
        return $this->assertEquals($expected, $result);
    }

    public function numbersProvider() {
        return [
            [1,2,2],
            [2,2,4],
            [3,3,9],
        ];

    }
}