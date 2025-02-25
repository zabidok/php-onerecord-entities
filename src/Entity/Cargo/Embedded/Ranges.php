<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\RateClassCode;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Ranges details
 *
 * @link https://onerecord.iata.org/ns/cargo#Ranges Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Ranges
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Rate class code e.g. Q. Refer to CXML Code List 1.4 Rate Class Codes
     *
     * @link https://onerecord.iata.org/ns/cargo#rateClassCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: RateClassCode::class)]
    protected ?RateClassCode $rateClassCode = null;

    /**
     * ULD Rate information - ULD Rate Class Type
     *
     * @link https://onerecord.iata.org/ns/cargo#uldRateClassType Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $uldRateClassType = null;

    /**
     * Maximum quantity
     *
     * @link https://onerecord.iata.org/ns/cargo#maximumQuantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $maximumQuantity = null;

    /**
     * Minimum quantity
     *
     * @link https://onerecord.iata.org/ns/cargo#minimumQuantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $minimumQuantity = null;

    /**
     * Specific commodity code linked to commodity
     *
     * @link https://onerecord.iata.org/ns/cargo#unitBasis Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $unitBasis = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
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
     * @return RateClassCode|null
     */
    public function getRateClassCode(): ?RateClassCode
    {
        return $this->rateClassCode;
    }


    /**
     * @param RateClassCode|null $rateClassCode
     * @return static
     */
    public function setRateClassCode(?RateClassCode $rateClassCode): static
    {
        $this->rateClassCode = $rateClassCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getUldRateClassType(): ?CodeListElement
    {
        return $this->uldRateClassType;
    }


    /**
     * @param CodeListElement|null $uldRateClassType
     * @return static
     */
    public function setUldRateClassType(?CodeListElement $uldRateClassType): static
    {
        $this->uldRateClassType = $uldRateClassType;
        return $this;
    }


    public function getMaximumQuantity(): ?float
    {
        return $this->maximumQuantity;
    }


    /**
     * @param float|null $maximumQuantity
     * @return static
     */
    public function setMaximumQuantity(?float $maximumQuantity): static
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }


    public function getMinimumQuantity(): ?float
    {
        return $this->minimumQuantity;
    }


    /**
     * @param float|null $minimumQuantity
     * @return static
     */
    public function setMinimumQuantity(?float $minimumQuantity): static
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }


    public function getUnitBasis(): ?string
    {
        return $this->unitBasis;
    }


    /**
     * @param string|null $unitBasis
     * @return static
     */
    public function setUnitBasis(?string $unitBasis): static
    {
        $this->unitBasis = $unitBasis;
        return $this;
    }
}
