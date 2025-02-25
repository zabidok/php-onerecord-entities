<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list to describe whether a rating is Face, Published or Actual
 *
 * Options:
 * 1. A – Actual
 * 2. C – Published
 * 3. F – Face
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#RatingsType Ontology
 */
#[Version('1.0.1')]
enum RatingsType: string
{
    /**
     * Actual
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RatingsType_A Ontology
     */
    case A = 'A';

    /**
     * Published
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RatingsType_C Ontology
     */
    case C = 'C';

    /**
     * Face
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RatingsType_F Ontology
     */
    case F = 'F';
}
