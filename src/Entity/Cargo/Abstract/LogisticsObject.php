<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Abstract;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Check;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\ExternalReference;
use Zabidok\OneRecordEntities\Entity\Cargo\Event\LogisticsEvent;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Logistics Object parent class, containing all common properties for logistics objects.
 *
 * @link https://onerecord.iata.org/ns/cargo#LogisticsObject Ontology
 */
#[ORM\Entity]
#[ORM\InheritanceType('JOINED')]
#[ORM\DiscriminatorColumn(name: 'type', type: 'string', length: 25)]
#[Version('3.1 RC1')]
abstract class LogisticsObject
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * References to the CheckActions performed on the object
     *
     * @link https://onerecord.iata.org/ns/cargo#checks Ontology
     */
    #[ORM\OneToMany(targetEntity: Check::class, mappedBy: 'checkedObject', cascade: ['persist', 'remove'])]
    protected Collection $checks;

    /**
     * Events object
     *
     * @link https://onerecord.iata.org/ns/cargo#events Ontology
     */
    #[ORM\OneToMany(targetEntity: LogisticsEvent::class, mappedBy: 'eventFor', cascade: ['persist', 'remove'])]
    protected Collection $events;

    /**
     * References to all associated ExternalReferences
     *
     * @link https://onerecord.iata.org/ns/cargo#externalReferences Ontology
     */
    #[ORM\OneToMany(targetEntity: ExternalReference::class, mappedBy: 'referenceForObjects', cascade: ['persist', 'remove'])]
    protected Collection $externalReferences;

    /**
     * Indicator whether a logistics object is a skeleton object
     *
     * @link https://onerecord.iata.org/ns/cargo#skeletonIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $skeletonIndicator = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
        $this->checks = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->externalReferences = new ArrayCollection();
    }


    public function getId(): ?string
    {
        return $this->id;
    }


    public function generateUuid(): ?string
    {
        $uuid = Uuid::v7();
        return $uuid->toString();
    }


    /**
     * @return Collection <int, Check>
     */
    public function getChecks(): Collection
    {
        return $this->checks;
    }


    /**
     * @param Check $check
     * @return static
     */
    public function addChecks(Check $check): static
    {
        if (!$this->checks->contains($check)) {
            $this->checks->add($check);
            $check->setCheckedObject($this);
        }
        return $this;
    }


    /**
     * @param Check $check
     * @return static
     */
    public function removeChecks(Check $check): static
    {
        if ($this->checks->removeElement($check)) {
            if ($check->getCheckedObject() === $this ) {
                $check->setCheckedObject(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection <int, LogisticsEvent>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }


    /**
     * @param LogisticsEvent $logisticsEvent
     * @return static
     */
    public function addEvents(LogisticsEvent $logisticsEvent): static
    {
        if (!$this->events->contains($logisticsEvent)) {
            $this->events->add($logisticsEvent);
            $logisticsEvent->setEventFor($this);
        }
        return $this;
    }


    /**
     * @param LogisticsEvent $logisticsEvent
     * @return static
     */
    public function removeEvents(LogisticsEvent $logisticsEvent): static
    {
        if ($this->events->removeElement($logisticsEvent)) {
            if ($logisticsEvent->getEventFor() === $this ) {
                $logisticsEvent->setEventFor(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection <int, ExternalReference>
     */
    public function getExternalReferences(): Collection
    {
        return $this->externalReferences;
    }


    /**
     * @param ExternalReference $externalReference
     * @return static
     */
    public function addExternalReferences(ExternalReference $externalReference): static
    {
        if (!$this->externalReferences->contains($externalReference)) {
            $this->externalReferences->add($externalReference);
            $externalReference->setReferenceForObjects($this);
        }
        return $this;
    }


    /**
     * @param ExternalReference $externalReference
     * @return static
     */
    public function removeExternalReferences(ExternalReference $externalReference): static
    {
        if ($this->externalReferences->removeElement($externalReference)) {
            if ($externalReference->getReferenceForObjects() === $this ) {
                $externalReference->setReferenceForObjects(null);
            }
        }
        return $this;
    }


    public function getSkeletonIndicator(): ?bool
    {
        return $this->skeletonIndicator;
    }


    /**
     * @param bool|null $skeletonIndicator
     * @return static
     */
    public function setSkeletonIndicator(?bool $skeletonIndicator): static
    {
        $this->skeletonIndicator = $skeletonIndicator;
        return $this;
    }
}
