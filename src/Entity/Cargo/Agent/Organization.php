<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAgent;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherIdentifier;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Superclass: Organizations represent a kind of Agent corresponding to social institutions such as companies, societies, etc
 *
 * @link https://onerecord.iata.org/ns/cargo#Organization Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Organization extends LogisticsAgent
{
    /**
     * Reference to the Location where the Organization is based at or headquartered
     *
     * @link https://onerecord.iata.org/ns/cargo#basedAtLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $basedAtLocation = null;

    /**
     * References to Actors (Person, NonHumanActor) acting as contacts
     *
     * @link https://onerecord.iata.org/ns/cargo#contactPersons Ontology
     */
    #[ORM\OneToMany(targetEntity: Actor::class, mappedBy: 'associatedOrganization', cascade: ['persist', 'remove'])]
    protected Collection $contactPersons;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'organization_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'organization_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Reference to the parent Organization
     *
     * @link https://onerecord.iata.org/ns/cargo#parentOrganization Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class, inversedBy: 'subOrganization')]
    protected ?Organization $parentOrganization = null;

    /**
     * References to all sub-Organizations
     *
     * @link https://onerecord.iata.org/ns/cargo#subOrganization Ontology
     */
    #[ORM\OneToMany(targetEntity: Organization::class, mappedBy: 'parentOrganization', cascade: ['persist', 'remove'])]
    protected Collection $subOrganization;

    /**
     * Human-understandable name of object depending on the context
     *
     * @link https://onerecord.iata.org/ns/cargo#name Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $name = null;

    /**
     * Short name of the Organization if any
     *
     * @link https://onerecord.iata.org/ns/cargo#shortName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $shortName = null;


    public function __construct()
    {
        parent::__construct();
        $this->contactPersons = new ArrayCollection();
        $this->otherIdentifiers = new ArrayCollection();
        $this->subOrganization = new ArrayCollection();
    }


    /**
     * @return Location|null
     */
    public function getBasedAtLocation(): ?Location
    {
        return $this->basedAtLocation;
    }


    /**
     * @param Location|null $basedAtLocation
     * @return static
     */
    public function setBasedAtLocation(?Location $basedAtLocation): static
    {
        $this->basedAtLocation = $basedAtLocation;
        return $this;
    }


    /**
     * @return Collection <int, Actor>
     */
    public function getContactPersons(): Collection
    {
        return $this->contactPersons;
    }


    /**
     * @param Actor $actor
     * @return static
     */
    public function addContactPersons(Actor $actor): static
    {
        if (!$this->contactPersons->contains($actor)) {
            $this->contactPersons->add($actor);
            $actor->setAssociatedOrganization($this);
        }
        return $this;
    }


    /**
     * @param Actor $actor
     * @return static
     */
    public function removeContactPersons(Actor $actor): static
    {
        if ($this->contactPersons->removeElement($actor)) {
            if ($actor->getAssociatedOrganization() === $this ) {
                $actor->setAssociatedOrganization(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection <int, OtherIdentifier>
     */
    public function getOtherIdentifiers(): Collection
    {
        return $this->otherIdentifiers;
    }


    /**
     * @param OtherIdentifier $otherIdentifier
     * @return static
     */
    public function addOtherIdentifiers(OtherIdentifier $otherIdentifier): static
    {
        if (!$this->otherIdentifiers->contains($otherIdentifier)) {
            $this->otherIdentifiers->add($otherIdentifier);
        }
        return $this;
    }


    /**
     * @param OtherIdentifier $otherIdentifier
     * @return static
     */
    public function removeOtherIdentifiers(OtherIdentifier $otherIdentifier): static
    {
        $this->otherIdentifiers->removeElement($otherIdentifier);
        return $this;
    }


    /**
     * @return Organization|null
     */
    public function getParentOrganization(): ?Organization
    {
        return $this->parentOrganization;
    }


    /**
     * @param Organization|null $parentOrganization
     * @return static
     */
    public function setParentOrganization(?Organization $parentOrganization): static
    {
        $this->parentOrganization = $parentOrganization;
        return $this;
    }


    /**
     * @return Collection <int, Organization>
     */
    public function getSubOrganization(): Collection
    {
        return $this->subOrganization;
    }


    /**
     * @param Organization $organization
     * @return static
     */
    public function addSubOrganization(Organization $organization): static
    {
        if (!$this->subOrganization->contains($organization)) {
            $this->subOrganization->add($organization);
            $organization->setParentOrganization($this);
        }
        return $this;
    }


    /**
     * @param Organization $organization
     * @return static
     */
    public function removeSubOrganization(Organization $organization): static
    {
        if ($this->subOrganization->removeElement($organization)) {
            if ($organization->getParentOrganization() === $this ) {
                $organization->setParentOrganization(null);
            }
        }
        return $this;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    /**
     * @param string|null $name
     * @return static
     */
    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }


    public function getShortName(): ?string
    {
        return $this->shortName;
    }


    /**
     * @param string|null $shortName
     * @return static
     */
    public function setShortName(?string $shortName): static
    {
        $this->shortName = $shortName;
        return $this;
    }
}
