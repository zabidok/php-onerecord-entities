<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.33 Charge Identifiers
 *
 * Options:
 * 1. CN – CASS Net Amount
 * 2. CO – Commission
 * 3. CT – Charge Summary Total
 * 4. IN – Insurance
 * 5. NI – CASS Invoice Amount
 * 6. OA – Total Other Charges Due Agent
 * 7. OC – Total Other Charges Due Carrier
 * 8. SI – Sales Incentive
 * 9. TX – Taxes
 * 10. VC – Valuation Charge
 * 11. WT – Total Weight Charge
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier Ontology
 */
#[Version('1.0.1')]
enum ChargeIdentifier: string
{
    /**
     * CASS Net Amount
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_CN Ontology
     */
    case CN = 'CN';

    /**
     * Commission
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_CO Ontology
     */
    case CO = 'CO';

    /**
     * Charge Summary Total
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_CT Ontology
     */
    case CT = 'CT';

    /**
     * Insurance
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_IN Ontology
     */
    case IN = 'IN';

    /**
     * CASS Invoice Amount
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_NI Ontology
     */
    case NI = 'NI';

    /**
     * Total Other Charges Due Agent
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_OA Ontology
     */
    case OA = 'OA';

    /**
     * Total Other Charges Due Carrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_OC Ontology
     */
    case OC = 'OC';

    /**
     * Sales Incentive
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_SI Ontology
     */
    case SI = 'SI';

    /**
     * Taxes
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_TX Ontology
     */
    case TX = 'TX';

    /**
     * Valuation Charge
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_VC Ontology
     */
    case VC = 'VC';

    /**
     * Total Weight Charge
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ChargeIdentifier_WT Ontology
     */
    case WT = 'WT';
}
