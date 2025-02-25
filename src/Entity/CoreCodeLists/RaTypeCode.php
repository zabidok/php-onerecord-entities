<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list based on cXML code list 1.84 Category Colour
 *
 * Options:
 * 1. III_YELLOW – III-Yellow
 * 2. II_YELLOW – II-Yellow
 * 3. I_WHITE – I-Yellow
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#RaTypeCode Ontology
 */
#[Version('1.0.1')]
enum RaTypeCode: string
{
    /**
     * III-Yellow
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RaTypeCode_III_YELLOW Ontology
     */
    case III_YELLOW = 'III_YELLOW';

    /**
     * II-Yellow
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RaTypeCode_II_YELLOW Ontology
     */
    case II_YELLOW = 'II_YELLOW';

    /**
     * I-Yellow
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#RaTypeCode_I_WHITE Ontology
     */
    case I_WHITE = 'I_WHITE';
}
