<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\StoringTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for Storing subtypes
 *
 * @link https://onerecord.iata.org/ns/cargo#StoringType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class StoringType extends CodeListElement
{
    public function __construct(StoringTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
