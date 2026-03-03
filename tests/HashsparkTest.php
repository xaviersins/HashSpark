<?php
/**
 * Tests for HashSpark
 */

use PHPUnit\Framework\TestCase;
use Hashspark\Hashspark;

class HashsparkTest extends TestCase {
    private Hashspark $instance;

    protected function setUp(): void {
        $this->instance = new Hashspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
