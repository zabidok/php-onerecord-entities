<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Distribution;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\PieceGroup;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\TemperatureInstructions;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\CommodityCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\SpecialHandlingCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Simplified shipment object that is to be used only for the distribution scope where only a subset of data is known priori to operational phase.
 *
 * @link https://onerecord.iata.org/ns/cargo#BookingShipment Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class BookingShipment extends LogisticsObject
{
    /**
     * Expected commodity of the shipment as per Commodity Code list. Either this or expected HS code required
     *
     * @link https://onerecord.iata.org/ns/cargo#expectedCommodity Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: CommodityCode::class)]
    protected ?CommodityCode $expectedCommodity = null;

    /**
     * Expected commodity of the shipment as per HS code (at least 6 digits). Either this or expectedCommodityCode required
     *
     * @link https://onerecord.iata.org/ns/cargo#expectedHScode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $expectedHScode = null;

    /**
     * Reference to the BookingOptionRequest the information of the LogisticsObject is detailing
     *
     * @link https://onerecord.iata.org/ns/cargo#forBookingOptionRequest Ontology
     */
    #[ORM\OneToOne(targetEntity: BookingOptionRequest::class)]
    protected ?BookingOptionRequest $forBookingOptionRequest = null;

    /**
     * Reference to the Piece groups of the shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceGroups Ontology
     */
    #[ORM\ManyToMany(targetEntity: PieceGroup::class)]
    #[ORM\JoinTable(
        name: 'bookingshipment_piecegroup',
        joinColumns: [new ORM\JoinColumn(name: 'bookingshipment_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'piecegroup_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $pieceGroups;

    /**
     * Three-letter special handling code (SPH)
     *
     * @link https://onerecord.iata.org/ns/cargo#specialHandlingCodes Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected array $specialHandlingCodes = [];

    /**
     * Temperature instructions if a specific range
     *
     * @link https://onerecord.iata.org/ns/cargo#temperatureInstructions Ontology
     */
    #[ORM\ManyToOne(targetEntity: TemperatureInstructions::class)]
    protected ?TemperatureInstructions $temperatureInstructions = null;

    /**
     * Indication if the shipment is a consolidation
     *
     * @link https://onerecord.iata.org/ns/cargo#consolidationIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $consolidationIndicator = null;

    /**
     * Special service requests
     *
     * @link https://onerecord.iata.org/ns/cargo#specialServiceRequests Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $specialServiceRequests = [];

    /**
     * Strings to provide free text handling instructions such as SSR and OSI
     *
     * @link https://onerecord.iata.org/ns/cargo#textualHandlingInstructions Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $textualHandlingInstructions = [];


    public function __construct()
    {
        parent::__construct();
        $this->pieceGroups = new ArrayCollection();
        $this->specialHandlingCodes = [];
    }


    /**
     * @return CommodityCode|null
     */
    public function getExpectedCommodity(): ?CommodityCode
    {
        return $this->expectedCommodity;
    }


    /**
     * @param CommodityCode|null $expectedCommodity
     * @return static
     */
    public function setExpectedCommodity(?CommodityCode $expectedCommodity): static
    {
        $this->expectedCommodity = $expectedCommodity;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getExpectedHScode(): ?CodeListElement
    {
        return $this->expectedHScode;
    }


    /**
     * @param CodeListElement|null $expectedHScode
     * @return static
     */
    public function setExpectedHScode(?CodeListElement $expectedHScode): static
    {
        $this->expectedHScode = $expectedHScode;
        return $this;
    }


    /**
     * @return BookingOptionRequest|null
     */
    public function getForBookingOptionRequest(): ?BookingOptionRequest
    {
        return $this->forBookingOptionRequest;
    }


    /**
     * @param BookingOptionRequest|null $forBookingOptionRequest
     * @return static
     */
    public function setForBookingOptionRequest(?BookingOptionRequest $forBookingOptionRequest): static
    {
        $this->forBookingOptionRequest = $forBookingOptionRequest;
        return $this;
    }


    /**
     * @return Collection <int, PieceGroup>
     */
    public function getPieceGroups(): Collection
    {
        return $this->pieceGroups;
    }


    /**
     * @param PieceGroup $pieceGroup
     * @return static
     */
    public function addPieceGroups(PieceGroup $pieceGroup): static
    {
        if (!$this->pieceGroups->contains($pieceGroup)) {
            $this->pieceGroups->add($pieceGroup);
        }
        return $this;
    }


    /**
     * @param PieceGroup $pieceGroup
     * @return static
     */
    public function removePieceGroups(PieceGroup $pieceGroup): static
    {
        $this->pieceGroups->removeElement($pieceGroup);
        return $this;
    }


    /**
     * @return SpecialHandlingCode[]|null
     */
    public function getSpecialHandlingCodes(): ?array
    {
        return array_map(fn($value) => SpecialHandlingCode::tryFrom($value), $this->specialHandlingCodes);
    }


    /**
     * @param SpecialHandlingCode[] $specialHandlingCodes
     */
    public function setSpecialHandlingCodes(array $specialHandlingCodes): static
    {
        $this->specialHandlingCodes = array_map(fn(SpecialHandlingCode $code) => $code->value, $specialHandlingCodes);
        return $this;
    }


    /**
     * @param SpecialHandlingCode $specialHandlingCode
     * @return static
     */
    public function addSpecialHandlingCode(SpecialHandlingCode $specialHandlingCode): static
    {
        if (!in_array($specialHandlingCode->value, $this->specialHandlingCodes, true)) {
            $this->specialHandlingCodes[] = $specialHandlingCode->value;
        }
        return $this;
    }


    /**
     * @param SpecialHandlingCode $specialHandlingCode
     * @return static
     */
    public function removeSpecialHandlingCodes(SpecialHandlingCode $specialHandlingCode): static
    {
        $this->specialHandlingCodes = array_filter(
            $this->specialHandlingCodes,
            fn($value) => $value !== $specialHandlingCode->value
        );
        return $this;
    }


    /**
     * @return TemperatureInstructions|null
     */
    public function getTemperatureInstructions(): ?TemperatureInstructions
    {
        return $this->temperatureInstructions;
    }


    /**
     * @param TemperatureInstructions|null $temperatureInstructions
     * @return static
     */
    public function setTemperatureInstructions(?TemperatureInstructions $temperatureInstructions): static
    {
        $this->temperatureInstructions = $temperatureInstructions;
        return $this;
    }


    public function getConsolidationIndicator(): ?bool
    {
        return $this->consolidationIndicator;
    }


    /**
     * @param bool|null $consolidationIndicator
     * @return static
     */
    public function setConsolidationIndicator(?bool $consolidationIndicator): static
    {
        $this->consolidationIndicator = $consolidationIndicator;
        return $this;
    }


    public function getSpecialServiceRequests(): ?array
    {
        return $this->specialServiceRequests;
    }


    /**
     * @return static
     */
    public function setSpecialServiceRequests(?array $specialServiceRequests): static
    {
        $this->specialServiceRequests = $specialServiceRequests;
        return $this;
    }


    public function getTextualHandlingInstructions(): ?array
    {
        return $this->textualHandlingInstructions;
    }


    /**
     * @return static
     */
    public function setTextualHandlingInstructions(?array $textualHandlingInstructions): static
    {
        $this->textualHandlingInstructions = $textualHandlingInstructions;
        return $this;
    }
}
