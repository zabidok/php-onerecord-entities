<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\BookingOptionStatusEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list containing the statuses of a booking option
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingOptionStatus Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingOptionStatus extends CodeListElement
{
    public function __construct(BookingOptionStatusEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
