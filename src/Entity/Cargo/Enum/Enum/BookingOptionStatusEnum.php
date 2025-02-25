<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list containing the statuses of a booking option
 *
 * Options:
 * 1. BOOKABLE – Used when a booking option (or proposal) is bookable
 * 2. BOOKED – Used when a booking option proposal is booked
 * 3. EXPIRED – Used when a booking option proposal is expired
 * 4. NONBOOKABLE – Used when a booking option is nonbookable
 * 5. NOT_BOOKABLE – Used when a booking option proposal is not bookable
 * 6. ON_REQUEST – Used when a booking option proposal is on request
 * 7. QUEUED – Used when a booking or booking option is queued or pending
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingOptionStatus Ontology
 */
#[Version('3.1 RC1')]
enum BookingOptionStatusEnum: string
{
    /**
     * Used when a booking option (or proposal) is bookable
     *
     * @link https://onerecord.iata.org/ns/cargo#BOOKABLE Ontology
     */
    case BOOKABLE = 'BOOKABLE';

    /**
     * Used when a booking option proposal is booked
     *
     * @link https://onerecord.iata.org/ns/cargo#BOOKED Ontology
     */
    case BOOKED = 'BOOKED';

    /**
     * Used when a booking option proposal is expired
     *
     * @link https://onerecord.iata.org/ns/cargo#EXPIRED Ontology
     */
    case EXPIRED = 'EXPIRED';

    /**
     * Used when a booking option is nonbookable
     *
     * @link https://onerecord.iata.org/ns/cargo#NONBOOKABLE Ontology
     */
    case NONBOOKABLE = 'NONBOOKABLE';

    /**
     * Used when a booking option proposal is not bookable
     *
     * @link https://onerecord.iata.org/ns/cargo#NOT_BOOKABLE Ontology
     */
    case NOT_BOOKABLE = 'NOT_BOOKABLE';

    /**
     * Used when a booking option proposal is on request
     *
     * @link https://onerecord.iata.org/ns/cargo#ON_REQUEST Ontology
     */
    case ON_REQUEST = 'ON_REQUEST';

    /**
     * Used when a booking or booking option is queued or pending
     *
     * @link https://onerecord.iata.org/ns/cargo#QUEUED Ontology
     */
    case QUEUED = 'QUEUED';
}
