<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\DirectionTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for the direction of a MovementTime
 *
 * @link https://onerecord.iata.org/ns/cargo#DirectionType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class DirectionType extends CodeListElement
{
    public function __construct(DirectionTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
