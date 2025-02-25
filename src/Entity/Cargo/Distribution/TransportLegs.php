<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\CO2Emissions;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\TransportMeansServiceType;
use Doctrine\ORM\Mapping as ORM;

/**
 * TransportLegs details
 *
 * @link https://onerecord.iata.org/ns/cargo#TransportLegs Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class TransportLegs extends LogisticsObject
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
     * Type of transport means service, e.g. Aircraftor Truck
     *
     * @link https://onerecord.iata.org/ns/cargo#transportMeansServiceType Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: TransportMeansServiceType::class)]
    protected ?TransportMeansServiceType $transportMeansServiceType = null;

    /**
     * Type of transport means, e.g. 744, RFS
     *
     * @link https://onerecord.iata.org/ns/cargo#transportMeansType Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $transportMeansType = null;

    /**
     * Arrival date and time of the leg
     *
     * @link https://onerecord.iata.org/ns/cargo#arrivalDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $arrivalDate = null;

    /**
     * Departure date and time of the leg
     *
     * @link https://onerecord.iata.org/ns/cargo#departureDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $departureDate = null;

    /**
     * Leg number
     *
     * @link https://onerecord.iata.org/ns/cargo#legNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $legNumber = null;

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
     * @return TransportMeansServiceType|null
     */
    public function getTransportMeansServiceType(): ?TransportMeansServiceType
    {
        return $this->transportMeansServiceType;
    }


    /**
     * @param TransportMeansServiceType|null $transportMeansServiceType
     * @return static
     */
    public function setTransportMeansServiceType(?TransportMeansServiceType $transportMeansServiceType): static
    {
        $this->transportMeansServiceType = $transportMeansServiceType;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getTransportMeansType(): ?CodeListElement
    {
        return $this->transportMeansType;
    }


    /**
     * @param CodeListElement|null $transportMeansType
     * @return static
     */
    public function setTransportMeansType(?CodeListElement $transportMeansType): static
    {
        $this->transportMeansType = $transportMeansType;
        return $this;
    }


    public function getArrivalDate(): ?\DateTime
    {
        return $this->arrivalDate;
    }


    /**
     * @param \DateTime|null $arrivalDate
     * @return static
     */
    public function setArrivalDate(?\DateTime $arrivalDate): static
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }


    public function getDepartureDate(): ?\DateTime
    {
        return $this->departureDate;
    }


    /**
     * @param \DateTime|null $departureDate
     * @return static
     */
    public function setDepartureDate(?\DateTime $departureDate): static
    {
        $this->departureDate = $departureDate;
        return $this;
    }


    public function getLegNumber(): ?int
    {
        return $this->legNumber;
    }


    /**
     * @param int|null $legNumber
     * @return static
     */
    public function setLegNumber(?int $legNumber): static
    {
        $this->legNumber = $legNumber;
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
