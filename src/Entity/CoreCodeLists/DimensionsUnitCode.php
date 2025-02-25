<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted sub-code list of length units from MeasurementUnitCode
 *
 * Options:
 * 1. CMT – Centimetre
 * 2. FOT – Foot
 * 3. INH – Inch
 * 4. MTR – Metre
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#DimensionsUnitCode Ontology
 */
#[Version('1.0.1')]
enum DimensionsUnitCode: string
{
    /**
     * Centimetre
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_CMT Ontology
     */
    case CMT = 'CMT';

    /**
     * Foot
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_FOT Ontology
     */
    case FOT = 'FOT';

    /**
     * Inch
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_INH Ontology
     */
    case INH = 'INH';

    /**
     * Metre
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_MTR Ontology
     */
    case MTR = 'MTR';
}
