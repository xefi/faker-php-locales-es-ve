<?php

namespace Xefi\Faker\EsVe\Tests\Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\EsVe\Extensions\CompanyExtension;

final class CompanyExtensionTest extends TestCase
{
    protected array $companies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $companyExtension = new CompanyExtension(new Randomizer());
        $this->companies = (new ReflectionClass($companyExtension))->getProperty('companies')->getValue($companyExtension);
    }

    public function testCompany(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->companies); $i++) {
            $results[] = $this->faker->unique()->company();
        }

        $this->assertEqualsCanonicalizing($this->companies, $results);
    }

    public function testRif(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $rif = $this->faker->rif();

            $this->assertMatchesRegularExpression('/^[VEJPG]-\d{8}-\d$/', $rif);
            $this->assertTrue($this->isValidRif($rif), "RIF '{$rif}' has an invalid check digit.");
        }
    }

    public function testKnownRifIsValid(): void
    {
        $this->assertTrue($this->isValidRif('J-07013380-5'));
        $this->assertTrue($this->isValidRif('G-20000303-0'));
        $this->assertFalse($this->isValidRif('J-07013380-6'));
    }

    private function isValidRif(string $rif): bool
    {
        [$type, $number, $check] = explode('-', $rif);

        $sum = ['V' => 1, 'E' => 2, 'J' => 3, 'P' => 4, 'G' => 5][$type] * 4;
        foreach ([3, 2, 7, 6, 5, 4, 3, 2] as $index => $weight) {
            $sum += (int) $number[$index] * $weight;
        }

        $expected = 11 - $sum % 11;

        return ($expected >= 10 ? 0 : $expected) === (int) $check;
    }
}
