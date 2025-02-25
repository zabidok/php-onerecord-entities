<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Piece;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\ULD;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\BasicRateClassCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\RateClassCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Information from AWB Rate Description section as per bullet point 18 - data elements 22A - 22Z from AWB. Data describing Piece and Package parameters to be transmitted per Piece object using pieceReferences; Data describing ULD parameters to be transmitted per ULD object using uldReference.
 *
 * @link https://onerecord.iata.org/ns/cargo#WaybillLineItem Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class WaybillLineItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * References to Pieces for which a rate applies
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceReferences Ontology
     */
    #[ORM\ManyToMany(targetEntity: Piece::class)]
    #[ORM\JoinTable(
        name: 'waybilllineitem_piece',
        joinColumns: [new ORM\JoinColumn(name: 'waybilllineitem_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $pieceReferences;

    /**
     * TACT Rate for rate description details
     *
     * @link https://onerecord.iata.org/ns/cargo#rateCharge Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $rateCharge = null;

    /**
     * Rate class code e.g. Q. Refer to CXML Code List 1.4 Rate Class Codes
     *
     * @link https://onerecord.iata.org/ns/cargo#rateClassCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: RateClassCode::class)]
    protected ?RateClassCode $rateClassCode = null;

    /**
     * Rate Surcharge/Reduction - Basic Rate Class Code
     *
     * @link https://onerecord.iata.org/ns/cargo#rateClassCodeBasic Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: BasicRateClassCode::class)]
    protected ?BasicRateClassCode $rateClassCodeBasic = null;

    /**
     * Rate Surcharge/Reduction - Percentage of  red. / surcharge
     *
     * @link https://onerecord.iata.org/ns/cargo#ratePercentage Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $ratePercentage = null;

    /**
     * IATA 3-letter city code of the rate combination point as defined in TACT
     *
     * @link https://onerecord.iata.org/ns/cargo#rcp Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $rcp = null;

    /**
     * ULD Rate information - ULD Rate Class Type
     *
     * @link https://onerecord.iata.org/ns/cargo#uldRateClassType Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $uldRateClassType = null;

    /**
     * References to ULDs for which the rate applies
     *
     * @link https://onerecord.iata.org/ns/cargo#uldReferences Ontology
     */
    #[ORM\ManyToMany(targetEntity: ULD::class)]
    #[ORM\JoinTable(
        name: 'waybilllineitem_uld',
        joinColumns: [new ORM\JoinColumn(name: 'waybilllineitem_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'uld_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $uldReferences;

    /**
     * Number of the line item
     *
     * @link https://onerecord.iata.org/ns/cargo#lineItemNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $lineItemNumber = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
        $this->pieceReferences = new ArrayCollection();
        $this->uldReferences = new ArrayCollection();
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
     * @return Collection <int, Piece>
     */
    public function getPieceReferences(): Collection
    {
        return $this->pieceReferences;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function addPieceReferences(Piece $piece): static
    {
        if (!$this->pieceReferences->contains($piece)) {
            $this->pieceReferences->add($piece);
        }
        return $this;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function removePieceReferences(Piece $piece): static
    {
        $this->pieceReferences->removeElement($piece);
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getRateCharge(): ?CurrencyValue
    {
        return $this->rateCharge;
    }


    /**
     * @param CurrencyValue|null $rateCharge
     * @return static
     */
    public function setRateCharge(?CurrencyValue $rateCharge): static
    {
        $this->rateCharge = $rateCharge;
        return $this;
    }


    /**
     * @return RateClassCode|null
     */
    public function getRateClassCode(): ?RateClassCode
    {
        return $this->rateClassCode;
    }


    /**
     * @param RateClassCode|null $rateClassCode
     * @return static
     */
    public function setRateClassCode(?RateClassCode $rateClassCode): static
    {
        $this->rateClassCode = $rateClassCode;
        return $this;
    }


    /**
     * @return BasicRateClassCode|null
     */
    public function getRateClassCodeBasic(): ?BasicRateClassCode
    {
        return $this->rateClassCodeBasic;
    }


    /**
     * @param BasicRateClassCode|null $rateClassCodeBasic
     * @return static
     */
    public function setRateClassCodeBasic(?BasicRateClassCode $rateClassCodeBasic): static
    {
        $this->rateClassCodeBasic = $rateClassCodeBasic;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getRatePercentage(): ?Value
    {
        return $this->ratePercentage;
    }


    /**
     * @param Value|null $ratePercentage
     * @return static
     */
    public function setRatePercentage(?Value $ratePercentage): static
    {
        $this->ratePercentage = $ratePercentage;
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


    /**
     * @return CodeListElement|null
     */
    public function getUldRateClassType(): ?CodeListElement
    {
        return $this->uldRateClassType;
    }


    /**
     * @param CodeListElement|null $uldRateClassType
     * @return static
     */
    public function setUldRateClassType(?CodeListElement $uldRateClassType): static
    {
        $this->uldRateClassType = $uldRateClassType;
        return $this;
    }


    /**
     * @return Collection <int, ULD>
     */
    public function getUldReferences(): Collection
    {
        return $this->uldReferences;
    }


    /**
     * @param ULD $uLD
     * @return static
     */
    public function addUldReferences(ULD $uLD): static
    {
        if (!$this->uldReferences->contains($uLD)) {
            $this->uldReferences->add($uLD);
        }
        return $this;
    }


    /**
     * @param ULD $uLD
     * @return static
     */
    public function removeUldReferences(ULD $uLD): static
    {
        $this->uldReferences->removeElement($uLD);
        return $this;
    }


    public function getLineItemNumber(): ?int
    {
        return $this->lineItemNumber;
    }


    /**
     * @param int|null $lineItemNumber
     * @return static
     */
    public function setLineItemNumber(?int $lineItemNumber): static
    {
        $this->lineItemNumber = $lineItemNumber;
        return $this;
    }
}
