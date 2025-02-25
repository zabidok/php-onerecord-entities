<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAction;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Address;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Geolocation;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Location describes a physical location, e.g. an airport, a warehouse or a truck deck
 *
 * @link https://onerecord.iata.org/ns/cargo#Location Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Location extends PhysicalLogisticsObject
{
    /**
     * Address details
     *
     * @link https://onerecord.iata.org/ns/cargo#address Ontology
     */
    #[ORM\ManyToOne(targetEntity: Address::class)]
    protected ?Address $address = null;

    /**
     * Geolocation details
     *
     * @link https://onerecord.iata.org/ns/cargo#geolocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Geolocation::class)]
    protected ?Geolocation $geolocation = null;

    /**
     * Location code of airport, freight terminal, seaport, rail station. UN/LOCODE city code (5 letter) or IATA airport code (3 letter)
     *
     * @link https://onerecord.iata.org/ns/cargo#locationCodes Ontology
     */
    #[ORM\ManyToMany(targetEntity: CodeListElement::class)]
    #[ORM\JoinTable(
        name: 'location_codelistelement',
        joinColumns: [new ORM\JoinColumn(name: 'location_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'codelistelement_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $locationCodes;

    /**
     * References to the Actions happening at the Location
     *
     * @link https://onerecord.iata.org/ns/cargo#onsiteActions Ontology
     */
    #[ORM\ManyToMany(targetEntity: LogisticsAction::class)]
    #[ORM\JoinTable(
        name: 'location_logisticsaction',
        joinColumns: [new ORM\JoinColumn(name: 'location_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'logisticsaction_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $onsiteActions;

    /**
     * Reference to the Location this is a Sublocation of
     *
     * @link https://onerecord.iata.org/ns/cargo#subLocationOf Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class, inversedBy: 'subLocations')]
    protected ?Location $subLocationOf = null;

    /**
     * References to Sublocations that describe the Location in more detail
     *
     * @link https://onerecord.iata.org/ns/cargo#subLocations Ontology
     */
    #[ORM\OneToMany(targetEntity: Location::class, mappedBy: 'subLocationOf', cascade: ['persist', 'remove'])]
    protected Collection $subLocations;

    /**
     * Full name of the location
     *
     * @link https://onerecord.iata.org/ns/cargo#locationName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $locationName = null;

    /**
     * Location type - e.g. Airport, Freight terminal, Rail station, Seaport, etc
     *
     * @link https://onerecord.iata.org/ns/cargo#locationType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $locationType = null;


    public function __construct()
    {
        parent::__construct();
        $this->locationCodes = new ArrayCollection();
        $this->onsiteActions = new ArrayCollection();
        $this->subLocations = new ArrayCollection();
    }


    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }


    /**
     * @param Address|null $address
     * @return static
     */
    public function setAddress(?Address $address): static
    {
        $this->address = $address;
        return $this;
    }


    /**
     * @return Geolocation|null
     */
    public function getGeolocation(): ?Geolocation
    {
        return $this->geolocation;
    }


    /**
     * @param Geolocation|null $geolocation
     * @return static
     */
    public function setGeolocation(?Geolocation $geolocation): static
    {
        $this->geolocation = $geolocation;
        return $this;
    }


    /**
     * @return Collection <int, CodeListElement>
     */
    public function getLocationCodes(): Collection
    {
        return $this->locationCodes;
    }


    /**
     * @param CodeListElement $codeListElement
     * @return static
     */
    public function addLocationCodes(CodeListElement $codeListElement): static
    {
        if (!$this->locationCodes->contains($codeListElement)) {
            $this->locationCodes->add($codeListElement);
        }
        return $this;
    }


    /**
     * @param CodeListElement $codeListElement
     * @return static
     */
    public function removeLocationCodes(CodeListElement $codeListElement): static
    {
        $this->locationCodes->removeElement($codeListElement);
        return $this;
    }


    /**
     * @return Collection <int, LogisticsAction>
     */
    public function getOnsiteActions(): Collection
    {
        return $this->onsiteActions;
    }


    /**
     * @param LogisticsAction $logisticsAction
     * @return static
     */
    public function addOnsiteActions(LogisticsAction $logisticsAction): static
    {
        if (!$this->onsiteActions->contains($logisticsAction)) {
            $this->onsiteActions->add($logisticsAction);
        }
        return $this;
    }


    /**
     * @param LogisticsAction $logisticsAction
     * @return static
     */
    public function removeOnsiteActions(LogisticsAction $logisticsAction): static
    {
        $this->onsiteActions->removeElement($logisticsAction);
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getSubLocationOf(): ?Location
    {
        return $this->subLocationOf;
    }


    /**
     * @param Location|null $subLocationOf
     * @return static
     */
    public function setSubLocationOf(?Location $subLocationOf): static
    {
        $this->subLocationOf = $subLocationOf;
        return $this;
    }


    /**
     * @return Collection <int, Location>
     */
    public function getSubLocations(): Collection
    {
        return $this->subLocations;
    }


    /**
     * @param Location $location
     * @return static
     */
    public function addSubLocations(Location $location): static
    {
        if (!$this->subLocations->contains($location)) {
            $this->subLocations->add($location);
            $location->setSubLocationOf($this);
        }
        return $this;
    }


    /**
     * @param Location $location
     * @return static
     */
    public function removeSubLocations(Location $location): static
    {
        if ($this->subLocations->removeElement($location)) {
            if ($location->getSubLocationOf() === $this ) {
                $location->setSubLocationOf(null);
            }
        }
        return $this;
    }


    public function getLocationName(): ?string
    {
        return $this->locationName;
    }


    /**
     * @param string|null $locationName
     * @return static
     */
    public function setLocationName(?string $locationName): static
    {
        $this->locationName = $locationName;
        return $this;
    }


    public function getLocationType(): ?string
    {
        return $this->locationType;
    }


    /**
     * @param string|null $locationType
     * @return static
     */
    public function setLocationType(?string $locationType): static
    {
        $this->locationType = $locationType;
        return $this;
    }
}
