<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\BillingSettlement\BillingDetails;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\AccountingNote;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CurrencyValue;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\OtherCharge;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\WaybillLineItem;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\WaybillType;
use Zabidok\OneRecordEntities\Entity\Cargo\Service\Booking;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ChargeCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\PrepaidCollectIndicator;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ServiceCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Waybill details
 *
 * @link https://onerecord.iata.org/ns/cargo#Waybill Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Waybill extends LogisticsObject
{
    /**
     * Information about accounting notes (AWB box 10)
     *
     * @link https://onerecord.iata.org/ns/cargo#accountingNotes Ontology
     */
    #[ORM\ManyToMany(targetEntity: AccountingNote::class)]
    #[ORM\JoinTable(
        name: 'waybill_accountingnote',
        joinColumns: [new ORM\JoinColumn(name: 'waybill_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'accountingnote_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $accountingNotes;

    /**
     * Reference to the arrival Location
     *
     * @link https://onerecord.iata.org/ns/cargo#arrivalLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $arrivalLocation = null;

    /**
     * Reference to the BillingDetails of the Waybill
     *
     * @link https://onerecord.iata.org/ns/cargo#billingDetails Ontology
     */
    #[ORM\OneToOne(targetEntity: BillingDetails::class)]
    protected ?BillingDetails $billingDetails = null;

    /**
     * One letter charge code as per bullet point 12 - data element 13 from AWB
     *
     * @link https://onerecord.iata.org/ns/cargo#carrierChargeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ChargeCode::class)]
    protected ?ChargeCode $carrierChargeCode = null;

    /**
     * Location of individual or company involved in the movement of a consignment or Coded representation of a specific airport/city code
     *
     * @link https://onerecord.iata.org/ns/cargo#carrierDeclarationPlace Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $carrierDeclarationPlace = null;

    /**
     * Code indicating the origin of goods for Customs purposes (e.g. For goods in free circulation in the EU) List to be provided by local authorities
     *
     * @link https://onerecord.iata.org/ns/cargo#customsOriginCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $customsOriginCode = null;

    /**
     * The value of a shipment declared for carriage purposes
     *
     * @link https://onerecord.iata.org/ns/cargo#declaredValueForCarriage Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $declaredValueForCarriage = null;

    /**
     * The value of a shipment declared for customs purposes
     *
     * @link https://onerecord.iata.org/ns/cargo#declaredValueForCustoms Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $declaredValueForCustoms = null;

    /**
     * Reference to the departure Location
     *
     * @link https://onerecord.iata.org/ns/cargo#departureLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $departureLocation = null;

    /**
     * Charges levied at destination accruing to the last carrier, in destination currency
     *
     * @link https://onerecord.iata.org/ns/cargo#destinationCharges Ontology
     */
    #[ORM\ManyToMany(targetEntity: CurrencyValue::class)]
    #[ORM\JoinTable(
        name: 'waybill_currencyvalue',
        joinColumns: [new ORM\JoinColumn(name: 'waybill_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'currencyvalue_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $destinationCharges;

    /**
     * Refers to the Waybill(s) contained
     *
     * @link https://onerecord.iata.org/ns/cargo#houseWaybills Ontology
     */
    #[ORM\OneToMany(targetEntity: Waybill::class, mappedBy: 'masterWaybill', cascade: ['persist', 'remove'])]
    protected Collection $houseWaybills;

    /**
     * Information about other Parties involved depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'waybill_party',
        joinColumns: [new ORM\JoinColumn(name: 'waybill_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedParties;

    /**
     * Reference to the master Waybill if it is contained in one
     *
     * @link https://onerecord.iata.org/ns/cargo#masterWaybill Ontology
     */
    #[ORM\OneToOne(targetEntity: Waybill::class, inversedBy: 'houseWaybills')]
    protected ?Waybill $masterWaybill = null;

    /**
     * Information about Other Charges applying to this Waybill
     *
     * @link https://onerecord.iata.org/ns/cargo#otherCharges Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherCharge::class)]
    #[ORM\JoinTable(
        name: 'waybill_othercharge',
        joinColumns: [new ORM\JoinColumn(name: 'waybill_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'othercharge_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherCharges;

    /**
     * Indicator whether the payment of Other Charges is to be made at origin (prepaid) or at destination (collect) as per bullet point 13 - data element 15a/15b from AWB
     *
     * @link https://onerecord.iata.org/ns/cargo#otherChargesIndicator Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: PrepaidCollectIndicator::class)]
    protected ?PrepaidCollectIndicator $otherChargesIndicator = null;

    /**
     * Refers to the Booking
     *
     * @link https://onerecord.iata.org/ns/cargo#referredBookingOption Ontology
     */
    #[ORM\OneToOne(targetEntity: Booking::class)]
    protected ?Booking $referredBookingOption = null;

    /**
     * One letter service code as per bullet point 18.4 - data element 22Z from AWB
     *
     * @link https://onerecord.iata.org/ns/cargo#serviceCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ServiceCode::class)]
    protected ?ServiceCode $serviceCode = null;

    /**
     * Reference to the Shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#shipment Ontology
     */
    #[ORM\OneToOne(targetEntity: Shipment::class)]
    protected ?Shipment $shipment = null;

    /**
     * Information about taxes
     *
     * @link https://onerecord.iata.org/ns/cargo#taxAmount Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $taxAmount = null;

    /**
     * Information about rates applying to this Waybill handled as line item
     *
     * @link https://onerecord.iata.org/ns/cargo#waybillLineItems Ontology
     */
    #[ORM\ManyToMany(targetEntity: WaybillLineItem::class)]
    #[ORM\JoinTable(
        name: 'waybill_waybilllineitem',
        joinColumns: [new ORM\JoinColumn(name: 'waybill_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'waybilllineitem_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $waybillLineItems;

    /**
     * Type of the Waybill: House, Direct or Master
     *
     * @link https://onerecord.iata.org/ns/cargo#waybillType Ontology
     */
    #[ORM\ManyToOne(targetEntity: WaybillType::class)]
    protected ?WaybillType $waybillType = null;

    /**
     * Indicator whether the payment for the Weight/Valuation is to be made at origin (prepaid) or at destination (collect) as per bullet point 13 - data element 14a/14b from AWB
     *
     * @link https://onerecord.iata.org/ns/cargo#weightValuationIndicator Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: PrepaidCollectIndicator::class)]
    protected ?PrepaidCollectIndicator $weightValuationIndicator = null;

    /**
     * Indicates the details of accounting information. Free text e.g. PAYMENT BY CERTIFIED CHEQUE etc.
     *
     * @link https://onerecord.iata.org/ns/cargo#accountingInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $accountingInformation = null;

    /**
     * Date upon which the certification is made by the carrier
     *
     * @link https://onerecord.iata.org/ns/cargo#carrierDeclarationDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $carrierDeclarationDate = null;

    /**
     * Contains the authentication of the Carrier
     *
     * @link https://onerecord.iata.org/ns/cargo#carrierDeclarationSignature Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $carrierDeclarationSignature = null;

    /**
     * Name of consignor signatory
     *
     * @link https://onerecord.iata.org/ns/cargo#consignorDeclarationSignature Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $consignorDeclarationSignature = null;

    /**
     * Conversion rate applied
     *
     * @link https://onerecord.iata.org/ns/cargo#destinationCurrencyRate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $destinationCurrencyRate = null;

    /**
     * The check is a Modular 7 validation on the AWB number, recorded as a boolean.
     *
     * @link https://onerecord.iata.org/ns/cargo#modularCheckNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $modularCheckNumber = null;

    /**
     * The shipper or its Agent may enter the appropriate optional shipping
     *
     * @link https://onerecord.iata.org/ns/cargo#shippingInfo Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $shippingInfo = null;

    /**
     * Optional shipping reference number if any
     *
     * @link https://onerecord.iata.org/ns/cargo#shippingRefNo Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $shippingRefNo = null;

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
        $this->accountingNotes = new ArrayCollection();
        $this->destinationCharges = new ArrayCollection();
        $this->houseWaybills = new ArrayCollection();
        $this->involvedParties = new ArrayCollection();
        $this->otherCharges = new ArrayCollection();
        $this->waybillLineItems = new ArrayCollection();
    }


    /**
     * @return Collection <int, AccountingNote>
     */
    public function getAccountingNotes(): Collection
    {
        return $this->accountingNotes;
    }


    /**
     * @param AccountingNote $accountingNote
     * @return static
     */
    public function addAccountingNotes(AccountingNote $accountingNote): static
    {
        if (!$this->accountingNotes->contains($accountingNote)) {
            $this->accountingNotes->add($accountingNote);
        }
        return $this;
    }


    /**
     * @param AccountingNote $accountingNote
     * @return static
     */
    public function removeAccountingNotes(AccountingNote $accountingNote): static
    {
        $this->accountingNotes->removeElement($accountingNote);
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getArrivalLocation(): ?Location
    {
        return $this->arrivalLocation;
    }


    /**
     * @param Location|null $arrivalLocation
     * @return static
     */
    public function setArrivalLocation(?Location $arrivalLocation): static
    {
        $this->arrivalLocation = $arrivalLocation;
        return $this;
    }


    /**
     * @return BillingDetails|null
     */
    public function getBillingDetails(): ?BillingDetails
    {
        return $this->billingDetails;
    }


    /**
     * @param BillingDetails|null $billingDetails
     * @return static
     */
    public function setBillingDetails(?BillingDetails $billingDetails): static
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }


    /**
     * @return ChargeCode|null
     */
    public function getCarrierChargeCode(): ?ChargeCode
    {
        return $this->carrierChargeCode;
    }


    /**
     * @param ChargeCode|null $carrierChargeCode
     * @return static
     */
    public function setCarrierChargeCode(?ChargeCode $carrierChargeCode): static
    {
        $this->carrierChargeCode = $carrierChargeCode;
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getCarrierDeclarationPlace(): ?Location
    {
        return $this->carrierDeclarationPlace;
    }


    /**
     * @param Location|null $carrierDeclarationPlace
     * @return static
     */
    public function setCarrierDeclarationPlace(?Location $carrierDeclarationPlace): static
    {
        $this->carrierDeclarationPlace = $carrierDeclarationPlace;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getCustomsOriginCode(): ?CodeListElement
    {
        return $this->customsOriginCode;
    }


    /**
     * @param CodeListElement|null $customsOriginCode
     * @return static
     */
    public function setCustomsOriginCode(?CodeListElement $customsOriginCode): static
    {
        $this->customsOriginCode = $customsOriginCode;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getDeclaredValueForCarriage(): ?CurrencyValue
    {
        return $this->declaredValueForCarriage;
    }


    /**
     * @param CurrencyValue|null $declaredValueForCarriage
     * @return static
     */
    public function setDeclaredValueForCarriage(?CurrencyValue $declaredValueForCarriage): static
    {
        $this->declaredValueForCarriage = $declaredValueForCarriage;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getDeclaredValueForCustoms(): ?CurrencyValue
    {
        return $this->declaredValueForCustoms;
    }


    /**
     * @param CurrencyValue|null $declaredValueForCustoms
     * @return static
     */
    public function setDeclaredValueForCustoms(?CurrencyValue $declaredValueForCustoms): static
    {
        $this->declaredValueForCustoms = $declaredValueForCustoms;
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getDepartureLocation(): ?Location
    {
        return $this->departureLocation;
    }


    /**
     * @param Location|null $departureLocation
     * @return static
     */
    public function setDepartureLocation(?Location $departureLocation): static
    {
        $this->departureLocation = $departureLocation;
        return $this;
    }


    /**
     * @return Collection <int, CurrencyValue>
     */
    public function getDestinationCharges(): Collection
    {
        return $this->destinationCharges;
    }


    /**
     * @param CurrencyValue $currencyValue
     * @return static
     */
    public function addDestinationCharges(CurrencyValue $currencyValue): static
    {
        if (!$this->destinationCharges->contains($currencyValue)) {
            $this->destinationCharges->add($currencyValue);
        }
        return $this;
    }


    /**
     * @param CurrencyValue $currencyValue
     * @return static
     */
    public function removeDestinationCharges(CurrencyValue $currencyValue): static
    {
        $this->destinationCharges->removeElement($currencyValue);
        return $this;
    }


    /**
     * @return Collection <int, Waybill>
     */
    public function getHouseWaybills(): Collection
    {
        return $this->houseWaybills;
    }


    /**
     * @param Waybill $waybill
     * @return static
     */
    public function addHouseWaybills(Waybill $waybill): static
    {
        if (!$this->houseWaybills->contains($waybill)) {
            $this->houseWaybills->add($waybill);
            $waybill->setMasterWaybill($this);
        }
        return $this;
    }


    /**
     * @param Waybill $waybill
     * @return static
     */
    public function removeHouseWaybills(Waybill $waybill): static
    {
        if ($this->houseWaybills->removeElement($waybill)) {
            if ($waybill->getMasterWaybill() === $this ) {
                $waybill->setMasterWaybill(null);
            }
        }
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
     * @return Waybill|null
     */
    public function getMasterWaybill(): ?Waybill
    {
        return $this->masterWaybill;
    }


    /**
     * @param Waybill|null $masterWaybill
     * @return static
     */
    public function setMasterWaybill(?Waybill $masterWaybill): static
    {
        $this->masterWaybill = $masterWaybill;
        return $this;
    }


    /**
     * @return Collection <int, OtherCharge>
     */
    public function getOtherCharges(): Collection
    {
        return $this->otherCharges;
    }


    /**
     * @param OtherCharge $otherCharge
     * @return static
     */
    public function addOtherCharges(OtherCharge $otherCharge): static
    {
        if (!$this->otherCharges->contains($otherCharge)) {
            $this->otherCharges->add($otherCharge);
        }
        return $this;
    }


    /**
     * @param OtherCharge $otherCharge
     * @return static
     */
    public function removeOtherCharges(OtherCharge $otherCharge): static
    {
        $this->otherCharges->removeElement($otherCharge);
        return $this;
    }


    /**
     * @return PrepaidCollectIndicator|null
     */
    public function getOtherChargesIndicator(): ?PrepaidCollectIndicator
    {
        return $this->otherChargesIndicator;
    }


    /**
     * @param PrepaidCollectIndicator|null $otherChargesIndicator
     * @return static
     */
    public function setOtherChargesIndicator(?PrepaidCollectIndicator $otherChargesIndicator): static
    {
        $this->otherChargesIndicator = $otherChargesIndicator;
        return $this;
    }


    /**
     * @return Booking|null
     */
    public function getReferredBookingOption(): ?Booking
    {
        return $this->referredBookingOption;
    }


    /**
     * @param Booking|null $referredBookingOption
     * @return static
     */
    public function setReferredBookingOption(?Booking $referredBookingOption): static
    {
        $this->referredBookingOption = $referredBookingOption;
        return $this;
    }


    /**
     * @return ServiceCode|null
     */
    public function getServiceCode(): ?ServiceCode
    {
        return $this->serviceCode;
    }


    /**
     * @param ServiceCode|null $serviceCode
     * @return static
     */
    public function setServiceCode(?ServiceCode $serviceCode): static
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }


    /**
     * @return Shipment|null
     */
    public function getShipment(): ?Shipment
    {
        return $this->shipment;
    }


    /**
     * @param Shipment|null $shipment
     * @return static
     */
    public function setShipment(?Shipment $shipment): static
    {
        $this->shipment = $shipment;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getTaxAmount(): ?CurrencyValue
    {
        return $this->taxAmount;
    }


    /**
     * @param CurrencyValue|null $taxAmount
     * @return static
     */
    public function setTaxAmount(?CurrencyValue $taxAmount): static
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }


    /**
     * @return Collection <int, WaybillLineItem>
     */
    public function getWaybillLineItems(): Collection
    {
        return $this->waybillLineItems;
    }


    /**
     * @param WaybillLineItem $waybillLineItem
     * @return static
     */
    public function addWaybillLineItems(WaybillLineItem $waybillLineItem): static
    {
        if (!$this->waybillLineItems->contains($waybillLineItem)) {
            $this->waybillLineItems->add($waybillLineItem);
        }
        return $this;
    }


    /**
     * @param WaybillLineItem $waybillLineItem
     * @return static
     */
    public function removeWaybillLineItems(WaybillLineItem $waybillLineItem): static
    {
        $this->waybillLineItems->removeElement($waybillLineItem);
        return $this;
    }


    /**
     * @return WaybillType|null
     */
    public function getWaybillType(): ?WaybillType
    {
        return $this->waybillType;
    }


    /**
     * @param WaybillType|null $waybillType
     * @return static
     */
    public function setWaybillType(?WaybillType $waybillType): static
    {
        $this->waybillType = $waybillType;
        return $this;
    }


    /**
     * @return PrepaidCollectIndicator|null
     */
    public function getWeightValuationIndicator(): ?PrepaidCollectIndicator
    {
        return $this->weightValuationIndicator;
    }


    /**
     * @param PrepaidCollectIndicator|null $weightValuationIndicator
     * @return static
     */
    public function setWeightValuationIndicator(?PrepaidCollectIndicator $weightValuationIndicator): static
    {
        $this->weightValuationIndicator = $weightValuationIndicator;
        return $this;
    }


    public function getAccountingInformation(): ?string
    {
        return $this->accountingInformation;
    }


    /**
     * @param string|null $accountingInformation
     * @return static
     */
    public function setAccountingInformation(?string $accountingInformation): static
    {
        $this->accountingInformation = $accountingInformation;
        return $this;
    }


    public function getCarrierDeclarationDate(): ?\DateTime
    {
        return $this->carrierDeclarationDate;
    }


    /**
     * @param \DateTime|null $carrierDeclarationDate
     * @return static
     */
    public function setCarrierDeclarationDate(?\DateTime $carrierDeclarationDate): static
    {
        $this->carrierDeclarationDate = $carrierDeclarationDate;
        return $this;
    }


    public function getCarrierDeclarationSignature(): ?string
    {
        return $this->carrierDeclarationSignature;
    }


    /**
     * @param string|null $carrierDeclarationSignature
     * @return static
     */
    public function setCarrierDeclarationSignature(?string $carrierDeclarationSignature): static
    {
        $this->carrierDeclarationSignature = $carrierDeclarationSignature;
        return $this;
    }


    public function getConsignorDeclarationSignature(): ?string
    {
        return $this->consignorDeclarationSignature;
    }


    /**
     * @param string|null $consignorDeclarationSignature
     * @return static
     */
    public function setConsignorDeclarationSignature(?string $consignorDeclarationSignature): static
    {
        $this->consignorDeclarationSignature = $consignorDeclarationSignature;
        return $this;
    }


    public function getDestinationCurrencyRate(): ?float
    {
        return $this->destinationCurrencyRate;
    }


    /**
     * @param float|null $destinationCurrencyRate
     * @return static
     */
    public function setDestinationCurrencyRate(?float $destinationCurrencyRate): static
    {
        $this->destinationCurrencyRate = $destinationCurrencyRate;
        return $this;
    }


    public function getModularCheckNumber(): ?bool
    {
        return $this->modularCheckNumber;
    }


    /**
     * @param bool|null $modularCheckNumber
     * @return static
     */
    public function setModularCheckNumber(?bool $modularCheckNumber): static
    {
        $this->modularCheckNumber = $modularCheckNumber;
        return $this;
    }


    public function getShippingInfo(): ?string
    {
        return $this->shippingInfo;
    }


    /**
     * @param string|null $shippingInfo
     * @return static
     */
    public function setShippingInfo(?string $shippingInfo): static
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }


    public function getShippingRefNo(): ?string
    {
        return $this->shippingRefNo;
    }


    /**
     * @param string|null $shippingRefNo
     * @return static
     */
    public function setShippingRefNo(?string $shippingRefNo): static
    {
        $this->shippingRefNo = $shippingRefNo;
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
