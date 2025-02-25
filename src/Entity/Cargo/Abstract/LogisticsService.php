<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Abstract;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Actor;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\ActivitySequence;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\ContactDetail;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Superclass: LogisticsService is a sequence of Activities provided by one Party to another
 *
 * @link https://onerecord.iata.org/ns/cargo#LogisticsService Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
abstract class LogisticsService extends LogisticsObject
{
    /**
     * Information about the Activities that are part of the Service and their sequence
     *
     * @link https://onerecord.iata.org/ns/cargo#activitySequences Ontology
     */
    #[ORM\ManyToMany(targetEntity: ActivitySequence::class)]
    #[ORM\JoinTable(
        name: 'logisticsservice_activitysequence',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsservice_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'activitysequence_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $activitySequences;

    /**
     * Information about contactDetails
     *
     * @link https://onerecord.iata.org/ns/cargo#contactDetails Ontology
     */
    #[ORM\ManyToMany(targetEntity: ContactDetail::class)]
    #[ORM\JoinTable(
        name: 'logisticsservice_contactdetail',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsservice_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
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
        name: 'logisticsservice_actor',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsservice_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'actor_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $contactPersons;


    public function __construct()
    {
        parent::__construct();
        $this->activitySequences = new ArrayCollection();
        $this->contactDetails = new ArrayCollection();
        $this->contactPersons = new ArrayCollection();
    }


    /**
     * @return Collection <int, ActivitySequence>
     */
    public function getActivitySequences(): Collection
    {
        return $this->activitySequences;
    }


    /**
     * @param ActivitySequence $activitySequence
     * @return static
     */
    public function addActivitySequences(ActivitySequence $activitySequence): static
    {
        if (!$this->activitySequences->contains($activitySequence)) {
            $this->activitySequences->add($activitySequence);
        }
        return $this;
    }


    /**
     * @param ActivitySequence $activitySequence
     * @return static
     */
    public function removeActivitySequences(ActivitySequence $activitySequence): static
    {
        $this->activitySequences->removeElement($activitySequence);
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
}
