<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '0';

    public string $indicator = '+58';

    /**
     * Returns the locale of the extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'es_VE';
    }

    protected array $landlineFormats = [
        '212{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '261{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '241{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '251{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '243{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '281{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '274{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '276{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
    ];

    protected array $cellFormats = [
        '412{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '414{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '416{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '422{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '424{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '426{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
    ];
}
