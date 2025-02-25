<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * PublicAuthorities are Organizations of the state on public interests, such as customs
 *
 * @link https://onerecord.iata.org/ns/cargo#PublicAuthority Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class PublicAuthority extends Organization
{
    public function __construct()
    {
        parent::__construct();
    }
}
