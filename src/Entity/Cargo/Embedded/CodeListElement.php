<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Embedded object to transmit codes from non-RDF code lists in 1R in a semi-structured way. Code lists may be externally maintained codes (such as HS codes) or carrier-specific codes. If a code is present in RDF-form as Named Individual (like in the 1R core code lists ontology), it suffices to put in its IRI
 *
 * @link https://onerecord.iata.org/ns/cargo#CodeListElement Ontology
 */
#[ORM\Entity]
#[ORM\InheritanceType('JOINED')]
#[ORM\DiscriminatorColumn(name: 'type', type: 'string', length: 25)]
#[Version('3.1 RC1')]
class CodeListElement
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Code or short version of a code, for example "CH" for Switzerland when referring to the UN/LOCODE code list
     *
     * @link https://onerecord.iata.org/ns/cargo#code Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $code = null;

    /**
     * Description or long version of the code, for example "Switzerland" for Switzerland when referring to the UN/LOCODE code list
     *
     * @link https://onerecord.iata.org/ns/cargo#codeDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $codeDescription = null;

    /**
     * Integer indicating the level of a code if a codelists is hierarchical, for example HS-Codes
     *
     * @link https://onerecord.iata.org/ns/cargo#codeLevel Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $codeLevel = null;

    /**
     * Official name of the code list without version number when direct reference is not possible, for example "UN/LOCODE" when referring to the UN/LOCODE code list
     *
     * @link https://onerecord.iata.org/ns/cargo#codeListName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $codeListName = null;

    /**
     * URL to access the code list the code is taken from, for example "https://unece.org/trade/cefact/unlocode-code-list-country-and-territory" for UN/LOCODE.
     *
     * @link https://onerecord.iata.org/ns/cargo#codeListReference Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $codeListReference = null;

    /**
     * Version of the code list, for example "223-1" for UN/LOCODE. Used if the property codeListName is used or the version is not apparent from the resource referred to in property codeListReference.
     *
     * @link https://onerecord.iata.org/ns/cargo#codeListVersion Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $codeListVersion = null;


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


    public function getCode(): ?string
    {
        return $this->code;
    }


    /**
     * @param string|null $code
     * @return static
     */
    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }


    public function getCodeDescription(): ?string
    {
        return $this->codeDescription;
    }


    /**
     * @param string|null $codeDescription
     * @return static
     */
    public function setCodeDescription(?string $codeDescription): static
    {
        $this->codeDescription = $codeDescription;
        return $this;
    }


    public function getCodeLevel(): ?int
    {
        return $this->codeLevel;
    }


    /**
     * @param int|null $codeLevel
     * @return static
     */
    public function setCodeLevel(?int $codeLevel): static
    {
        $this->codeLevel = $codeLevel;
        return $this;
    }


    public function getCodeListName(): ?string
    {
        return $this->codeListName;
    }


    /**
     * @param string|null $codeListName
     * @return static
     */
    public function setCodeListName(?string $codeListName): static
    {
        $this->codeListName = $codeListName;
        return $this;
    }


    public function getCodeListReference(): ?string
    {
        return $this->codeListReference;
    }


    /**
     * @param string|null $codeListReference
     * @return static
     */
    public function setCodeListReference(?string $codeListReference): static
    {
        $this->codeListReference = $codeListReference;
        return $this;
    }


    public function getCodeListVersion(): ?string
    {
        return $this->codeListVersion;
    }


    /**
     * @param string|null $codeListVersion
     * @return static
     */
    public function setCodeListVersion(?string $codeListVersion): static
    {
        $this->codeListVersion = $codeListVersion;
        return $this;
    }
}
