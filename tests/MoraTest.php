<?php
namespace dariofg\APInterPHP\Tests;

use PHPUnit\Framework\TestCase;
use dariofg\APInterPHP\Cobranca\Mora;

final class MoraTest extends TestCase
{
    public function testMora() {
        $mora = new Mora();
        $this->assertInstanceOf(Mora::class, $mora);
    }
}
