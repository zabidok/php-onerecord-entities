<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for acceptable action times
 *
 * Options:
 * 1. ACTUAL – Used when a time is actual
 * 2. PLANNED – Used when a time is planned
 * 3. REQUESTED – Used when a time is requested
 *
 * @link https://onerecord.iata.org/ns/cargo#ActionTimeType Ontology
 */
#[Version('3.1 RC1')]
enum ActionTimeTypeEnum: string
{
    /**
     * Used when a time is actual
     *
     * @link https://onerecord.iata.org/ns/cargo#ACTUAL Ontology
     */
    case ACTUAL = 'ACTUAL';

    /**
     * Used when a time is planned
     *
     * @link https://onerecord.iata.org/ns/cargo#PLANNED Ontology
     */
    case PLANNED = 'PLANNED';

    /**
     * Used when a time is requested
     *
     * @link https://onerecord.iata.org/ns/cargo#REQUESTED Ontology
     */
    case REQUESTED = 'REQUESTED';
}
