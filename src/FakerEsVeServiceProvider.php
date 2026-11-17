<?php

namespace Xefi\Faker\EsVe;

use Xefi\Faker\EsVe\Extensions\AddressExtension;
use Xefi\Faker\EsVe\Extensions\ColorsExtension;
use Xefi\Faker\EsVe\Extensions\CompanyExtension;
use Xefi\Faker\EsVe\Extensions\FinancialExtension;
use Xefi\Faker\EsVe\Extensions\PersonExtension;
use Xefi\Faker\EsVe\Extensions\PhoneExtension;
use Xefi\Faker\EsVe\Extensions\TextExtension;
use Xefi\Faker\Providers\Provider;

class FakerEsVeServiceProvider extends Provider
{
    /**
     * Register the es_VE extensions.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            ColorsExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
            PhoneExtension::class,
            TextExtension::class,
        ]);
    }
}
