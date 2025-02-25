<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for Waybill types
 *
 * Options:
 * 1. DIRECT – Indicates a Direct waybill
 * 2. HOUSE – Indicates a House Waybill
 * 3. MASTER – Indicates a Master Waybill
 *
 * @link https://onerecord.iata.org/ns/cargo#WaybillType Ontology
 */
#[Version('3.1 RC1')]
enum WaybillTypeEnum: string
{
    /**
     * Indicates a Direct waybill
     *
     * @link https://onerecord.iata.org/ns/cargo#DIRECT Ontology
     */
    case DIRECT = 'DIRECT';

    /**
     * Indicates a House Waybill
     *
     * @link https://onerecord.iata.org/ns/cargo#HOUSE Ontology
     */
    case HOUSE = 'HOUSE';

    /**
     * Indicates a Master Waybill
     *
     * @link https://onerecord.iata.org/ns/cargo#MASTER Ontology
     */
    case MASTER = 'MASTER';
}
