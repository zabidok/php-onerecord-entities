<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list for Composing subtypes
 *
 * Options:
 * 1. COMPOSITION – Describes a composition, for example the loading of a container or the build-up of an ULD
 * 2. DECOMPOSITION – Describes a decomposition, for example the unloading of a container or the break-down of an ULD
 *
 * @link https://onerecord.iata.org/ns/cargo#CompositionType Ontology
 */
#[Version('3.1 RC1')]
enum CompositionTypeEnum: string
{
    /**
     * Describes a composition, for example the loading of a container or the build-up of an ULD
     *
     * @link https://onerecord.iata.org/ns/cargo#COMPOSITION Ontology
     */
    case COMPOSITION = 'COMPOSITION';

    /**
     * Describes a decomposition, for example the unloading of a container or the break-down of an ULD
     *
     * @link https://onerecord.iata.org/ns/cargo#DECOMPOSITION Ontology
     */
    case DECOMPOSITION = 'DECOMPOSITION';
}
