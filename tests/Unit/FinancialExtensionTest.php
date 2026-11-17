<?php

namespace Xefi\Faker\EsVe\Tests\Unit;

use Xefi\Faker\Calculators\Iban;

final class FinancialExtensionTest extends TestCase
{
    public function testIban(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $iban = $this->faker->iban();

            $this->assertEquals(24, strlen($iban));
            $this->assertMatchesRegularExpression('/^VE\d{2}01\d{18}$/', $iban);
            $this->assertTrue(Iban::isValid($iban));
        }
    }
}
