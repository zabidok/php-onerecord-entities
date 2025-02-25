<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * IoT Device details
 *
 * @link https://onerecord.iata.org/ns/cargo#IotDevice Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class IotDevice extends PhysicalLogisticsObject
{
    /**
     * Reference to the PhysicalLogisticsObject the IotDevice is attached to
     *
     * @link https://onerecord.iata.org/ns/cargo#attachedToObject Ontology
     */
    #[ORM\ManyToOne(targetEntity: PhysicalLogisticsObject::class)]
    protected ?PhysicalLogisticsObject $attachedToObject = null;

    /**
     * Reference to the sensors linked to the device
     *
     * @link https://onerecord.iata.org/ns/cargo#connectedSensors Ontology
     */
    #[ORM\ManyToMany(targetEntity: Sensor::class)]
    #[ORM\JoinTable(
        name: 'iotdevice_sensor',
        joinColumns: [new ORM\JoinColumn(name: 'iotdevice_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'sensor_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $connectedSensors;

    /**
     * Manufacturing company details and contacts
     *
     * @link https://onerecord.iata.org/ns/cargo#manufacturer Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $manufacturer = null;

    /**
     * Natural language description if required
     *
     * @link https://onerecord.iata.org/ns/cargo#description Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $description = null;

    /**
     * Commercial denomination of the device
     *
     * @link https://onerecord.iata.org/ns/cargo#deviceModel Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $deviceModel = null;

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
        $this->connectedSensors = new ArrayCollection();
    }


    /**
     * @return PhysicalLogisticsObject|null
     */
    public function getAttachedToObject(): ?PhysicalLogisticsObject
    {
        return $this->attachedToObject;
    }


    /**
     * @param PhysicalLogisticsObject|null $attachedToObject
     * @return static
     */
    public function setAttachedToObject(?PhysicalLogisticsObject $attachedToObject): static
    {
        $this->attachedToObject = $attachedToObject;
        return $this;
    }


    /**
     * @return Collection <int, Sensor>
     */
    public function getConnectedSensors(): Collection
    {
        return $this->connectedSensors;
    }


    /**
     * @param Sensor $sensor
     * @return static
     */
    public function addConnectedSensors(Sensor $sensor): static
    {
        if (!$this->connectedSensors->contains($sensor)) {
            $this->connectedSensors->add($sensor);
        }
        return $this;
    }


    /**
     * @param Sensor $sensor
     * @return static
     */
    public function removeConnectedSensors(Sensor $sensor): static
    {
        $this->connectedSensors->removeElement($sensor);
        return $this;
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


    public function getDeviceModel(): ?string
    {
        return $this->deviceModel;
    }


    /**
     * @param string|null $deviceModel
     * @return static
     */
    public function setDeviceModel(?string $deviceModel): static
    {
        $this->deviceModel = $deviceModel;
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
