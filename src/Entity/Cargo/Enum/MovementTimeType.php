<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\MovementTimeTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for MovementTime subtypes
 *
 * @link https://onerecord.iata.org/ns/cargo#MovementTimeType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class MovementTimeType extends CodeListElement
{
    public function __construct(MovementTimeTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
