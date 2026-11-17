<?php

namespace Xefi\Faker\EsVe\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
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

    protected array $paragraphs = [
        [
            ['La', 'calidad', 'del', 'servicio', 'sigue', 'siendo', 'el', 'compromiso', 'principal', 'de', 'la', 'empresa.'],
            ['Cada', 'proyecto', 'arranca', 'con', 'una', 'planificación', 'detallada', 'y', 'realista.'],
            ['Los', 'equipos', 'trabajan', 'unidos', 'para', 'lograr', 'los', 'objetivos', 'planteados.'],
            ['Una', 'buena', 'comunicación', 'entre', 'los', 'departamentos', 'evita', 'retrasos', 'innecesarios.'],
        ],
        [
            ['La', 'administración', 'cuidadosa', 'de', 'los', 'recursos', 'garantiza', 'la', 'estabilidad', 'del', 'negocio.'],
            ['Los', 'métodos', 'de', 'trabajo', 'se', 'actualizan', 'según', 'las', 'exigencias', 'del', 'mercado.'],
            ['La', 'flexibilidad', 'permite', 'a', 'la', 'organización', 'responder', 'a', 'los', 'cambios', 'del', 'entorno.'],
            ['Los', 'procedimientos', 'internos', 'se', 'revisan', 'para', 'ganar', 'eficiencia', 'cada', 'mes.'],
        ],
        [
            ['La', 'confianza', 'de', 'los', 'clientes', 'se', 'gana', 'con', 'puntualidad', 'y', 'buen', 'trato.'],
            ['Los', 'indicadores', 'de', 'gestión', 'ayudan', 'a', 'la', 'junta', 'directiva', 'a', 'tomar', 'decisiones.'],
            ['Los', 'problemas', 'cotidianos', 'se', 'resuelven', 'con', 'creatividad', 'y', 'constancia.'],
            ['Una', 'evaluación', 'frecuente', 'de', 'las', 'prácticas', 'revela', 'nuevas', 'mejoras.'],
        ],
        [
            ['La', 'formación', 'del', 'talento', 'humano', 'es', 'una', 'apuesta', 'segura', 'para', 'el', 'futuro.'],
            ['Se', 'invita', 'a', 'los', 'trabajadores', 'a', 'desarrollar', 'nuevas', 'destrezas', 'y', 'compartir', 'sus', 'ideas.'],
            ['Las', 'estrategias', 'de', 'mejora', 'continua', 'disminuyen', 'los', 'gastos', 'y', 'los', 'riesgos.'],
            ['Los', 'talleres', 'de', 'capacitación', 'fortalecen', 'el', 'crecimiento', 'personal', 'y', 'colectivo.'],
        ],
        [
            ['El', 'estudio', 'de', 'los', 'datos', 'muestra', 'dónde', 'están', 'las', 'mejores', 'oportunidades.'],
            ['Los', 'objetivos', 'se', 'adaptan', 'a', 'la', 'realidad', 'del', 'país', 'y', 'del', 'sector.'],
            ['Un', 'seguimiento', 'constante', 'de', 'los', 'avances', 'facilita', 'actuar', 'a', 'tiempo.'],
            ['Las', 'decisiones', 'importantes', 'se', 'apoyan', 'en', 'información', 'precisa', 'y', 'actualizada.'],
            ['Las', 'reuniones', 'de', 'cierre', 'permiten', 'evaluar', 'la', 'estrategia', 'y', 'planificar', 'el', 'siguiente', 'ciclo.'],
        ],
    ];
}
