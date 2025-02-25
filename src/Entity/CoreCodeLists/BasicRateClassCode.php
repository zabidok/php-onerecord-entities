<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted sub-code list corresponding to elements of cXML code list 1.4 Rate Class Codes
 * Source: CSC Resolutions Manual, 25th Edition, Resolution 600a
 *
 * Options:
 * 1. C – Specific Commodity Rate
 * 2. M – Minimum Charge
 * 3. N – Normal Rate
 * 4. Q – Quantity Rate
 * 5. U – Unit Load Device Basic Charge or Rate
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#BasicRateClassCode Ontology
 */
#[Version('1.0.1')]
enum BasicRateClassCode: string
{
    /**
     * Specific Commodity Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_C Ontology
     */
    case C = 'C';

    /**
     * Minimum Charge
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_M Ontology
     */
    case M = 'M';

    /**
     * Normal Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_N Ontology
     */
    case N = 'N';

    /**
     * Quantity Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_Q Ontology
     */
    case Q = 'Q';

    /**
     * Unit Load Device Basic Charge or Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_U Ontology
     */
    case U = 'U';
}
