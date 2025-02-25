<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\WaybillTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for Waybill types
 *
 * @link https://onerecord.iata.org/ns/cargo#WaybillType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class WaybillType extends CodeListElement
{
    public function __construct(WaybillTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
