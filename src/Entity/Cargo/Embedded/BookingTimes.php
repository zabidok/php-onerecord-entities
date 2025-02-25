<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Previously called Schedule. This object refers to times used for the Booking Option Request (preferences part of the request) or the Booking Option (times sur as LAT where there is a commitment from the carrier)
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingTimes Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingTimes
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Earliest acceptance date time (requested or proposed)
     *
     * @link https://onerecord.iata.org/ns/cargo#earliestAcceptanceTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $earliestAcceptanceTime = null;

    /**
     * Latest Acceptance time as per CargoIQ definition (requested, proposed or actual)
     *
     * @link https://onerecord.iata.org/ns/cargo#latestAcceptanceTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $latestAcceptanceTime = null;

    /**
     * Latest arrival time at destination
     *
     * @link https://onerecord.iata.org/ns/cargo#latestArrivalTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $latestArrivalTime = null;

    /**
     * Time of availability of the shipment as per CargoIQ definition
     *
     * @link https://onerecord.iata.org/ns/cargo#timeOfAvailability Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $timeOfAvailability = null;

    /**
     * Total transit time as per CargoIQ definition, expressed as a duration
     *
     * @link https://onerecord.iata.org/ns/cargo#totalTransitTime Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $totalTransitTime = null;


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


    public function getEarliestAcceptanceTime(): ?\DateTime
    {
        return $this->earliestAcceptanceTime;
    }


    /**
     * @param \DateTime|null $earliestAcceptanceTime
     * @return static
     */
    public function setEarliestAcceptanceTime(?\DateTime $earliestAcceptanceTime): static
    {
        $this->earliestAcceptanceTime = $earliestAcceptanceTime;
        return $this;
    }


    public function getLatestAcceptanceTime(): ?\DateTime
    {
        return $this->latestAcceptanceTime;
    }


    /**
     * @param \DateTime|null $latestAcceptanceTime
     * @return static
     */
    public function setLatestAcceptanceTime(?\DateTime $latestAcceptanceTime): static
    {
        $this->latestAcceptanceTime = $latestAcceptanceTime;
        return $this;
    }


    public function getLatestArrivalTime(): ?\DateTime
    {
        return $this->latestArrivalTime;
    }


    /**
     * @param \DateTime|null $latestArrivalTime
     * @return static
     */
    public function setLatestArrivalTime(?\DateTime $latestArrivalTime): static
    {
        $this->latestArrivalTime = $latestArrivalTime;
        return $this;
    }


    public function getTimeOfAvailability(): ?\DateTime
    {
        return $this->timeOfAvailability;
    }


    /**
     * @param \DateTime|null $timeOfAvailability
     * @return static
     */
    public function setTimeOfAvailability(?\DateTime $timeOfAvailability): static
    {
        $this->timeOfAvailability = $timeOfAvailability;
        return $this;
    }


    public function getTotalTransitTime(): ?string
    {
        return $this->totalTransitTime;
    }


    /**
     * @param string|null $totalTransitTime
     * @return static
     */
    public function setTotalTransitTime(?string $totalTransitTime): static
    {
        $this->totalTransitTime = $totalTransitTime;
        return $this;
    }
}
