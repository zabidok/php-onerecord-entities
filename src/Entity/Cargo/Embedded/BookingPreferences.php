<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\AircraftPossibilityCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * BookingPreferences details
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingPreferences Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingPreferences
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Type of aircraft to be used if any specific requirements (e.g. Pure freighter, etc.)
     *
     * @link https://onerecord.iata.org/ns/cargo#aircraftPossibilityCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: AircraftPossibilityCode::class)]
    protected ?AircraftPossibilityCode $aircraftPossibilityCode = null;

    /**
     * Locations of excluded Via Points
     *
     * @link https://onerecord.iata.org/ns/cargo#excludedViaPoints Ontology
     */
    #[ORM\ManyToMany(targetEntity: Location::class)]
    #[ORM\JoinTable(
        name: 'bookingpreferences_location_excluded',
        joinColumns: [new ORM\JoinColumn(name: 'bookingpreferences_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'location_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $excludedViaPoints;

    /**
     * Locations or stations to included in the routing
     *
     * @link https://onerecord.iata.org/ns/cargo#includedViaPoints Ontology
     */
    #[ORM\ManyToMany(targetEntity: Location::class)]
    #[ORM\JoinTable(
        name: 'bookingpreferences_location_included',
        joinColumns: [new ORM\JoinColumn(name: 'bookingpreferences_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'location_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $includedViaPoints;

    /**
     * Maximum number of segments for the transportation of the goods. 1 means direct flight
     *
     * @link https://onerecord.iata.org/ns/cargo#maxSegments Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $maxSegments = null;

    /**
     * When part of the Request it refers to the preferred Transport ID from the customer. When part of the BookingOption (offer or actual booking) it refers to the expected Transport ID or flight
     *
     * @link https://onerecord.iata.org/ns/cargo#preferredTransportId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $preferredTransportId = null;

    /**
     * Reference to a price reference if existing (e.g. Allotment number, contract reference, etc.)
     *
     * @link https://onerecord.iata.org/ns/cargo#priceReferenceId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $priceReferenceId = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
        $this->excludedViaPoints = new ArrayCollection();
        $this->includedViaPoints = new ArrayCollection();
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


    /**
     * @return AircraftPossibilityCode|null
     */
    public function getAircraftPossibilityCode(): ?AircraftPossibilityCode
    {
        return $this->aircraftPossibilityCode;
    }


    /**
     * @param AircraftPossibilityCode|null $aircraftPossibilityCode
     * @return static
     */
    public function setAircraftPossibilityCode(?AircraftPossibilityCode $aircraftPossibilityCode): static
    {
        $this->aircraftPossibilityCode = $aircraftPossibilityCode;
        return $this;
    }


    /**
     * @return Collection <int, Location>
     */
    public function getExcludedViaPoints(): Collection
    {
        return $this->excludedViaPoints;
    }


    /**
     * @param Location $location
     * @return static
     */
    public function addExcludedViaPoints(Location $location): static
    {
        if (!$this->excludedViaPoints->contains($location)) {
            $this->excludedViaPoints->add($location);
        }
        return $this;
    }


    /**
     * @param Location $location
     * @return static
     */
    public function removeExcludedViaPoints(Location $location): static
    {
        $this->excludedViaPoints->removeElement($location);
        return $this;
    }


    /**
     * @return Collection <int, Location>
     */
    public function getIncludedViaPoints(): Collection
    {
        return $this->includedViaPoints;
    }


    /**
     * @param Location $location
     * @return static
     */
    public function addIncludedViaPoints(Location $location): static
    {
        if (!$this->includedViaPoints->contains($location)) {
            $this->includedViaPoints->add($location);
        }
        return $this;
    }


    /**
     * @param Location $location
     * @return static
     */
    public function removeIncludedViaPoints(Location $location): static
    {
        $this->includedViaPoints->removeElement($location);
        return $this;
    }


    public function getMaxSegments(): ?int
    {
        return $this->maxSegments;
    }


    /**
     * @param int|null $maxSegments
     * @return static
     */
    public function setMaxSegments(?int $maxSegments): static
    {
        $this->maxSegments = $maxSegments;
        return $this;
    }


    public function getPreferredTransportId(): ?string
    {
        return $this->preferredTransportId;
    }


    /**
     * @param string|null $preferredTransportId
     * @return static
     */
    public function setPreferredTransportId(?string $preferredTransportId): static
    {
        $this->preferredTransportId = $preferredTransportId;
        return $this;
    }


    public function getPriceReferenceId(): ?string
    {
        return $this->priceReferenceId;
    }


    /**
     * @param string|null $priceReferenceId
     * @return static
     */
    public function setPriceReferenceId(?string $priceReferenceId): static
    {
        $this->priceReferenceId = $priceReferenceId;
        return $this;
    }
}
