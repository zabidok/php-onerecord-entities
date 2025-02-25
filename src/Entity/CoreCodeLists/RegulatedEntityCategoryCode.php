<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Full detailed descriptions for RA, KC & AC are contained in Cargo Services Conference Recommended Practice 1630 CARGO SECURITY
 * Restricted code list of regulated entity categories, partially corresponding to cXML code list 1.100 Customs, Security and Regulatory Control Information Identifiers
 *
 * Options:
 * 1. AO – Aircraft Operator
 * 2. KC – Known Consignor (consignor for both passenger and all cargo aircraft only)
 * 3. RA – Regulated Agent
 * 4. RC – Regulated Carrier
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#RegulatedEntityCategoryCode Ontology
 */
#[Version('1.0.1')]
enum RegulatedEntityCategoryCode: string
{
    /**
     * Aircraft Operator
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RegulatedEntityCategoryCode_AO Ontology
     */
    case AO = 'AO';

    /**
     * Known Consignor (consignor for both passenger and all cargo aircraft only)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RegulatedEntityCategoryCode_KC Ontology
     */
    case KC = 'KC';

    /**
     * Regulated Agent
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RegulatedEntityCategoryCode_RA Ontology
     */
    case RA = 'RA';

    /**
     * Regulated Carrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RegulatedEntityCategoryCode_RC Ontology
     */
    case RC = 'RC';
}
