<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\BillingSettlement;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Waybill;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Adjustments;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CurrencyValue;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\AWBUseIndicator;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * In the context of CASS2. process, BillingDetails object is used to integrate specific Billing and Settlement data requirements
 *
 * @link https://onerecord.iata.org/ns/cargo#BillingDetails Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BillingDetails extends LogisticsObject
{
    /**
     * Information about Adjustments performed on the BillingDetails
     *
     * @link https://onerecord.iata.org/ns/cargo#adjustments Ontology
     */
    #[ORM\ManyToMany(targetEntity: Adjustments::class)]
    #[ORM\JoinTable(
        name: 'billingdetails_adjustments',
        joinColumns: [new ORM\JoinColumn(name: 'billingdetails_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'adjustments_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $adjustments;

    /**
     * It must either contain the values of R for Revenue AWB, V for Void AWB or S for Service AWB.
     *
     * @link https://onerecord.iata.org/ns/cargo#awbUseIndicator Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: AWBUseIndicator::class)]
    protected ?AWBUseIndicator $awbUseIndicator = null;

    /**
     * Reference to the Waybill
     *
     * @link https://onerecord.iata.org/ns/cargo#detailedWaybill Ontology
     */
    #[ORM\ManyToOne(targetEntity: Waybill::class)]
    protected ?Waybill $detailedWaybill = null;

    /**
     * Tax due Agent (VAT/GST on Commission). Total VAT/TAX amount payable by airline to agent
     *
     * @link https://onerecord.iata.org/ns/cargo#taxDueAgent Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $taxDueAgent = null;

    /**
     * Tax due Airline (as per AWB, or VAT/GST as per invoice). Total VAT/TAX amount payable by agent to airline
     *
     * @link https://onerecord.iata.org/ns/cargo#taxDueAirline Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $taxDueAirline = null;

    /**
     * The Date AWB Acceptance should be the same as the Date AWB Delivery. (beginning of the process)
     *
     * @link https://onerecord.iata.org/ns/cargo#awbAcceptanceDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $awbAcceptanceDate = null;

    /**
     * The Date AWB Delivery is also used as the AWB Execution date which will determine which billing period it will be processed and billed in.
     *
     * @link https://onerecord.iata.org/ns/cargo#awbDeliveryDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $awbDeliveryDate = null;

    /**
     * The AWB execution date determines which billing period the document will be processed and billed in.
     *
     * @link https://onerecord.iata.org/ns/cargo#awbExecutionDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $awbExecutionDate = null;

    /**
     * The commission amount in favour of the Cargo Agent/Associate, applicable for the shipment concerned
     *
     * @link https://onerecord.iata.org/ns/cargo#commission Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $commission = null;

    /**
     * Indicates if commission is applied. Boolean
     *
     * @link https://onerecord.iata.org/ns/cargo#commissionIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $commissionIndicator = null;

    /**
     * The commission percentage in favour of the Cargo Agent/Associate, applicable for the shipment concerned
     *
     * @link https://onerecord.iata.org/ns/cargo#commissionPercentage Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $commissionPercentage = null;

    /**
     * This is used as a discount to the “official” transportation charge on AWB to arrive at actual selling price
     *
     * @link https://onerecord.iata.org/ns/cargo#discount Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $discount = null;

    /**
     * The Rate at which the Air Waybill Amount has been multiplied to arrive at the amount of settlement.
     *
     * @link https://onerecord.iata.org/ns/cargo#exchangeRate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $exchangeRate = null;

    /**
     * Number of corrections to CASS records
     *
     * @link https://onerecord.iata.org/ns/cargo#nbCorrections Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $nbCorrections = null;

    /**
     * Indicate if subject to VAT (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#vatIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $vatIndicator = null;


    public function __construct()
    {
        parent::__construct();
        $this->adjustments = new ArrayCollection();
    }


    /**
     * @return Collection <int, Adjustments>
     */
    public function getAdjustments(): Collection
    {
        return $this->adjustments;
    }


    /**
     * @param Adjustments $adjustments
     * @return static
     */
    public function addAdjustments(Adjustments $adjustments): static
    {
        if (!$this->adjustments->contains($adjustments)) {
            $this->adjustments->add($adjustments);
        }
        return $this;
    }


    /**
     * @param Adjustments $adjustments
     * @return static
     */
    public function removeAdjustments(Adjustments $adjustments): static
    {
        $this->adjustments->removeElement($adjustments);
        return $this;
    }


    /**
     * @return AWBUseIndicator|null
     */
    public function getAwbUseIndicator(): ?AWBUseIndicator
    {
        return $this->awbUseIndicator;
    }


    /**
     * @param AWBUseIndicator|null $awbUseIndicator
     * @return static
     */
    public function setAwbUseIndicator(?AWBUseIndicator $awbUseIndicator): static
    {
        $this->awbUseIndicator = $awbUseIndicator;
        return $this;
    }


    /**
     * @return Waybill|null
     */
    public function getDetailedWaybill(): ?Waybill
    {
        return $this->detailedWaybill;
    }


    /**
     * @param Waybill|null $detailedWaybill
     * @return static
     */
    public function setDetailedWaybill(?Waybill $detailedWaybill): static
    {
        $this->detailedWaybill = $detailedWaybill;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getTaxDueAgent(): ?CurrencyValue
    {
        return $this->taxDueAgent;
    }


    /**
     * @param CurrencyValue|null $taxDueAgent
     * @return static
     */
    public function setTaxDueAgent(?CurrencyValue $taxDueAgent): static
    {
        $this->taxDueAgent = $taxDueAgent;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getTaxDueAirline(): ?CurrencyValue
    {
        return $this->taxDueAirline;
    }


    /**
     * @param CurrencyValue|null $taxDueAirline
     * @return static
     */
    public function setTaxDueAirline(?CurrencyValue $taxDueAirline): static
    {
        $this->taxDueAirline = $taxDueAirline;
        return $this;
    }


    public function getAwbAcceptanceDate(): ?\DateTime
    {
        return $this->awbAcceptanceDate;
    }


    /**
     * @param \DateTime|null $awbAcceptanceDate
     * @return static
     */
    public function setAwbAcceptanceDate(?\DateTime $awbAcceptanceDate): static
    {
        $this->awbAcceptanceDate = $awbAcceptanceDate;
        return $this;
    }


    public function getAwbDeliveryDate(): ?\DateTime
    {
        return $this->awbDeliveryDate;
    }


    /**
     * @param \DateTime|null $awbDeliveryDate
     * @return static
     */
    public function setAwbDeliveryDate(?\DateTime $awbDeliveryDate): static
    {
        $this->awbDeliveryDate = $awbDeliveryDate;
        return $this;
    }


    public function getAwbExecutionDate(): ?\DateTime
    {
        return $this->awbExecutionDate;
    }


    /**
     * @param \DateTime|null $awbExecutionDate
     * @return static
     */
    public function setAwbExecutionDate(?\DateTime $awbExecutionDate): static
    {
        $this->awbExecutionDate = $awbExecutionDate;
        return $this;
    }


    public function getCommission(): ?float
    {
        return $this->commission;
    }


    /**
     * @param float|null $commission
     * @return static
     */
    public function setCommission(?float $commission): static
    {
        $this->commission = $commission;
        return $this;
    }


    public function getCommissionIndicator(): ?bool
    {
        return $this->commissionIndicator;
    }


    /**
     * @param bool|null $commissionIndicator
     * @return static
     */
    public function setCommissionIndicator(?bool $commissionIndicator): static
    {
        $this->commissionIndicator = $commissionIndicator;
        return $this;
    }


    public function getCommissionPercentage(): ?float
    {
        return $this->commissionPercentage;
    }


    /**
     * @param float|null $commissionPercentage
     * @return static
     */
    public function setCommissionPercentage(?float $commissionPercentage): static
    {
        $this->commissionPercentage = $commissionPercentage;
        return $this;
    }


    public function getDiscount(): ?float
    {
        return $this->discount;
    }


    /**
     * @param float|null $discount
     * @return static
     */
    public function setDiscount(?float $discount): static
    {
        $this->discount = $discount;
        return $this;
    }


    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }


    /**
     * @param float|null $exchangeRate
     * @return static
     */
    public function setExchangeRate(?float $exchangeRate): static
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }


    public function getNbCorrections(): ?int
    {
        return $this->nbCorrections;
    }


    /**
     * @param int|null $nbCorrections
     * @return static
     */
    public function setNbCorrections(?int $nbCorrections): static
    {
        $this->nbCorrections = $nbCorrections;
        return $this;
    }


    public function getVatIndicator(): ?bool
    {
        return $this->vatIndicator;
    }


    /**
     * @param bool|null $vatIndicator
     * @return static
     */
    public function setVatIndicator(?bool $vatIndicator): static
    {
        $this->vatIndicator = $vatIndicator;
        return $this;
    }
}
