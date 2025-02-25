<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\DG;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Piece;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dangerous goods declaration
 *
 * @link https://onerecord.iata.org/ns/cargo#DgDeclaration Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class DgDeclaration extends LogisticsObject
{
    /**
     * Reference to the Piece the document was issued for
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedForPiece Ontology
     */
    #[ORM\ManyToOne(targetEntity: Piece::class)]
    protected ?Piece $issuedForPiece = null;

    /**
     * Contains the Special Handling Code related to the prescribed limitation. Hardcoded to PASSENGER AND CARGO AIRCRAFT or CARGO AIRCRAFT ONLY. This field is mandatory for air (Air)
     *
     * @link https://onerecord.iata.org/ns/cargo#aircraftLimitationInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $aircraftLimitationInformation = null;

    /**
     * Contains the warning message complying with the regulations text note. This field is mandatory for air (Air)
     *
     * @link https://onerecord.iata.org/ns/cargo#complianceDeclarationText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $complianceDeclarationText = null;

    /**
     * Indicates an exclusive use shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#exclusiveUseIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $exclusiveUseIndicator = null;

    /**
     * Free text. This may include items such as Control temperature for substances stabilized by temperature control, name and telephone number of a responsible person for infectious substances.
     *
     * @link https://onerecord.iata.org/ns/cargo#handlingInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $handlingInformation = null;

    /**
     * Contains the shipper's declaration to comply with the regulations text note. Free text . This field is mandatory for air (Air)
     *
     * @link https://onerecord.iata.org/ns/cargo#shipperDeclarationText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $shipperDeclarationText = null;


    public function __construct()
    {
        parent::__construct();
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


    public function getAircraftLimitationInformation(): ?string
    {
        return $this->aircraftLimitationInformation;
    }


    /**
     * @param string|null $aircraftLimitationInformation
     * @return static
     */
    public function setAircraftLimitationInformation(?string $aircraftLimitationInformation): static
    {
        $this->aircraftLimitationInformation = $aircraftLimitationInformation;
        return $this;
    }


    public function getComplianceDeclarationText(): ?string
    {
        return $this->complianceDeclarationText;
    }


    /**
     * @param string|null $complianceDeclarationText
     * @return static
     */
    public function setComplianceDeclarationText(?string $complianceDeclarationText): static
    {
        $this->complianceDeclarationText = $complianceDeclarationText;
        return $this;
    }


    public function getExclusiveUseIndicator(): ?bool
    {
        return $this->exclusiveUseIndicator;
    }


    /**
     * @param bool|null $exclusiveUseIndicator
     * @return static
     */
    public function setExclusiveUseIndicator(?bool $exclusiveUseIndicator): static
    {
        $this->exclusiveUseIndicator = $exclusiveUseIndicator;
        return $this;
    }


    public function getHandlingInformation(): ?string
    {
        return $this->handlingInformation;
    }


    /**
     * @param string|null $handlingInformation
     * @return static
     */
    public function setHandlingInformation(?string $handlingInformation): static
    {
        $this->handlingInformation = $handlingInformation;
        return $this;
    }


    public function getShipperDeclarationText(): ?string
    {
        return $this->shipperDeclarationText;
    }


    /**
     * @param string|null $shipperDeclarationText
     * @return static
     */
    public function setShipperDeclarationText(?string $shipperDeclarationText): static
    {
        $this->shipperDeclarationText = $shipperDeclarationText;
        return $this;
    }
}
