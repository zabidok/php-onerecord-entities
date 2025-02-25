<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.5 Prepaid/Collect Indicators
 *
 * Options:
 * 1. C – Collect Indicator
 * 2. P – Prepaid Indicator
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#PrepaidCollectIndicator Ontology
 */
#[Version('1.0.1')]
enum PrepaidCollectIndicator: string
{
    /**
     * Collect Indicator
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#PrepaidCollectIndicator_C Ontology
     */
    case C = 'C';

    /**
     * Prepaid Indicator
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#PrepaidCollectIndicator_P Ontology
     */
    case P = 'P';
}
