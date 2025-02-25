<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list based on RP 1654
 * Source: CSC RP 1654
 *
 * Options:
 * 1. BCC – BCC
 * 2. HHH – HHH
 * 3. XXX – XXX
 * 4. ZZZ – ZZZ
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#DemurrageCode Ontology
 */
#[Version('1.0.1')]
enum DemurrageCode: string
{
    /**
     * BCC
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DemurrageCode_BCC Ontology
     */
    case BCC = 'BCC';

    /**
     * HHH
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DemurrageCode_HHH Ontology
     */
    case HHH = 'HHH';

    /**
     * XXX
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DemurrageCode_XXX Ontology
     */
    case XXX = 'XXX';

    /**
     * ZZZ
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DemurrageCode_ZZZ Ontology
     */
    case ZZZ = 'ZZZ';
}
