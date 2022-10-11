<?php
namespace dariofg\APInterPHP\Tests;

use PHPUnit\Framework\TestCase;
use dariofg\APInterPHP\Cobranca\Boleto;
use dariofg\APInterPHP\Cobranca\Pagador;

final class BoletoTest extends TestCase
{
    public function testBoleto() {
        $boleto = new Boleto();
        $this->assertInstanceOf(Boleto::class, $boleto);

        $boleto->setPagador(new Pagador());
    }
}
