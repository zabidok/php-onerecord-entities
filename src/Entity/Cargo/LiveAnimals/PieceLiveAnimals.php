<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\LiveAnimals;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Piece;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\GoodsTypeCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\GoodsTypeExtensionCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * LiveAnimals subclass of Piece
 *
 * @link https://onerecord.iata.org/ns/cargo#PieceLiveAnimals Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class PieceLiveAnimals extends Piece
{
    /**
     * Reference to the permits associated with the Live Animals
     *
     * @link https://onerecord.iata.org/ns/cargo#associatedEpermit Ontology
     */
    #[ORM\OneToOne(targetEntity: EpermitConsignment::class)]
    protected ?EpermitConsignment $associatedEpermit = null;

    /**
     * Country of last re-export (box 12a). Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#exportTradeCountry Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $exportTradeCountry = null;

    /**
     * Appendix number of the convention (I, II or III) (box 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#goodsTypeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: GoodsTypeCode::class)]
    protected ?GoodsTypeCode $goodsTypeCode = null;

    /**
     * Appendix number of the convention (I, II or III) (box 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#goodsTypeExtensionCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: GoodsTypeExtensionCode::class)]
    protected ?GoodsTypeExtensionCode $goodsTypeExtensionCode = null;

    /**
     * Document type code of origin reference permit or re-export reference Certificate (box 12/12a)
     *
     * @link https://onerecord.iata.org/ns/cargo#originReferencePermitTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $originReferencePermitTypeCode = null;

    /**
     * country of origin (box 12). Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#originTradeCountry Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $originTradeCountry = null;

    /**
     * Description of specimens, CITES type code (box 9)
     *
     * @link https://onerecord.iata.org/ns/cargo#specimenTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $specimenTypeCode = null;

    /**
     * Defined in Resolution Conf. 13.6 and is required for pre-Convention specimens (box 12b)
     *
     * @link https://onerecord.iata.org/ns/cargo#acquisitionDateTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $acquisitionDateTime = null;

    /**
     * total number of specimens exported in the current calendar year and the current annual quota for the species concerned (box 11a)
     *
     * @link https://onerecord.iata.org/ns/cargo#annualQuotaQuantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $annualQuotaQuantity = null;

    /**
     * Operations code ID. Refers to the number of the registered captive-breeding or artificial propagation operation (box 12b)
     *
     * @link https://onerecord.iata.org/ns/cargo#categoryCode Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $categoryCode = [];

    /**
     * Issuing date for Origin reference permit or re-export reference Certificate (box 12)
     *
     * @link https://onerecord.iata.org/ns/cargo#originReferencePermitDateTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $originReferencePermitDateTime = null;

    /**
     * identifier of Origin reference permit or re-export reference Certificate (box 12/12a)
     *
     * @link https://onerecord.iata.org/ns/cargo#originReferencePermitId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $originReferencePermitId = null;

    /**
     * Quantity including units (box 11)
     *
     * @link https://onerecord.iata.org/ns/cargo#quantityAnimals Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $quantityAnimals = null;

    /**
     * Species common name (box 8)
     *
     * @link https://onerecord.iata.org/ns/cargo#speciesCommonName Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $speciesCommonName = [];

    /**
     * Species scientific name (box 7)
     *
     * @link https://onerecord.iata.org/ns/cargo#speciesScientificName Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $speciesScientificName = [];

    /**
     * Description of specimens, including age and sex if LA (box 9)
     *
     * @link https://onerecord.iata.org/ns/cargo#specimenDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $specimenDescription = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return EpermitConsignment|null
     */
    public function getAssociatedEpermit(): ?EpermitConsignment
    {
        return $this->associatedEpermit;
    }


    /**
     * @param EpermitConsignment|null $associatedEpermit
     * @return static
     */
    public function setAssociatedEpermit(?EpermitConsignment $associatedEpermit): static
    {
        $this->associatedEpermit = $associatedEpermit;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getExportTradeCountry(): ?CodeListElement
    {
        return $this->exportTradeCountry;
    }


    /**
     * @param CodeListElement|null $exportTradeCountry
     * @return static
     */
    public function setExportTradeCountry(?CodeListElement $exportTradeCountry): static
    {
        $this->exportTradeCountry = $exportTradeCountry;
        return $this;
    }


    /**
     * @return GoodsTypeCode|null
     */
    public function getGoodsTypeCode(): ?GoodsTypeCode
    {
        return $this->goodsTypeCode;
    }


    /**
     * @param GoodsTypeCode|null $goodsTypeCode
     * @return static
     */
    public function setGoodsTypeCode(?GoodsTypeCode $goodsTypeCode): static
    {
        $this->goodsTypeCode = $goodsTypeCode;
        return $this;
    }


    /**
     * @return GoodsTypeExtensionCode|null
     */
    public function getGoodsTypeExtensionCode(): ?GoodsTypeExtensionCode
    {
        return $this->goodsTypeExtensionCode;
    }


    /**
     * @param GoodsTypeExtensionCode|null $goodsTypeExtensionCode
     * @return static
     */
    public function setGoodsTypeExtensionCode(?GoodsTypeExtensionCode $goodsTypeExtensionCode): static
    {
        $this->goodsTypeExtensionCode = $goodsTypeExtensionCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getOriginReferencePermitTypeCode(): ?CodeListElement
    {
        return $this->originReferencePermitTypeCode;
    }


    /**
     * @param CodeListElement|null $originReferencePermitTypeCode
     * @return static
     */
    public function setOriginReferencePermitTypeCode(?CodeListElement $originReferencePermitTypeCode): static
    {
        $this->originReferencePermitTypeCode = $originReferencePermitTypeCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getOriginTradeCountry(): ?CodeListElement
    {
        return $this->originTradeCountry;
    }


    /**
     * @param CodeListElement|null $originTradeCountry
     * @return static
     */
    public function setOriginTradeCountry(?CodeListElement $originTradeCountry): static
    {
        $this->originTradeCountry = $originTradeCountry;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getSpecimenTypeCode(): ?CodeListElement
    {
        return $this->specimenTypeCode;
    }


    /**
     * @param CodeListElement|null $specimenTypeCode
     * @return static
     */
    public function setSpecimenTypeCode(?CodeListElement $specimenTypeCode): static
    {
        $this->specimenTypeCode = $specimenTypeCode;
        return $this;
    }


    public function getAcquisitionDateTime(): ?\DateTime
    {
        return $this->acquisitionDateTime;
    }


    /**
     * @param \DateTime|null $acquisitionDateTime
     * @return static
     */
    public function setAcquisitionDateTime(?\DateTime $acquisitionDateTime): static
    {
        $this->acquisitionDateTime = $acquisitionDateTime;
        return $this;
    }


    public function getAnnualQuotaQuantity(): ?int
    {
        return $this->annualQuotaQuantity;
    }


    /**
     * @param int|null $annualQuotaQuantity
     * @return static
     */
    public function setAnnualQuotaQuantity(?int $annualQuotaQuantity): static
    {
        $this->annualQuotaQuantity = $annualQuotaQuantity;
        return $this;
    }


    public function getCategoryCode(): ?array
    {
        return $this->categoryCode;
    }


    /**
     * @return static
     */
    public function setCategoryCode(?array $categoryCode): static
    {
        $this->categoryCode = $categoryCode;
        return $this;
    }


    public function getOriginReferencePermitDateTime(): ?\DateTime
    {
        return $this->originReferencePermitDateTime;
    }


    /**
     * @param \DateTime|null $originReferencePermitDateTime
     * @return static
     */
    public function setOriginReferencePermitDateTime(?\DateTime $originReferencePermitDateTime): static
    {
        $this->originReferencePermitDateTime = $originReferencePermitDateTime;
        return $this;
    }


    public function getOriginReferencePermitId(): ?string
    {
        return $this->originReferencePermitId;
    }


    /**
     * @param string|null $originReferencePermitId
     * @return static
     */
    public function setOriginReferencePermitId(?string $originReferencePermitId): static
    {
        $this->originReferencePermitId = $originReferencePermitId;
        return $this;
    }


    public function getQuantityAnimals(): ?int
    {
        return $this->quantityAnimals;
    }


    /**
     * @param int|null $quantityAnimals
     * @return static
     */
    public function setQuantityAnimals(?int $quantityAnimals): static
    {
        $this->quantityAnimals = $quantityAnimals;
        return $this;
    }


    public function getSpeciesCommonName(): ?array
    {
        return $this->speciesCommonName;
    }


    /**
     * @return static
     */
    public function setSpeciesCommonName(?array $speciesCommonName): static
    {
        $this->speciesCommonName = $speciesCommonName;
        return $this;
    }


    public function getSpeciesScientificName(): ?array
    {
        return $this->speciesScientificName;
    }


    /**
     * @return static
     */
    public function setSpeciesScientificName(?array $speciesScientificName): static
    {
        $this->speciesScientificName = $speciesScientificName;
        return $this;
    }


    public function getSpecimenDescription(): ?string
    {
        return $this->specimenDescription;
    }


    /**
     * @param string|null $specimenDescription
     * @return static
     */
    public function setSpecimenDescription(?string $specimenDescription): static
    {
        $this->specimenDescription = $specimenDescription;
        return $this;
    }
}
