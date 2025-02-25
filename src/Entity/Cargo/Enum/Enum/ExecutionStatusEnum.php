<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for the execution status of activities
 *
 * Options:
 * 1. ACTIVE – Used when a LogisticsActivity is active
 * 2. CANCELLED – Used when a LogisticsActivity is cancelled
 * 3. COMPLETE – Used when a LogisticsActivity is complete
 * 4. PENDING – Used when a LogisticsActivity is pending
 *
 * @link https://onerecord.iata.org/ns/cargo#ExecutionStatus Ontology
 */
#[Version('3.1 RC1')]
enum ExecutionStatusEnum: string
{
    /**
     * Used when a LogisticsActivity is active
     *
     * @link https://onerecord.iata.org/ns/cargo#ACTIVE Ontology
     */
    case ACTIVE = 'ACTIVE';

    /**
     * Used when a LogisticsActivity is cancelled
     *
     * @link https://onerecord.iata.org/ns/cargo#CANCELLED Ontology
     */
    case CANCELLED = 'CANCELLED';

    /**
     * Used when a LogisticsActivity is complete
     *
     * @link https://onerecord.iata.org/ns/cargo#COMPLETE Ontology
     */
    case COMPLETE = 'COMPLETE';

    /**
     * Used when a LogisticsActivity is pending
     *
     * @link https://onerecord.iata.org/ns/cargo#PENDING Ontology
     */
    case PENDING = 'PENDING';
}
