<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.18 Status Codes, including DIS discrepancy codes
 *
 * Options:
 * 1. ARR – The consignment has arrived on a scheduled flight at this location
 * 2. AWD – The arrival documentation has been physically delivered to the consignee or the consignee’s agent on this date at this location
 * 3. AWR – The arrival documentation has been physically received from a scheduled flight at this location
 * 4. BKD – The consignment has been booked for transport between these locations on this scheduled date and this flight
 * 5. CCD – The consignment has been cleared by the Customs authorities on this date at this location
 * 6. CRC – The consignment has been reported to the Customs authorities on this date at this location
 * 7. DDL – The consignment has been physically delivered to the consignee’s door on this date at this location
 * 8. DEP – The consignment has physically departed this location on this scheduled date and flight for transport to the arrival location
 * 9. DIS_DFLD – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Definitely Loaded
 * 10. DIS_FDAV – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Mail Document
 * 11. DIS_FDAW – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Air Waybill
 * 12. DIS_FDCA – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Cargo
 * 13. DIS_FDMB – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Mailbag
 * 14. DIS_MSAV – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Mail Document
 * 15. DIS_MSAW – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Air Waybill
 * 16. DIS_MSCA – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Cargo
 * 17. DIS_MSMB – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Mailbag
 * 18. DIS_OFLD – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Offloaded
 * 19. DIS_OVCD – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Overcarried
 * 20. DIS_SSPD – An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Shortshipped
 * 21. DLV – The consignment has been physically delivered to the consignee or the Consignee’s agent on this date at this location
 * 22. DOC – Documents Received by Handling Party
 * 23. DPU – The consignment has been physically picked up from the shipper’s door on this date at this location
 * 24. FIW – Freight Into Warehouse Control
 * 25. FOH – The consignment is on hand on this date at this location pending “ready for carriage” determination
 * 26. FOW – Freight Out of Warehouse Control
 * 27. MAN – The consignment has been manifested for this flight on this scheduled date for transport between these locations
 * 28. NFD – The consignee or the consignee’s agent has been notified, on this date at this location, of the arrival of the consignment
 * 29. OCI – Other Customs, Security and Regulatory Control Information
 * 30. OSI – Other Service Information
 * 31. PRE – The consignment has been prepared for loading on this flight for transport between these locations on this scheduled date
 * 32. RCF – The consignment has been physically received from a given flight or surface transport of the given airline
 * 33. RCS – The consignment has been physically received from the shipper or the shipper’s agent and is considered by the carrier as ready for carriage on this date at this location
 * 34. RCT – The consignment has been physically received from this carrier on this date at this location
 * 35. TFD – The consignment has been physically transferred to this carrier on this date at this location
 * 36. TGC – The consignment has been transferred to Customs/Government control
 * 37. TRM – The consignment has been manifested and/or will be physically transferred to this carrier at this location
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode Ontology
 */
#[Version('1.0.1')]
enum StatusCode: string
{
    /**
     * The consignment has arrived on a scheduled flight at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_ARR Ontology
     */
    case ARR = 'ARR';

    /**
     * The arrival documentation has been physically delivered to the consignee or the consignee’s agent on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_AWD Ontology
     */
    case AWD = 'AWD';

    /**
     * The arrival documentation has been physically received from a scheduled flight at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_AWR Ontology
     */
    case AWR = 'AWR';

    /**
     * The consignment has been booked for transport between these locations on this scheduled date and this flight
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_BKD Ontology
     */
    case BKD = 'BKD';

    /**
     * The consignment has been cleared by the Customs authorities on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_CCD Ontology
     */
    case CCD = 'CCD';

    /**
     * The consignment has been reported to the Customs authorities on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_CRC Ontology
     */
    case CRC = 'CRC';

    /**
     * The consignment has been physically delivered to the consignee’s door on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DDL Ontology
     */
    case DDL = 'DDL';

