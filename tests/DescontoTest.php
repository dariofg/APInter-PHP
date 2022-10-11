<?php
namespace dariofg\APInterPHP\Tests;

use PHPUnit\Framework\TestCase;
use dariofg\APInterPHP\Cobranca\Desconto;

final class DescontoTest extends TestCase
{
    public function testDesconto() {
        $desconto = new Desconto();
        $this->assertInstanceOf(Desconto::class, $desconto);
    }
}
