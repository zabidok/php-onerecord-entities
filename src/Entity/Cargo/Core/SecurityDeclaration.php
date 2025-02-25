<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Person;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\RegulatedEntity;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ScreeningExemption;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ScreeningMethod;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\SecurityStatus;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Security declaration details
 *
 * @link https://onerecord.iata.org/ns/cargo#SecurityDeclaration Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class SecurityDeclaration extends LogisticsObject
{
    /**
     * Exemption code - e.g. BIOM- Bio-Medical Samples SMUS - small undersized shipments MAIL - mail BIOM - bio-medical samples DIPL - diplomatic bags or diplomatic mail LFSM - life-saving materials NUCL - nuclear materials TRNS - transfer or transshipment
     *
     * @link https://onerecord.iata.org/ns/cargo#groundsForExemption Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected array $groundsForExemption = [];

    /**
     * Name of person (or employee ID) who issued the security status
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedBy Ontology
     */
    #[ORM\ManyToOne(targetEntity: Person::class)]
    protected ?Person $issuedBy = null;

    /**
     * Reference to the Piece the document was issued for
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedForPiece Ontology
     */
    #[ORM\ManyToOne(targetEntity: Piece::class, inversedBy: 'securityDeclarations')]
    protected ?Piece $issuedForPiece = null;

    /**
     * Any other regulated entity that accepts custody of the cargo and accepts the security status originally issued
     *
     * @link https://onerecord.iata.org/ns/cargo#otherRegulatedEntities Ontology
     */
    #[ORM\ManyToMany(targetEntity: RegulatedEntity::class)]
    #[ORM\JoinTable(
        name: 'securitydeclaration_regulatedentity_other',
        joinColumns: [new ORM\JoinColumn(name: 'securitydeclaration_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'regulatedentity_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherRegulatedEntities;

    /**
     * Regulated entity that tendered the consignment
     *
     * @link https://onerecord.iata.org/ns/cargo#receivedFrom Ontology
     */
    #[ORM\ManyToOne(targetEntity: RegulatedEntity::class)]
    protected ?RegulatedEntity $receivedFrom = null;

    /**
     * Information about the accepting regulated entity of the Security Declaration
     *
     * @link https://onerecord.iata.org/ns/cargo#regulatedEntityAcceptor Ontology
     */
    #[ORM\ManyToMany(targetEntity: RegulatedEntity::class)]
    #[ORM\JoinTable(
        name: 'securitydeclaration_regulatedentity_acceptor',
        joinColumns: [new ORM\JoinColumn(name: 'securitydeclaration_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'regulatedentity_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $regulatedEntityAcceptor;

    /**
     * Regulated entity issuing the Security Declaration
     *
     * @link https://onerecord.iata.org/ns/cargo#regulatedEntityIssuer Ontology
     */
    #[ORM\ManyToOne(targetEntity: RegulatedEntity::class)]
    protected ?RegulatedEntity $regulatedEntityIssuer = null;

    /**
     * Screening methods which have been used to secure the cargo PHS – Physical Inspection and/or hand search VCK - Visual check XRY- X-ray equipment EDS - Explosive detection system EDD - Explosive detection dogsETD - Explosive trace detection equipment - particles or vapor CMD - Cargo metal detection AOM - Subjected to any other means: this entry should be followed by free text specifying what other mean was used to secure the cargo
     *
     * @link https://onerecord.iata.org/ns/cargo#screeningMethods Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected array $screeningMethods = [];

    /**
     * Security status indicator (CXML 1.13) - e.g. SPX- Cargo Secure for Passenger and All-Cargo Aircraft
     *
     * @link https://onerecord.iata.org/ns/cargo#securityStatus Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: SecurityStatus::class)]
    protected ?SecurityStatus $securityStatus = null;

    /**
     * Any additional information that may be required by an ICAO Member State
     *
     * @link https://onerecord.iata.org/ns/cargo#additionalSecurityInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $additionalSecurityInformation = null;

    /**
     * Date and time when the security status was issued
     *
     * @link https://onerecord.iata.org/ns/cargo#issuedOn Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $issuedOn = null;

    /**
     * Other methods used to secure the cargo
     *
     * @link https://onerecord.iata.org/ns/cargo#otherScreeningMethods Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $otherScreeningMethods = [];


    public function __construct()
    {
        parent::__construct();
        $this->groundsForExemption = [];
        $this->otherRegulatedEntities = new ArrayCollection();
        $this->regulatedEntityAcceptor = new ArrayCollection();
        $this->screeningMethods = [];
    }


    /**
     * @return ScreeningExemption[]|null
     */
    public function getGroundsForExemption(): ?array
    {
        return array_map(fn($value) => ScreeningExemption::tryFrom($value), $this->groundsForExemption);
    }


    /**
     * @param ScreeningExemption[] $groundsForExemption
     */
    public function setGroundsForExemption(array $groundsForExemption): static
    {
        $this->groundsForExemption = array_map(fn(ScreeningExemption $code) => $code->value, $groundsForExemption);
        return $this;
    }


    /**
     * @param ScreeningExemption $screeningExemption
     * @return static
     */
    public function addScreeningExemption(ScreeningExemption $screeningExemption): static
    {
        if (!in_array($screeningExemption->value, $this->groundsForExemption, true)) {
            $this->groundsForExemption[] = $screeningExemption->value;
        }
        return $this;
    }


    /**
     * @param ScreeningExemption $screeningExemption
     * @return static
     */
    public function removeGroundsForExemption(ScreeningExemption $screeningExemption): static
    {
        $this->groundsForExemption = array_filter(
            $this->groundsForExemption,
            fn($value) => $value !== $screeningExemption->value
        );
        return $this;
    }


    /**
     * @return Person|null
     */
    public function getIssuedBy(): ?Person
    {
        return $this->issuedBy;
    }


    /**
     * @param Person|null $issuedBy
     * @return static
     */
    public function setIssuedBy(?Person $issuedBy): static
    {
        $this->issuedBy = $issuedBy;
        return $this;
    }


    /**
     * @return Piece|null
     */
    public function getIssuedForPiece(): ?Piece
    {
        return $this->issuedForPiece;
    }


    /**
     * @param Piece|null $issuedForPiece
     * @return static
     */
    public function setIssuedForPiece(?Piece $issuedForPiece): static
    {
        $this->issuedForPiece = $issuedForPiece;
        return $this;
    }


    /**
     * @return Collection <int, RegulatedEntity>
     */
    public function getOtherRegulatedEntities(): Collection
    {
        return $this->otherRegulatedEntities;
    }


    /**
     * @param RegulatedEntity $regulatedEntity
     * @return static
     */
    public function addOtherRegulatedEntities(RegulatedEntity $regulatedEntity): static
    {
        if (!$this->otherRegulatedEntities->contains($regulatedEntity)) {
            $this->otherRegulatedEntities->add($regulatedEntity);
        }
        return $this;
    }


    /**
     * @param RegulatedEntity $regulatedEntity
     * @return static
     */
    public function removeOtherRegulatedEntities(RegulatedEntity $regulatedEntity): static
    {
        $this->otherRegulatedEntities->removeElement($regulatedEntity);
        return $this;
    }


    /**
     * @return RegulatedEntity|null
     */
    public function getReceivedFrom(): ?RegulatedEntity
    {
        return $this->receivedFrom;
    }


    /**
     * @param RegulatedEntity|null $receivedFrom
     * @return static
     */
    public function setReceivedFrom(?RegulatedEntity $receivedFrom): static
    {
        $this->receivedFrom = $receivedFrom;
        return $this;
    }


    /**
     * @return Collection <int, RegulatedEntity>
     */
    public function getRegulatedEntityAcceptor(): Collection
    {
        return $this->regulatedEntityAcceptor;
    }


    /**
     * @param RegulatedEntity $regulatedEntity
     * @return static
     */
    public function addRegulatedEntityAcceptor(RegulatedEntity $regulatedEntity): static
    {
        if (!$this->regulatedEntityAcceptor->contains($regulatedEntity)) {
            $this->regulatedEntityAcceptor->add($regulatedEntity);
        }
        return $this;
    }


    /**
     * @param RegulatedEntity $regulatedEntity
     * @return static
     */
    public function removeRegulatedEntityAcceptor(RegulatedEntity $regulatedEntity): static
    {
        $this->regulatedEntityAcceptor->removeElement($regulatedEntity);
        return $this;
    }


    /**
     * @return RegulatedEntity|null
     */
    public function getRegulatedEntityIssuer(): ?RegulatedEntity
    {
        return $this->regulatedEntityIssuer;
    }


    /**
     * @param RegulatedEntity|null $regulatedEntityIssuer
     * @return static
     */
    public function setRegulatedEntityIssuer(?RegulatedEntity $regulatedEntityIssuer): static
    {
        $this->regulatedEntityIssuer = $regulatedEntityIssuer;
        return $this;
    }


    /**
     * @return ScreeningMethod[]|null
     */
    public function getScreeningMethods(): ?array
    {
        return array_map(fn($value) => ScreeningMethod::tryFrom($value), $this->screeningMethods);
    }


    /**
     * @param ScreeningMethod[] $screeningMethods
     */
    public function setScreeningMethods(array $screeningMethods): static
    {
        $this->screeningMethods = array_map(fn(ScreeningMethod $code) => $code->value, $screeningMethods);
        return $this;
    }


    /**
     * @param ScreeningMethod $screeningMethod
     * @return static
     */
    public function addScreeningMethod(ScreeningMethod $screeningMethod): static
    {
        if (!in_array($screeningMethod->value, $this->screeningMethods, true)) {
            $this->screeningMethods[] = $screeningMethod->value;
        }
        return $this;
    }


    /**
     * @param ScreeningMethod $screeningMethod
     * @return static
     */
    public function removeScreeningMethods(ScreeningMethod $screeningMethod): static
    {
        $this->screeningMethods = array_filter(
            $this->screeningMethods,
            fn($value) => $value !== $screeningMethod->value
        );
        return $this;
    }


    /**
     * @return SecurityStatus|null
     */
    public function getSecurityStatus(): ?SecurityStatus
    {
        return $this->securityStatus;
    }


    /**
     * @param SecurityStatus|null $securityStatus
     * @return static
     */
    public function setSecurityStatus(?SecurityStatus $securityStatus): static
    {
        $this->securityStatus = $securityStatus;
        return $this;
    }


    public function getAdditionalSecurityInformation(): ?string
    {
        return $this->additionalSecurityInformation;
    }


    /**
     * @param string|null $additionalSecurityInformation
     * @return static
     */
    public function setAdditionalSecurityInformation(?string $additionalSecurityInformation): static
    {
        $this->additionalSecurityInformation = $additionalSecurityInformation;
        return $this;
    }


    public function getIssuedOn(): ?\DateTime
    {
        return $this->issuedOn;
    }


    /**
     * @param \DateTime|null $issuedOn
     * @return static
     */
    public function setIssuedOn(?\DateTime $issuedOn): static
    {
        $this->issuedOn = $issuedOn;
        return $this;
    }


    public function getOtherScreeningMethods(): ?array
    {
        return $this->otherScreeningMethods;
    }


    /**
     * @return static
     */
    public function setOtherScreeningMethods(?array $otherScreeningMethods): static
    {
        $this->otherScreeningMethods = $otherScreeningMethods;
        return $this;
    }
}
