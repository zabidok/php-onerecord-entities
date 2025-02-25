<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted sub-code list of volume units from MeasurementUnitCode
 *
 * Options:
 * 1. CMQ – Cubic Centimetre
 * 2. FTQ – Cubic Foot
 * 3. GLL – Liquid Gallon (3.78541 DM3)
 * 4. INQ – Cubic Inch
 * 5. LTR – Litre (1 DM3)
 * 6. MTQ – Cubic Metre
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#VolumeUnitCode Ontology
 */
#[Version('1.0.1')]
enum VolumeUnitCode: string
{
    /**
     * Cubic Centimetre
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_CMQ Ontology
     */
    case CMQ = 'CMQ';

    /**
     * Cubic Foot
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_FTQ Ontology
     */
    case FTQ = 'FTQ';

    /**
     * Liquid Gallon (3.78541 DM3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_GLL Ontology
     */
    case GLL = 'GLL';

    /**
     * Cubic Inch
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_INQ Ontology
     */
    case INQ = 'INQ';

    /**
     * Litre (1 DM3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_LTR Ontology
     */
    case LTR = 'LTR';

    /**
     * Cubic Metre
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_MTQ Ontology
     */
    case MTQ = 'MTQ';
}
