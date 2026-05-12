<?php
/**
 * Tests for KoboldCPP
 */

use PHPUnit\Framework\TestCase;
use Koboldcpp\Koboldcpp;

class KoboldcppTest extends TestCase {
    private Koboldcpp $instance;

    protected function setUp(): void {
        $this->instance = new Koboldcpp(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Koboldcpp::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
