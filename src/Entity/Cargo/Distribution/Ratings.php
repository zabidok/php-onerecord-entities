<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Ranges;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ChargeIdentifier;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\EntitlementCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\OtherChargeCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\PrepaidCollectIndicator;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ratings details
 *
 * @link https://onerecord.iata.org/ns/cargo#Ratings Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Ratings extends LogisticsObject
{
    /**
     * Billing charge identifiers to be used for CASS. Refer to CargoXML Code List 1.33
     *
     * @link https://onerecord.iata.org/ns/cargo#billingChargeIdentifier Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ChargeIdentifier::class)]
    protected ?ChargeIdentifier $billingChargeIdentifier = null;

    /**
     * Indicates if charge is prepaid or collect (P, C)
     *
     * @link https://onerecord.iata.org/ns/cargo#chargePaymentType Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: PrepaidCollectIndicator::class)]
    protected ?PrepaidCollectIndicator $chargePaymentType = null;

    /**
     * Charge type related to amount total as per bullet points 2/21 - data elements 24A - 3B  from AWB
     *
     * @link https://onerecord.iata.org/ns/cargo#chargeType Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ChargeIdentifier::class)]
    protected ?ChargeIdentifier $chargeType = null;

    /**
     * Entitlement code to define if charges are Due carrier (C) or Due agent (A). Refer to CXML Code List 1.3
     *
     * @link https://onerecord.iata.org/ns/cargo#entitlement Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: EntitlementCode::class)]
    protected ?EntitlementCode $entitlement = null;

    /**
     * Reference to the Prices based on this Ratings
     *
     * @link https://onerecord.iata.org/ns/cargo#forPrices Ontology
     */
    #[ORM\OneToMany(targetEntity: Price::class, mappedBy: 'ratings', cascade: ['persist', 'remove'])]
    protected Collection $forPrices;

    /**
     * Refer to CargoXML Code List 1.2 for Other Charges
     *
     * @link https://onerecord.iata.org/ns/cargo#otherChargeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: OtherChargeCode::class)]
    protected ?OtherChargeCode $otherChargeCode = null;

    /**
     * Reference to the ranges
     *
     * @link https://onerecord.iata.org/ns/cargo#ranges Ontology
     */
    #[ORM\ManyToMany(targetEntity: Ranges::class)]
    #[ORM\JoinTable(
        name: 'ratings_ranges',
        joinColumns: [new ORM\JoinColumn(name: 'ratings_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'ranges_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $ranges;

    /**
     * IATA 3-letter city code of the rate combination point as defined in TACT
     *
     * @link https://onerecord.iata.org/ns/cargo#rcp Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $rcp = null;

    /**
     * Description of the charge e.g. Airfreight, fuel, etc.
     *
     * @link https://onerecord.iata.org/ns/cargo#chargeDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $chargeDescription = null;

    /**
     * Reference to a price reference if existing (e.g. Allotment number, contract reference, etc.)
     *
     * @link https://onerecord.iata.org/ns/cargo#priceReferenceId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $priceReferenceId = null;

    /**
     * Specification of the price e.g. Street, Group, Spot, etc.
     *
     * @link https://onerecord.iata.org/ns/cargo#priceSpecification Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $priceSpecification = null;

    /**
     * Quantity for the charge if applicable
     *
     * @link https://onerecord.iata.org/ns/cargo#quantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $quantity = null;

    /**
     * Subtotal of the charge
     *
     * @link https://onerecord.iata.org/ns/cargo#subTotal Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $subTotal = null;


    public function __construct()
    {
        parent::__construct();
        $this->forPrices = new ArrayCollection();
        $this->ranges = new ArrayCollection();
    }


    /**
     * @return ChargeIdentifier|null
     */
    public function getBillingChargeIdentifier(): ?ChargeIdentifier
    {
        return $this->billingChargeIdentifier;
    }


    /**
     * @param ChargeIdentifier|null $billingChargeIdentifier
     * @return static
     */
    public function setBillingChargeIdentifier(?ChargeIdentifier $billingChargeIdentifier): static
    {
        $this->billingChargeIdentifier = $billingChargeIdentifier;
        return $this;
    }


    /**
     * @return PrepaidCollectIndicator|null
     */
    public function getChargePaymentType(): ?PrepaidCollectIndicator
    {
        return $this->chargePaymentType;
    }


    /**
     * @param PrepaidCollectIndicator|null $chargePaymentType
     * @return static
     */
    public function setChargePaymentType(?PrepaidCollectIndicator $chargePaymentType): static
    {
        $this->chargePaymentType = $chargePaymentType;
        return $this;
    }


    /**
     * @return ChargeIdentifier|null
     */
    public function getChargeType(): ?ChargeIdentifier
    {
        return $this->chargeType;
    }


    /**
     * @param ChargeIdentifier|null $chargeType
     * @return static
     */
    public function setChargeType(?ChargeIdentifier $chargeType): static
    {
        $this->chargeType = $chargeType;
        return $this;
    }


    /**
     * @return EntitlementCode|null
     */
    public function getEntitlement(): ?EntitlementCode
    {
        return $this->entitlement;
    }


    /**
     * @param EntitlementCode|null $entitlement
     * @return static
     */
    public function setEntitlement(?EntitlementCode $entitlement): static
    {
        $this->entitlement = $entitlement;
        return $this;
    }


    /**
     * @return Collection <int, Price>
     */
    public function getForPrices(): Collection
    {
        return $this->forPrices;
    }


    /**
     * @param Price $price
     * @return static
     */
    public function addForPrices(Price $price): static
    {
        if (!$this->forPrices->contains($price)) {
            $this->forPrices->add($price);
            $price->setRatings($this);
        }
        return $this;
    }


    /**
     * @param Price $price
     * @return static
     */
    public function removeForPrices(Price $price): static
    {
        if ($this->forPrices->removeElement($price)) {
            if ($price->getRatings() === $this ) {
                $price->setRatings(null);
            }
        }
        return $this;
    }


    /**
     * @return OtherChargeCode|null
     */
    public function getOtherChargeCode(): ?OtherChargeCode
    {
        return $this->otherChargeCode;
    }


    /**
     * @param OtherChargeCode|null $otherChargeCode
     * @return static
     */
    public function setOtherChargeCode(?OtherChargeCode $otherChargeCode): static
    {
        $this->otherChargeCode = $otherChargeCode;
        return $this;
    }


    /**
     * @return Collection <int, Ranges>
     */
    public function getRanges(): Collection
    {
        return $this->ranges;
    }


    /**
     * @param Ranges $ranges
     * @return static
     */
    public function addRanges(Ranges $ranges): static
    {
        if (!$this->ranges->contains($ranges)) {
            $this->ranges->add($ranges);
        }
        return $this;
    }


    /**
     * @param Ranges $ranges
     * @return static
     */
    public function removeRanges(Ranges $ranges): static
    {
        $this->ranges->removeElement($ranges);
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getRcp(): ?CodeListElement
    {
        return $this->rcp;
    }


    /**
     * @param CodeListElement|null $rcp
     * @return static
     */
    public function setRcp(?CodeListElement $rcp): static
    {
        $this->rcp = $rcp;
        return $this;
    }


    public function getChargeDescription(): ?string
    {
        return $this->chargeDescription;
    }


    /**
     * @param string|null $chargeDescription
     * @return static
     */
    public function setChargeDescription(?string $chargeDescription): static
    {
        $this->chargeDescription = $chargeDescription;
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


    public function getPriceSpecification(): ?string
    {
        return $this->priceSpecification;
    }


    /**
     * @param string|null $priceSpecification
     * @return static
     */
    public function setPriceSpecification(?string $priceSpecification): static
    {
        $this->priceSpecification = $priceSpecification;
        return $this;
    }


    public function getQuantity(): ?float
    {
        return $this->quantity;
    }


    /**
     * @param float|null $quantity
     * @return static
     */
    public function setQuantity(?float $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }


    public function getSubTotal(): ?float
    {
        return $this->subTotal;
    }


    /**
     * @param float|null $subTotal
     * @return static
     */
    public function setSubTotal(?float $subTotal): static
    {
        $this->subTotal = $subTotal;
        return $this;
    }
}
