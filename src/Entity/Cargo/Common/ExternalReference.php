<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Company;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reference documents details
 *
 * @link https://onerecord.iata.org/ns/cargo#ExternalReference Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ExternalReference extends LogisticsObject
{
    /**
     * Location of the document, e.g. location where the document was emitted
     *
     * @link https://onerecord.iata.org/ns/cargo#createdAtLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $createdAtLocation = null;

    /**
     * Document originator details and contacts
     *
     * @link https://onerecord.iata.org/ns/cargo#originator Ontology
     */
    #[ORM\ManyToOne(targetEntity: Company::class)]
    protected ?Company $originator = null;

    /**
     * References to the LogisticsObjects referring to this external reference
     *
     * @link https://onerecord.iata.org/ns/cargo#referenceForObjects Ontology
     */
    #[ORM\ManyToMany(targetEntity: LogisticsObject::class)]
    #[ORM\JoinTable(
        name: 'externalreference_logisticsobject',
        joinColumns: [new ORM\JoinColumn(name: 'externalreference_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'logisticsobject_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $referenceForObjects;

    /**
     * Checksum of the document to validate its integrity
     *
     * @link https://onerecord.iata.org/ns/cargo#checksum Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $checksum = null;

    /**
     * Unique document identifier
     *
     * @link https://onerecord.iata.org/ns/cargo#documentIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $documentIdentifier = null;

    /**
     * Link to the document, e.g. URL of the file where it is hosted
     *
     * @link https://onerecord.iata.org/ns/cargo#documentLink Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $documentLink = null;

    /**
     * If no DocumentType provided, name of the referenced document
     *
     * @link https://onerecord.iata.org/ns/cargo#documentName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $documentName = null;

    /**
     * Type of the referenced document . Can refer UNEDIFACT 11  e.g. 740 - Air Waybill, but not limited to
     *
     * @link https://onerecord.iata.org/ns/cargo#documentType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $documentType = null;

    /**
     * Document version number
     *
     * @link https://onerecord.iata.org/ns/cargo#documentVersion Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $documentVersion = null;

    /**
     * Validity start date based on usage context
     *
     * @link https://onerecord.iata.org/ns/cargo#validFrom Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $validFrom = null;

    /**
     * Validity end date (date of expiry) based on usage context
     *
     * @link https://onerecord.iata.org/ns/cargo#validUntil Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $validUntil = null;


    public function __construct()
    {
        parent::__construct();
        $this->referenceForObjects = new ArrayCollection();
    }


    /**
     * @return Location|null
     */
    public function getCreatedAtLocation(): ?Location
    {
        return $this->createdAtLocation;
    }


    /**
     * @param Location|null $createdAtLocation
     * @return static
     */
    public function setCreatedAtLocation(?Location $createdAtLocation): static
    {
        $this->createdAtLocation = $createdAtLocation;
        return $this;
    }


    /**
     * @return Company|null
     */
    public function getOriginator(): ?Company
    {
        return $this->originator;
    }


    /**
     * @param Company|null $originator
     * @return static
     */
    public function setOriginator(?Company $originator): static
    {
        $this->originator = $originator;
        return $this;
    }


    /**
     * @return Collection <int, LogisticsObject>
     */
    public function getReferenceForObjects(): Collection
    {
        return $this->referenceForObjects;
    }


    /**
     * @param LogisticsObject $logisticsObject
     * @return static
     */
    public function addReferenceForObjects(LogisticsObject $logisticsObject): static
    {
        if (!$this->referenceForObjects->contains($logisticsObject)) {
            $this->referenceForObjects->add($logisticsObject);
        }
        return $this;
    }


    /**
     * @param LogisticsObject $logisticsObject
     * @return static
     */
    public function removeReferenceForObjects(LogisticsObject $logisticsObject): static
    {
        $this->referenceForObjects->removeElement($logisticsObject);
        return $this;
    }


    public function getChecksum(): ?string
    {
        return $this->checksum;
    }


    /**
     * @param string|null $checksum
     * @return static
     */
    public function setChecksum(?string $checksum): static
    {
        $this->checksum = $checksum;
        return $this;
    }


    public function getDocumentIdentifier(): ?string
    {
        return $this->documentIdentifier;
    }


    /**
     * @param string|null $documentIdentifier
     * @return static
     */
    public function setDocumentIdentifier(?string $documentIdentifier): static
    {
        $this->documentIdentifier = $documentIdentifier;
        return $this;
    }


    public function getDocumentLink(): ?string
    {
        return $this->documentLink;
    }


    /**
     * @param string|null $documentLink
     * @return static
     */
    public function setDocumentLink(?string $documentLink): static
    {
        $this->documentLink = $documentLink;
        return $this;
    }


    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }


    /**
     * @param string|null $documentName
     * @return static
     */
    public function setDocumentName(?string $documentName): static
    {
        $this->documentName = $documentName;
        return $this;
    }


    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }


    /**
     * @param string|null $documentType
     * @return static
     */
    public function setDocumentType(?string $documentType): static
    {
        $this->documentType = $documentType;
        return $this;
    }


    public function getDocumentVersion(): ?string
    {
        return $this->documentVersion;
    }


    /**
     * @param string|null $documentVersion
     * @return static
     */
    public function setDocumentVersion(?string $documentVersion): static
    {
        $this->documentVersion = $documentVersion;
        return $this;
    }


    public function getValidFrom(): ?\DateTime
    {
        return $this->validFrom;
    }


    /**
     * @param \DateTime|null $validFrom
     * @return static
     */
    public function setValidFrom(?\DateTime $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }


    public function getValidUntil(): ?\DateTime
    {
        return $this->validUntil;
    }


    /**
     * @param \DateTime|null $validUntil
     * @return static
     */
    public function setValidUntil(?\DateTime $validUntil): static
    {
        $this->validUntil = $validUntil;
        return $this;
    }
}
