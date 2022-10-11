<?php
namespace dariofg\APInterPHP\Tests;

use PHPUnit\Framework\TestCase;
use dariofg\APInterPHP\Cobranca\Pagador;

final class PagadorTest extends TestCase
{
    public function testPagador() {
        $pagador = new Pagador();
        $this->assertInstanceOf(Pagador::class, $pagador);
    }
}
