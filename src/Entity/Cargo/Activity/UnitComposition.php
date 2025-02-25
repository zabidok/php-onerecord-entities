<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Activity;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsActivity;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Composing;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\LoadingUnit;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Activity to describe composition and decomposition of LoadingUnits
 *
 * @link https://onerecord.iata.org/ns/cargo#UnitComposition Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class UnitComposition extends LogisticsActivity
{
    /**
     * References to all CompositionActions performed for the UnitComposition
     *
     * @link https://onerecord.iata.org/ns/cargo#compositionActions Ontology
     */
    #[ORM\ManyToMany(targetEntity: Composing::class)]
    #[ORM\JoinTable(
        name: 'unitcomposition_composing',
        joinColumns: [new ORM\JoinColumn(name: 'unitcomposition_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'composing_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $compositionActions;

    /**
     * Reference to the LoadingUnit composed in the Unit Composition or referenced in Composing actions
     *
     * @link https://onerecord.iata.org/ns/cargo#loadingUnit Ontology
     */
    #[ORM\OneToOne(targetEntity: LoadingUnit::class)]
    protected ?LoadingUnit $loadingUnit = null;

    /**
     * Short text holding the process number if necessary
     *
     * @link https://onerecord.iata.org/ns/cargo#compositionIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $compositionIdentifier = null;

    /**
     * Shipper's Load And Count  ( total contained piece count as provided by shipper)
     *
     * @link https://onerecord.iata.org/ns/cargo#slac Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $slac = null;


    public function __construct()
    {
        parent::__construct();
        $this->compositionActions = new ArrayCollection();
    }


    /**
     * @return Collection <int, Composing>
     */
    public function getCompositionActions(): Collection
    {
        return $this->compositionActions;
    }


    /**
     * @param Composing $composing
     * @return static
     */
    public function addCompositionActions(Composing $composing): static
    {
        if (!$this->compositionActions->contains($composing)) {
            $this->compositionActions->add($composing);
        }
        return $this;
    }


    /**
     * @param Composing $composing
     * @return static
     */
    public function removeCompositionActions(Composing $composing): static
    {
        $this->compositionActions->removeElement($composing);
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


    public function getCompositionIdentifier(): ?string
    {
        return $this->compositionIdentifier;
    }


    /**
     * @param string|null $compositionIdentifier
     * @return static
     */
    public function setCompositionIdentifier(?string $compositionIdentifier): static
    {
        $this->compositionIdentifier = $compositionIdentifier;
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
}
