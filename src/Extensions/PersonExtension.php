<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\PersonExtension as BasePersonExtension;

class PersonExtension extends BasePersonExtension
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

    protected $firstNameMale = [
        'José', 'Luis', 'Carlos', 'Jesús', 'Juan', 'Pedro', 'Miguel', 'Rafael', 'Antonio', 'Francisco',
        'Manuel', 'Alejandro', 'Daniel', 'Andrés', 'Gabriel', 'Ricardo', 'Fernando', 'Víctor', 'Eduardo', 'Oswaldo',
        'Wilmer', 'Leonardo', 'Simón', 'Ramón', 'Orlando', 'Héctor', 'Gustavo', 'Freddy', 'Nelson', 'Douglas',
        'Richard', 'Alexander', 'Javier', 'Rubén', 'Henry', 'Ángel', 'Enrique', 'Yonathan', 'Argenis', 'Omar',
    ];

    protected $firstNameFemale = [
        'María', 'Ana', 'Carmen', 'Rosa', 'Luisa', 'Yolanda', 'Daniela', 'Gabriela', 'Andreína', 'Mariana',
        'Valentina', 'Yolimar', 'Marisol', 'Milagros', 'Carolina', 'Alejandra', 'Fabiola', 'Yamileth', 'Mayerling', 'Yusmary',
        'Dayana', 'Génesis', 'Oriana', 'Maryuri', 'Josefina', 'Belkis', 'Zuleima', 'Nancy', 'Elena', 'Isabel',
        'Patricia', 'Mónica', 'Beatriz', 'Coromoto', 'Inés', 'Teresa', 'Victoria', 'Lisbeth', 'Rosmary', 'Neida',
    ];

    protected $lastName = [
        'González', 'Rodríguez', 'Hernández', 'Pérez', 'García', 'Martínez', 'López', 'Díaz', 'Sánchez', 'Romero',
        'Ramírez', 'Torres', 'Rojas', 'Flores', 'Medina', 'Morales', 'Castillo', 'Gutiérrez', 'Suárez', 'Mendoza',
        'Contreras', 'Rivas', 'Blanco', 'Méndez', 'Silva', 'Guerrero', 'Vargas', 'Marcano', 'Rondón', 'Briceño',
        'Chacón', 'Zambrano', 'Salazar', 'Herrera', 'Peña', 'Acosta', 'Colmenares', 'Aponte', 'Uzcátegui', 'Carrasquel',
    ];

    protected $titleMale = ['Sr.', 'Dr.', 'Lic.', 'Ing.'];

    protected $titleFemale = ['Sra.', 'Srta.', 'Dra.', 'Lic.', 'Ing.'];

    /**
     * Generate a cédula de identidad number, prefixed by V- (Venezuelan) or E- (foreign resident).
     *
     * @return string
     */
    public function cedula(): string
    {
        if ($this->randomizer->getInt(0, 9) === 0) {
            return sprintf('E-%d', $this->randomizer->getInt(80000000, 89999999));
        }

        return sprintf('V-%d', $this->randomizer->getInt(1000000, 32999999));
    }
}
