<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Characteristic;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherIdentifier;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product details
 *
 * @link https://onerecord.iata.org/ns/cargo#Product Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Product extends LogisticsObject
{
    /**
     * Reference to the Items or Pieces in which the product can be found.
     *
     * @link https://onerecord.iata.org/ns/cargo#describedObjects Ontology
     */
    #[ORM\ManyToMany(targetEntity: PhysicalLogisticsObject::class)]
    #[ORM\JoinTable(
        name: 'product_physicallogisticsobject',
        joinColumns: [new ORM\JoinColumn(name: 'product_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [
        new ORM\JoinColumn(name: 'physicallogisticsobject_id', referencedColumnName: 'id', onDelete: 'CASCADE'),
    ],
    )]
    protected Collection $describedObjects;

    /**
     * Harmonized Commodity code, refer to hsType used. 6 minimum digits are expected.
     *
     * @link https://onerecord.iata.org/ns/cargo#hsCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $hsCode = null;

    /**
     * Manufacturing company details and contacts
     *
     * @link https://onerecord.iata.org/ns/cargo#manufacturer Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $manufacturer = null;

    /**
     * Characteristics of the product
     *
     * @link https://onerecord.iata.org/ns/cargo#otherCharacteristics Ontology
     */
    #[ORM\ManyToMany(targetEntity: Characteristic::class)]
    #[ORM\JoinTable(
        name: 'product_characteristic',
        joinColumns: [new ORM\JoinColumn(name: 'product_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'characteristic_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherCharacteristics;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'product_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'product_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Indicates the specific commodity on which the rate class code is applied
     *
     * @link https://onerecord.iata.org/ns/cargo#commodityItemNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $commodityItemNumber = null;

    /**
     * Natural language description if required
     *
     * @link https://onerecord.iata.org/ns/cargo#description Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $description = null;

    /**
     * Commodity description
     *
     * @link https://onerecord.iata.org/ns/cargo#hsCommodityDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $hsCommodityDescription = null;

    /**
     * If no Code provided, name of commodity
     *
     * @link https://onerecord.iata.org/ns/cargo#hsCommodityName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $hsCommodityName = null;

    /**
     * Reference identifying the type of standard code to be used for the Commodity Classification (Brussels Tariff Nomenclature, EU Harmonized System Code, UN Standard International Trade Classification). Mandatory if the commodity code is more than 6 digits
     *
     * @link https://onerecord.iata.org/ns/cargo#hsType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $hsType = null;

    /**
     * Manufacturer's unique product identifier
     *
     * @link https://onerecord.iata.org/ns/cargo#uniqueIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $uniqueIdentifier = null;


    public function __construct()
    {
        parent::__construct();
        $this->describedObjects = new ArrayCollection();
        $this->otherCharacteristics = new ArrayCollection();
        $this->otherIdentifiers = new ArrayCollection();
    }


    /**
     * @return Collection <int, PhysicalLogisticsObject>
     */
    public function getDescribedObjects(): Collection
    {
        return $this->describedObjects;
    }


    /**
     * @param PhysicalLogisticsObject $physicalLogisticsObject
     * @return static
     */
    public function addDescribedObjects(PhysicalLogisticsObject $physicalLogisticsObject): static
    {
        if (!$this->describedObjects->contains($physicalLogisticsObject)) {
            $this->describedObjects->add($physicalLogisticsObject);
        }
        return $this;
    }


    /**
     * @param PhysicalLogisticsObject $physicalLogisticsObject
     * @return static
     */
    public function removeDescribedObjects(PhysicalLogisticsObject $physicalLogisticsObject): static
    {
        $this->describedObjects->removeElement($physicalLogisticsObject);
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getHsCode(): ?CodeListElement
    {
        return $this->hsCode;
    }


    /**
     * @param CodeListElement|null $hsCode
     * @return static
     */
    public function setHsCode(?CodeListElement $hsCode): static
    {
        $this->hsCode = $hsCode;
        return $this;
    }


    /**
     * @return Organization|null
     */
    public function getManufacturer(): ?Organization
    {
        return $this->manufacturer;
    }


    /**
     * @param Organization|null $manufacturer
     * @return static
     */
    public function setManufacturer(?Organization $manufacturer): static
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }


    /**
     * @return Collection <int, Characteristic>
     */
    public function getOtherCharacteristics(): Collection
    {
        return $this->otherCharacteristics;
    }


    /**
     * @param Characteristic $characteristic
     * @return static
     */
    public function addOtherCharacteristics(Characteristic $characteristic): static
    {
        if (!$this->otherCharacteristics->contains($characteristic)) {
            $this->otherCharacteristics->add($characteristic);
        }
        return $this;
    }


    /**
     * @param Characteristic $characteristic
     * @return static
     */
    public function removeOtherCharacteristics(Characteristic $characteristic): static
    {
        $this->otherCharacteristics->removeElement($characteristic);
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


    public function getCommodityItemNumber(): ?string
    {
        return $this->commodityItemNumber;
    }


    /**
     * @param string|null $commodityItemNumber
     * @return static
     */
    public function setCommodityItemNumber(?string $commodityItemNumber): static
    {
        $this->commodityItemNumber = $commodityItemNumber;
        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }


    /**
     * @param string|null $description
     * @return static
     */
    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }


    public function getHsCommodityDescription(): ?string
    {
        return $this->hsCommodityDescription;
    }


    /**
     * @param string|null $hsCommodityDescription
     * @return static
     */
    public function setHsCommodityDescription(?string $hsCommodityDescription): static
    {
        $this->hsCommodityDescription = $hsCommodityDescription;
        return $this;
    }


    public function getHsCommodityName(): ?string
    {
        return $this->hsCommodityName;
    }


    /**
     * @param string|null $hsCommodityName
     * @return static
     */
    public function setHsCommodityName(?string $hsCommodityName): static
    {
        $this->hsCommodityName = $hsCommodityName;
        return $this;
    }


    public function getHsType(): ?string
    {
        return $this->hsType;
    }


    /**
     * @param string|null $hsType
     * @return static
     */
    public function setHsType(?string $hsType): static
    {
        $this->hsType = $hsType;
        return $this;
    }


    public function getUniqueIdentifier(): ?string
    {
        return $this->uniqueIdentifier;
    }


    /**
     * @param string|null $uniqueIdentifier
     * @return static
     */
    public function setUniqueIdentifier(?string $uniqueIdentifier): static
    {
        $this->uniqueIdentifier = $uniqueIdentifier;
        return $this;
    }
}
