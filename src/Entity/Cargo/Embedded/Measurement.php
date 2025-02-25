<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Measurements details for Sensors, either generic or geolocation measurements are recorded
 *
 * @link https://onerecord.iata.org/ns/cargo#Measurement Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Measurement
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Information about all non-Geolocation values of the measurement
     *
     * @link https://onerecord.iata.org/ns/cargo#measurementValue Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $measurementValue = null;

    /**
     * Reference to the Geolocation recorded of the measurement
     *
     * @link https://onerecord.iata.org/ns/cargo#recordedGeolocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Geolocation::class)]
    protected ?Geolocation $recordedGeolocation = null;

    /**
     * Timestamp for the measurement
     *
     * @link https://onerecord.iata.org/ns/cargo#measurementTimestamp Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $measurementTimestamp = null;


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
     * @return Value|null
     */
    public function getMeasurementValue(): ?Value
    {
        return $this->measurementValue;
    }


    /**
     * @param Value|null $measurementValue
     * @return static
     */
    public function setMeasurementValue(?Value $measurementValue): static
    {
        $this->measurementValue = $measurementValue;
        return $this;
    }


    /**
     * @return Geolocation|null
     */
    public function getRecordedGeolocation(): ?Geolocation
    {
        return $this->recordedGeolocation;
    }


    /**
     * @param Geolocation|null $recordedGeolocation
     * @return static
     */
    public function setRecordedGeolocation(?Geolocation $recordedGeolocation): static
    {
        $this->recordedGeolocation = $recordedGeolocation;
        return $this;
    }


    public function getMeasurementTimestamp(): ?\DateTime
    {
        return $this->measurementTimestamp;
    }


    /**
     * @param \DateTime|null $measurementTimestamp
     * @return static
     */
    public function setMeasurementTimestamp(?\DateTime $measurementTimestamp): static
    {
        $this->measurementTimestamp = $measurementTimestamp;
        return $this;
    }
}
