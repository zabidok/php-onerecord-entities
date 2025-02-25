<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\EventTimeTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for acceptable event times
 *
 * @link https://onerecord.iata.org/ns/cargo#EventTimeType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class EventTimeType extends CodeListElement
{
    public function __construct(EventTimeTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
