<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\SensorTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Open code list for sensor types
 *
 * @link https://onerecord.iata.org/ns/cargo#SensorType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class SensorType extends CodeListElement
{
    public function __construct(SensorTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
