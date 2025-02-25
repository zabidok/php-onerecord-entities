<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Action;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAction;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\LoadingMaterial;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\LoadingUnit;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Piece;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\CompositionType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Action to describe build-up or break-down of LoadingUnits
 *
 * @link https://onerecord.iata.org/ns/cargo#Composing Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Composing extends LogisticsAction
{
    /**
     * References to the Materials being built-up or broken-down
     *
     * @link https://onerecord.iata.org/ns/cargo#composedMaterials Ontology
     */
    #[ORM\ManyToMany(targetEntity: LoadingMaterial::class)]
    #[ORM\JoinTable(
        name: 'composing_loadingmaterial',
        joinColumns: [new ORM\JoinColumn(name: 'composing_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'loadingmaterial_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $composedMaterials;

    /**
     * References to the Pieces being built-up or broken-down
     *
     * @link https://onerecord.iata.org/ns/cargo#composedPieces Ontology
     */
    #[ORM\ManyToMany(targetEntity: Piece::class)]
    #[ORM\JoinTable(
        name: 'composing_piece',
        joinColumns: [new ORM\JoinColumn(name: 'composing_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $composedPieces;

    /**
     * Enum stating whether the CompositionAction describes build-up or break-down
     *
     * @link https://onerecord.iata.org/ns/cargo#compositionType Ontology
     */
    #[ORM\ManyToOne(targetEntity: CompositionType::class)]
    protected ?CompositionType $compositionType = null;

    /**
     * Reference to the LoadingUnit composed in the Unit Composition or referenced in Composing actions
     *
     * @link https://onerecord.iata.org/ns/cargo#loadingUnit Ontology
     */
    #[ORM\ManyToOne(targetEntity: LoadingUnit::class)]
    protected ?LoadingUnit $loadingUnit = null;


    public function __construct()
    {
        parent::__construct();
        $this->composedMaterials = new ArrayCollection();
        $this->composedPieces = new ArrayCollection();
    }


    /**
     * @return Collection <int, LoadingMaterial>
     */
    public function getComposedMaterials(): Collection
    {
        return $this->composedMaterials;
    }


    /**
     * @param LoadingMaterial $loadingMaterial
     * @return static
     */
    public function addComposedMaterials(LoadingMaterial $loadingMaterial): static
    {
        if (!$this->composedMaterials->contains($loadingMaterial)) {
            $this->composedMaterials->add($loadingMaterial);
        }
        return $this;
    }


    /**
     * @param LoadingMaterial $loadingMaterial
     * @return static
     */
    public function removeComposedMaterials(LoadingMaterial $loadingMaterial): static
    {
        $this->composedMaterials->removeElement($loadingMaterial);
        return $this;
    }


    /**
     * @return Collection <int, Piece>
     */
    public function getComposedPieces(): Collection
    {
        return $this->composedPieces;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function addComposedPieces(Piece $piece): static
    {
        if (!$this->composedPieces->contains($piece)) {
            $this->composedPieces->add($piece);
        }
        return $this;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function removeComposedPieces(Piece $piece): static
    {
        $this->composedPieces->removeElement($piece);
        return $this;
    }


    /**
     * @return CompositionType|null
     */
    public function getCompositionType(): ?CompositionType
    {
        return $this->compositionType;
    }


    /**
     * @param CompositionType|null $compositionType
     * @return static
     */
    public function setCompositionType(?CompositionType $compositionType): static
    {
        $this->compositionType = $compositionType;
        return $this;
    }


    /**
     * @return LoadingUnit|null
     */
    public function getLoadingUnit(): ?LoadingUnit
    {
        return $this->loadingUnit;
    }


    /**
     * @param LoadingUnit|null $loadingUnit
     * @return static
     */
    public function setLoadingUnit(?LoadingUnit $loadingUnit): static
    {
        $this->loadingUnit = $loadingUnit;
        return $this;
    }
}
