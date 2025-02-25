<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list for transport modes
 *
 * Options:
 * 1. MAIN_CARRIAGE – Indicates the mode qualifier as main carriage
 * 2. ON_CARRIAGE – Indicates the mode qualifier as on carriage
 * 3. PRE_CARRIAGE – Indicates the mode qualifier as pre carriage
 *
 * @link https://onerecord.iata.org/ns/cargo#ModeQualifier Ontology
 */
#[Version('3.1 RC1')]
enum ModeQualifierEnum: string
{
    /**
     * Indicates the mode qualifier as main carriage
     *
     * @link https://onerecord.iata.org/ns/cargo#MAIN_CARRIAGE Ontology
     */
    case MAIN_CARRIAGE = 'MAIN_CARRIAGE';

    /**
     * Indicates the mode qualifier as on carriage
     *
     * @link https://onerecord.iata.org/ns/cargo#ON_CARRIAGE Ontology
     */
    case ON_CARRIAGE = 'ON_CARRIAGE';

    /**
     * Indicates the mode qualifier as pre carriage
     *
     * @link https://onerecord.iata.org/ns/cargo#PRE_CARRIAGE Ontology
     */
    case PRE_CARRIAGE = 'PRE_CARRIAGE';
}
