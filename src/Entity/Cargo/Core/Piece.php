<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Dimensions;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherIdentifier;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\TemperatureInstructions;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\VolumetricWeight;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\LoadType;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\PackageMarkCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\SpecialHandlingCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Individual piece or virtual grouping of pieces
 *
 * @link https://onerecord.iata.org/ns/cargo#Piece Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Piece extends PhysicalLogisticsObject
{
    /**
     * Reference to the item(s) contained in the piece
     *
     * @link https://onerecord.iata.org/ns/cargo#containedItems Ontology
     */
    #[ORM\OneToMany(targetEntity: Item::class, mappedBy: 'inPiece', cascade: ['persist', 'remove'])]
    protected Collection $containedItems;

    /**
     * Details of contained piece(s)
     *
     * @link https://onerecord.iata.org/ns/cargo#containedPieces Ontology
     */
    #[ORM\OneToMany(targetEntity: Piece::class, mappedBy: 'inPiece', cascade: ['persist', 'remove'])]
    protected Collection $containedPieces;

    /**
     * Goods production country, mandatory when there are no Items. Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#contentProductionCountry Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $contentProductionCountry = null;

    /**
     * Reference to the Products describing the content of the Piece, mandatory if no data on Item level is used
     *
     * @link https://onerecord.iata.org/ns/cargo#contentProducts Ontology
     */
    #[ORM\ManyToMany(targetEntity: Product::class)]
    #[ORM\JoinTable(
        name: 'piece_product',
        joinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'product_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $contentProducts;

    /**
     * Customs details
     *
     * @link https://onerecord.iata.org/ns/cargo#customsInformation Ontology
     */
    #[ORM\OneToMany(targetEntity: CustomsInformation::class, mappedBy: 'issuedForPiece', cascade: ['persist', 'remove'])]
    protected Collection $customsInformation;

    /**
     * Dimensions details
     *
     * @link https://onerecord.iata.org/ns/cargo#dimensions Ontology
     */
    #[ORM\ManyToOne(targetEntity: Dimensions::class)]
    protected ?Dimensions $dimensions = null;

    /**
     * Text holding an ULD Type Code if the Piece fulfills it before UnitComposition
     *
     * @link https://onerecord.iata.org/ns/cargo#fulfillsUldTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $fulfillsUldTypeCode = null;

    /**
     * Weight details
     *
     * @link https://onerecord.iata.org/ns/cargo#grossWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $grossWeight = null;

    /**
     * Reference to the Piece this Item or Piece is contained in
     *
     * @link https://onerecord.iata.org/ns/cargo#inPiece Ontology
     */
    #[ORM\OneToOne(targetEntity: Piece::class, inversedBy: 'containedPieces')]
    protected ?Piece $inPiece = null;

    /**
     * Information about other Parties involved depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'piece_party',
        joinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedParties;

    /**
     * Load type of the shipment or piece (Bulk, ULD, Pallet, Loose)
     *
     * @link https://onerecord.iata.org/ns/cargo#loadType Ontology
     */
    #[ORM\ManyToOne(targetEntity: LoadType::class)]
    protected ?LoadType $loadType = null;

    /**
     * Reference to the Shipment the Piece is assigned to
     *
     * @link https://onerecord.iata.org/ns/cargo#ofShipment Ontology
     */
    #[ORM\ManyToMany(targetEntity: Shipment::class)]
    #[ORM\JoinTable(
        name: 'piece_shipment',
        joinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'shipment_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $ofShipment;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'piece_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Reference identifying how the package is marked. Field is hardcode to "SSCC-18", "UPC" or "Other"
     *
     * @link https://onerecord.iata.org/ns/cargo#packageMarkCoded Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: PackageMarkCode::class)]
    protected ?PackageMarkCode $packageMarkCoded = null;

    /**
     * Packaging details
     *
     * @link https://onerecord.iata.org/ns/cargo#packagingType Ontology
     */
    #[ORM\ManyToOne(targetEntity: PackagingType::class, inversedBy: 'appliedOnPieces')]
    protected ?PackagingType $packagingType = null;

    /**
     * Security details of the piece
     *
     * @link https://onerecord.iata.org/ns/cargo#securityDeclarations Ontology
     */
    #[ORM\ManyToMany(targetEntity: SecurityDeclaration::class)]
    #[ORM\JoinTable(
        name: 'piece_securitydeclaration',
        joinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [
        new ORM\JoinColumn(name: 'securitydeclaration_id', referencedColumnName: 'id', onDelete: 'CASCADE'),
    ],
    )]
    protected Collection $securityDeclarations;

    /**
     * Three-letter special handling code (SPH)
     *
     * @link https://onerecord.iata.org/ns/cargo#specialHandlingCodes Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected array $specialHandlingCodes = [];

    /**
     * Temperature instructions if a specific range
     *
     * @link https://onerecord.iata.org/ns/cargo#temperatureInstructions Ontology
     */
    #[ORM\ManyToOne(targetEntity: TemperatureInstructions::class)]
    protected ?TemperatureInstructions $temperatureInstructions = null;

    /**
     * Volumetric weight details
     *
     * @link https://onerecord.iata.org/ns/cargo#volumetricWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: VolumetricWeight::class)]
    protected ?VolumetricWeight $volumetricWeight = null;

    /**
     * Coload indicator for the pieces (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#coload Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $coload = null;

    /**
     * Description of goods, for the BookingShipment the commodity list defined by Modernizing Cargo Distribution MCD working group can be used as a referential.
     *
     * @link https://onerecord.iata.org/ns/cargo#goodsDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $goodsDescription = null;

    /**
     * When no value is declared for Carriage, this field may be completed with the value TRUE otherwise FALSE
     *
     * @link https://onerecord.iata.org/ns/cargo#nvdForCarriage Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $nvdForCarriage = null;

    /**
     * When no value is declared for Customs, this field may be completed with the value TRUE otherwise FALSE
     *
     * @link https://onerecord.iata.org/ns/cargo#nvdForCustoms Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $nvdForCustoms = null;

    /**
     * SSCC-18 code for the value of the package mark, company or bar code, free text, pallet code, etc.
     *
     * @link https://onerecord.iata.org/ns/cargo#packagedeIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $packagedeIdentifier = null;

    /**
     * Shipping marks
     *
     * @link https://onerecord.iata.org/ns/cargo#shippingMarks Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $shippingMarks = [];

    /**
     * Shipper's Load And Count  ( total contained piece count as provided by shipper)
     *
     * @link https://onerecord.iata.org/ns/cargo#slac Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $slac = null;

    /**
     * Stackable indicator for the pieces (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#stackable Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $stackable = null;

    /**
     * Strings to provide free text handling instructions such as SSR and OSI
     *
     * @link https://onerecord.iata.org/ns/cargo#textualHandlingInstructions Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $textualHandlingInstructions = [];

    /**
     * Turnable indicator for the pieces (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#turnable Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $turnable = null;

    /**
     * Unique Piece Identifier (UPID) of the piece. Refer IATA Recommended Practice 1689
     *
     * @link https://onerecord.iata.org/ns/cargo#upid Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $upid = null;


    public function __construct()
    {
        parent::__construct();
        $this->containedItems = new ArrayCollection();
        $this->containedPieces = new ArrayCollection();
        $this->contentProducts = new ArrayCollection();
        $this->customsInformation = new ArrayCollection();
        $this->involvedParties = new ArrayCollection();
        $this->ofShipment = new ArrayCollection();
        $this->otherIdentifiers = new ArrayCollection();
        $this->securityDeclarations = new ArrayCollection();
        $this->specialHandlingCodes = [];
    }


    /**
     * @return Collection <int, Item>
     */
    public function getContainedItems(): Collection
    {
        return $this->containedItems;
    }


    /**
     * @param Item $item
     * @return static
     */
    public function addContainedItems(Item $item): static
    {
        if (!$this->containedItems->contains($item)) {
            $this->containedItems->add($item);
            $item->setInPiece($this);
        }
        return $this;
    }


    /**
     * @param Item $item
     * @return static
     */
    public function removeContainedItems(Item $item): static
    {
        if ($this->containedItems->removeElement($item)) {
            if ($item->getInPiece() === $this ) {
                $item->setInPiece(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection <int, Piece>
     */
    public function getContainedPieces(): Collection
    {
        return $this->containedPieces;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function addContainedPieces(Piece $piece): static
    {
        if (!$this->containedPieces->contains($piece)) {
            $this->containedPieces->add($piece);
            $piece->setInPiece($this);
        }
        return $this;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function removeContainedPieces(Piece $piece): static
    {
        if ($this->containedPieces->removeElement($piece)) {
            if ($piece->getInPiece() === $this ) {
                $piece->setInPiece(null);
            }
        }
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getContentProductionCountry(): ?CodeListElement
    {
        return $this->contentProductionCountry;
    }


    /**
     * @param CodeListElement|null $contentProductionCountry
     * @return static
     */
    public function setContentProductionCountry(?CodeListElement $contentProductionCountry): static
    {
        $this->contentProductionCountry = $contentProductionCountry;
        return $this;
    }


    /**
     * @return Collection <int, Product>
     */
    public function getContentProducts(): Collection
    {
        return $this->contentProducts;
    }


    /**
     * @param Product $product
     * @return static
     */
    public function addContentProducts(Product $product): static
    {
        if (!$this->contentProducts->contains($product)) {
            $this->contentProducts->add($product);
        }
        return $this;
    }


    /**
     * @param Product $product
     * @return static
     */
    public function removeContentProducts(Product $product): static
    {
        $this->contentProducts->removeElement($product);
        return $this;
    }


    /**
     * @return Collection <int, CustomsInformation>
     */
    public function getCustomsInformation(): Collection
    {
        return $this->customsInformation;
    }


    /**
     * @param CustomsInformation $customsInformation
     * @return static
     */
    public function addCustomsInformation(CustomsInformation $customsInformation): static
    {
        if (!$this->customsInformation->contains($customsInformation)) {
            $this->customsInformation->add($customsInformation);
            $customsInformation->setIssuedForPiece($this);
        }
        return $this;
    }


    /**
     * @param CustomsInformation $customsInformation
     * @return static
     */
    public function removeCustomsInformation(CustomsInformation $customsInformation): static
    {
        if ($this->customsInformation->removeElement($customsInformation)) {
            if ($customsInformation->getIssuedForPiece() === $this ) {
                $customsInformation->setIssuedForPiece(null);
            }
        }
        return $this;
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
     * @return CodeListElement|null
     */
    public function getFulfillsUldTypeCode(): ?CodeListElement
    {
        return $this->fulfillsUldTypeCode;
    }


    /**
     * @param CodeListElement|null $fulfillsUldTypeCode
     * @return static
     */
    public function setFulfillsUldTypeCode(?CodeListElement $fulfillsUldTypeCode): static
    {
        $this->fulfillsUldTypeCode = $fulfillsUldTypeCode;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getGrossWeight(): ?Value
    {
        return $this->grossWeight;
    }


    /**
     * @param Value|null $grossWeight
     * @return static
     */
    public function setGrossWeight(?Value $grossWeight): static
    {
        $this->grossWeight = $grossWeight;
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
     * @return Collection <int, Party>
     */
    public function getInvolvedParties(): Collection
    {
        return $this->involvedParties;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function addInvolvedParties(Party $party): static
    {
        if (!$this->involvedParties->contains($party)) {
            $this->involvedParties->add($party);
        }
        return $this;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function removeInvolvedParties(Party $party): static
    {
        $this->involvedParties->removeElement($party);
        return $this;
    }


    /**
     * @return LoadType|null
     */
    public function getLoadType(): ?LoadType
    {
        return $this->loadType;
    }


    /**
     * @param LoadType|null $loadType
     * @return static
     */
    public function setLoadType(?LoadType $loadType): static
    {
        $this->loadType = $loadType;
        return $this;
    }


    /**
     * @return Collection <int, Shipment>
     */
    public function getOfShipment(): Collection
    {
        return $this->ofShipment;
    }


    /**
     * @param Shipment $shipment
     * @return static
     */
    public function addOfShipment(Shipment $shipment): static
    {
        if (!$this->ofShipment->contains($shipment)) {
            $this->ofShipment->add($shipment);
        }
        return $this;
    }


    /**
     * @param Shipment $shipment
     * @return static
     */
    public function removeOfShipment(Shipment $shipment): static
    {
        $this->ofShipment->removeElement($shipment);
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
     * @return PackageMarkCode|null
     */
    public function getPackageMarkCoded(): ?PackageMarkCode
    {
        return $this->packageMarkCoded;
    }


    /**
     * @param PackageMarkCode|null $packageMarkCoded
     * @return static
     */
    public function setPackageMarkCoded(?PackageMarkCode $packageMarkCoded): static
    {
        $this->packageMarkCoded = $packageMarkCoded;
        return $this;
    }


    /**
     * @return PackagingType|null
     */
    public function getPackagingType(): ?PackagingType
    {
        return $this->packagingType;
    }


    /**
     * @param PackagingType|null $packagingType
     * @return static
     */
    public function setPackagingType(?PackagingType $packagingType): static
    {
        $this->packagingType = $packagingType;
        return $this;
    }


    /**
     * @return Collection <int, SecurityDeclaration>
     */
    public function getSecurityDeclarations(): Collection
    {
        return $this->securityDeclarations;
    }


    /**
     * @param SecurityDeclaration $securityDeclaration
     * @return static
     */
    public function addSecurityDeclarations(SecurityDeclaration $securityDeclaration): static
    {
        if (!$this->securityDeclarations->contains($securityDeclaration)) {
            $this->securityDeclarations->add($securityDeclaration);
        }
        return $this;
    }


    /**
     * @param SecurityDeclaration $securityDeclaration
     * @return static
     */
    public function removeSecurityDeclarations(SecurityDeclaration $securityDeclaration): static
    {
        $this->securityDeclarations->removeElement($securityDeclaration);
        return $this;
    }


    /**
     * @return SpecialHandlingCode[]|null
     */
    public function getSpecialHandlingCodes(): ?array
    {
        return array_map(fn($value) => SpecialHandlingCode::tryFrom($value), $this->specialHandlingCodes);
    }


    /**
     * @param SpecialHandlingCode[] $specialHandlingCodes
     */
    public function setSpecialHandlingCodes(array $specialHandlingCodes): static
    {
        $this->specialHandlingCodes = array_map(fn(SpecialHandlingCode $code) => $code->value, $specialHandlingCodes);
        return $this;
    }


    /**
     * @param SpecialHandlingCode $specialHandlingCode
     * @return static
     */
    public function addSpecialHandlingCode(SpecialHandlingCode $specialHandlingCode): static
    {
        if (!in_array($specialHandlingCode->value, $this->specialHandlingCodes, true)) {
            $this->specialHandlingCodes[] = $specialHandlingCode->value;
        }
        return $this;
    }


    /**
     * @param SpecialHandlingCode $specialHandlingCode
     * @return static
     */
    public function removeSpecialHandlingCodes(SpecialHandlingCode $specialHandlingCode): static
    {
        $this->specialHandlingCodes = array_filter(
            $this->specialHandlingCodes,
            fn($value) => $value !== $specialHandlingCode->value
        );
        return $this;
    }


    /**
     * @return TemperatureInstructions|null
     */
    public function getTemperatureInstructions(): ?TemperatureInstructions
    {
        return $this->temperatureInstructions;
    }


    /**
     * @param TemperatureInstructions|null $temperatureInstructions
     * @return static
     */
    public function setTemperatureInstructions(?TemperatureInstructions $temperatureInstructions): static
    {
        $this->temperatureInstructions = $temperatureInstructions;
        return $this;
    }


    /**
     * @return VolumetricWeight|null
     */
    public function getVolumetricWeight(): ?VolumetricWeight
    {
        return $this->volumetricWeight;
    }


    /**
     * @param VolumetricWeight|null $volumetricWeight
     * @return static
     */
    public function setVolumetricWeight(?VolumetricWeight $volumetricWeight): static
    {
        $this->volumetricWeight = $volumetricWeight;
        return $this;
    }


    public function getCoload(): ?bool
    {
        return $this->coload;
    }


    /**
     * @param bool|null $coload
     * @return static
     */
    public function setCoload(?bool $coload): static
    {
        $this->coload = $coload;
        return $this;
    }


    public function getGoodsDescription(): ?string
    {
        return $this->goodsDescription;
    }


    /**
     * @param string|null $goodsDescription
     * @return static
     */
    public function setGoodsDescription(?string $goodsDescription): static
    {
        $this->goodsDescription = $goodsDescription;
        return $this;
    }


    public function getNvdForCarriage(): ?bool
    {
        return $this->nvdForCarriage;
    }


    /**
     * @param bool|null $nvdForCarriage
     * @return static
     */
    public function setNvdForCarriage(?bool $nvdForCarriage): static
    {
        $this->nvdForCarriage = $nvdForCarriage;
        return $this;
    }


    public function getNvdForCustoms(): ?bool
    {
        return $this->nvdForCustoms;
    }


    /**
     * @param bool|null $nvdForCustoms
     * @return static
     */
    public function setNvdForCustoms(?bool $nvdForCustoms): static
    {
        $this->nvdForCustoms = $nvdForCustoms;
        return $this;
    }


    public function getPackagedeIdentifier(): ?string
    {
        return $this->packagedeIdentifier;
    }


    /**
     * @param string|null $packagedeIdentifier
     * @return static
     */
    public function setPackagedeIdentifier(?string $packagedeIdentifier): static
    {
        $this->packagedeIdentifier = $packagedeIdentifier;
        return $this;
    }


    public function getShippingMarks(): ?array
    {
        return $this->shippingMarks;
    }


    /**
     * @return static
     */
    public function setShippingMarks(?array $shippingMarks): static
    {
        $this->shippingMarks = $shippingMarks;
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


    public function getStackable(): ?bool
    {
        return $this->stackable;
    }


    /**
     * @param bool|null $stackable
     * @return static
     */
    public function setStackable(?bool $stackable): static
    {
        $this->stackable = $stackable;
        return $this;
    }


    public function getTextualHandlingInstructions(): ?array
    {
        return $this->textualHandlingInstructions;
    }


    /**
     * @return static
     */
    public function setTextualHandlingInstructions(?array $textualHandlingInstructions): static
    {
        $this->textualHandlingInstructions = $textualHandlingInstructions;
        return $this;
    }


    public function getTurnable(): ?bool
    {
        return $this->turnable;
    }


    /**
     * @param bool|null $turnable
     * @return static
     */
    public function setTurnable(?bool $turnable): static
    {
        $this->turnable = $turnable;
        return $this;
    }


    public function getUpid(): ?string
    {
        return $this->upid;
    }


    /**
     * @param string|null $upid
     * @return static
     */
    public function setUpid(?string $upid): static
    {
        $this->upid = $upid;
        return $this;
    }
}
