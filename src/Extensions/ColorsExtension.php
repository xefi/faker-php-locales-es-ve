<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
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

    protected array $safeColorNames = [
        'Negro', 'Vinotinto', 'Verde', 'AzulMarino', 'Oliva',
        'Morado', 'VerdeAzulado', 'Lima', 'Azul', 'Plateado',
        'Gris', 'Amarillo', 'Fucsia', 'Aguamarina', 'Blanco',
    ];

    protected array $colorNames = [
        'Negro', 'Vinotinto', 'Verde', 'AzulMarino', 'Oliva',
        'Morado', 'VerdeAzulado', 'Lima', 'Azul', 'Plateado',
        'Gris', 'Amarillo', 'Fucsia', 'Aguamarina', 'Blanco',
        'Beige', 'Chocolate', 'Coral', 'Cian', 'Carmesí',
        'AzulOscuro', 'NaranjaOscuro', 'Ladrillo', 'VerdeMar', 'BlancoFloral',
        'VerdeBosque', 'Dorado', 'Rosado', 'Índigo', 'Caqui',
        'Lavanda', 'AzulClaro', 'CoralClaro', 'VerdeClaro', 'SalmónClaro',
        'Lino', 'Magenta', 'AzulMedio', 'OrquídeaMedia', 'Mocasín',
        'Naranja', 'Rojo', 'Ciruela', 'Perú', 'AzulRey',
        'Salmón', 'MarrónArena', 'Celeste', 'Nieve', 'Turquesa',
        'Violeta', 'BlancoHumo',
    ];
}
