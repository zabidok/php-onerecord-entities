<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list of indicators of how a package is marked
 *
 * Options:
 * 1. SSCC_18 – Serial Shipping Container Code-18 / EAN-18
 * 2. UPC – Universal Product Code
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#PackageMarkCode Ontology
 */
#[Version('1.0.1')]
enum PackageMarkCode: string
{
    /**
     * Serial Shipping Container Code-18 / EAN-18
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#PackageMarkCode_SSCC_18 Ontology
     */
    case SSCC_18 = 'SSCC_18';

    /**
     * Universal Product Code
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#PackageMarkCode_UPC Ontology
     */
    case UPC = 'UPC';
}
