<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for the direction of a MovementTime
 *
 * Options:
 * 1. INBOUND – Indicates the described direction in a movement time as inbound
 * 2. OUTBOUND – Indicates the described direction in a movement time as outbound
 * 3. UNPLANNED_STOP – Indicates the that the movement time describes an unplanned stop
 *
 * @link https://onerecord.iata.org/ns/cargo#DirectionType Ontology
 */
#[Version('3.1 RC1')]
enum DirectionTypeEnum: string
{
    /**
     * Indicates the described direction in a movement time as inbound
     *
     * @link https://onerecord.iata.org/ns/cargo#INBOUND Ontology
     */
    case INBOUND = 'INBOUND';

    /**
     * Indicates the described direction in a movement time as outbound
     *
     * @link https://onerecord.iata.org/ns/cargo#OUTBOUND Ontology
     */
    case OUTBOUND = 'OUTBOUND';

    /**
     * Indicates the that the movement time describes an unplanned stop
     *
     * @link https://onerecord.iata.org/ns/cargo#UNPLANNED_STOP Ontology
     */
    case UNPLANNED_STOP = 'UNPLANNED_STOP';
}
