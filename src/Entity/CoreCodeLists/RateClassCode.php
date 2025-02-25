<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.4 Rate Class Codes
 * Source: CSC Resolutions Manual, 25th Edition, Resolution 600a
 *
 * Options:
 * 1. B – Basic Charge
 * 2. C – Specific Commodity Rate
 * 3. E – Unit Load Device Additional Rate
 * 4. K – Rate per Kilogram
 * 5. M – Minimum Charge
 * 6. N – Normal Rate
 * 7. P – International Priority Service Rate
 * 8. Q – Quantity Rate
 * 9. R – Class Rate Reduction
 * 10. S – Class Rate Surcharge
 * 11. U – Unit Load Device Basic Charge or Rate
 * 12. W – Weight Increase
 * 13. X – Unit Load Device Additional Information
 * 14. Y – Unit Load Device Discount
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode Ontology
 */
#[Version('1.0.1')]
enum RateClassCode: string
{
    /**
     * Basic Charge
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_B Ontology
     */
    case B = 'B';

    /**
     * Specific Commodity Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_C Ontology
     */
    case C = 'C';

    /**
     * Unit Load Device Additional Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_E Ontology
     */
    case E = 'E';

    /**
     * Rate per Kilogram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_K Ontology
     */
    case K = 'K';

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
     * International Priority Service Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_P Ontology
     */
    case P = 'P';

    /**
     * Quantity Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_Q Ontology
     */
    case Q = 'Q';

    /**
     * Class Rate Reduction
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_R Ontology
     */
    case R = 'R';

    /**
     * Class Rate Surcharge
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_S Ontology
     */
    case S = 'S';

    /**
     * Unit Load Device Basic Charge or Rate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_U Ontology
     */
    case U = 'U';

    /**
     * Weight Increase
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_W Ontology
     */
    case W = 'W';

    /**
     * Unit Load Device Additional Information
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_X Ontology
     */
    case X = 'X';

    /**
     * Unit Load Device Discount
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RateClassCode_Y Ontology
     */
    case Y = 'Y';
}
