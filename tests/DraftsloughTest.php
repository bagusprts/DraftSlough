<?php
/**
 * Tests for DraftSlough
 */

use PHPUnit\Framework\TestCase;
use Draftslough\Draftslough;

class DraftsloughTest extends TestCase {
    private Draftslough $instance;

    protected function setUp(): void {
        $this->instance = new Draftslough(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftslough::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
