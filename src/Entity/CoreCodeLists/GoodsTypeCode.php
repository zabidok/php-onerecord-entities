<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list referring to the CITES appendices
 * Source: CITES
 *
 * Options:
 * 1. I – Species included in Appendix I of CITES
 * 2. II – Species included in Appendix II of CITES
 * 3. III – Species included in Appendix III of CITES
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeCode Ontology
 */
#[Version('1.0.1')]
enum GoodsTypeCode: string
{
    /**
     * Species included in Appendix I of CITES
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeCode_I Ontology
     */
    case I = 'I';

    /**
     * Species included in Appendix II of CITES
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeCode_II Ontology
     */
    case II = 'II';

    /**
     * Species included in Appendix III of CITES
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#GoodsTypeCode_III Ontology
     */
    case III = 'III';
}
