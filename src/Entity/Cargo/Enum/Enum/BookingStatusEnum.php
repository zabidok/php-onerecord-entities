<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list containing the possible statuses of a booking
 *
 * Options:
 * 1. CONFIRMED – Used when a booking is confirmed
 * 2. DELETED – Used when a booking is deleted
 * 3. QUEUED – Used when a booking or booking option is queued or pending
 * 4. REJECTED – Used when a booking is rejected
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingStatus Ontology
 */
#[Version('3.1 RC1')]
enum BookingStatusEnum: string
{
    /**
     * Used when a booking is confirmed
     *
     * @link https://onerecord.iata.org/ns/cargo#CONFIRMED Ontology
     */
    case CONFIRMED = 'CONFIRMED';

    /**
     * Used when a booking is deleted
     *
     * @link https://onerecord.iata.org/ns/cargo#DELETED Ontology
     */
    case DELETED = 'DELETED';

    /**
     * Used when a booking or booking option is queued or pending
     *
     * @link https://onerecord.iata.org/ns/cargo#QUEUED Ontology
     */
    case QUEUED = 'QUEUED';

    /**
     * Used when a booking is rejected
     *
     * @link https://onerecord.iata.org/ns/cargo#REJECTED Ontology
     */
    case REJECTED = 'REJECTED';
}
