<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum\ContactRoleEnum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Open code list for roles of a contact
 *
 * @link https://onerecord.iata.org/ns/cargo#ContactRole Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ContactRole extends CodeListElement
{
    public function __construct(ContactRoleEnum $code)
    {
        parent::__construct();
        $this->code = $code->value;
    }
}
