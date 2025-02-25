<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Service\Booking;
use Doctrine\ORM\Mapping as ORM;

/**
 * A party, usually the freight forwarder, creates the BookingRequest in order to confirm the booking to the Carrier
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingRequest Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingRequest extends LogisticsObject
{
    /**
     * Reference to the Booking
     *
     * @link https://onerecord.iata.org/ns/cargo#booking Ontology
     */
    #[ORM\OneToOne(targetEntity: Booking::class)]
    protected ?Booking $booking = null;

    /**
     * Reference to the BookingOption the LogisticsObject is detailing
     *
     * @link https://onerecord.iata.org/ns/cargo#forBookingOption Ontology
     */
    #[ORM\OneToOne(targetEntity: BookingOption::class)]
    protected ?BookingOption $forBookingOption = null;

    /**
     * House or Master Waybill unique identifier
     *
     * @link https://onerecord.iata.org/ns/cargo#waybillNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $waybillNumber = null;

    /**
     * Prefix used for the Waybill Number. Refer to IATA Airlines Codes
     *
     * @link https://onerecord.iata.org/ns/cargo#waybillPrefix Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $waybillPrefix = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Booking|null
     */
    public function getBooking(): ?Booking
    {
        return $this->booking;
    }


    /**
     * @param Booking|null $booking
     * @return static
     */
    public function setBooking(?Booking $booking): static
    {
        $this->booking = $booking;
        return $this;
    }


    /**
     * @return BookingOption|null
     */
    public function getForBookingOption(): ?BookingOption
    {
        return $this->forBookingOption;
    }


    /**
     * @param BookingOption|null $forBookingOption
     * @return static
     */
    public function setForBookingOption(?BookingOption $forBookingOption): static
    {
        $this->forBookingOption = $forBookingOption;
        return $this;
    }


    public function getWaybillNumber(): ?string
    {
        return $this->waybillNumber;
    }


    /**
     * @param string|null $waybillNumber
     * @return static
     */
    public function setWaybillNumber(?string $waybillNumber): static
    {
        $this->waybillNumber = $waybillNumber;
        return $this;
    }


    public function getWaybillPrefix(): ?string
    {
        return $this->waybillPrefix;
    }


    /**
     * @param string|null $waybillPrefix
     * @return static
     */
    public function setWaybillPrefix(?string $waybillPrefix): static
    {
        $this->waybillPrefix = $waybillPrefix;
        return $this;
    }
}
