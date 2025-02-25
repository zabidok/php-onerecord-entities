<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\EntitlementCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\OtherChargeCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\PrepaidCollectIndicator;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Other Charge details from AWB as per bullet point 19 - data element 23 from AWB
 *
 * @link https://onerecord.iata.org/ns/cargo#OtherCharge Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class OtherCharge
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Indicates if charge is prepaid or collect (P, C)
     *
     * @link https://onerecord.iata.org/ns/cargo#chargePaymentType Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: PrepaidCollectIndicator::class)]
    protected ?PrepaidCollectIndicator $chargePaymentType = null;

    /**
     * Entitlement code to define if charges are Due carrier (C) or Due agent (A). Refer to CXML Code List 1.3
     *
     * @link https://onerecord.iata.org/ns/cargo#entitlement Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: EntitlementCode::class)]
    protected ?EntitlementCode $entitlement = null;

    /**
     * Other Charge amount
     *
     * @link https://onerecord.iata.org/ns/cargo#otherChargeAmount Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $otherChargeAmount = null;

    /**
     * Refer to CargoXML Code List 1.2 for Other Charges
     *
     * @link https://onerecord.iata.org/ns/cargo#otherChargeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: OtherChargeCode::class)]
    protected ?OtherChargeCode $otherChargeCode = null;

    /**
     * Double describing the time or item basis quantity of a charge
     *
     * @link https://onerecord.iata.org/ns/cargo#chargeQuantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $chargeQuantity = null;

    /**
     * String indicating if the Other Charge Location is Origin (O) or Transit (T) or Destination(D)
     *
     * @link https://onerecord.iata.org/ns/cargo#locationIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $locationIndicator = null;

    /**
     * String describing the reason for a charge
     *
     * @link https://onerecord.iata.org/ns/cargo#reasonDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $reasonDescription = null;


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
     * @return CurrencyValue|null
     */
    public function getOtherChargeAmount(): ?CurrencyValue
    {
        return $this->otherChargeAmount;
    }


    /**
     * @param CurrencyValue|null $otherChargeAmount
     * @return static
     */
    public function setOtherChargeAmount(?CurrencyValue $otherChargeAmount): static
    {
        $this->otherChargeAmount = $otherChargeAmount;
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


    public function getChargeQuantity(): ?float
    {
        return $this->chargeQuantity;
    }


    /**
     * @param float|null $chargeQuantity
     * @return static
     */
    public function setChargeQuantity(?float $chargeQuantity): static
    {
        $this->chargeQuantity = $chargeQuantity;
        return $this;
    }


    public function getLocationIndicator(): ?string
    {
        return $this->locationIndicator;
    }


    /**
     * @param string|null $locationIndicator
     * @return static
     */
    public function setLocationIndicator(?string $locationIndicator): static
    {
        $this->locationIndicator = $locationIndicator;
        return $this;
    }


    public function getReasonDescription(): ?string
    {
        return $this->reasonDescription;
    }


    /**
     * @param string|null $reasonDescription
     * @return static
     */
    public function setReasonDescription(?string $reasonDescription): static
    {
        $this->reasonDescription = $reasonDescription;
        return $this;
    }
}
