<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Event;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Actor;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\ExternalReference;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\EventTimeType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Event details
 *
 * @link https://onerecord.iata.org/ns/cargo#LogisticsEvent Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LogisticsEvent
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Movement or milestone code. Can hold a named individual of the StatusCode core code list (corresponding to cXML code list 1.18), but can also be referring to different code lists.
     *
     * @link https://onerecord.iata.org/ns/cargo#eventCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $eventCode = null;

    /**
     * Refers to the URI of the linked object(s)
     *
     * @link https://onerecord.iata.org/ns/cargo#eventFor Ontology
     */
    #[ORM\ManyToOne(targetEntity: LogisticsObject::class)]
    protected ?LogisticsObject $eventFor = null;

    /**
     * Location of event
     *
     * @link https://onerecord.iata.org/ns/cargo#eventLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $eventLocation = null;

    /**
     * Indicates type of event e.g.  Scheduled, Estimated, Actual
     *
     * @link https://onerecord.iata.org/ns/cargo#eventTimeType Ontology
     */
    #[ORM\ManyToOne(targetEntity: EventTimeType::class)]
    protected ?EventTimeType $eventTimeType = null;

    /**
     * References to all associated ExternalReferences
     *
     * @link https://onerecord.iata.org/ns/cargo#externalReferences Ontology
     */
    #[ORM\ManyToMany(targetEntity: ExternalReference::class)]
    #[ORM\JoinTable(
        name: 'logisticsevent_externalreference',
        joinColumns: [new ORM\JoinColumn(name: 'logisticsevent_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'externalreference_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $externalReferences;

    /**
     * Reference to the Actor recording the LogisticsEvent
     *
     * @link https://onerecord.iata.org/ns/cargo#recordingActor Ontology
     */
    #[ORM\ManyToOne(targetEntity: Actor::class)]
    protected ?Actor $recordingActor = null;

    /**
     * Organization recording the LogisticsEvent
     *
     * @link https://onerecord.iata.org/ns/cargo#recordingOrganization Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $recordingOrganization = null;

    /**
     * DateTime at which the LogisticsEvent was posted
     *
     * @link https://onerecord.iata.org/ns/cargo#creationDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $creationDate = null;

    /**
     * Date and time of the event
     *
     * @link https://onerecord.iata.org/ns/cargo#eventDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $eventDate = null;

    /**
     * If no EventCode provided, event name - e.g. Security clearance
     *
     * @link https://onerecord.iata.org/ns/cargo#eventName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $eventName = null;

    /**
     * Boolean indicating that the LogisticsEvent is only applicable for parts of the LogisticObject it was recorded for, for example for some Pieces of a Shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#partialEventIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $partialEventIndicator = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
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
     * @return CodeListElement|null
     */
    public function getEventCode(): ?CodeListElement
    {
        return $this->eventCode;
    }


    /**
     * @param CodeListElement|null $eventCode
     * @return static
     */
    public function setEventCode(?CodeListElement $eventCode): static
    {
        $this->eventCode = $eventCode;
        return $this;
    }


    /**
     * @return LogisticsObject|null
     */
    public function getEventFor(): ?LogisticsObject
    {
        return $this->eventFor;
    }


    /**
     * @param LogisticsObject|null $eventFor
     * @return static
     */
    public function setEventFor(?LogisticsObject $eventFor): static
    {
        $this->eventFor = $eventFor;
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getEventLocation(): ?Location
    {
        return $this->eventLocation;
    }


    /**
     * @param Location|null $eventLocation
     * @return static
     */
    public function setEventLocation(?Location $eventLocation): static
    {
        $this->eventLocation = $eventLocation;
        return $this;
    }


    /**
     * @return EventTimeType|null
     */
    public function getEventTimeType(): ?EventTimeType
    {
        return $this->eventTimeType;
    }


    /**
     * @param EventTimeType|null $eventTimeType
     * @return static
     */
    public function setEventTimeType(?EventTimeType $eventTimeType): static
    {
        $this->eventTimeType = $eventTimeType;
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
        }
        return $this;
    }


    /**
     * @param ExternalReference $externalReference
     * @return static
     */
    public function removeExternalReferences(ExternalReference $externalReference): static
    {
        $this->externalReferences->removeElement($externalReference);
        return $this;
    }


    /**
     * @return Actor|null
     */
    public function getRecordingActor(): ?Actor
    {
        return $this->recordingActor;
    }


    /**
     * @param Actor|null $recordingActor
     * @return static
     */
    public function setRecordingActor(?Actor $recordingActor): static
    {
        $this->recordingActor = $recordingActor;
        return $this;
    }


    /**
     * @return Organization|null
     */
    public function getRecordingOrganization(): ?Organization
    {
        return $this->recordingOrganization;
    }


    /**
     * @param Organization|null $recordingOrganization
     * @return static
     */
    public function setRecordingOrganization(?Organization $recordingOrganization): static
    {
        $this->recordingOrganization = $recordingOrganization;
        return $this;
    }


    public function getCreationDate(): ?\DateTime
    {
        return $this->creationDate;
    }


    /**
     * @param \DateTime|null $creationDate
     * @return static
     */
    public function setCreationDate(?\DateTime $creationDate): static
    {
        $this->creationDate = $creationDate;
        return $this;
    }


    public function getEventDate(): ?\DateTime
    {
        return $this->eventDate;
    }


    /**
     * @param \DateTime|null $eventDate
     * @return static
     */
    public function setEventDate(?\DateTime $eventDate): static
    {
        $this->eventDate = $eventDate;
        return $this;
    }


    public function getEventName(): ?string
    {
        return $this->eventName;
    }


    /**
     * @param string|null $eventName
     * @return static
     */
    public function setEventName(?string $eventName): static
    {
        $this->eventName = $eventName;
        return $this;
    }


    public function getPartialEventIndicator(): ?bool
    {
        return $this->partialEventIndicator;
    }


    /**
     * @param bool|null $partialEventIndicator
     * @return static
     */
    public function setPartialEventIndicator(?bool $partialEventIndicator): static
    {
        $this->partialEventIndicator = $partialEventIndicator;
        return $this;
    }
}
