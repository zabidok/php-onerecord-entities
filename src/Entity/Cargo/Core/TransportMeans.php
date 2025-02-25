<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Activity\TransportMovement;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\ORM\Mapping as ORM;

/**
 * Transport means details
 *
 * @link https://onerecord.iata.org/ns/cargo#TransportMeans Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class TransportMeans extends PhysicalLogisticsObject
{
    /**
     * Transport Movement on which the Transport Means is used
     *
     * @link https://onerecord.iata.org/ns/cargo#operatedTransportMovement Ontology
     */
    #[ORM\ManyToOne(targetEntity: TransportMovement::class)]
    protected ?TransportMovement $operatedTransportMovement = null;

    /**
     * Company operating the transport means
     *
     * @link https://onerecord.iata.org/ns/cargo#transportOrganization Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $transportOrganization = null;

    /**
     * Required for some CO2 calculations
     *
     * @link https://onerecord.iata.org/ns/cargo#typicalCo2Coefficient Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $typicalCo2Coefficient = null;

    /**
     * Typical fuel consumption (e.g. 2 L / 1 nm)
     *
     * @link https://onerecord.iata.org/ns/cargo#typicalFuelConsumption Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $typicalFuelConsumption = null;

    /**
     * Vehicle or container type. Refer UNECE28, e.g. 4.. - Aircraft, type unknown.For Air refer to IATA Standard Schedules Information Manual in section ATA/IATA Aircraft Types
     *
     * @link https://onerecord.iata.org/ns/cargo#vehicleType Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $vehicleType = null;

    /**
     * Model or make of the vehicle (e.g. A33-3)
     *
     * @link https://onerecord.iata.org/ns/cargo#vehicleModel Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $vehicleModel = null;

    /**
     * Vehicle identification - e.g. aircraft registration number
     *
     * @link https://onerecord.iata.org/ns/cargo#vehicleRegistration Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $vehicleRegistration = null;

    /**
     * Size of the vehicle - free text
     *
     * @link https://onerecord.iata.org/ns/cargo#vehicleSize Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $vehicleSize = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return TransportMovement|null
     */
    public function getOperatedTransportMovement(): ?TransportMovement
    {
        return $this->operatedTransportMovement;
    }


    /**
     * @param TransportMovement|null $operatedTransportMovement
     * @return static
     */
    public function setOperatedTransportMovement(?TransportMovement $operatedTransportMovement): static
    {
        $this->operatedTransportMovement = $operatedTransportMovement;
        return $this;
    }


    /**
     * @return Organization|null
     */
    public function getTransportOrganization(): ?Organization
    {
        return $this->transportOrganization;
    }


    /**
     * @param Organization|null $transportOrganization
     * @return static
     */
    public function setTransportOrganization(?Organization $transportOrganization): static
    {
        $this->transportOrganization = $transportOrganization;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getTypicalCo2Coefficient(): ?Value
    {
        return $this->typicalCo2Coefficient;
    }


    /**
     * @param Value|null $typicalCo2Coefficient
     * @return static
     */
    public function setTypicalCo2Coefficient(?Value $typicalCo2Coefficient): static
    {
        $this->typicalCo2Coefficient = $typicalCo2Coefficient;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getTypicalFuelConsumption(): ?Value
    {
        return $this->typicalFuelConsumption;
    }


    /**
     * @param Value|null $typicalFuelConsumption
     * @return static
     */
    public function setTypicalFuelConsumption(?Value $typicalFuelConsumption): static
    {
        $this->typicalFuelConsumption = $typicalFuelConsumption;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getVehicleType(): ?CodeListElement
    {
        return $this->vehicleType;
    }


    /**
     * @param CodeListElement|null $vehicleType
     * @return static
     */
    public function setVehicleType(?CodeListElement $vehicleType): static
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }


    public function getVehicleModel(): ?string
    {
        return $this->vehicleModel;
    }


    /**
     * @param string|null $vehicleModel
     * @return static
     */
    public function setVehicleModel(?string $vehicleModel): static
    {
        $this->vehicleModel = $vehicleModel;
        return $this;
    }


    public function getVehicleRegistration(): ?string
    {
        return $this->vehicleRegistration;
    }


    /**
     * @param string|null $vehicleRegistration
     * @return static
     */
    public function setVehicleRegistration(?string $vehicleRegistration): static
    {
        $this->vehicleRegistration = $vehicleRegistration;
        return $this;
    }


    public function getVehicleSize(): ?string
    {
        return $this->vehicleSize;
    }


    /**
     * @param string|null $vehicleSize
     * @return static
     */
    public function setVehicleSize(?string $vehicleSize): static
    {
        $this->vehicleSize = $vehicleSize;
        return $this;
    }
}
