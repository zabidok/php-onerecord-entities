<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list indicating whether a shipment is secured or not secured
 *
 * Options:
 * 1. NCR – Screened
 * 2. SCR – Not Screened
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ShipmentSecurityStatus Ontology
 */
#[Version('1.0.1')]
enum ShipmentSecurityStatus: string
{
    /**
     * Screened
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ShipmentSecurityStatus_NCR Ontology
     */
    case NCR = 'NCR';

    /**
     * Not Screened
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ShipmentSecurityStatus_SCR Ontology
     */
    case SCR = 'SCR';
}
