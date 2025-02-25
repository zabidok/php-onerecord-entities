<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Action;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAction;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\LoadingMaterial;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\LoadingUnit;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Piece;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\TransportMeans;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\LoadingType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Action to describe onloading or offloading TransportMeans
 *
 * @link https://onerecord.iata.org/ns/cargo#Loading Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Loading extends LogisticsAction
{
    /**
     * References to Materials onloaded or offloaded
     *
     * @link https://onerecord.iata.org/ns/cargo#loadedMaterials Ontology
     */
    #[ORM\ManyToMany(targetEntity: LoadingMaterial::class)]
    #[ORM\JoinTable(
        name: 'loading_loadingmaterial',
        joinColumns: [new ORM\JoinColumn(name: 'loading_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'loadingmaterial_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $loadedMaterials;

    /**
     * References to Pieces onloaded or offloaded
     *
     * @link https://onerecord.iata.org/ns/cargo#loadedPieces Ontology
     */
    #[ORM\ManyToMany(targetEntity: Piece::class)]
    #[ORM\JoinTable(
        name: 'loading_piece',
        joinColumns: [new ORM\JoinColumn(name: 'loading_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $loadedPieces;

    /**
     * References to LoadingUnits onloaded or offloaded
     *
     * @link https://onerecord.iata.org/ns/cargo#loadedUnits Ontology
     */
    #[ORM\ManyToMany(targetEntity: LoadingUnit::class)]
    #[ORM\JoinTable(
        name: 'loading_loadingunit',
        joinColumns: [new ORM\JoinColumn(name: 'loading_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'loadingunit_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $loadedUnits;

    /**
     * Enum stating whether the LoadingAction describes onloading or offloading
     *
     * @link https://onerecord.iata.org/ns/cargo#loadingType Ontology
     */
    #[ORM\ManyToOne(targetEntity: LoadingType::class)]
    protected ?LoadingType $loadingType = null;

    /**
     * Reference to the TransportMeans that is being onloaded or offloaded
     *
     * @link https://onerecord.iata.org/ns/cargo#onTransportMeans Ontology
     */
    #[ORM\ManyToOne(targetEntity: TransportMeans::class)]
    protected ?TransportMeans $onTransportMeans = null;

    /**
     * Short text stating the loading position in the TransportMeans
     *
     * @link https://onerecord.iata.org/ns/cargo#loadingPositionIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $loadingPositionIdentifier = null;


    public function __construct()
    {
        parent::__construct();
        $this->loadedMaterials = new ArrayCollection();
        $this->loadedPieces = new ArrayCollection();
        $this->loadedUnits = new ArrayCollection();
    }


    /**
     * @return Collection <int, LoadingMaterial>
     */
    public function getLoadedMaterials(): Collection
    {
        return $this->loadedMaterials;
    }


    /**
     * @param LoadingMaterial $loadingMaterial
     * @return static
     */
    public function addLoadedMaterials(LoadingMaterial $loadingMaterial): static
    {
        if (!$this->loadedMaterials->contains($loadingMaterial)) {
            $this->loadedMaterials->add($loadingMaterial);
        }
        return $this;
    }


    /**
     * @param LoadingMaterial $loadingMaterial
     * @return static
     */
    public function removeLoadedMaterials(LoadingMaterial $loadingMaterial): static
    {
        $this->loadedMaterials->removeElement($loadingMaterial);
        return $this;
    }


    /**
     * @return Collection <int, Piece>
     */
    public function getLoadedPieces(): Collection
    {
        return $this->loadedPieces;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function addLoadedPieces(Piece $piece): static
    {
        if (!$this->loadedPieces->contains($piece)) {
            $this->loadedPieces->add($piece);
        }
        return $this;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function removeLoadedPieces(Piece $piece): static
    {
        $this->loadedPieces->removeElement($piece);
        return $this;
    }


    /**
     * @return Collection <int, LoadingUnit>
     */
    public function getLoadedUnits(): Collection
    {
        return $this->loadedUnits;
    }


    /**
     * @param LoadingUnit $loadingUnit
     * @return static
     */
    public function addLoadedUnits(LoadingUnit $loadingUnit): static
    {
        if (!$this->loadedUnits->contains($loadingUnit)) {
            $this->loadedUnits->add($loadingUnit);
        }
        return $this;
    }


    /**
     * @param LoadingUnit $loadingUnit
     * @return static
     */
    public function removeLoadedUnits(LoadingUnit $loadingUnit): static
    {
        $this->loadedUnits->removeElement($loadingUnit);
        return $this;
    }


    /**
     * @return LoadingType|null
     */
    public function getLoadingType(): ?LoadingType
    {
        return $this->loadingType;
    }


    /**
     * @param LoadingType|null $loadingType
     * @return static
     */
    public function setLoadingType(?LoadingType $loadingType): static
    {
        $this->loadingType = $loadingType;
        return $this;
    }


    /**
     * @return TransportMeans|null
     */
    public function getOnTransportMeans(): ?TransportMeans
    {
        return $this->onTransportMeans;
    }


    /**
     * @param TransportMeans|null $onTransportMeans
     * @return static
     */
    public function setOnTransportMeans(?TransportMeans $onTransportMeans): static
    {
        $this->onTransportMeans = $onTransportMeans;
        return $this;
    }


    public function getLoadingPositionIdentifier(): ?string
    {
        return $this->loadingPositionIdentifier;
    }


    /**
     * @param string|null $loadingPositionIdentifier
     * @return static
     */
    public function setLoadingPositionIdentifier(?string $loadingPositionIdentifier): static
    {
        $this->loadingPositionIdentifier = $loadingPositionIdentifier;
        return $this;
    }
}
