<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.44 ULD Charge Codes
 * Source: CTCC Documentation
 *
 * Options:
 * 1. A – Pivot Rate per kilogram
 * 2. B – First Minimum Charge — minimum weight
 * 3. C – First over pivot rate per kilogram
 * 4. D – Second Minimum Charge — minimum weight
 * 5. E – Second over pivot rate per kilogram
 * 6. F – Third Minimum Charge — minimum weight
 * 7. G – Third over pivot rate per kilogram
 * 8. H – Flat Charge — (without weight or with minimum weight)
 * 9. I – Flat Charge — maximum weight
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode Ontology
 */
#[Version('1.0.1')]
enum ULDChargeCode: string
{
    /**
     * Pivot Rate per kilogram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_A Ontology
     */
    case A = 'A';

    /**
     * First Minimum Charge — minimum weight
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_B Ontology
     */
    case B = 'B';

    /**
     * First over pivot rate per kilogram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_C Ontology
     */
    case C = 'C';

    /**
     * Second Minimum Charge — minimum weight
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_D Ontology
     */
    case D = 'D';

    /**
     * Second over pivot rate per kilogram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_E Ontology
     */
    case E = 'E';

    /**
     * Third Minimum Charge — minimum weight
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_F Ontology
     */
    case F = 'F';

    /**
     * Third over pivot rate per kilogram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_G Ontology
     */
    case G = 'G';

    /**
     * Flat Charge — (without weight or with minimum weight)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_H Ontology
     */
    case H = 'H';

    /**
     * Flat Charge — maximum weight
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDChargeCode_I Ontology
     */
    case I = 'I';
}
