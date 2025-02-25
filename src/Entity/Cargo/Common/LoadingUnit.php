<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Activity\UnitComposition;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\ORM\Mapping as ORM;

/**
 * Common loading unit/container details
 *
 * @link https://onerecord.iata.org/ns/cargo#LoadingUnit Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LoadingUnit extends PhysicalLogisticsObject
{
    /**
     * Reference to the Unit Composition the LoadingUnit is in
     *
     * @link https://onerecord.iata.org/ns/cargo#inUnitComposition Ontology
     */
    #[ORM\ManyToOne(targetEntity: UnitComposition::class)]
    protected ?UnitComposition $inUnitComposition = null;

    /**
     * Tare weight of the empty ULD
     *
     * @link https://onerecord.iata.org/ns/cargo#tareWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $tareWeight = null;

    /**
     * Remarks or Supplement Information
     *
     * @link https://onerecord.iata.org/ns/cargo#remarks Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $remarks = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return UnitComposition|null
     */
    public function getInUnitComposition(): ?UnitComposition
    {
        return $this->inUnitComposition;
    }


    /**
     * @param UnitComposition|null $inUnitComposition
     * @return static
     */
    public function setInUnitComposition(?UnitComposition $inUnitComposition): static
    {
        $this->inUnitComposition = $inUnitComposition;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getTareWeight(): ?Value
    {
        return $this->tareWeight;
    }


    /**
     * @param Value|null $tareWeight
     * @return static
     */
    public function setTareWeight(?Value $tareWeight): static
    {
        $this->tareWeight = $tareWeight;
        return $this;
    }


    public function getRemarks(): ?string
    {
        return $this->remarks;
    }


    /**
     * @param string|null $remarks
     * @return static
     */
    public function setRemarks(?string $remarks): static
    {
        $this->remarks = $remarks;
        return $this;
    }
}
