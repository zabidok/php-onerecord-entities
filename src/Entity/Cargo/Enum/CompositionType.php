<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\CompositionTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for Composing subtypes
 *
 * @link https://onerecord.iata.org/ns/cargo#CompositionType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CompositionType extends CodeListElement
{
    public function __construct(CompositionTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
