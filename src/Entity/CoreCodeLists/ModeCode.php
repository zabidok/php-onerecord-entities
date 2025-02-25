<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted Code List of mode codes, UNECE Recommendation No. 19
 * Source: TRADE/CEFACT/21/19
 *
 * Options:
 * 1. AIR_TRANSPORT – Indicates the transport mode to be Air Transport (4)
 * 2. FIXED_TRANSPORT_INSTALLATION – Indicates that the transport mode is a Fixed Transport Installation (7)
 * 3. INLAND_WATER_TRANSPORT – Indicates that the transport mode to be Inland Water Transport (8)
 * 4. MAIL – Indicates the transport mode to be Mail (5)
 * 5. MARITIME_TRANSPORT – Indicates the transport mode to be Maritime Transport (1)
 * 6. MULTIMODAL_TRANSPORT – Indicates a Multimodal Transport (6)
 * 7. RAIL_TRANSPORT – Indicates the transport mode to be Rail Transport (2)
 * 8. ROAD_TRANSPORT – Indicates the transport mode to be Road Transport (3)
 * 9. TRANSPORT_MODE_NOT_APPLICABLE – Indicates that no transport mode is applicable (9)
 * 10. TRANSPORT_MODE_NOT_SPECIFIED – Indicates that the Transport Mode is not specified (0)
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode Ontology
 */
#[Version('1.0.1')]
enum ModeCode: string
{
    /**
     * Indicates the transport mode to be Air Transport (4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_AIR_TRANSPORT Ontology
     */
    case AIR_TRANSPORT = 'AIR_TRANSPORT';

    /**
     * Indicates that the transport mode is a Fixed Transport Installation (7)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_FIXED_TRANSPORT_INSTALLATION Ontology
     */
    case FIXED_TRANSPORT_INSTALLATION = 'FIXED_TRANSPORT_INSTALLATION';

    /**
     * Indicates that the transport mode to be Inland Water Transport (8)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_INLAND_WATER_TRANSPORT Ontology
     */
    case INLAND_WATER_TRANSPORT = 'INLAND_WATER_TRANSPORT';

    /**
     * Indicates the transport mode to be Mail (5)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_MAIL Ontology
     */
    case MAIL = 'MAIL';

    /**
     * Indicates the transport mode to be Maritime Transport (1)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_MARITIME_TRANSPORT Ontology
     */
    case MARITIME_TRANSPORT = 'MARITIME_TRANSPORT';

    /**
     * Indicates a Multimodal Transport (6)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_MULTIMODAL_TRANSPORT Ontology
     */
    case MULTIMODAL_TRANSPORT = 'MULTIMODAL_TRANSPORT';

    /**
     * Indicates the transport mode to be Rail Transport (2)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_RAIL_TRANSPORT Ontology
     */
    case RAIL_TRANSPORT = 'RAIL_TRANSPORT';

    /**
     * Indicates the transport mode to be Road Transport (3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_ROAD_TRANSPORT Ontology
     */
    case ROAD_TRANSPORT = 'ROAD_TRANSPORT';

    /**
     * Indicates that no transport mode is applicable (9)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_TRANSPORT_MODE_NOT_APPLICABLE Ontology
     */
    case TRANSPORT_MODE_NOT_APPLICABLE = 'TRANSPORT_MODE_NOT_APPLICABLE';

    /**
     * Indicates that the Transport Mode is not specified (0)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ModeCode_TRANSPORT_MODE_NOT_SPECIFIED Ontology
     */
    case TRANSPORT_MODE_NOT_SPECIFIED = 'TRANSPORT_MODE_NOT_SPECIFIED';
}
