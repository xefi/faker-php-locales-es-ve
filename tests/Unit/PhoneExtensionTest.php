<?php

namespace Xefi\Faker\EsVe\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0(4(1[246]|2[246])|2\d{2})\d{7}$/', $this->faker->phoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^04(1[246]|2[246])\d{7}$/', $this->faker->cellPhoneNumber());
        }
    }

    public function testDashedLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^02\d{2}-\d{3}-\d{4}$/', $this->faker->dashedLandlinePhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+58(4(1[246]|2[246])|2\d{2})\d{7}$/', $this->faker->indicatoredPhoneNumber());
        }
    }

    public function testSpacedIndicatoredCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+584(1[246]|2[246]) \d{3} \d{4}$/', $this->faker->spacedIndicatoredCellPhoneNumber());
        }
    }
}
