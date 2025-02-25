<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list corresponding to cXML code list 1.104 Screening Exemptions
 *
 * Options:
 * 1. BIOM – Bio-Medical Samples
 * 2. DIPL – Diplomatic Bags or Diplomatic Mail
 * 3. LFSM – Life-Saving Materials (Save Human Life)
 * 4. MAIL – Mail
 * 5. NUCL – Nuclear Material
 * 6. SMUS – Small Undersized Shipments
 * 7. TRNS – Transfer or Transshipment
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption Ontology
 */
#[Version('1.0.1')]
enum ScreeningExemption: string
{
    /**
     * Bio-Medical Samples
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_BIOM Ontology
     */
    case BIOM = 'BIOM';

    /**
     * Diplomatic Bags or Diplomatic Mail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_DIPL Ontology
     */
    case DIPL = 'DIPL';

    /**
     * Life-Saving Materials (Save Human Life)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_LFSM Ontology
     */
    case LFSM = 'LFSM';

    /**
     * Mail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_MAIL Ontology
     */
    case MAIL = 'MAIL';

    /**
     * Nuclear Material
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_NUCL Ontology
     */
    case NUCL = 'NUCL';

    /**
     * Small Undersized Shipments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_SMUS Ontology
     */
    case SMUS = 'SMUS';

    /**
     * Transfer or Transshipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ScreeningExemption_TRNS Ontology
     */
    case TRNS = 'TRNS';
}
