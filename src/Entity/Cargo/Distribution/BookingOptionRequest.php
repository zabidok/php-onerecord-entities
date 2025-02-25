<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\BookingPreferences;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\BookingTimes;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CarrierProduct;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\UnitsPreference;
use Zabidok\OneRecordEntities\Entity\Cargo\Service\Booking;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Request object, refers to the Quote request or Booking request
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingOptionRequest Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingOptionRequest extends LogisticsObject
{
    /**
     * Reference to all Booking Options
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingOptions Ontology
     */
    #[ORM\OneToMany(targetEntity: BookingOption::class, mappedBy: 'forBookingOptionRequest', cascade: ['persist', 'remove'])]
    protected Collection $bookingOptions;

    /**
     * Reference to the Booking preferences
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingPreference Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingPreferences::class)]
    protected ?BookingPreferences $bookingPreference = null;

    /**
     * Reference to the BookingShipment if required
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingShipmentDetails Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingShipment::class)]
    protected ?BookingShipment $bookingShipmentDetails = null;

    /**
     * Reference to the Booking to update
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingToUpdate Ontology
     */
    #[ORM\ManyToOne(targetEntity: Booking::class, inversedBy: 'updateBookingOptionRequests')]
    protected ?Booking $bookingToUpdate = null;

    /**
     * Reference to the Carrier product if known
     *
     * @link https://onerecord.iata.org/ns/cargo#carrierProduct Ontology
     */
    #[ORM\ManyToOne(targetEntity: CarrierProduct::class)]
    protected ?CarrierProduct $carrierProduct = null;

    /**
     * Information about other Parties involved depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'bookingoptionrequest_party',
        joinColumns: [new ORM\JoinColumn(name: 'bookingoptionrequest_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedParties;

    /**
     * Schedule preferences of the request
     *
     * @link https://onerecord.iata.org/ns/cargo#timePreferences Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingTimes::class)]
    protected ?BookingTimes $timePreferences = null;

    /**
     * Reference to the Transport Legs of the proposed routing
     *
     * @link https://onerecord.iata.org/ns/cargo#transportLegs Ontology
     */
    #[ORM\ManyToMany(targetEntity: TransportLegs::class)]
    #[ORM\JoinTable(
        name: 'bookingoptionrequest_transportlegs',
        joinColumns: [new ORM\JoinColumn(name: 'bookingoptionrequest_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
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
     * Indication if shipper is a Known Shipper as per TSA grant
     *
     * @link https://onerecord.iata.org/ns/cargo#knownShipper Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $knownShipper = null;


    public function __construct()
    {
        parent::__construct();
        $this->bookingOptions = new ArrayCollection();
        $this->involvedParties = new ArrayCollection();
        $this->transportLegs = new ArrayCollection();
    }


    /**
     * @return Collection <int, BookingOption>
     */
    public function getBookingOptions(): Collection
    {
        return $this->bookingOptions;
    }


    /**
     * @param BookingOption $bookingOption
     * @return static
     */
    public function addBookingOptions(BookingOption $bookingOption): static
    {
        if (!$this->bookingOptions->contains($bookingOption)) {
            $this->bookingOptions->add($bookingOption);
            $bookingOption->setForBookingOptionRequest($this);
        }
        return $this;
    }


    /**
     * @param BookingOption $bookingOption
     * @return static
     */
    public function removeBookingOptions(BookingOption $bookingOption): static
    {
        if ($this->bookingOptions->removeElement($bookingOption)) {
            if ($bookingOption->getForBookingOptionRequest() === $this ) {
                $bookingOption->setForBookingOptionRequest(null);
            }
        }
        return $this;
    }


    /**
     * @return BookingPreferences|null
     */
    public function getBookingPreference(): ?BookingPreferences
    {
        return $this->bookingPreference;
    }


    /**
     * @param BookingPreferences|null $bookingPreference
     * @return static
     */
    public function setBookingPreference(?BookingPreferences $bookingPreference): static
    {
        $this->bookingPreference = $bookingPreference;
        return $this;
    }


    /**
     * @return BookingShipment|null
     */
    public function getBookingShipmentDetails(): ?BookingShipment
    {
        return $this->bookingShipmentDetails;
    }


    /**
     * @param BookingShipment|null $bookingShipmentDetails
     * @return static
     */
    public function setBookingShipmentDetails(?BookingShipment $bookingShipmentDetails): static
    {
        $this->bookingShipmentDetails = $bookingShipmentDetails;
        return $this;
    }


    /**
     * @return Booking|null
     */
    public function getBookingToUpdate(): ?Booking
    {
        return $this->bookingToUpdate;
    }


    /**
     * @param Booking|null $bookingToUpdate
     * @return static
     */
    public function setBookingToUpdate(?Booking $bookingToUpdate): static
    {
        $this->bookingToUpdate = $bookingToUpdate;
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
     * @return Collection <int, Party>
     */
    public function getInvolvedParties(): Collection
    {
        return $this->involvedParties;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function addInvolvedParties(Party $party): static
    {
        if (!$this->involvedParties->contains($party)) {
            $this->involvedParties->add($party);
        }
        return $this;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function removeInvolvedParties(Party $party): static
    {
        $this->involvedParties->removeElement($party);
        return $this;
    }


    /**
     * @return BookingTimes|null
     */
    public function getTimePreferences(): ?BookingTimes
    {
        return $this->timePreferences;
    }


    /**
     * @param BookingTimes|null $timePreferences
     * @return static
     */
    public function setTimePreferences(?BookingTimes $timePreferences): static
    {
        $this->timePreferences = $timePreferences;
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


    public function getKnownShipper(): ?bool
    {
        return $this->knownShipper;
    }


    /**
     * @param bool|null $knownShipper
     * @return static
     */
    public function setKnownShipper(?bool $knownShipper): static
    {
        $this->knownShipper = $knownShipper;
        return $this;
    }
}
