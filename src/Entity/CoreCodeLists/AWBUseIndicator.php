<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list to describe Revenue, Service and Void AWBs based on CASS 2.0
 *
 * Options:
 * 1. R – Revenue AWB
 * 2. S – Service AWB
 * 3. V – Void AWB
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#AWBUseIndicator Ontology
 */
#[Version('1.0.1')]
enum AWBUseIndicator: string
{
    /**
     * Revenue AWB
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#AWBUseIndicator_R Ontology
     */
    case R = 'R';

    /**
     * Service AWB
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#AWBUseIndicator_S Ontology
     */
    case S = 'S';

    /**
     * Void AWB
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#AWBUseIndicator_V Ontology
     */
    case V = 'V';
}
