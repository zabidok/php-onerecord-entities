<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAgent;
use Doctrine\ORM\Mapping as ORM;

/**
 * Superclass: Actors are Persons or entities acting like a single person
 *
 * @link https://onerecord.iata.org/ns/cargo#Actor Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Actor extends LogisticsAgent
{
    /**
     * Reference to the Organization the Actor is associated with
     *
     * @link https://onerecord.iata.org/ns/cargo#associatedOrganization Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $associatedOrganization = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Organization|null
     */
    public function getAssociatedOrganization(): ?Organization
    {
        return $this->associatedOrganization;
    }


    /**
     * @param Organization|null $associatedOrganization
     * @return static
     */
    public function setAssociatedOrganization(?Organization $associatedOrganization): static
    {
        $this->associatedOrganization = $associatedOrganization;
        return $this;
    }
}
