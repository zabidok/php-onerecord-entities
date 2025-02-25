<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\ModeQualifierEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Open code list for transport modes
 *
 * @link https://onerecord.iata.org/ns/cargo#ModeQualifier Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ModeQualifier extends CodeListElement
{
    public function __construct(ModeQualifierEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
