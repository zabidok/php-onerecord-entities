<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for MovementTime subtypes
 *
 * Options:
 * 1. ACTUAL – Used when a time is actual
 * 2. ESTIMATED – Used when a time is estimated
 * 3. SCHEDULED – Used when a time is scheduled
 *
 * @link https://onerecord.iata.org/ns/cargo#MovementTimeType Ontology
 */
#[Version('3.1 RC1')]
enum MovementTimeTypeEnum: string
{
    /**
     * Used when a time is actual
     *
     * @link https://onerecord.iata.org/ns/cargo#ACTUAL Ontology
     */
    case ACTUAL = 'ACTUAL';

    /**
     * Used when a time is estimated
     *
     * @link https://onerecord.iata.org/ns/cargo#ESTIMATED Ontology
     */
    case ESTIMATED = 'ESTIMATED';

    /**
     * Used when a time is scheduled
     *
     * @link https://onerecord.iata.org/ns/cargo#SCHEDULED Ontology
     */
    case SCHEDULED = 'SCHEDULED';
}
