<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
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

    protected $regions = [
        'Capital', 'Central', 'Centroccidental', 'Zuliana', 'Los Andes', 'Los Llanos', 'Nororiental', 'Insular', 'Guayana',
    ];

    protected $states = [
        'Amazonas', 'Anzoátegui', 'Apure', 'Aragua', 'Barinas', 'Bolívar', 'Carabobo', 'Cojedes', 'Delta Amacuro',
        'Distrito Capital', 'Falcón', 'Guárico', 'La Guaira', 'Lara', 'Mérida', 'Miranda', 'Monagas', 'Nueva Esparta',
        'Portuguesa', 'Sucre', 'Táchira', 'Trujillo', 'Yaracuy', 'Zulia',
    ];

    protected $cities = [
        'Caracas', 'Maracaibo', 'Valencia', 'Barquisimeto', 'Maracay', 'Ciudad Guayana', 'Barcelona', 'Maturín',
        'Puerto La Cruz', 'Petare', 'Turmero', 'Ciudad Bolívar', 'Mérida', 'San Cristóbal', 'Barinas', 'Cumaná',
        'Cabimas', 'Coro', 'Los Teques', 'Punto Fijo', 'Guarenas', 'Acarigua', 'Valera', 'San Fernando de Apure',
        'Puerto Cabello', 'Calabozo', 'El Tigre', 'Carúpano', 'Guanare', 'San Felipe', 'Porlamar', 'La Victoria',
    ];

    protected $streetTypes = [
        'Avenida', 'Calle', 'Carrera', 'Transversal', 'Vereda', 'Prolongación', 'Bulevar', 'Callejón',
    ];

    protected $streetNames = [
        'Francisco de Miranda', 'Libertador', 'Urdaneta', 'Bolívar', 'Universidad', 'Baralt', 'Andrés Bello', 'Sucre',
        'Lecuna', 'Fuerzas Armadas', 'Las Delicias', 'Los Próceres', 'Lara', 'Páez', 'San Martín', 'Rómulo Gallegos',
        'Principal', 'La Limonera', 'Casanova', 'Victoria', 'Río de Janeiro', 'Cedeño', 'Bella Vista', '5 de Julio',
        '19 de Abril', 'Juan Crisóstomo Falcón', 'José Antonio Páez', 'Ayacucho', 'Carabobo', 'Miranda', 'Mariño',
        'Cristóbal Rojas', 'Arismendi', 'Andrés Eloy Blanco', 'Las Américas', 'Intercomunal', 'Rafael Urdaneta', 'Vargas',
    ];

    /**
     * Generate a Venezuelan administrative region.
     *
     * @return string
     */
    public function region(): string
    {
        return $this->pickArrayRandomElement($this->regions);
    }

    /**
     * Generate a Venezuelan state (or the Distrito Capital).
     *
     * @return string
     */
    public function state(): string
    {
        return $this->pickArrayRandomElement($this->states);
    }

    /**
     * Generate a Venezuelan city name.
     *
     * @return string
     */
    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cities);
    }

    /**
     * Generate a four-digit código postal.
     *
     * @return string
     */
    public function postcode(): string
    {
        return sprintf('%04d', $this->randomizer->getInt(1010, 8099));
    }

    /**
     * Generate a house number.
     *
     * @return int
     */
    public function houseNumber(): int
    {
        return $this->randomizer->getInt(1, 199);
    }

    /**
     * Generate a street name prefixed by its street type.
     *
     * @return string
     */
    public function streetName(): string
    {
        return sprintf('%s %s', $this->pickArrayRandomElement($this->streetTypes), $this->pickArrayRandomElement($this->streetNames));
    }

    /**
     * Generate a street address, such as "Avenida Urdaneta, Nº 125".
     *
     * @return string
     */
    public function streetAddress(): string
    {
        return sprintf('%s, Nº %d', $this->streetName(), $this->houseNumber());
    }

    /**
     * Generate a full address, such as "Avenida Urdaneta, Nº 125, Caracas 1010".
     *
     * @return string
     */
    public function fullAddress(): string
    {
        return sprintf('%s, %s %s', $this->streetAddress(), $this->city(), $this->postcode());
    }
}
