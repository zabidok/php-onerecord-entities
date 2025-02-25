<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\LoadTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for the Load Type of a piece or shipment
 *
 * @link https://onerecord.iata.org/ns/cargo#LoadType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LoadType extends CodeListElement
{
    public function __construct(LoadTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
