<?php
use PHPUnit\Framework\TestCase;
require_once '../src/HolaMundo.php';

class HolaMundoTest extends TestCase {
    public function testSaludar() {
        $holaMundo = new HolaMundo();
        $this->assertEquals("Hola Mundo", $holaMundo->saludar());
    }
}
