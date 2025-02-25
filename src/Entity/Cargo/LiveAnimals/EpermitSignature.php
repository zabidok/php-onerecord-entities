<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\LiveAnimals;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Company;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\SignatoryRole;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\SignatureTypeCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * Signature details of the Epermit for Live Animals
 *
 * @link https://onerecord.iata.org/ns/cargo#EpermitSignature Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class EpermitSignature extends LogisticsObject
{
    /**
     * Reference to the LiveAnimalsEpermit this Signature applies to
     *
     * @link https://onerecord.iata.org/ns/cargo#forEpermit Ontology
     */
    #[ORM\ManyToOne(targetEntity: LiveAnimalsEpermit::class)]
    protected ?LiveAnimalsEpermit $forEpermit = null;

    /**
     * Signatory company name
     *
     * @link https://onerecord.iata.org/ns/cargo#signatoryCompany Ontology
     */
    #[ORM\ManyToOne(targetEntity: Company::class)]
    protected ?Company $signatoryCompany = null;

    /**
     * Role of the signatory with regards to the ePermit: Applicant, Permit issuer, Issuing Authority or Examining authority
     *
     * @link https://onerecord.iata.org/ns/cargo#signatoryRole Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: SignatoryRole::class)]
    protected ?SignatoryRole $signatoryRole = null;

    /**
     * Code specifying a type of government action such as inspection, detention, fumigation, security.
     *
     * @link https://onerecord.iata.org/ns/cargo#signatureTypeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: SignatureTypeCode::class)]
    protected ?SignatureTypeCode $signatureTypeCode = null;

    /**
     * Security Stamp ID
     *
     * @link https://onerecord.iata.org/ns/cargo#securityStampId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $securityStampId = null;

    /**
     * Date and time of the signature
     *
     * @link https://onerecord.iata.org/ns/cargo#signatureDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $signatureDate = null;

    /**
     * Signatory signature authentication text
     *
     * @link https://onerecord.iata.org/ns/cargo#signatureStatement Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $signatureStatement = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return LiveAnimalsEpermit|null
     */
    public function getForEpermit(): ?LiveAnimalsEpermit
    {
        return $this->forEpermit;
    }


    /**
     * @param LiveAnimalsEpermit|null $forEpermit
     * @return static
     */
    public function setForEpermit(?LiveAnimalsEpermit $forEpermit): static
    {
        $this->forEpermit = $forEpermit;
        return $this;
    }


    /**
     * @return Company|null
     */
    public function getSignatoryCompany(): ?Company
    {
        return $this->signatoryCompany;
    }


    /**
     * @param Company|null $signatoryCompany
     * @return static
     */
    public function setSignatoryCompany(?Company $signatoryCompany): static
    {
        $this->signatoryCompany = $signatoryCompany;
        return $this;
    }


    /**
     * @return SignatoryRole|null
     */
    public function getSignatoryRole(): ?SignatoryRole
    {
        return $this->signatoryRole;
    }


    /**
     * @param SignatoryRole|null $signatoryRole
     * @return static
     */
    public function setSignatoryRole(?SignatoryRole $signatoryRole): static
    {
        $this->signatoryRole = $signatoryRole;
        return $this;
    }


    /**
     * @return SignatureTypeCode|null
     */
    public function getSignatureTypeCode(): ?SignatureTypeCode
    {
        return $this->signatureTypeCode;
    }


    /**
     * @param SignatureTypeCode|null $signatureTypeCode
     * @return static
     */
    public function setSignatureTypeCode(?SignatureTypeCode $signatureTypeCode): static
    {
        $this->signatureTypeCode = $signatureTypeCode;
        return $this;
    }


    public function getSecurityStampId(): ?string
    {
        return $this->securityStampId;
    }


    /**
     * @param string|null $securityStampId
     * @return static
     */
    public function setSecurityStampId(?string $securityStampId): static
    {
        $this->securityStampId = $securityStampId;
        return $this;
    }


    public function getSignatureDate(): ?\DateTime
    {
        return $this->signatureDate;
    }


    /**
     * @param \DateTime|null $signatureDate
     * @return static
     */
    public function setSignatureDate(?\DateTime $signatureDate): static
    {
        $this->signatureDate = $signatureDate;
        return $this;
    }


    public function getSignatureStatement(): ?string
    {
        return $this->signatureStatement;
    }


    /**
     * @param string|null $signatureStatement
     * @return static
     */
    public function setSignatureStatement(?string $signatureStatement): static
    {
        $this->signatureStatement = $signatureStatement;
        return $this;
    }
}
