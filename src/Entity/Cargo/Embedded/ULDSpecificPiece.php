<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * ULDSpecificPiece details
 *
 * @link https://onerecord.iata.org/ns/cargo#ULDSpecificPiece Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ULDSpecificPiece extends PieceGroup
{
    /**
     * Contour code as per IATA ULD Regulation
     *
     * @link https://onerecord.iata.org/ns/cargo#uldContourCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $uldContourCode = null;

    /**
     * Type of ULD as per IATA ULD Regulation
     *
     * @link https://onerecord.iata.org/ns/cargo#uldType Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $uldType = null;

    /**
     * Shipper's Load And Count  ( total contained piece count as provided by shipper)
     *
     * @link https://onerecord.iata.org/ns/cargo#slac Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $slac = null;

    /**
     * Serial number that allows to uniquely identify the ULD
     *
     * @link https://onerecord.iata.org/ns/cargo#uldSerialNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $uldSerialNumber = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return CodeListElement|null
     */
    public function getUldContourCode(): ?CodeListElement
    {
        return $this->uldContourCode;
    }


    /**
     * @param CodeListElement|null $uldContourCode
     * @return static
     */
    public function setUldContourCode(?CodeListElement $uldContourCode): static
    {
        $this->uldContourCode = $uldContourCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getUldType(): ?CodeListElement
    {
        return $this->uldType;
    }


    /**
     * @param CodeListElement|null $uldType
     * @return static
     */
    public function setUldType(?CodeListElement $uldType): static
    {
        $this->uldType = $uldType;
        return $this;
    }


    public function getSlac(): ?int
    {
        return $this->slac;
    }


    /**
     * @param int|null $slac
     * @return static
     */
    public function setSlac(?int $slac): static
    {
        $this->slac = $slac;
        return $this;
    }


    public function getUldSerialNumber(): ?string
    {
        return $this->uldSerialNumber;
    }


    /**
     * @param string|null $uldSerialNumber
     * @return static
     */
    public function setUldSerialNumber(?string $uldSerialNumber): static
    {
        $this->uldSerialNumber = $uldSerialNumber;
        return $this;
    }
}
