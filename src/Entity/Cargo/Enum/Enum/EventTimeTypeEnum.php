<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for acceptable event times
 *
 * Options:
 * 1. ACTUAL – Used when a time is actual
 * 2. ESTIMATED – Used when a time is estimated
 * 3. EXPECTED – Used when a time is expected
 * 4. PLANNED – Used when a time is planned
 * 5. REQUESTED – Used when a time is requested
 *
 * @link https://onerecord.iata.org/ns/cargo#EventTimeType Ontology
 */
#[Version('3.1 RC1')]
enum EventTimeTypeEnum: string
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
     * Used when a time is expected
     *
     * @link https://onerecord.iata.org/ns/cargo#EXPECTED Ontology
     */
    case EXPECTED = 'EXPECTED';

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
