<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\LiveAnimals;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\TransactionPurposeCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Epermit for Live Animals details
 *
 * @link https://onerecord.iata.org/ns/cargo#LiveAnimalsEpermit Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LiveAnimalsEpermit extends LogisticsObject
{
    /**
     * Reference to the Organization that fulfills the role of the consignee, for a LiveAnimalsEpermit it has to include complete name and address (box 3)
     *
     * @link https://onerecord.iata.org/ns/cargo#consignee Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $consignee = null;

    /**
     * Reference to the pieces and properties linked to the Permit (box 7 to 12)
     *
     * @link https://onerecord.iata.org/ns/cargo#consignments Ontology
     */
    #[ORM\OneToMany(targetEntity: EpermitConsignment::class, mappedBy: 'epermit', cascade: ['persist', 'remove'])]
    protected Collection $consignments;

    /**
     * Code specifying the document name. (box 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#permitTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $permitTypeCode = null;

    /**
     * List of all the signatures of the Epermit (applicant box 4, issuing authority box 6, issuer box 13 and examining authority box 14)
     *
     * @link https://onerecord.iata.org/ns/cargo#signatures Ontology
     */
    #[ORM\OneToMany(targetEntity: EpermitSignature::class, mappedBy: 'forEpermit', cascade: ['persist', 'remove'])]
    protected Collection $signatures;

    /**
     * Code indicating the purpose of the transaction (box 5a)
     *
     * @link https://onerecord.iata.org/ns/cargo#transactionPurposeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: TransactionPurposeCode::class)]
    protected ?TransactionPurposeCode $transactionPurposeCode = null;

    /**
     * Code specifying the transport document name (box 15)
     *
     * @link https://onerecord.iata.org/ns/cargo#transportContractTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $transportContractTypeCode = null;

    /**
     * Indicates if the permit is a copy (true) or an original (false) (box 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#copyIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $copyIndicator = null;

    /**
     * The original number is a unique number allocated to each document by the relevant Management Authority. (box 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#epermitNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $epermitNumber = null;

    /**
     * Description if TypeCode is Other (box 1)
     *
     * @link https://onerecord.iata.org/ns/cargo#permitTypeOtherDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $permitTypeOtherDescription = null;

    /**
     * Special conditions (box 5)
     *
     * @link https://onerecord.iata.org/ns/cargo#specialConditions Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $specialConditions = null;

    /**
     * Purpose of the transaction in free text (box 5a)
     *
     * @link https://onerecord.iata.org/ns/cargo#transactionPurpose Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $transactionPurpose = null;

    /**
     * Reference to the Air Waybill or other transport contract document (box 15)
     *
     * @link https://onerecord.iata.org/ns/cargo#transportContractId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $transportContractId = null;

    /**
     * Validity start date based on usage context
     *
     * @link https://onerecord.iata.org/ns/cargo#validFrom Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $validFrom = null;

    /**
     * Validity end date (date of expiry) based on usage context
     *
     * @link https://onerecord.iata.org/ns/cargo#validUntil Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $validUntil = null;


    public function __construct()
    {
        parent::__construct();
        $this->consignments = new ArrayCollection();
        $this->signatures = new ArrayCollection();
    }


    /**
     * @return Organization|null
     */
    public function getConsignee(): ?Organization
    {
        return $this->consignee;
    }


    /**
     * @param Organization|null $consignee
     * @return static
     */
    public function setConsignee(?Organization $consignee): static
    {
        $this->consignee = $consignee;
        return $this;
    }


    /**
     * @return Collection <int, EpermitConsignment>
     */
    public function getConsignments(): Collection
    {
        return $this->consignments;
    }


    /**
     * @param EpermitConsignment $epermitConsignment
     * @return static
     */
    public function addConsignments(EpermitConsignment $epermitConsignment): static
    {
        if (!$this->consignments->contains($epermitConsignment)) {
            $this->consignments->add($epermitConsignment);
            $epermitConsignment->setEpermit($this);
        }
        return $this;
    }


    /**
     * @param EpermitConsignment $epermitConsignment
     * @return static
     */
    public function removeConsignments(EpermitConsignment $epermitConsignment): static
    {
        if ($this->consignments->removeElement($epermitConsignment)) {
            if ($epermitConsignment->getEpermit() === $this ) {
                $epermitConsignment->setEpermit(null);
            }
        }
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getPermitTypeCode(): ?CodeListElement
    {
        return $this->permitTypeCode;
    }


    /**
     * @param CodeListElement|null $permitTypeCode
     * @return static
     */
    public function setPermitTypeCode(?CodeListElement $permitTypeCode): static
    {
        $this->permitTypeCode = $permitTypeCode;
        return $this;
    }


    /**
     * @return Collection <int, EpermitSignature>
     */
    public function getSignatures(): Collection
    {
        return $this->signatures;
    }


    /**
     * @param EpermitSignature $epermitSignature
     * @return static
     */
    public function addSignatures(EpermitSignature $epermitSignature): static
    {
        if (!$this->signatures->contains($epermitSignature)) {
            $this->signatures->add($epermitSignature);
            $epermitSignature->setForEpermit($this);
        }
        return $this;
    }


    /**
     * @param EpermitSignature $epermitSignature
     * @return static
     */
    public function removeSignatures(EpermitSignature $epermitSignature): static
    {
        if ($this->signatures->removeElement($epermitSignature)) {
            if ($epermitSignature->getForEpermit() === $this ) {
                $epermitSignature->setForEpermit(null);
            }
        }
        return $this;
    }


    /**
     * @return TransactionPurposeCode|null
     */
    public function getTransactionPurposeCode(): ?TransactionPurposeCode
    {
        return $this->transactionPurposeCode;
    }


    /**
     * @param TransactionPurposeCode|null $transactionPurposeCode
     * @return static
     */
    public function setTransactionPurposeCode(?TransactionPurposeCode $transactionPurposeCode): static
    {
        $this->transactionPurposeCode = $transactionPurposeCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getTransportContractTypeCode(): ?CodeListElement
    {
        return $this->transportContractTypeCode;
    }


    /**
     * @param CodeListElement|null $transportContractTypeCode
     * @return static
     */
    public function setTransportContractTypeCode(?CodeListElement $transportContractTypeCode): static
    {
        $this->transportContractTypeCode = $transportContractTypeCode;
        return $this;
    }


    public function getCopyIndicator(): ?bool
    {
        return $this->copyIndicator;
    }


    /**
     * @param bool|null $copyIndicator
     * @return static
     */
    public function setCopyIndicator(?bool $copyIndicator): static
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }


    public function getEpermitNumber(): ?string
    {
        return $this->epermitNumber;
    }


    /**
     * @param string|null $epermitNumber
     * @return static
     */
    public function setEpermitNumber(?string $epermitNumber): static
    {
        $this->epermitNumber = $epermitNumber;
        return $this;
    }


    public function getPermitTypeOtherDescription(): ?string
    {
        return $this->permitTypeOtherDescription;
    }


    /**
     * @param string|null $permitTypeOtherDescription
     * @return static
     */
    public function setPermitTypeOtherDescription(?string $permitTypeOtherDescription): static
    {
        $this->permitTypeOtherDescription = $permitTypeOtherDescription;
        return $this;
    }


    public function getSpecialConditions(): ?string
    {
        return $this->specialConditions;
    }


    /**
     * @param string|null $specialConditions
     * @return static
     */
    public function setSpecialConditions(?string $specialConditions): static
    {
        $this->specialConditions = $specialConditions;
        return $this;
    }


    public function getTransactionPurpose(): ?string
    {
        return $this->transactionPurpose;
    }


    /**
     * @param string|null $transactionPurpose
     * @return static
     */
    public function setTransactionPurpose(?string $transactionPurpose): static
    {
        $this->transactionPurpose = $transactionPurpose;
        return $this;
    }


    public function getTransportContractId(): ?string
    {
        return $this->transportContractId;
    }


    /**
     * @param string|null $transportContractId
     * @return static
     */
    public function setTransportContractId(?string $transportContractId): static
    {
        $this->transportContractId = $transportContractId;
        return $this;
    }


    public function getValidFrom(): ?\DateTime
    {
        return $this->validFrom;
    }


    /**
     * @param \DateTime|null $validFrom
     * @return static
     */
    public function setValidFrom(?\DateTime $validFrom): static
    {
        $this->validFrom = $validFrom;
        return $this;
    }


    public function getValidUntil(): ?\DateTime
    {
        return $this->validUntil;
    }


    /**
     * @param \DateTime|null $validUntil
     * @return static
     */
    public function setValidUntil(?\DateTime $validUntil): static
    {
        $this->validUntil = $validUntil;
        return $this;
    }
}
