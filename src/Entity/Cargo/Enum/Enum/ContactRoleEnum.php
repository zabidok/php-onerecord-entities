<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list for roles of a contact
 *
 * Options:
 * 1. CUSTOMER_CONTACT – Indicates a contact person as customer contact
 * 2. CUSTOMS_CONTACT – Indicates a contact person as customs contact
 * 3. EMERGENCY_CONTACT – Indicates a contact person as emergency contact
 *
 * @link https://onerecord.iata.org/ns/cargo#ContactRole Ontology
 */
#[Version('3.1 RC1')]
enum ContactRoleEnum: string
{
    /**
     * Indicates a contact person as customer contact
     *
     * @link https://onerecord.iata.org/ns/cargo#CUSTOMER_CONTACT Ontology
     */
    case CUSTOMER_CONTACT = 'CUSTOMER_CONTACT';

    /**
     * Indicates a contact person as customs contact
     *
     * @link https://onerecord.iata.org/ns/cargo#CUSTOMS_CONTACT Ontology
     */
    case CUSTOMS_CONTACT = 'CUSTOMS_CONTACT';

    /**
     * Indicates a contact person as emergency contact
     *
     * @link https://onerecord.iata.org/ns/cargo#EMERGENCY_CONTACT Ontology
     */
    case EMERGENCY_CONTACT = 'EMERGENCY_CONTACT';
}
