<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Carrier;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\BookingTimes;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CarrierProduct;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\StationRemarks;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\UnitsPreference;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\BookingOptionStatus;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Booking details
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingOption Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingOption extends LogisticsObject
{
    /**
     * Information about the Booking Times of a provided Booking Option
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingTimes Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingTimes::class)]
    protected ?BookingTimes $bookingTimes = null;

    /**
     * Reference to the operating carrier
     *
     * @link https://onerecord.iata.org/ns/cargo#carrier Ontology
     */
    #[ORM\ManyToOne(targetEntity: Carrier::class)]
    protected ?Carrier $carrier = null;

    /**
     * Reference to the Carrier product if known
     *
     * @link https://onerecord.iata.org/ns/cargo#carrierProduct Ontology
     */
    #[ORM\ManyToOne(targetEntity: CarrierProduct::class)]
    protected ?CarrierProduct $carrierProduct = null;

    /**
     * Reference to the BookingOptionRequest the information of the LogisticsObject is detailing
     *
     * @link https://onerecord.iata.org/ns/cargo#forBookingOptionRequest Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingOptionRequest::class)]
    protected ?BookingOptionRequest $forBookingOptionRequest = null;

    /**
     * Reference to the Booking Request the of the Booking Option
     *
     * @link https://onerecord.iata.org/ns/cargo#forBookingRequest Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingRequest::class)]
    protected ?BookingRequest $forBookingRequest = null;

    /**
     * Price of the Booking (if different from the offer)
     *
     * @link https://onerecord.iata.org/ns/cargo#price Ontology
     */
    #[ORM\ManyToOne(targetEntity: Price::class)]
    protected ?Price $price = null;

    /**
     * Remarks related to specific stations in the routing (e.g. Embargo in XXX)
     *
     * @link https://onerecord.iata.org/ns/cargo#stationRemarks Ontology
     */
    #[ORM\ManyToMany(targetEntity: StationRemarks::class)]
    #[ORM\JoinTable(
        name: 'bookingoption_stationremarks',
        joinColumns: [new ORM\JoinColumn(name: 'bookingoption_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'stationremarks_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $stationRemarks;

    /**
     * Status of the Booking Option
     *
     * @link https://onerecord.iata.org/ns/cargo#statusBookingOption Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingOptionStatus::class)]
    protected ?BookingOptionStatus $statusBookingOption = null;

    /**
     * Reference to the Transport Legs of the proposed routing
     *
     * @link https://onerecord.iata.org/ns/cargo#transportLegs Ontology
     */
    #[ORM\ManyToMany(targetEntity: TransportLegs::class)]
    #[ORM\JoinTable(
        name: 'bookingoption_transportlegs',
        joinColumns: [new ORM\JoinColumn(name: 'bookingoption_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'transportlegs_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $transportLegs;

    /**
     * Reference to unit preferences of the request (e.g. kg or cm)
     *
     * @link https://onerecord.iata.org/ns/cargo#unitsPreference Ontology
     */
    #[ORM\ManyToOne(targetEntity: UnitsPreference::class)]
    protected ?UnitsPreference $unitsPreference = null;

    /**
     * Additional information related to the Booking Option, e.g. sales details
     *
     * @link https://onerecord.iata.org/ns/cargo#additionalInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $additionalInformation = null;

    /**
     * Description of the alternatives proposed that do not match the Booking Option Request
     *
     * @link https://onerecord.iata.org/ns/cargo#alternatives Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $alternatives = [];

    /**
     * Date and time of beginning of offer validity
     *
     * @link https://onerecord.iata.org/ns/cargo#offerValidFrom Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $offerValidFrom = null;

    /**
     * Date and time of end of offer validity
     *
     * @link https://onerecord.iata.org/ns/cargo#offerValidTo Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $offerValidTo = null;

    /**
     * Indicates if the Booking Option is a match to the Booking Option Request preferences
     *
     * @link https://onerecord.iata.org/ns/cargo#requestMatch Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $requestMatch = null;


    public function __construct()
    {
        parent::__construct();
        $this->stationRemarks = new ArrayCollection();
        $this->transportLegs = new ArrayCollection();
    }


    /**
     * @return BookingTimes|null
     */
    public function getBookingTimes(): ?BookingTimes
    {
        return $this->bookingTimes;
    }


    /**
     * @param BookingTimes|null $bookingTimes
     * @return static
     */
    public function setBookingTimes(?BookingTimes $bookingTimes): static
    {
        $this->bookingTimes = $bookingTimes;
        return $this;
    }


    /**
     * @return Carrier|null
     */
    public function getCarrier(): ?Carrier
    {
        return $this->carrier;
    }


    /**
     * @param Carrier|null $carrier
     * @return static
     */
    public function setCarrier(?Carrier $carrier): static
    {
        $this->carrier = $carrier;
        return $this;
    }


    /**
     * @return CarrierProduct|null
     */
    public function getCarrierProduct(): ?CarrierProduct
    {
        return $this->carrierProduct;
    }


    /**
     * @param CarrierProduct|null $carrierProduct
     * @return static
     */
    public function setCarrierProduct(?CarrierProduct $carrierProduct): static
    {
        $this->carrierProduct = $carrierProduct;
        return $this;
    }


    /**
     * @return BookingOptionRequest|null
     */
    public function getForBookingOptionRequest(): ?BookingOptionRequest
    {
        return $this->forBookingOptionRequest;
    }


    /**
     * @param BookingOptionRequest|null $forBookingOptionRequest
     * @return static
     */
    public function setForBookingOptionRequest(?BookingOptionRequest $forBookingOptionRequest): static
    {
        $this->forBookingOptionRequest = $forBookingOptionRequest;
        return $this;
    }


    /**
     * @return BookingRequest|null
     */
    public function getForBookingRequest(): ?BookingRequest
    {
        return $this->forBookingRequest;
    }


    /**
     * @param BookingRequest|null $forBookingRequest
     * @return static
     */
    public function setForBookingRequest(?BookingRequest $forBookingRequest): static
    {
        $this->forBookingRequest = $forBookingRequest;
        return $this;
    }


    /**
     * @return Price|null
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }


    /**
     * @param Price|null $price
     * @return static
     */
    public function setPrice(?Price $price): static
    {
        $this->price = $price;
        return $this;
    }


    /**
     * @return Collection <int, StationRemarks>
     */
    public function getStationRemarks(): Collection
    {
        return $this->stationRemarks;
    }


    /**
     * @param StationRemarks $stationRemarks
     * @return static
     */
    public function addStationRemarks(StationRemarks $stationRemarks): static
    {
        if (!$this->stationRemarks->contains($stationRemarks)) {
            $this->stationRemarks->add($stationRemarks);
        }
        return $this;
    }


    /**
     * @param StationRemarks $stationRemarks
     * @return static
     */
    public function removeStationRemarks(StationRemarks $stationRemarks): static
    {
        $this->stationRemarks->removeElement($stationRemarks);
        return $this;
    }


    /**
     * @return BookingOptionStatus|null
     */
    public function getStatusBookingOption(): ?BookingOptionStatus
    {
        return $this->statusBookingOption;
    }


    /**
     * @param BookingOptionStatus|null $statusBookingOption
     * @return static
     */
    public function setStatusBookingOption(?BookingOptionStatus $statusBookingOption): static
    {
        $this->statusBookingOption = $statusBookingOption;
        return $this;
    }


    /**
     * @return Collection <int, TransportLegs>
     */
    public function getTransportLegs(): Collection
    {
        return $this->transportLegs;
    }


    /**
     * @param TransportLegs $transportLegs
     * @return static
     */
    public function addTransportLegs(TransportLegs $transportLegs): static
    {
        if (!$this->transportLegs->contains($transportLegs)) {
            $this->transportLegs->add($transportLegs);
        }
        return $this;
    }


    /**
     * @param TransportLegs $transportLegs
     * @return static
     */
    public function removeTransportLegs(TransportLegs $transportLegs): static
    {
        $this->transportLegs->removeElement($transportLegs);
        return $this;
    }


    /**
     * @return UnitsPreference|null
     */
    public function getUnitsPreference(): ?UnitsPreference
    {
        return $this->unitsPreference;
    }


    /**
     * @param UnitsPreference|null $unitsPreference
     * @return static
     */
    public function setUnitsPreference(?UnitsPreference $unitsPreference): static
    {
        $this->unitsPreference = $unitsPreference;
        return $this;
    }


    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }


    /**
     * @param string|null $additionalInformation
     * @return static
     */
    public function setAdditionalInformation(?string $additionalInformation): static
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }


    public function getAlternatives(): ?array
    {
        return $this->alternatives;
    }


    /**
     * @return static
     */
    public function setAlternatives(?array $alternatives): static
    {
        $this->alternatives = $alternatives;
        return $this;
    }


    public function getOfferValidFrom(): ?\DateTime
    {
        return $this->offerValidFrom;
    }


    /**
     * @param \DateTime|null $offerValidFrom
     * @return static
     */
    public function setOfferValidFrom(?\DateTime $offerValidFrom): static
    {
        $this->offerValidFrom = $offerValidFrom;
        return $this;
    }


    public function getOfferValidTo(): ?\DateTime
    {
        return $this->offerValidTo;
    }


    /**
     * @param \DateTime|null $offerValidTo
     * @return static
     */
    public function setOfferValidTo(?\DateTime $offerValidTo): static
    {
        $this->offerValidTo = $offerValidTo;
        return $this;
    }


    public function getRequestMatch(): ?bool
    {
        return $this->requestMatch;
    }


    /**
     * @param bool|null $requestMatch
     * @return static
     */
    public function setRequestMatch(?bool $requestMatch): static
    {
        $this->requestMatch = $requestMatch;
        return $this;
    }
}