    /**
     * The consignment has physically departed this location on this scheduled date and flight for transport to the arrival location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DEP Ontology
     */
    case DEP = 'DEP';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Definitely Loaded
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_DFLD Ontology
     */
    case DIS_DFLD = 'DIS_DFLD';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Mail Document
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_FDAV Ontology
     */
    case DIS_FDAV = 'DIS_FDAV';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Air Waybill
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_FDAW Ontology
     */
    case DIS_FDAW = 'DIS_FDAW';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_FDCA Ontology
     */
    case DIS_FDCA = 'DIS_FDCA';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Found Mailbag
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_FDMB Ontology
     */
    case DIS_FDMB = 'DIS_FDMB';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Mail Document
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_MSAV Ontology
     */
    case DIS_MSAV = 'DIS_MSAV';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Air Waybill
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_MSAW Ontology
     */
    case DIS_MSAW = 'DIS_MSAW';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_MSCA Ontology
     */
    case DIS_MSCA = 'DIS_MSCA';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Missing Mailbag
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_MSMB Ontology
     */
    case DIS_MSMB = 'DIS_MSMB';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Offloaded
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_OFLD Ontology
     */
    case DIS_OFLD = 'DIS_OFLD';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Overcarried
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_OVCD Ontology
     */
    case DIS_OVCD = 'DIS_OVCD';

    /**
     * An apparent error has occurred, on this date at this location, with the handling of the consignment or its documentation: Shortshipped
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DIS_SSPD Ontology
     */
    case DIS_SSPD = 'DIS_SSPD';

    /**
     * The consignment has been physically delivered to the consignee or the Consignee’s agent on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DLV Ontology
     */
    case DLV = 'DLV';

    /**
     * Documents Received by Handling Party
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DOC Ontology
     */
    case DOC = 'DOC';

    /**
     * The consignment has been physically picked up from the shipper’s door on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_DPU Ontology
     */
    case DPU = 'DPU';

    /**
     * Freight Into Warehouse Control
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_FIW Ontology
     */
    case FIW = 'FIW';

    /**
     * The consignment is on hand on this date at this location pending “ready for carriage” determination
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_FOH Ontology
     */
    case FOH = 'FOH';

    /**
     * Freight Out of Warehouse Control
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_FOW Ontology
     */
    case FOW = 'FOW';

    /**
     * The consignment has been manifested for this flight on this scheduled date for transport between these locations
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_MAN Ontology
     */
    case MAN = 'MAN';

    /**
     * The consignee or the consignee’s agent has been notified, on this date at this location, of the arrival of the consignment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_NFD Ontology
     */
    case NFD = 'NFD';

    /**
     * Other Customs, Security and Regulatory Control Information
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_OCI Ontology
     */
    case OCI = 'OCI';

    /**
     * Other Service Information
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_OSI Ontology
     */
    case OSI = 'OSI';

    /**
     * The consignment has been prepared for loading on this flight for transport between these locations on this scheduled date
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_PRE Ontology
     */
    case PRE = 'PRE';

    /**
     * The consignment has been physically received from a given flight or surface transport of the given airline
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_RCF Ontology
     */
    case RCF = 'RCF';

    /**
     * The consignment has been physically received from the shipper or the shipper’s agent and is considered by the carrier as ready for carriage on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_RCS Ontology
     */
    case RCS = 'RCS';

    /**
     * The consignment has been physically received from this carrier on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_RCT Ontology
     */
    case RCT = 'RCT';

    /**
     * The consignment has been physically transferred to this carrier on this date at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_TFD Ontology
     */
    case TFD = 'TFD';

    /**
     * The consignment has been transferred to Customs/Government control
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_TGC Ontology
     */
    case TGC = 'TGC';

    /**
     * The consignment has been manifested and/or will be physically transferred to this carrier at this location
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#StatusCode_TRM Ontology
     */
    case TRM = 'TRM';
}
