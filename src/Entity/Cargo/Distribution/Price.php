<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ChargeCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Price associated to the offer/booking
 *
 * @link https://onerecord.iata.org/ns/cargo#Price Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Price extends LogisticsObject
{
    /**
     * Charge code, refer to CargoXML Code List 1.1
     *
     * @link https://onerecord.iata.org/ns/cargo#chargeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ChargeCode::class)]
    protected ?ChargeCode $chargeCode = null;

    /**
     * Reference to the BookingOption the LogisticsObject is detailing
     *
     * @link https://onerecord.iata.org/ns/cargo#forBookingOption Ontology
     */
    #[ORM\OneToOne(targetEntity: BookingOption::class)]
    protected ?BookingOption $forBookingOption = null;

    /**
     * Rating used for pricing
     *
     * @link https://onerecord.iata.org/ns/cargo#ratings Ontology
     */
    #[ORM\ManyToMany(targetEntity: Ratings::class)]
    #[ORM\JoinTable(
        name: 'price_ratings',
        joinColumns: [new ORM\JoinColumn(name: 'price_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'ratings_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $ratings;

    /**
     * Total price
     *
     * @link https://onerecord.iata.org/ns/cargo#grandTotal Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $grandTotal = null;


    public function __construct()
    {
        parent::__construct();
        $this->ratings = new ArrayCollection();
    }


    /**
     * @return ChargeCode|null
     */
    public function getChargeCode(): ?ChargeCode
    {
        return $this->chargeCode;
    }


    /**
     * @param ChargeCode|null $chargeCode
     * @return static
     */
    public function setChargeCode(?ChargeCode $chargeCode): static
    {
        $this->chargeCode = $chargeCode;
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


    /**
     * @return Collection <int, Ratings>
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }


    /**
     * @param Ratings $ratings
     * @return static
     */
    public function addRatings(Ratings $ratings): static
    {
        if (!$this->ratings->contains($ratings)) {
            $this->ratings->add($ratings);
        }
        return $this;
    }


    /**
     * @param Ratings $ratings
     * @return static
     */
    public function removeRatings(Ratings $ratings): static
    {
        $this->ratings->removeElement($ratings);
        return $this;
    }


    public function getGrandTotal(): ?float
    {
        return $this->grandTotal;
    }


    /**
     * @param float|null $grandTotal
     * @return static
     */
    public function setGrandTotal(?float $grandTotal): static
    {
        $this->grandTotal = $grandTotal;
        return $this;
    }
}
