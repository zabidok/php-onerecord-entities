<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for the Load Type of a piece or shipment
 *
 * Options:
 * 1. BULK – Indicates the load type as bulk
 * 2. LOOSE – Indicates the load type as loose
 * 3. PALLET – Indicates the load type as pallet
 * 4. UNIT_LOAD_DEVICE – Indicates the load type as uld
 *
 * @link https://onerecord.iata.org/ns/cargo#LoadType Ontology
 */
#[Version('3.1 RC1')]
enum LoadTypeEnum: string
{
    /**
     * Indicates the load type as bulk
     *
     * @link https://onerecord.iata.org/ns/cargo#BULK Ontology
     */
    case BULK = 'BULK';

    /**
     * Indicates the load type as loose
     *
     * @link https://onerecord.iata.org/ns/cargo#LOOSE Ontology
     */
    case LOOSE = 'LOOSE';

    /**
     * Indicates the load type as pallet
     *
     * @link https://onerecord.iata.org/ns/cargo#PALLET Ontology
     */
    case PALLET = 'PALLET';

    /**
     * Indicates the load type as uld
     *
     * @link https://onerecord.iata.org/ns/cargo#UNIT_LOAD_DEVICE Ontology
     */
    case UNIT_LOAD_DEVICE = 'UNIT_LOAD_DEVICE';
}
