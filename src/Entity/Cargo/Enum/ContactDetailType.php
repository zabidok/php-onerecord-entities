<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\ContactDetailTypeEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Open code list for types of contact details
 *
 * @link https://onerecord.iata.org/ns/cargo#ContactDetailType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ContactDetailType extends CodeListElement
{
    public function __construct(ContactDetailTypeEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
