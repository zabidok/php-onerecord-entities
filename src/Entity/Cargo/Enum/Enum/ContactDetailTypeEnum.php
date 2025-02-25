<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list for types of contact details
 *
 * Options:
 * 1. ALTERNATE_EMAIL_ADDRESS – Indicates a contact detail as alternate email address
 * 2. ALTERNATE_PHONE_NUMBER – Indicates a contact detail as alternate phone number
 * 3. EMAIL_ADDRESS – Indicates a contact detail as email address
 * 4. FAX_NUMBER – Indicates a contact detail as fax number
 * 5. PHONE_NUMBER – Indicates a contact detail as phone number
 * 6. TELEX – Indicates a contact detail as telex
 * 7. WEBSITE – Indicates a contact detail as website
 *
 * @link https://onerecord.iata.org/ns/cargo#ContactDetailType Ontology
 */
#[Version('3.1 RC1')]
enum ContactDetailTypeEnum: string
{
    /**
     * Indicates a contact detail as alternate email address
     *
     * @link https://onerecord.iata.org/ns/cargo#ALTERNATE_EMAIL_ADDRESS Ontology
     */
    case ALTERNATE_EMAIL_ADDRESS = 'ALTERNATE_EMAIL_ADDRESS';

    /**
     * Indicates a contact detail as alternate phone number
     *
     * @link https://onerecord.iata.org/ns/cargo#ALTERNATE_PHONE_NUMBER Ontology
     */
    case ALTERNATE_PHONE_NUMBER = 'ALTERNATE_PHONE_NUMBER';

    /**
     * Indicates a contact detail as email address
     *
     * @link https://onerecord.iata.org/ns/cargo#EMAIL_ADDRESS Ontology
     */
    case EMAIL_ADDRESS = 'EMAIL_ADDRESS';

    /**
     * Indicates a contact detail as fax number
     *
     * @link https://onerecord.iata.org/ns/cargo#FAX_NUMBER Ontology
     */
    case FAX_NUMBER = 'FAX_NUMBER';

    /**
     * Indicates a contact detail as phone number
     *
     * @link https://onerecord.iata.org/ns/cargo#PHONE_NUMBER Ontology
     */
    case PHONE_NUMBER = 'PHONE_NUMBER';

    /**
     * Indicates a contact detail as telex
     *
     * @link https://onerecord.iata.org/ns/cargo#TELEX Ontology
     */
    case TELEX = 'TELEX';

    /**
     * Indicates a contact detail as website
     *
     * @link https://onerecord.iata.org/ns/cargo#WEBSITE Ontology
     */
    case WEBSITE = 'WEBSITE';
}
