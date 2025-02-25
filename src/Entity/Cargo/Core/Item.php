<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CurrencyValue;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Dimensions;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherIdentifier;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Item details
 *
 * @link https://onerecord.iata.org/ns/cargo#Item Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Item extends PhysicalLogisticsObject
{
    /**
     * Dimensions details
     *
     * @link https://onerecord.iata.org/ns/cargo#dimensions Ontology
     */
    #[ORM\ManyToOne(targetEntity: Dimensions::class)]
    protected ?Dimensions $dimensions = null;

    /**
     * Reference to the Piece this Item or Piece is contained in
     *
     * @link https://onerecord.iata.org/ns/cargo#inPiece Ontology
     */
    #[ORM\ManyToOne(targetEntity: Piece::class)]
    protected ?Piece $inPiece = null;

    /**
     * Quantity of the item when applicable, with associated units of measure
     *
     * @link https://onerecord.iata.org/ns/cargo#itemQuantity Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $itemQuantity = null;

    /**
     * Reference to the Product describing the Item
     *
     * @link https://onerecord.iata.org/ns/cargo#ofProduct Ontology
     */
    #[ORM\ManyToOne(targetEntity: Product::class)]
    protected ?Product $ofProduct = null;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'item_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'item_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Production country details. Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#productionCountry Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $productionCountry = null;

    /**
     * Item target country. Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#targetCountry Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $targetCountry = null;

    /**
     * Product price per unit in the base
     *
     * @link https://onerecord.iata.org/ns/cargo#unitPrice Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $unitPrice = null;

    /**
     * Weight of the item
     *
     * @link https://onerecord.iata.org/ns/cargo#weight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $weight = null;

    /**
     * Production batch number / reference
     *
     * @link https://onerecord.iata.org/ns/cargo#batchNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $batchNumber = null;

    /**
     * Product expiry date - e.g. for perishables goods or goods with programmed obsolescence
     *
     * @link https://onerecord.iata.org/ns/cargo#expiryDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $expiryDate = null;

    /**
     * Production lot number / reference
     *
     * @link https://onerecord.iata.org/ns/cargo#lotNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $lotNumber = null;

    /**
     * Production date
     *
     * @link https://onerecord.iata.org/ns/cargo#productionDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $productionDate = null;

    /**
     * Product quantity for unit price - e.g. 12 (eggs for one USD 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#quantityForUnitPrice Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $quantityForUnitPrice = null;


    public function __construct()
    {
        parent::__construct();
        $this->otherIdentifiers = new ArrayCollection();
    }


    /**
     * @return Dimensions|null
     */
    public function getDimensions(): ?Dimensions
    {
        return $this->dimensions;
    }


    /**
     * @param Dimensions|null $dimensions
     * @return static
     */
    public function setDimensions(?Dimensions $dimensions): static
    {
        $this->dimensions = $dimensions;
        return $this;
    }


    /**
     * @return Piece|null
     */
    public function getInPiece(): ?Piece
    {
        return $this->inPiece;
    }


    /**
     * @param Piece|null $inPiece
     * @return static
     */
    public function setInPiece(?Piece $inPiece): static
    {
        $this->inPiece = $inPiece;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getItemQuantity(): ?Value
    {
        return $this->itemQuantity;
    }


    /**
     * @param Value|null $itemQuantity
     * @return static
     */
    public function setItemQuantity(?Value $itemQuantity): static
    {
        $this->itemQuantity = $itemQuantity;
        return $this;
    }


    /**
     * @return Product|null
     */
    public function getOfProduct(): ?Product
    {
        return $this->ofProduct;
    }


    /**
     * @param Product|null $ofProduct
     * @return static
     */
    public function setOfProduct(?Product $ofProduct): static
    {
        $this->ofProduct = $ofProduct;
        return $this;
    }


    /**
     * @return Collection <int, OtherIdentifier>
     */
    public function getOtherIdentifiers(): Collection
    {
        return $this->otherIdentifiers;
    }


    /**
     * @param OtherIdentifier $otherIdentifier
     * @return static
     */
    public function addOtherIdentifiers(OtherIdentifier $otherIdentifier): static
    {
        if (!$this->otherIdentifiers->contains($otherIdentifier)) {
            $this->otherIdentifiers->add($otherIdentifier);
        }
        return $this;
    }


    /**
     * @param OtherIdentifier $otherIdentifier
     * @return static
     */
    public function removeOtherIdentifiers(OtherIdentifier $otherIdentifier): static
    {
        $this->otherIdentifiers->removeElement($otherIdentifier);
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getProductionCountry(): ?CodeListElement
    {
        return $this->productionCountry;
    }


    /**
     * @param CodeListElement|null $productionCountry
     * @return static
     */
    public function setProductionCountry(?CodeListElement $productionCountry): static
    {
        $this->productionCountry = $productionCountry;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getTargetCountry(): ?CodeListElement
    {
        return $this->targetCountry;
    }


    /**
     * @param CodeListElement|null $targetCountry
     * @return static
     */
    public function setTargetCountry(?CodeListElement $targetCountry): static
    {
        $this->targetCountry = $targetCountry;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getUnitPrice(): ?CurrencyValue
    {
        return $this->unitPrice;
    }


    /**
     * @param CurrencyValue|null $unitPrice
     * @return static
     */
    public function setUnitPrice(?CurrencyValue $unitPrice): static
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getWeight(): ?Value
    {
        return $this->weight;
    }


    /**
     * @param Value|null $weight
     * @return static
     */
    public function setWeight(?Value $weight): static
    {
        $this->weight = $weight;
        return $this;
    }


    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }


    /**
     * @param string|null $batchNumber
     * @return static
     */
    public function setBatchNumber(?string $batchNumber): static
    {
        $this->batchNumber = $batchNumber;
        return $this;
    }


    public function getExpiryDate(): ?\DateTime
    {
        return $this->expiryDate;
    }


    /**
     * @param \DateTime|null $expiryDate
     * @return static
     */
    public function setExpiryDate(?\DateTime $expiryDate): static
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }


    public function getLotNumber(): ?string
    {
        return $this->lotNumber;
    }


    /**
     * @param string|null $lotNumber
     * @return static
     */
    public function setLotNumber(?string $lotNumber): static
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }


    public function getProductionDate(): ?\DateTime
    {
        return $this->productionDate;
    }


    /**
     * @param \DateTime|null $productionDate
     * @return static
     */
    public function setProductionDate(?\DateTime $productionDate): static
    {
        $this->productionDate = $productionDate;
        return $this;
    }


    public function getQuantityForUnitPrice(): ?float
    {
        return $this->quantityForUnitPrice;
    }


    /**
     * @param float|null $quantityForUnitPrice
     * @return static
     */
    public function setQuantityForUnitPrice(?float $quantityForUnitPrice): static
    {
        $this->quantityForUnitPrice = $quantityForUnitPrice;
        return $this;
    }
}
