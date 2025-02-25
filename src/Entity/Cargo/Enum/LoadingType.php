<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\LoadingTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for Loading subtypes
 *
 * @link https://onerecord.iata.org/ns/cargo#LoadingType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LoadingType extends CodeListElement
{
    public function __construct(LoadingTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
