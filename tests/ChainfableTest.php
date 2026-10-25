<?php
/**
 * Tests for ChainFable
 */

use PHPUnit\Framework\TestCase;
use Chainfable\Chainfable;

class ChainfableTest extends TestCase {
    private Chainfable $instance;

    protected function setUp(): void {
        $this->instance = new Chainfable(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainfable::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
