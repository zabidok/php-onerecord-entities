<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list of governmental action in CITES context
 * Source: CITES
 *
 * Options:
 * 1. DETENTION – Detention
 * 2. FUMIGATION – Fumigation
 * 3. INSPECTION – Inspection
 * 4. SECURITY – Security
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#SignatureTypeCode Ontology
 */
#[Version('1.0.1')]
enum SignatureTypeCode: string
{
    /**
     * Detention
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatureTypeCode_DETENTION Ontology
     */
    case DETENTION = 'DETENTION';

    /**
     * Fumigation
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatureTypeCode_FUMIGATION Ontology
     */
    case FUMIGATION = 'FUMIGATION';

    /**
     * Inspection
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatureTypeCode_INSPECTION Ontology
     */
    case INSPECTION = 'INSPECTION';

    /**
     * Security
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatureTypeCode_SECURITY Ontology
     */
    case SECURITY = 'SECURITY';
}
