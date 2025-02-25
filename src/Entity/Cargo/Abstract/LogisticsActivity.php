<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Abstract;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Check;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Actor;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\ContactDetail;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\ExecutionStatus;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Superclass: LogisticsActivity is a scheduled set of tasks that is executed as part of one or more Services
 *
 * @link https://onerecord.iata.org/ns/cargo#LogisticsActivity Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
abstract class LogisticsActivity extends LogisticsObject
{
    /**
     * References to CheckActions performed for the Activity
     *
     * @link https://onerecord.iata.org/ns/cargo#checkActions Ontology
     */
    #[ORM\ManyToMany(targetEntity: Check::class)]
    #[ORM\JoinTable(
        name: 'logisticsactivity_check',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsactivity_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'check_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $checkActions;

    /**
     * Information about contactDetails
     *
     * @link https://onerecord.iata.org/ns/cargo#contactDetails Ontology
     */
    #[ORM\ManyToMany(targetEntity: ContactDetail::class)]
    #[ORM\JoinTable(
        name: 'logisticsactivity_contactdetail',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsactivity_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
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
        name: 'logisticsactivity_actor',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsactivity_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'actor_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $contactPersons;

    /**
     * Enum stating the status of the Activity
     *
     * @link https://onerecord.iata.org/ns/cargo#executionStatus Ontology
     */
    #[ORM\ManyToOne(targetEntity: ExecutionStatus::class)]
    protected ?ExecutionStatus $executionStatus = null;

    /**
     * Reference to Services this Activity is executed for
     *
     * @link https://onerecord.iata.org/ns/cargo#servedServices Ontology
     */
    #[ORM\ManyToMany(targetEntity: LogisticsService::class)]
    #[ORM\JoinTable(
        name: 'logisticsactivity_logisticsservice',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsactivity_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'logisticsservice_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $servedServices;


    public function __construct()
    {
        parent::__construct();
        $this->checkActions = new ArrayCollection();
        $this->contactDetails = new ArrayCollection();
        $this->contactPersons = new ArrayCollection();
        $this->servedServices = new ArrayCollection();
    }


    /**
     * @return Collection <int, Check>
     */
    public function getCheckActions(): Collection
    {
        return $this->checkActions;
    }


    /**
     * @param Check $check
     * @return static
     */
    public function addCheckActions(Check $check): static
    {
        if (!$this->checkActions->contains($check)) {
            $this->checkActions->add($check);
        }
        return $this;
    }


    /**
     * @param Check $check
     * @return static
     */
    public function removeCheckActions(Check $check): static
    {
        $this->checkActions->removeElement($check);
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
     * @return ExecutionStatus|null
     */
    public function getExecutionStatus(): ?ExecutionStatus
    {
        return $this->executionStatus;
    }


    /**
     * @param ExecutionStatus|null $executionStatus
     * @return static
     */
    public function setExecutionStatus(?ExecutionStatus $executionStatus): static
    {
        $this->executionStatus = $executionStatus;
        return $this;
    }


    /**
     * @return Collection <int, LogisticsService>
     */
    public function getServedServices(): Collection
    {
        return $this->servedServices;
    }


    /**
     * @param LogisticsService $logisticsService
     * @return static
     */
    public function addServedServices(LogisticsService $logisticsService): static
    {
        if (!$this->servedServices->contains($logisticsService)) {
            $this->servedServices->add($logisticsService);
        }
        return $this;
    }


    /**
     * @param LogisticsService $logisticsService
     * @return static
     */
    public function removeServedServices(LogisticsService $logisticsService): static
    {
        $this->servedServices->removeElement($logisticsService);
        return $this;
    }
}
