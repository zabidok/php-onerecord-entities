<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Measurement;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\SensorType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sensor details and measurements, linked to Connected Devices
 *
 * @link https://onerecord.iata.org/ns/cargo#Sensor Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Sensor extends PhysicalLogisticsObject
{
    /**
     * Reference to the Measurements recorded by the Sensor
     *
     * @link https://onerecord.iata.org/ns/cargo#measurements Ontology
     */
    #[ORM\ManyToMany(targetEntity: Measurement::class)]
    #[ORM\JoinTable(
        name: 'sensor_measurement',
        joinColumns: [new ORM\JoinColumn(name: 'sensor_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'measurement_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $measurements;

    /**
     * Reference to the IoT Device to which the sensor is linked
     *
     * @link https://onerecord.iata.org/ns/cargo#partOfIotDevice Ontology
     */
    #[ORM\ManyToOne(targetEntity: IotDevice::class, inversedBy: 'connectedSensors')]
    protected ?IotDevice $partOfIotDevice = null;

    /**
     * Type of sensor as described in Interactive Cargo Recommended Practice
     *
     * @link https://onerecord.iata.org/ns/cargo#sensorType Ontology
     */
    #[ORM\ManyToOne(targetEntity: SensorType::class)]
    protected ?SensorType $sensorType = null;

    /**
     * Natural language description if required
     *
     * @link https://onerecord.iata.org/ns/cargo#description Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $description = null;

    /**
     * Human-understandable name of object depending on the context
     *
     * @link https://onerecord.iata.org/ns/cargo#name Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $name = null;

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
        $this->measurements = new ArrayCollection();
    }


    /**
     * @return Collection <int, Measurement>
     */
    public function getMeasurements(): Collection
    {
        return $this->measurements;
    }


    /**
     * @param Measurement $measurement
     * @return static
     */
    public function addMeasurements(Measurement $measurement): static
    {
        if (!$this->measurements->contains($measurement)) {
            $this->measurements->add($measurement);
        }
        return $this;
    }


    /**
     * @param Measurement $measurement
     * @return static
     */
    public function removeMeasurements(Measurement $measurement): static
    {
        $this->measurements->removeElement($measurement);
        return $this;
    }


    /**
     * @return IotDevice|null
     */
    public function getPartOfIotDevice(): ?IotDevice
    {
        return $this->partOfIotDevice;
    }


    /**
     * @param IotDevice|null $partOfIotDevice
     * @return static
     */
    public function setPartOfIotDevice(?IotDevice $partOfIotDevice): static
    {
        $this->partOfIotDevice = $partOfIotDevice;
        return $this;
    }


    /**
     * @return SensorType|null
     */
    public function getSensorType(): ?SensorType
    {
        return $this->sensorType;
    }


    /**
     * @param SensorType|null $sensorType
     * @return static
     */
    public function setSensorType(?SensorType $sensorType): static
    {
        $this->sensorType = $sensorType;
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


    public function getName(): ?string
    {
        return $this->name;
    }


    /**
     * @param string|null $name
     * @return static
     */
    public function setName(?string $name): static
    {
        $this->name = $name;
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
