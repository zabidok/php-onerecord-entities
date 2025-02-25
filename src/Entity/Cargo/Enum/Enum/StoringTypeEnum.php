<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for Storing subtypes
 *
 * Options:
 * 1. STORE_IN – Describes a store-in process, where a physical object is assigned to a specific location
 * 2. STORE_OUT – Describes a store-out process, where a physical object leaves a specific location
 *
 * @link https://onerecord.iata.org/ns/cargo#StoringType Ontology
 */
#[Version('3.1 RC1')]
enum StoringTypeEnum: string
{
    /**
     * Describes a store-in process, where a physical object is assigned to a specific location
     *
     * @link https://onerecord.iata.org/ns/cargo#STORE_IN Ontology
     */
    case STORE_IN = 'STORE_IN';

    /**
     * Describes a store-out process, where a physical object leaves a specific location
     *
     * @link https://onerecord.iata.org/ns/cargo#STORE_OUT Ontology
     */
    case STORE_OUT = 'STORE_OUT';
}
