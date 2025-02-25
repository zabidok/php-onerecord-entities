<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list of purpose-of-transaction-codes
 * Source: CITES
 *
 * Options:
 * 1. B – Breeding in captivity or artificial propagation
 * 2. E – Educational
 * 3. G – Botanical garden
 * 4. H – Hunting trophy
 * 5. L – Law enforcement / judicial / forensic
 * 6. M – Medical (including biomedical research)
 * 7. N – Reintroduction or introduction into the wild
 * 8. P – Personal
 * 9. Q – Circus or travelling exhibition
 * 10. S – Scientific
 * 11. T – Commercial
 * 12. Z – Zoo
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode Ontology
 */
#[Version('1.0.1')]
enum TransactionPurposeCode: string
{
    /**
     * Breeding in captivity or artificial propagation
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_B Ontology
     */
    case B = 'B';

    /**
     * Educational
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_E Ontology
     */
    case E = 'E';

    /**
     * Botanical garden
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_G Ontology
     */
    case G = 'G';

    /**
     * Hunting trophy
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_H Ontology
     */
    case H = 'H';

    /**
     * Law enforcement / judicial / forensic
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_L Ontology
     */
    case L = 'L';

    /**
     * Medical (including biomedical research)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_M Ontology
     */
    case M = 'M';

    /**
     * Reintroduction or introduction into the wild
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_N Ontology
     */
    case N = 'N';

    /**
     * Personal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_P Ontology
     */
    case P = 'P';

    /**
     * Circus or travelling exhibition
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_Q Ontology
     */
    case Q = 'Q';

    /**
     * Scientific
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_S Ontology
     */
    case S = 'S';

    /**
     * Commercial
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_T Ontology
     */
    case T = 'T';

    /**
     * Zoo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#TransactionPurposeCode_Z Ontology
     */
    case Z = 'Z';
}
