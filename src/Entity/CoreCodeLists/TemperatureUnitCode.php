<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted sub-code list of temperature units from MeasurementUnitCode
 *
 * Options:
 * 1. CEL – Degree Celsius
 * 2. FAH – Degree Fahrenheit
 * 3. KEL – Kelvin
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#TemperatureUnitCode Ontology
 */
#[Version('1.0.1')]
enum TemperatureUnitCode: string
{
    /**
     * Degree Celsius
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_CEL Ontology
     */
    case CEL = 'CEL';

    /**
     * Degree Fahrenheit
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_FAH Ontology
     */
    case FAH = 'FAH';

    /**
     * Kelvin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_KEL Ontology
     */
    case KEL = 'KEL';
}
