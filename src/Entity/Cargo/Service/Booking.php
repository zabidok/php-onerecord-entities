<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Service;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsService;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Waybill;
use Zabidok\OneRecordEntities\Entity\Cargo\Distribution\BookingOptionRequest;
use Zabidok\OneRecordEntities\Entity\Cargo\Distribution\BookingRequest;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\BookingStatus;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Booking object refers to a confirmed booking
 *
 * @link https://onerecord.iata.org/ns/cargo#Booking Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Booking extends LogisticsService
{
    /**
     * Reference to the Booking Request
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingRequest Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingRequest::class)]
    protected ?BookingRequest $bookingRequest = null;

    /**
     * Status of the Booking
     *
     * @link https://onerecord.iata.org/ns/cargo#bookingStatus Ontology
     */
    #[ORM\ManyToOne(targetEntity: BookingStatus::class)]
    protected ?BookingStatus $bookingStatus = null;

    /**
     * Reference to the Waybill object
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedForWaybill Ontology
     */
    #[ORM\ManyToOne(targetEntity: Waybill::class)]
    protected ?Waybill $issuedForWaybill = null;

    /**
     * References to BookingOptionRequests that request to update the Booking
     *
     * @link https://onerecord.iata.org/ns/cargo#updateBookingOptionRequests Ontology
     */
    #[ORM\ManyToMany(targetEntity: BookingOptionRequest::class)]
    #[ORM\JoinTable(
        name: 'booking_bookingoptionrequest',
        joinColumns: [new ORM\JoinColumn(name: 'booking_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [
        new ORM\JoinColumn(name: 'bookingoptionrequest_id', referencedColumnName: 'id', onDelete: 'CASCADE'),
    ],
    )]
    protected Collection $updateBookingOptionRequests;

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
        $this->updateBookingOptionRequests = new ArrayCollection();
    }


    /**
     * @return BookingRequest|null
     */
    public function getBookingRequest(): ?BookingRequest
    {
        return $this->bookingRequest;
    }


    /**
     * @param BookingRequest|null $bookingRequest
     * @return static
     */
    public function setBookingRequest(?BookingRequest $bookingRequest): static
    {
        $this->bookingRequest = $bookingRequest;
        return $this;
    }


    /**
     * @return BookingStatus|null
     */
    public function getBookingStatus(): ?BookingStatus
    {
        return $this->bookingStatus;
    }


    /**
     * @param BookingStatus|null $bookingStatus
     * @return static
     */
    public function setBookingStatus(?BookingStatus $bookingStatus): static
    {
        $this->bookingStatus = $bookingStatus;
        return $this;
    }


    /**
     * @return Waybill|null
     */
    public function getIssuedForWaybill(): ?Waybill
    {
        return $this->issuedForWaybill;
    }


    /**
     * @param Waybill|null $issuedForWaybill
     * @return static
     */
    public function setIssuedForWaybill(?Waybill $issuedForWaybill): static
    {
        $this->issuedForWaybill = $issuedForWaybill;
        return $this;
    }


    /**
     * @return Collection <int, BookingOptionRequest>
     */
    public function getUpdateBookingOptionRequests(): Collection
    {
        return $this->updateBookingOptionRequests;
    }


    /**
     * @param BookingOptionRequest $bookingOptionRequest
     * @return static
     */
    public function addUpdateBookingOptionRequests(BookingOptionRequest $bookingOptionRequest): static
    {
        if (!$this->updateBookingOptionRequests->contains($bookingOptionRequest)) {
            $this->updateBookingOptionRequests->add($bookingOptionRequest);
        }
        return $this;
    }


    /**
     * @param BookingOptionRequest $bookingOptionRequest
     * @return static
     */
    public function removeUpdateBookingOptionRequests(BookingOptionRequest $bookingOptionRequest): static
    {
        $this->updateBookingOptionRequests->removeElement($bookingOptionRequest);
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
