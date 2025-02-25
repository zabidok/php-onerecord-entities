<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\MeasurementUnitCode;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Unit of measurement details
 *
 * @link https://onerecord.iata.org/ns/cargo#Value Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Value
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Unit of measurement as per MeasurementUnitCode codelist. If the code is not present, create an instance of MeasurementUnitCode based on UNECE Rec. 20 Rev. 17e-2021
     *
     * @link https://onerecord.iata.org/ns/cargo#unit Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: MeasurementUnitCode::class)]
    protected ?MeasurementUnitCode $unit = null;

    /**
     * Numerical value
     *
     * @link https://onerecord.iata.org/ns/cargo#numericalValue Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $numericalValue = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
    }


    public function getId(): ?string
    {
        return $this->id;
    }


    public function generateUuid(): ?string
    {
        $uuid = Uuid::v7();
        return $uuid->toString();
    }


    /**
     * @return MeasurementUnitCode|null
     */
    public function getUnit(): ?MeasurementUnitCode
    {
        return $this->unit;
    }


    /**
     * @param MeasurementUnitCode|null $unit
     * @return static
     */
    public function setUnit(?MeasurementUnitCode $unit): static
    {
        $this->unit = $unit;
        return $this;
    }


    public function getNumericalValue(): ?float
    {
        return $this->numericalValue;
    }


    /**
     * @param float|null $numericalValue
     * @return static
     */
    public function setNumericalValue(?float $numericalValue): static
    {
        $this->numericalValue = $numericalValue;
        return $this;
    }
}
