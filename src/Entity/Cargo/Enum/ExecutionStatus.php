<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\ExecutionStatusEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list for the execution status of activities
 *
 * @link https://onerecord.iata.org/ns/cargo#ExecutionStatus Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ExecutionStatus extends CodeListElement
{
    public function __construct(ExecutionStatusEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
