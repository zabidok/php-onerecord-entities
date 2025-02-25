<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\LoadingUnit;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\DemurrageCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ULDConditionCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ULDLoadingIndicator;
use Doctrine\ORM\Mapping as ORM;

/**
 * Unit Load Device details
 *
 * @link https://onerecord.iata.org/ns/cargo#ULD Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ULD extends LoadingUnit
{
    /**
     * Contains three designator of demurrage code, refer to RP 1654 (BCC, HHH, XXX, ZZZ)
     *
     * @link https://onerecord.iata.org/ns/cargo#demurrageCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: DemurrageCode::class)]
    protected ?DemurrageCode $demurrageCode = null;

    /**
     * ULD height or loading limitation code. Refer CXML Code List 1.47,  e.g. R - ULD Height above 244 centimetres
     *
     * @link https://onerecord.iata.org/ns/cargo#loadingIndicator Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ULDLoadingIndicator::class)]
    protected ?ULDLoadingIndicator $loadingIndicator = null;

    /**
     * Contains two designator codes of ODLN or Operational Damage Limit Notices. ODLN code is used to define type of damage after visually check the serviceability of ULDs section 7, Standard Specifications 4/3 or 4/4 in ULD Regulations
     *
     * @link https://onerecord.iata.org/ns/cargo#odlnCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $odlnCode = null;

    /**
     * Owner code of the ULD in aa, an or na format - owner can be an airline or leasing company
     *
     * @link https://onerecord.iata.org/ns/cargo#ownerCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $ownerCode = null;

    /**
     * Designator of serviceability condition e.g. SER or DAM
     *
     * @link https://onerecord.iata.org/ns/cargo#serviceabilityCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ULDConditionCode::class)]
    protected ?ULDConditionCode $serviceabilityCode = null;

    /**
     * Standard Unit Load Device type code e.g. AKE - Certified Container - Contoured. Refer to IATA ULD Technical Manual
     *
     * @link https://onerecord.iata.org/ns/cargo#uldTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $uldTypeCode = null;

    /**
     * US / ATA Unit Load Device type code e.g. M2
     *
     * @link https://onerecord.iata.org/ns/cargo#ataDesignator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $ataDesignator = null;

    /**
     * Indicates if the ULD is Damaged
     *
     * @link https://onerecord.iata.org/ns/cargo#damageFlag Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $damageFlag = null;

    /**
     * Number of doors
     *
     * @link https://onerecord.iata.org/ns/cargo#numberOfDoors Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $numberOfDoors = null;

    /**
     * Number of fittings
     *
     * @link https://onerecord.iata.org/ns/cargo#numberOfFittings Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $numberOfFittings = null;

    /**
     * Number of nets
     *
     * @link https://onerecord.iata.org/ns/cargo#numberOfNets Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $numberOfNets = null;

    /**
     * Number of straps
     *
     * @link https://onerecord.iata.org/ns/cargo#numberOfStraps Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $numberOfStraps = null;

    /**
     * ULD seal number if applicable
     *
     * @link https://onerecord.iata.org/ns/cargo#sealNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $sealNumber = null;

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
     * @return DemurrageCode|null
     */
    public function getDemurrageCode(): ?DemurrageCode
    {
        return $this->demurrageCode;
    }


    /**
     * @param DemurrageCode|null $demurrageCode
     * @return static
     */
    public function setDemurrageCode(?DemurrageCode $demurrageCode): static
    {
        $this->demurrageCode = $demurrageCode;
        return $this;
    }


    /**
     * @return ULDLoadingIndicator|null
     */
    public function getLoadingIndicator(): ?ULDLoadingIndicator
    {
        return $this->loadingIndicator;
    }


    /**
     * @param ULDLoadingIndicator|null $loadingIndicator
     * @return static
     */
    public function setLoadingIndicator(?ULDLoadingIndicator $loadingIndicator): static
    {
        $this->loadingIndicator = $loadingIndicator;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getOdlnCode(): ?CodeListElement
    {
        return $this->odlnCode;
    }


    /**
     * @param CodeListElement|null $odlnCode
     * @return static
     */
    public function setOdlnCode(?CodeListElement $odlnCode): static
    {
        $this->odlnCode = $odlnCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getOwnerCode(): ?CodeListElement
    {
        return $this->ownerCode;
    }


    /**
     * @param CodeListElement|null $ownerCode
     * @return static
     */
    public function setOwnerCode(?CodeListElement $ownerCode): static
    {
        $this->ownerCode = $ownerCode;
        return $this;
    }


    /**
     * @return ULDConditionCode|null
     */
    public function getServiceabilityCode(): ?ULDConditionCode
    {
        return $this->serviceabilityCode;
    }


    /**
     * @param ULDConditionCode|null $serviceabilityCode
     * @return static
     */
    public function setServiceabilityCode(?ULDConditionCode $serviceabilityCode): static
    {
        $this->serviceabilityCode = $serviceabilityCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getUldTypeCode(): ?CodeListElement
    {
        return $this->uldTypeCode;
    }


    /**
     * @param CodeListElement|null $uldTypeCode
     * @return static
     */
    public function setUldTypeCode(?CodeListElement $uldTypeCode): static
    {
        $this->uldTypeCode = $uldTypeCode;
        return $this;
    }


    public function getAtaDesignator(): ?string
    {
        return $this->ataDesignator;
    }


    /**
     * @param string|null $ataDesignator
     * @return static
     */
    public function setAtaDesignator(?string $ataDesignator): static
    {
        $this->ataDesignator = $ataDesignator;
        return $this;
    }


    public function getDamageFlag(): ?bool
    {
        return $this->damageFlag;
    }


    /**
     * @param bool|null $damageFlag
     * @return static
     */
    public function setDamageFlag(?bool $damageFlag): static
    {
        $this->damageFlag = $damageFlag;
        return $this;
    }


    public function getNumberOfDoors(): ?int
    {
        return $this->numberOfDoors;
    }


    /**
     * @param int|null $numberOfDoors
     * @return static
     */
    public function setNumberOfDoors(?int $numberOfDoors): static
    {
        $this->numberOfDoors = $numberOfDoors;
        return $this;
    }


    public function getNumberOfFittings(): ?int
    {
        return $this->numberOfFittings;
    }


    /**
     * @param int|null $numberOfFittings
     * @return static
     */
    public function setNumberOfFittings(?int $numberOfFittings): static
    {
        $this->numberOfFittings = $numberOfFittings;
        return $this;
    }


    public function getNumberOfNets(): ?int
    {
        return $this->numberOfNets;
    }


    /**
     * @param int|null $numberOfNets
     * @return static
     */
    public function setNumberOfNets(?int $numberOfNets): static
    {
        $this->numberOfNets = $numberOfNets;
        return $this;
    }


    public function getNumberOfStraps(): ?int
    {
        return $this->numberOfStraps;
    }


    /**
     * @param int|null $numberOfStraps
     * @return static
     */
    public function setNumberOfStraps(?int $numberOfStraps): static
    {
        $this->numberOfStraps = $numberOfStraps;
        return $this;
    }


    public function getSealNumber(): ?string
    {
        return $this->sealNumber;
    }


    /**
     * @param string|null $sealNumber
     * @return static
     */
    public function setSealNumber(?string $sealNumber): static
    {
        $this->sealNumber = $sealNumber;
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
