<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * Non-human actors are actors which are not a person, such as robots
 *
 * @link https://onerecord.iata.org/ns/cargo#NonHumanActor Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class NonHumanActor extends Actor
{
    public function __construct()
    {
        parent::__construct();
    }
}
