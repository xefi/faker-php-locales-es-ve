<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
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

    private array $companies = [
        'Inversiones González C.A.', 'Distribuidora El Ávila C.A.', 'Constructora Orinoco S.A.',
        'Alimentos La Llanera C.A.', 'Transporte Caribe Express C.A.', 'Farmacia Los Próceres C.A.',
        'Servicios Petroleros Zulia S.A.', 'Café Tovar C.A.', 'Comercializadora Margarita C.A.',
        'Textiles Carabobo S.A.', 'Tecnología Catatumbo C.A.', 'Panadería La Candelaria C.A.',
        'Seguros Guayana S.A.', 'Inmobiliaria Altamira C.A.', 'Agropecuaria Los Llanos C.A.',
        'Cacao Barlovento S.A.', 'Ferretería El Tigre C.A.', 'Importadora Puerto Cabello C.A.',
        'Consultores Rivas & Asociados S.C.', 'Clínica Santa Sofía C.A.', 'Licorería La Pastora C.A.',
        'Metalúrgica Bolívar S.A.', 'Editorial Tepuy C.A.', 'Laboratorios Chacao C.A.',
        'Transporte Andino Mérida C.A.', 'Pesquera Cumaná S.A.', 'Grupo Lara Inversiones S.A.',
        'Arepera Los Cuatro Vientos C.A.', 'Muebles Barquisimeto C.A.', 'Energía Caroní S.A.',
    ];

    /**
     * Generate a company name.
     *
     * @return string
     */
    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }

    /**
     * Generate a RIF (Registro de Información Fiscal) with a valid check digit, such as J-12345678-9.
     *
     * @return string
     */
    public function rif(): string
    {
        $types = ['V' => 1, 'E' => 2, 'J' => 3, 'P' => 4, 'G' => 5];
        $type = $this->pickArrayRandomElement(['J', 'J', 'J', 'G', 'V', 'E', 'P']);
        $number = sprintf('%08d', $this->randomizer->getInt(1000000, 99999999));

        $sum = $types[$type] * 4;
        foreach ([3, 2, 7, 6, 5, 4, 3, 2] as $index => $weight) {
            $sum += (int) $number[$index] * $weight;
        }

        $check = 11 - $sum % 11;

        return sprintf('%s-%s-%d', $type, $number, $check >= 10 ? 0 : $check);
    }
}
