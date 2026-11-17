<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    /**
     * Returns the locale of the extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'es_VE';
    }

    /**
     * Generate an IBAN-like number built around a 20-digit Venezuelan bank account, Venezuela having no IBAN.
     *
     * @param ?string $countryCode
     * @param ?string $format      [{d} => digit, {l} => letter, {a} => any]
     *
     * @return string
     */
    public function iban(?string $countryCode = null, ?string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'VE';
        }

        if ($format === null) {
            $format = sprintf(
                '%s%s%s%s',
                $this->pickArrayRandomElement(['0102', '0104', '0105', '0108', '0114', '0115', '0134', '0151', '0163', '0172', '0175', '0191']),
                str_repeat('{d}', 4),
                str_repeat('{d}', 2),
                str_repeat('{d}', 10)
            );
        }

        return parent::iban($countryCode, $format);
    }
}
