<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted sub-code list of weight units from MeasurementUnitCode
 *
 * Options:
 * 1. KGM – Kilogram
 * 2. LBR – Pound UK, US (0.45359237 KGM)
 * 3. ONZ – Ounce UK, US (28.949523 GRM)
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#WeightUnitCode Ontology
 */
#[Version('1.0.1')]
enum WeightUnitCode: string
{
    /**
     * Kilogram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_KGM Ontology
     */
    case KGM = 'KGM';

    /**
     * Pound UK, US (0.45359237 KGM)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_LBR Ontology
     */
    case LBR = 'LBR';

    /**
     * Ounce UK, US (28.949523 GRM)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#MeasurementUnitCode_ONZ Ontology
     */
    case ONZ = 'ONZ';
}
