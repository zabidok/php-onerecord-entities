<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list referring to the CITES source codes
 * Source: CITES
 *
 * Options:
 * 1. A – Artificially propagated plant
 * 2. C – Bred in captivity
 * 3. D – Captive-bred animal or artificially propagated plant
 * 4. F – Born in captivity
 * 5. I – Confiscated or seized
 * 6. O – Pre-Convention
 * 7. R – Ranched animal
 * 8. U – Unknown
 * 9. W – Wild
 * 10. X – Marine environment
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode Ontology
 */
#[Version('1.0.1')]
enum GoodsTypeExtensionCode: string
{
    /**
     * Artificially propagated plant
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_A Ontology
     */
    case A = 'A';

    /**
     * Bred in captivity
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_C Ontology
     */
    case C = 'C';

    /**
     * Captive-bred animal or artificially propagated plant
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_D Ontology
     */
    case D = 'D';

    /**
     * Born in captivity
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_F Ontology
     */
    case F = 'F';

    /**
     * Confiscated or seized
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_I Ontology
     */
    case I = 'I';

    /**
     * Pre-Convention
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_O Ontology
     */
    case O = 'O';

    /**
     * Ranched animal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_R Ontology
     */
    case R = 'R';

    /**
     * Unknown
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_U Ontology
     */
    case U = 'U';

    /**
     * Wild
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_W Ontology
     */
    case W = 'W';

    /**
     * Marine environment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeExtensionCode_X Ontology
     */
    case X = 'X';
}
