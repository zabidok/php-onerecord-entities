<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.102 Screening Methods
 *
 * Options:
 * 1. AOM – Subjected to Any Other Means
 * 2. CMD – Cargo Metal Detection
 * 3. EDD – Explosive Detection Dogs
 * 4. EDS – Explosive Detection System
 * 5. ETD – Explosives Trace Detection Equipment - Particles or Vapor
 * 6. PHS – Physical Inspection and/or Hand Search
 * 7. VCK – Visualcheck
 * 8. XRY – X-ray Equipment
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod Ontology
 */
#[Version('1.0.1')]
enum ScreeningMethod: string
{
    /**
     * Subjected to Any Other Means
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_AOM Ontology
     */
    case AOM = 'AOM';

    /**
     * Cargo Metal Detection
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_CMD Ontology
     */
    case CMD = 'CMD';

    /**
     * Explosive Detection Dogs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_EDD Ontology
     */
    case EDD = 'EDD';

    /**
     * Explosive Detection System
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_EDS Ontology
     */
    case EDS = 'EDS';

    /**
     * Explosives Trace Detection Equipment - Particles or Vapor
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_ETD Ontology
     */
    case ETD = 'ETD';

    /**
     * Physical Inspection and/or Hand Search
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_PHS Ontology
     */
    case PHS = 'PHS';

    /**
     * Visualcheck
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_VCK Ontology
     */
    case VCK = 'VCK';

    /**
     * X-ray Equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningMethod_XRY Ontology
     */
    case XRY = 'XRY';
}
