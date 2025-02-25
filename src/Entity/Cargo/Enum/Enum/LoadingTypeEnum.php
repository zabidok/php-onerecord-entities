<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for Loading subtypes
 *
 * Options:
 * 1. LOADING – Describes a loading process, for example putting an ULD on an aircraft or a piece in a truck
 * 2. UNLOADING – Describes an unloading process, for example removing an ULD from an aircraft or a piece from a truck
 *
 * @link https://onerecord.iata.org/ns/cargo#LoadingType Ontology
 */
#[Version('3.1 RC1')]
enum LoadingTypeEnum: string
{
    /**
     * Describes a loading process, for example putting an ULD on an aircraft or a piece in a truck
     *
     * @link https://onerecord.iata.org/ns/cargo#LOADING Ontology
     */
    case LOADING = 'LOADING';

    /**
     * Describes an unloading process, for example removing an ULD from an aircraft or a piece from a truck
     *
     * @link https://onerecord.iata.org/ns/cargo#UNLOADING Ontology
     */
    case UNLOADING = 'UNLOADING';
}
