<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Doctrine\ORM\Mapping as ORM;

/**
 * Customs information details
 *
 * @link https://onerecord.iata.org/ns/cargo#CustomsInformation Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CustomsInformation extends LogisticsObject
{
    /**
     * Customs, Security and Regulatory Control Information Identifier. Coded indicator qualifying Customs related information: Item Number "I", Exemption Legend "L", System Downtime Reference "S", Unique Consignment Reference Number "U", Movement Reference Number "M" . Refers to Code List 1.1. Condition: At least one of the three elements (Country Code, Information Identifier or Customs, Security and Regulatory Control Information Identifier) must be completed
     *
     * @link https://onerecord.iata.org/ns/cargo#contentCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $contentCode = null;

    /**
     * Country details. Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#country Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $country = null;

    /**
     * Reference to the Piece the document was issued for
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedForPiece Ontology
     */
    #[ORM\ManyToOne(targetEntity: Piece::class)]
    protected ?Piece $issuedForPiece = null;

    /**
     * Reference to the shipment the document was issued for
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedForShipment Ontology
     */
    #[ORM\ManyToOne(targetEntity: Shipment::class)]
    protected ?Shipment $issuedForShipment = null;

    /**
     * Information Identifier. Code identifying a piece of information/entity e.g. "IMP" for import, "EXP" for export, "AGT" for Agent, "ISS" for The Regulated Agent Issuing the Security Status for a Consignment etc. Condition: At least one of the three elements (Country Code, Information Identifier or Customs, Security and Regulatory Control Information Identifier) must be completed
     *
     * @link https://onerecord.iata.org/ns/cargo#subjectCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $subjectCode = null;

    /**
     * Free text for customs remarks, not used in OCI Composition Rules Table
     *
     * @link https://onerecord.iata.org/ns/cargo#note Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $note = null;

    /**
     * Supplementary Customs, Security and Regulatory Control Information
     *
     * @link https://onerecord.iata.org/ns/cargo#otherCustomsInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $otherCustomsInformation = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return CodeListElement|null
     */
    public function getContentCode(): ?CodeListElement
    {
        return $this->contentCode;
    }


    /**
     * @param CodeListElement|null $contentCode
     * @return static
     */
    public function setContentCode(?CodeListElement $contentCode): static
    {
        $this->contentCode = $contentCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getCountry(): ?CodeListElement
    {
        return $this->country;
    }


    /**
     * @param CodeListElement|null $country
     * @return static
     */
    public function setCountry(?CodeListElement $country): static
    {
        $this->country = $country;
        return $this;
    }


    /**
     * @return Piece|null
     */
    public function getIssuedForPiece(): ?Piece
    {
        return $this->issuedForPiece;
    }


    /**
     * @param Piece|null $issuedForPiece
     * @return static
     */
    public function setIssuedForPiece(?Piece $issuedForPiece): static
    {
        $this->issuedForPiece = $issuedForPiece;
        return $this;
    }


    /**
     * @return Shipment|null
     */
    public function getIssuedForShipment(): ?Shipment
    {
        return $this->issuedForShipment;
    }


    /**
     * @param Shipment|null $issuedForShipment
     * @return static
     */
    public function setIssuedForShipment(?Shipment $issuedForShipment): static
    {
        $this->issuedForShipment = $issuedForShipment;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getSubjectCode(): ?CodeListElement
    {
        return $this->subjectCode;
    }


    /**
     * @param CodeListElement|null $subjectCode
     * @return static
     */
    public function setSubjectCode(?CodeListElement $subjectCode): static
    {
        $this->subjectCode = $subjectCode;
        return $this;
    }


    public function getNote(): ?string
    {
        return $this->note;
    }


    /**
     * @param string|null $note
     * @return static
     */
    public function setNote(?string $note): static
    {
        $this->note = $note;
        return $this;
    }


    public function getOtherCustomsInformation(): ?string
    {
        return $this->otherCustomsInformation;
    }


    /**
     * @param string|null $otherCustomsInformation
     * @return static
     */
    public function setOtherCustomsInformation(?string $otherCustomsInformation): static
    {
        $this->otherCustomsInformation = $otherCustomsInformation;
        return $this;
    }
}
