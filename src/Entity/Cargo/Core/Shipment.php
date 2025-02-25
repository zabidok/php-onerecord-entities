<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Dimensions;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\VolumetricWeight;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shipment details
 *
 * @link https://onerecord.iata.org/ns/cargo#Shipment Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Shipment extends LogisticsObject
{
    /**
     * Customs details
     *
     * @link https://onerecord.iata.org/ns/cargo#customsInformation Ontology
     */
    #[ORM\OneToMany(targetEntity: CustomsInformation::class, mappedBy: 'issuedForShipment', cascade: ['persist', 'remove'])]
    protected Collection $customsInformation;

    /**
     * Standard codes as defined by UNCEFACT and ICC that correspond to international rules for the interpretation of the most commonly used trade terms in different countries. UNECE recommendation n. 5 Incoterms 2.
     *
     * @link https://onerecord.iata.org/ns/cargo#incoterms Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $incoterms = null;

    /**
     * Insurance details
     *
     * @link https://onerecord.iata.org/ns/cargo#insurance Ontology
     */
    #[ORM\ManyToOne(targetEntity: Insurance::class, inversedBy: 'insuredShipments')]
    protected ?Insurance $insurance = null;

    /**
     * Information about other Parties involved depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'shipment_party',
        joinColumns: [new ORM\JoinColumn(name: 'shipment_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedParties;

    /**
     * References to the Pieces that are part of this Shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#pieces Ontology
     */
    #[ORM\OneToMany(targetEntity: Piece::class, mappedBy: 'ofShipment', cascade: ['persist', 'remove'])]
    protected Collection $pieces;

    /**
     * Dimensions of the whole shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#totalDimensions Ontology
     */
    #[ORM\ManyToMany(targetEntity: Dimensions::class)]
    #[ORM\JoinTable(
        name: 'shipment_dimensions',
        joinColumns: [new ORM\JoinColumn(name: 'shipment_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'dimensions_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $totalDimensions;

    /**
     * Total gross weight of the whole shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#totalGrossWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $totalGrossWeight = null;

    /**
     * Volumetric weight of the whole shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#totalVolumetricWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: VolumetricWeight::class)]
    protected ?VolumetricWeight $totalVolumetricWeight = null;

    /**
     * Reference to the Waybill of the shipment
     *
     * @link https://onerecord.iata.org/ns/cargo#waybill Ontology
     */
    #[ORM\ManyToOne(targetEntity: Waybill::class)]
    protected ?Waybill $waybill = null;

    /**
     * Description of goods, for the BookingShipment the commodity list defined by Modernizing Cargo Distribution MCD working group can be used as a referential.
     *
     * @link https://onerecord.iata.org/ns/cargo#goodsDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $goodsDescription = null;

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
        $this->customsInformation = new ArrayCollection();
        $this->involvedParties = new ArrayCollection();
        $this->pieces = new ArrayCollection();
        $this->totalDimensions = new ArrayCollection();
    }


    /**
     * @return Collection <int, CustomsInformation>
     */
    public function getCustomsInformation(): Collection
    {
        return $this->customsInformation;
    }


    /**
     * @param CustomsInformation $customsInformation
     * @return static
     */
    public function addCustomsInformation(CustomsInformation $customsInformation): static
    {
        if (!$this->customsInformation->contains($customsInformation)) {
            $this->customsInformation->add($customsInformation);
            $customsInformation->setIssuedForShipment($this);
        }
        return $this;
    }


    /**
     * @param CustomsInformation $customsInformation
     * @return static
     */
    public function removeCustomsInformation(CustomsInformation $customsInformation): static
    {
        if ($this->customsInformation->removeElement($customsInformation)) {
            if ($customsInformation->getIssuedForShipment() === $this ) {
                $customsInformation->setIssuedForShipment(null);
            }
        }
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getIncoterms(): ?CodeListElement
    {
        return $this->incoterms;
    }


    /**
     * @param CodeListElement|null $incoterms
     * @return static
     */
    public function setIncoterms(?CodeListElement $incoterms): static
    {
        $this->incoterms = $incoterms;
        return $this;
    }


    /**
     * @return Insurance|null
     */
    public function getInsurance(): ?Insurance
    {
        return $this->insurance;
    }


    /**
     * @param Insurance|null $insurance
     * @return static
     */
    public function setInsurance(?Insurance $insurance): static
    {
        $this->insurance = $insurance;
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
     * @return Collection <int, Piece>
     */
    public function getPieces(): Collection
    {
        return $this->pieces;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function addPieces(Piece $piece): static
    {
        if (!$this->pieces->contains($piece)) {
            $this->pieces->add($piece);
            $piece->setOfShipment($this);
        }
        return $this;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function removePieces(Piece $piece): static
    {
        if ($this->pieces->removeElement($piece)) {
            if ($piece->getOfShipment() === $this ) {
                $piece->setOfShipment(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection <int, Dimensions>
     */
    public function getTotalDimensions(): Collection
    {
        return $this->totalDimensions;
    }


    /**
     * @param Dimensions $dimensions
     * @return static
     */
    public function addTotalDimensions(Dimensions $dimensions): static
    {
        if (!$this->totalDimensions->contains($dimensions)) {
            $this->totalDimensions->add($dimensions);
        }
        return $this;
    }


    /**
     * @param Dimensions $dimensions
     * @return static
     */
    public function removeTotalDimensions(Dimensions $dimensions): static
    {
        $this->totalDimensions->removeElement($dimensions);
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getTotalGrossWeight(): ?Value
    {
        return $this->totalGrossWeight;
    }


    /**
     * @param Value|null $totalGrossWeight
     * @return static
     */
    public function setTotalGrossWeight(?Value $totalGrossWeight): static
    {
        $this->totalGrossWeight = $totalGrossWeight;
        return $this;
    }


    /**
     * @return VolumetricWeight|null
     */
    public function getTotalVolumetricWeight(): ?VolumetricWeight
    {
        return $this->totalVolumetricWeight;
    }


    /**
     * @param VolumetricWeight|null $totalVolumetricWeight
     * @return static
     */
    public function setTotalVolumetricWeight(?VolumetricWeight $totalVolumetricWeight): static
    {
        $this->totalVolumetricWeight = $totalVolumetricWeight;
        return $this;
    }


    /**
     * @return Waybill|null
     */
    public function getWaybill(): ?Waybill
    {
        return $this->waybill;
    }


    /**
     * @param Waybill|null $waybill
     * @return static
     */
    public function setWaybill(?Waybill $waybill): static
    {
        $this->waybill = $waybill;
        return $this;
    }


    public function getGoodsDescription(): ?string
    {
        return $this->goodsDescription;
    }


    /**
     * @param string|null $goodsDescription
     * @return static
     */
    public function setGoodsDescription(?string $goodsDescription): static
    {
        $this->goodsDescription = $goodsDescription;
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
