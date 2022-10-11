<?php
namespace dariofg\APInterPHP\Tests;

use PHPUnit\Framework\TestCase;
use dariofg\APInterPHP\Cobranca\Multa;

final class MultaTest extends TestCase
{
    public function testMulta() {
        $multa = new Multa();
        $this->assertInstanceOf(Multa::class, $multa);
    }
}
