<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.21 ULD Condition Codes
 *
 * Options:
 * 1. DAM – Damaged But Still Serviceable
 * 2. SER – Serviceable
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ULDConditionCode Ontology
 */
#[Version('1.0.1')]
enum ULDConditionCode: string
{
    /**
     * Damaged But Still Serviceable
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDConditionCode_DAM Ontology
     */
    case DAM = 'DAM';

    /**
     * Serviceable
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ULDConditionCode_SER Ontology
     */
    case SER = 'SER';
}
