<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * VolumePieceGroup details
 *
 * @link https://onerecord.iata.org/ns/cargo#VolumePieceGroup Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class VolumePieceGroup extends PieceGroup
{
    /**
     * Total volume fo the volume piece group
     *
     * @link https://onerecord.iata.org/ns/cargo#totalVolume Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $totalVolume = null;

    /**
     * Stackable indicator for the pieces (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#stackable Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $stackable = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Value|null
     */
    public function getTotalVolume(): ?Value
    {
        return $this->totalVolume;
    }


    /**
     * @param Value|null $totalVolume
     * @return static
     */
    public function setTotalVolume(?Value $totalVolume): static
    {
        $this->totalVolume = $totalVolume;
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
}
