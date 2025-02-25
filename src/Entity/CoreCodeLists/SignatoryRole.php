<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list indicating the role of the signatory in CITES context
 * Source: CITES
 *
 * Options:
 * 1. APPLICANT – Applicant
 * 2. EXAMINING_AUTHORITY – Examining Authority
 * 3. ISSUING_AUTHORITY – Issuing Authority
 * 4. MANAGEMENT_AUTHORITY – Management Authority
 * 5. PERMIT_ISSUER – Permit Issuer
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#SignatoryRole Ontology
 */
#[Version('1.0.1')]
enum SignatoryRole: string
{
    /**
     * Applicant
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatoryRole_APPLICANT Ontology
     */
    case APPLICANT = 'APPLICANT';

    /**
     * Examining Authority
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatoryRole_EXAMINING_AUTHORITY Ontology
     */
    case EXAMINING_AUTHORITY = 'EXAMINING_AUTHORITY';

    /**
     * Issuing Authority
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatoryRole_ISSUING_AUTHORITY Ontology
     */
    case ISSUING_AUTHORITY = 'ISSUING_AUTHORITY';

    /**
     * Management Authority
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatoryRole_MANAGEMENT_AUTHORITY Ontology
     */
    case MANAGEMENT_AUTHORITY = 'MANAGEMENT_AUTHORITY';

    /**
     * Permit Issuer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SignatoryRole_PERMIT_ISSUER Ontology
     */
    case PERMIT_ISSUER = 'PERMIT_ISSUER';
}
