<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.3 Entitlement Codes
 * Source: CSC Resolutions Manual, 25th Edition, Resolution 600a
 *
 * Options:
 * 1. A – Other Charges due Agent
 * 2. C – Other Charges due Carrier
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#EntitlementCode Ontology
 */
#[Version('1.0.1')]
enum EntitlementCode: string
{
    /**
     * Other Charges due Agent
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#EntitlementCode_A Ontology
     */
    case A = 'A';

    /**
     * Other Charges due Carrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#EntitlementCode_C Ontology
     */
    case C = 'C';
}
