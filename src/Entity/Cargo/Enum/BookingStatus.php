<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\BookingStatusEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restricted code list containing the possible statuses of a booking
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingStatus Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingStatus extends CodeListElement
{
    public function __construct(BookingStatusEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
