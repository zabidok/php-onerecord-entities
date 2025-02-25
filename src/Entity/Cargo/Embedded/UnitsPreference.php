<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\CurrencyCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\DimensionsUnitCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\TemperatureUnitCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\VolumeUnitCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\WeightUnitCode;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * UnitsPreference details
 *
 * @link https://onerecord.iata.org/ns/cargo#UnitsPreference Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class UnitsPreference
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Preferred unit for currency
     *
     * @link https://onerecord.iata.org/ns/cargo#currency Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: CurrencyCode::class)]
    protected ?CurrencyCode $currency = null;

    /**
     * Preferred unit for measurement and dimensions
     *
     * @link https://onerecord.iata.org/ns/cargo#dimensionsUnit Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: DimensionsUnitCode::class)]
    protected ?DimensionsUnitCode $dimensionsUnit = null;

    /**
     * Preferred unit for temperature
     *
     * @link https://onerecord.iata.org/ns/cargo#temperatureUnit Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: TemperatureUnitCode::class)]
    protected ?TemperatureUnitCode $temperatureUnit = null;

    /**
     * Preferred unit for volume
     *
     * @link https://onerecord.iata.org/ns/cargo#volumeUnit Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: VolumeUnitCode::class)]
    protected ?VolumeUnitCode $volumeUnit = null;

    /**
     * Preferred unit for weight
     *
     * @link https://onerecord.iata.org/ns/cargo#weightUnit Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: WeightUnitCode::class)]
    protected ?WeightUnitCode $weightUnit = null;


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
     * @return CurrencyCode|null
     */
    public function getCurrency(): ?CurrencyCode
    {
        return $this->currency;
    }


    /**
     * @param CurrencyCode|null $currency
     * @return static
     */
    public function setCurrency(?CurrencyCode $currency): static
    {
        $this->currency = $currency;
        return $this;
    }


    /**
     * @return DimensionsUnitCode|null
     */
    public function getDimensionsUnit(): ?DimensionsUnitCode
    {
        return $this->dimensionsUnit;
    }


    /**
     * @param DimensionsUnitCode|null $dimensionsUnit
     * @return static
     */
    public function setDimensionsUnit(?DimensionsUnitCode $dimensionsUnit): static
    {
        $this->dimensionsUnit = $dimensionsUnit;
        return $this;
    }


    /**
     * @return TemperatureUnitCode|null
     */
    public function getTemperatureUnit(): ?TemperatureUnitCode
    {
        return $this->temperatureUnit;
    }


    /**
     * @param TemperatureUnitCode|null $temperatureUnit
     * @return static
     */
    public function setTemperatureUnit(?TemperatureUnitCode $temperatureUnit): static
    {
        $this->temperatureUnit = $temperatureUnit;
        return $this;
    }


    /**
     * @return VolumeUnitCode|null
     */
    public function getVolumeUnit(): ?VolumeUnitCode
    {
        return $this->volumeUnit;
    }


    /**
     * @param VolumeUnitCode|null $volumeUnit
     * @return static
     */
    public function setVolumeUnit(?VolumeUnitCode $volumeUnit): static
    {
        $this->volumeUnit = $volumeUnit;
        return $this;
    }


    /**
     * @return WeightUnitCode|null
     */
    public function getWeightUnit(): ?WeightUnitCode
    {
        return $this->weightUnit;
    }


    /**
     * @param WeightUnitCode|null $weightUnit
     * @return static
     */
    public function setWeightUnit(?WeightUnitCode $weightUnit): static
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }
}
