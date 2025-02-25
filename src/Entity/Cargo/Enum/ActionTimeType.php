<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\ActionTimeTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for acceptable action times
 *
 * @link https://onerecord.iata.org/ns/cargo#ActionTimeType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ActionTimeType extends CodeListElement
{
    public function __construct(ActionTimeTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
