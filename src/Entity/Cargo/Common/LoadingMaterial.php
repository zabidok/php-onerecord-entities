<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherIdentifier;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * LoadingMaterial describes transportable, complementary non-Piece objects such as dry ice or nets
 *
 * @link https://onerecord.iata.org/ns/cargo#LoadingMaterial Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LoadingMaterial extends PhysicalLogisticsObject
{
    /**
     * Manufacturing company details and contacts
     *
     * @link https://onerecord.iata.org/ns/cargo#manufacturer Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $manufacturer = null;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'loadingmaterial_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'loadingmaterial_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Natural language description if required
     *
     * @link https://onerecord.iata.org/ns/cargo#description Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $description = null;

    /**
     * Model of the LoadingMaterial if any
     *
     * @link https://onerecord.iata.org/ns/cargo#materialModel Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $materialModel = null;

    /**
     * Type of the LoadingMaterial
     *
     * @link https://onerecord.iata.org/ns/cargo#materialType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $materialType = null;

    /**
     * Serial number that allows to uniquely identify the object
     *
     * @link https://onerecord.iata.org/ns/cargo#serialNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $serialNumber = null;


    public function __construct()
    {
        parent::__construct();
        $this->otherIdentifiers = new ArrayCollection();
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


    public function getMaterialModel(): ?string
    {
        return $this->materialModel;
    }


    /**
     * @param string|null $materialModel
     * @return static
     */
    public function setMaterialModel(?string $materialModel): static
    {
        $this->materialModel = $materialModel;
        return $this;
    }


    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }


    /**
     * @param string|null $materialType
     * @return static
     */
    public function setMaterialType(?string $materialType): static
    {
        $this->materialType = $materialType;
        return $this;
    }


    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }


    /**
     * @param string|null $serialNumber
     * @return static
     */
    public function setSerialNumber(?string $serialNumber): static
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }
}
