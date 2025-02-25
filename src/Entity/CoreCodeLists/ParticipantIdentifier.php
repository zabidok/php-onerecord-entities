<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list corresponding to cXML code list 1.36 Participant Identifiers
 *
 * Options:
 * 1. AGT – Agent
 * 2. AIR – Airline
 * 3. APT – Airport Authority
 * 4. BRK – Broker
 * 5. CAG – Commissionable Agent
 * 6. CNE – Consignee
 * 7. CTM – Customs
 * 8. DCL – Declarant
 * 9. DEC – Deconsolidator
 * 10. FFW – Freight Forwarder
 * 11. GHA – Ground Handling Agent
 * 12. PTT – Post Office
 * 13. SHP – Shipper
 * 14. TRK – Trucker
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier Ontology
 */
#[Version('1.0.1')]
enum ParticipantIdentifier: string
{
    /**
     * Agent
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_AGT Ontology
     */
    case AGT = 'AGT';

    /**
     * Airline
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_AIR Ontology
     */
    case AIR = 'AIR';

    /**
     * Airport Authority
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_APT Ontology
     */
    case APT = 'APT';

    /**
     * Broker
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_BRK Ontology
     */
    case BRK = 'BRK';

    /**
     * Commissionable Agent
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_CAG Ontology
     */
    case CAG = 'CAG';

    /**
     * Consignee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_CNE Ontology
     */
    case CNE = 'CNE';

    /**
     * Customs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_CTM Ontology
     */
    case CTM = 'CTM';

    /**
     * Declarant
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_DCL Ontology
     */
    case DCL = 'DCL';

    /**
     * Deconsolidator
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_DEC Ontology
     */
    case DEC = 'DEC';

    /**
     * Freight Forwarder
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_FFW Ontology
     */
    case FFW = 'FFW';

    /**
     * Ground Handling Agent
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_GHA Ontology
     */
    case GHA = 'GHA';

    /**
     * Post Office
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_PTT Ontology
     */
    case PTT = 'PTT';

    /**
     * Shipper
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_SHP Ontology
     */
    case SHP = 'SHP';

    /**
     * Trucker
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ParticipantIdentifier_TRK Ontology
     */
    case TRK = 'TRK';
}
