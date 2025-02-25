<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Activity;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsActivity;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Loading;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\CO2Emissions;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\TransportMeans;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\MovementTime;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\ModeQualifier;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ModeCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Activity to describe transports, replaces the TransportSegment in v1.1 and above
 *
 * @link https://onerecord.iata.org/ns/cargo#TransportMovement Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class TransportMovement extends LogisticsActivity
{
    /**
     * Reference to the arrival Location
     *
     * @link https://onerecord.iata.org/ns/cargo#arrivalLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $arrivalLocation = null;

    /**
     * References to CO2Emissions
     *
     * @link https://onerecord.iata.org/ns/cargo#co2Emissions Ontology
     */
    #[ORM\ManyToOne(targetEntity: CO2Emissions::class)]
    protected ?CO2Emissions $co2Emissions = null;

    /**
     * Reference to the departure Location
     *
     * @link https://onerecord.iata.org/ns/cargo#departureLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $departureLocation = null;

    /**
     * Information about the calculated distance
     *
     * @link https://onerecord.iata.org/ns/cargo#distanceCalculated Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $distanceCalculated = null;

    /**
     * Information about the measured distance
     *
     * @link https://onerecord.iata.org/ns/cargo#distanceMeasured Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $distanceMeasured = null;

    /**
     * Information about the calculated fuel amount
     *
     * @link https://onerecord.iata.org/ns/cargo#fuelAmountCalculated Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $fuelAmountCalculated = null;

    /**
     * Information about the measured fuel amount
     *
     * @link https://onerecord.iata.org/ns/cargo#fuelAmountMeasured Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $fuelAmountMeasured = null;

    /**
     * References to all actions of type Loading performed for the TransportMovement
     *
     * @link https://onerecord.iata.org/ns/cargo#loadingActions Ontology
     */
    #[ORM\ManyToMany(targetEntity: Loading::class)]
    #[ORM\JoinTable(
        name: 'transportmovement_loading',
        joinColumns: [new ORM\JoinColumn(name: 'transportmovement_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'loading_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $loadingActions;

    /**
     * Mode of transport code, refer to UNECE Rec. 19 https://unece.org/fileadmin/DAM/cefact/recommendations/rec19/rec19_1cf19e.pdf
     *
     * @link https://onerecord.iata.org/ns/cargo#modeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ModeCode::class)]
    protected ?ModeCode $modeCode = null;

    /**
     * Pre-Carriage, Main-Carriage or On-Carriage
     *
     * @link https://onerecord.iata.org/ns/cargo#modeQualifier Ontology
     */
    #[ORM\ManyToOne(targetEntity: ModeQualifier::class)]
    protected ?ModeQualifier $modeQualifier = null;

    /**
     * Information about times related to the movement (milestone list to be defined)
     *
     * @link https://onerecord.iata.org/ns/cargo#movementTimes Ontology
     */
    #[ORM\ManyToMany(targetEntity: MovementTime::class)]
    #[ORM\JoinTable(
        name: 'transportmovement_movementtime',
        joinColumns: [new ORM\JoinColumn(name: 'transportmovement_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'movementtime_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $movementTimes;

    /**
     * Information about the parties operating this TransportMovement, for example pilot and co-pilot; can also refer to organizations through Party
     *
     * @link https://onerecord.iata.org/ns/cargo#operatingParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'transportmovement_party',
        joinColumns: [new ORM\JoinColumn(name: 'transportmovement_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $operatingParties;

    /**
     * Reference to the TransportMeans operating the TransportMovement
     *
     * @link https://onerecord.iata.org/ns/cargo#operatingTransportMeans Ontology
     */
    #[ORM\OneToOne(targetEntity: TransportMeans::class)]
    protected ?TransportMeans $operatingTransportMeans = null;

    /**
     * e.g. Kerosene, Diesel, SAF, Electricity [renewable], Electricity [non-renewable]
     *
     * @link https://onerecord.iata.org/ns/cargo#fuelType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $fuelType = null;

    /**
     * Seal identifier
     *
     * @link https://onerecord.iata.org/ns/cargo#seal Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $seal = null;

    /**
     * Airline flight number, or rail/truck/maritime line id
     *
     * @link https://onerecord.iata.org/ns/cargo#transportIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $transportIdentifier = null;


    public function __construct()
    {
        parent::__construct();
        $this->loadingActions = new ArrayCollection();
        $this->movementTimes = new ArrayCollection();
        $this->operatingParties = new ArrayCollection();
    }


    /**
     * @return Location|null
     */
    public function getArrivalLocation(): ?Location
    {
        return $this->arrivalLocation;
    }


    /**
     * @param Location|null $arrivalLocation
     * @return static
     */
    public function setArrivalLocation(?Location $arrivalLocation): static
    {
        $this->arrivalLocation = $arrivalLocation;
        return $this;
    }


    /**
     * @return CO2Emissions|null
     */
    public function getCo2Emissions(): ?CO2Emissions
    {
        return $this->co2Emissions;
    }


    /**
     * @param CO2Emissions|null $co2Emissions
     * @return static
     */
    public function setCo2Emissions(?CO2Emissions $co2Emissions): static
    {
        $this->co2Emissions = $co2Emissions;
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getDepartureLocation(): ?Location
    {
        return $this->departureLocation;
    }


    /**
     * @param Location|null $departureLocation
     * @return static
     */
    public function setDepartureLocation(?Location $departureLocation): static
    {
        $this->departureLocation = $departureLocation;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getDistanceCalculated(): ?Value
    {
        return $this->distanceCalculated;
    }


    /**
     * @param Value|null $distanceCalculated
     * @return static
     */
    public function setDistanceCalculated(?Value $distanceCalculated): static
    {
        $this->distanceCalculated = $distanceCalculated;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getDistanceMeasured(): ?Value
    {
        return $this->distanceMeasured;
    }


    /**
     * @param Value|null $distanceMeasured
     * @return static
     */
    public function setDistanceMeasured(?Value $distanceMeasured): static
    {
        $this->distanceMeasured = $distanceMeasured;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getFuelAmountCalculated(): ?Value
    {
        return $this->fuelAmountCalculated;
    }


    /**
     * @param Value|null $fuelAmountCalculated
     * @return static
     */
    public function setFuelAmountCalculated(?Value $fuelAmountCalculated): static
    {
        $this->fuelAmountCalculated = $fuelAmountCalculated;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getFuelAmountMeasured(): ?Value
    {
        return $this->fuelAmountMeasured;
    }


    /**
     * @param Value|null $fuelAmountMeasured
     * @return static
     */
    public function setFuelAmountMeasured(?Value $fuelAmountMeasured): static
    {
        $this->fuelAmountMeasured = $fuelAmountMeasured;
        return $this;
    }


    /**
     * @return Collection <int, Loading>
     */
    public function getLoadingActions(): Collection
    {
        return $this->loadingActions;
    }


    /**
     * @param Loading $loading
     * @return static
     */
    public function addLoadingActions(Loading $loading): static
    {
        if (!$this->loadingActions->contains($loading)) {
            $this->loadingActions->add($loading);
        }
        return $this;
    }


    /**
     * @param Loading $loading
     * @return static
     */
    public function removeLoadingActions(Loading $loading): static
    {
        $this->loadingActions->removeElement($loading);
        return $this;
    }


    /**
     * @return ModeCode|null
     */
    public function getModeCode(): ?ModeCode
    {
        return $this->modeCode;
    }


    /**
     * @param ModeCode|null $modeCode
     * @return static
     */
    public function setModeCode(?ModeCode $modeCode): static
    {
        $this->modeCode = $modeCode;
        return $this;
    }


    /**
     * @return ModeQualifier|null
     */
    public function getModeQualifier(): ?ModeQualifier
    {
        return $this->modeQualifier;
    }


    /**
     * @param ModeQualifier|null $modeQualifier
     * @return static
     */
    public function setModeQualifier(?ModeQualifier $modeQualifier): static
    {
        $this->modeQualifier = $modeQualifier;
        return $this;
    }


    /**
     * @return Collection <int, MovementTime>
     */
    public function getMovementTimes(): Collection
    {
        return $this->movementTimes;
    }


    /**
     * @param MovementTime $movementTime
     * @return static
     */
    public function addMovementTimes(MovementTime $movementTime): static
    {
        if (!$this->movementTimes->contains($movementTime)) {
            $this->movementTimes->add($movementTime);
        }
        return $this;
    }


    /**
     * @param MovementTime $movementTime
     * @return static
     */
    public function removeMovementTimes(MovementTime $movementTime): static
    {
        $this->movementTimes->removeElement($movementTime);
        return $this;
    }


    /**
     * @return Collection <int, Party>
     */
    public function getOperatingParties(): Collection
    {
        return $this->operatingParties;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function addOperatingParties(Party $party): static
    {
        if (!$this->operatingParties->contains($party)) {
            $this->operatingParties->add($party);
        }
        return $this;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function removeOperatingParties(Party $party): static
    {
        $this->operatingParties->removeElement($party);
        return $this;
    }


    /**
     * @return TransportMeans|null
     */
    public function getOperatingTransportMeans(): ?TransportMeans
    {
        return $this->operatingTransportMeans;
    }


    /**
     * @param TransportMeans|null $operatingTransportMeans
     * @return static
     */
    public function setOperatingTransportMeans(?TransportMeans $operatingTransportMeans): static
    {
        $this->operatingTransportMeans = $operatingTransportMeans;
        return $this;
    }


    public function getFuelType(): ?string
    {
        return $this->fuelType;
    }


    /**
     * @param string|null $fuelType
     * @return static
     */
    public function setFuelType(?string $fuelType): static
    {
        $this->fuelType = $fuelType;
        return $this;
    }


    public function getSeal(): ?string
    {
        return $this->seal;
    }


    /**
     * @param string|null $seal
     * @return static
     */
    public function setSeal(?string $seal): static
    {
        $this->seal = $seal;
        return $this;
    }


    public function getTransportIdentifier(): ?string
    {
        return $this->transportIdentifier;
    }


    /**
     * @param string|null $transportIdentifier
     * @return static
     */
    public function setTransportIdentifier(?string $transportIdentifier): static
    {
        $this->transportIdentifier = $transportIdentifier;
        return $this;
    }
}
