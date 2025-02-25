<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Abstract;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Actor;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\ContactDetail;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherIdentifier;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\ActionTimeType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Superclass: LogisticsAction is a specific task with a specific result performed on one or more physical LOs by one party in the context of an Activity
 *
 * @link https://onerecord.iata.org/ns/cargo#LogisticsAction Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
abstract class LogisticsAction extends LogisticsObject
{
    /**
     * Enum stating the type of the Action
     *
     * @link https://onerecord.iata.org/ns/cargo#actionTimeType Ontology
     */
    #[ORM\ManyToOne(targetEntity: ActionTimeType::class)]
    protected ?ActionTimeType $actionTimeType = null;

    /**
     * Information about contactDetails
     *
     * @link https://onerecord.iata.org/ns/cargo#contactDetails Ontology
     */
    #[ORM\ManyToMany(targetEntity: ContactDetail::class)]
    #[ORM\JoinTable(
        name: 'logisticsaction_contactdetail',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsaction_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'contactdetail_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $contactDetails;

    /**
     * References to Actors (Person, NonHumanActor) acting as contacts
     *
     * @link https://onerecord.iata.org/ns/cargo#contactPersons Ontology
     */
    #[ORM\ManyToMany(targetEntity: Actor::class)]
    #[ORM\JoinTable(
        name: 'logisticsaction_actor',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsaction_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'actor_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $contactPersons;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'logisticsaction_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsaction_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Reference to the Location the Action was performed at
     *
     * @link https://onerecord.iata.org/ns/cargo#performedAt Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class, inversedBy: 'onsiteActions')]
    protected ?Location $performedAt = null;

    /**
     * Reference to the Activity the Action was performed for
     *
     * @link https://onerecord.iata.org/ns/cargo#servedActivity Ontology
     */
    #[ORM\ManyToOne(targetEntity: LogisticsActivity::class)]
    protected ?LogisticsActivity $servedActivity = null;

    /**
     * DateTime holding the end time of the Action; Type is indicated through ActionType property
     *
     * @link https://onerecord.iata.org/ns/cargo#actionEndTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $actionEndTime = null;

    /**
     * DateTime holding the start time of the Action; Type is indicated through ActionType property
     *
     * @link https://onerecord.iata.org/ns/cargo#actionStartTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $actionStartTime = null;


    public function __construct()
    {
        parent::__construct();
        $this->contactDetails = new ArrayCollection();
        $this->contactPersons = new ArrayCollection();
        $this->otherIdentifiers = new ArrayCollection();
    }


    /**
     * @return ActionTimeType|null
     */
    public function getActionTimeType(): ?ActionTimeType
    {
        return $this->actionTimeType;
    }


    /**
     * @param ActionTimeType|null $actionTimeType
     * @return static
     */
    public function setActionTimeType(?ActionTimeType $actionTimeType): static
    {
        $this->actionTimeType = $actionTimeType;
        return $this;
    }


    /**
     * @return Collection <int, ContactDetail>
     */
    public function getContactDetails(): Collection
    {
        return $this->contactDetails;
    }


    /**
     * @param ContactDetail $contactDetail
     * @return static
     */
    public function addContactDetails(ContactDetail $contactDetail): static
    {
        if (!$this->contactDetails->contains($contactDetail)) {
            $this->contactDetails->add($contactDetail);
        }
        return $this;
    }


    /**
     * @param ContactDetail $contactDetail
     * @return static
     */
    public function removeContactDetails(ContactDetail $contactDetail): static
    {
        $this->contactDetails->removeElement($contactDetail);
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
        }
        return $this;
    }


    /**
     * @param Actor $actor
     * @return static
     */
    public function removeContactPersons(Actor $actor): static
    {
        $this->contactPersons->removeElement($actor);
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
     * @return Location|null
     */
    public function getPerformedAt(): ?Location
    {
        return $this->performedAt;
    }


    /**
     * @param Location|null $performedAt
     * @return static
     */
    public function setPerformedAt(?Location $performedAt): static
    {
        $this->performedAt = $performedAt;
        return $this;
    }


    /**
     * @return LogisticsActivity|null
     */
    public function getServedActivity(): ?LogisticsActivity
    {
        return $this->servedActivity;
    }


    /**
     * @param LogisticsActivity|null $servedActivity
     * @return static
     */
    public function setServedActivity(?LogisticsActivity $servedActivity): static
    {
        $this->servedActivity = $servedActivity;
        return $this;
    }


    public function getActionEndTime(): ?\DateTime
    {
        return $this->actionEndTime;
    }


    /**
     * @param \DateTime|null $actionEndTime
     * @return static
     */
    public function setActionEndTime(?\DateTime $actionEndTime): static
    {
        $this->actionEndTime = $actionEndTime;
        return $this;
    }


    public function getActionStartTime(): ?\DateTime
    {
        return $this->actionStartTime;
    }


    /**
     * @param \DateTime|null $actionStartTime
     * @return static
     */
    public function setActionStartTime(?\DateTime $actionStartTime): static
    {
        $this->actionStartTime = $actionStartTime;
        return $this;
    }
}
