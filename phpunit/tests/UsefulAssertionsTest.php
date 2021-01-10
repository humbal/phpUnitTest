<?php
use PHPUnit\Framework\TestCase;

class UsefulAssertionsTest extends TestCase
{
    public function testAssertSame(){
        $expected = 'baz';
        $result = 'baz';

        $this->assertSame($expected, $result);
    }

    public function testAssertEquals(){
        $expected = 1;
        $result = 1;

        $this->assertEquals($expected, $result);

    }

    public function testAssertEmpty() {
        $this->assertEmpty([]);
    }

    public function testAssertNull() {
        $this->assertNull(null);
    }

    public function testAssertGreaterThan() {
        $expected = 1;
        $result = 2;
        $this->assertGreaterThan($expected, $result);
    }

    public function testAssertFalse() {
        $this->assertFalse(false);
    }

    public function testAssertTrue() {
        $this->assertTrue(true);
    }

    public function testAssertCount() {
        $this->assertCount(2, [1, 2]);
    }

    public function testAssertContains() {
        $this->assertContains(2, [1, 2, 3]);
    }

    public function testAssertStringContainsString() {
        $searchFor = 'baz';
        $searchIn = 'baz';

        $this->assertStringContainsString($searchFor, $searchIn);
    }

    /* public function testAssertInstanceOf() {
        $this->assertInstanceOf(RuntimeExpection::class, 'Division by Zero');
    } */

    public function testAssertArrayHasKey() {
        $this->assertArrayHasKey('baz', ['baz' => 'bar']);
    }

    public function testAssertDirectoryIsWritable() {
        $this->assertDirectoryIsWritable('/Users/humbal/Sites/devdesktop/drupal-9-project-9.0.0/phpUnitTest/phpunit');
    }

    public function testAssertFileIsWritable() {
        $this->assertFileIsWritable('/Users/humbal/Sites/devdesktop/drupal-9-project-9.0.0/phpUnitTest/index.php');
    }

}