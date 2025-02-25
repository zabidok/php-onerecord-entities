<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Address details
 *
 * @link https://onerecord.iata.org/ns/cargo#Address Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Address identifier using special coding systems e.g. US CBP FIRMS code
     *
     * @link https://onerecord.iata.org/ns/cargo#addressCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $addressCode = null;

    /**
     * UN/LOCODE city code (5 letter) or IATA city code (3 letter)
     *
     * @link https://onerecord.iata.org/ns/cargo#cityCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $cityCode = null;

    /**
     * Country details. Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#country Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $country = null;

    /**
     * Postal / ZIP code
     *
     * @link https://onerecord.iata.org/ns/cargo#postalCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $postalCode = null;

    /**
     * Region/ State / Department. Refer ISO 3166-2
     *
     * @link https://onerecord.iata.org/ns/cargo#regionCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $regionCode = null;

    /**
     * Post Office box number / code
     *
     * @link https://onerecord.iata.org/ns/cargo#postOfficeBox Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $postOfficeBox = null;

    /**
     * Street address including street name, street number, building number, apartment etc
     *
     * @link https://onerecord.iata.org/ns/cargo#streetAddressLines Ontology
     */
    #[ORM\Column(type: 'json', nullable: true)]
    protected ?array $streetAddressLines = [];

    /**
     * Postal / ZIP code
     *
     * @link https://onerecord.iata.org/ns/cargo#textualPostCode Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $textualPostCode = null;


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
     * @return CodeListElement|null
     */
    public function getAddressCode(): ?CodeListElement
    {
        return $this->addressCode;
    }


    /**
     * @param CodeListElement|null $addressCode
     * @return static
     */
    public function setAddressCode(?CodeListElement $addressCode): static
    {
        $this->addressCode = $addressCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getCityCode(): ?CodeListElement
    {
        return $this->cityCode;
    }


    /**
     * @param CodeListElement|null $cityCode
     * @return static
     */
    public function setCityCode(?CodeListElement $cityCode): static
    {
        $this->cityCode = $cityCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getCountry(): ?CodeListElement
    {
        return $this->country;
    }


    /**
     * @param CodeListElement|null $country
     * @return static
     */
    public function setCountry(?CodeListElement $country): static
    {
        $this->country = $country;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getPostalCode(): ?CodeListElement
    {
        return $this->postalCode;
    }


    /**
     * @param CodeListElement|null $postalCode
     * @return static
     */
    public function setPostalCode(?CodeListElement $postalCode): static
    {
        $this->postalCode = $postalCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getRegionCode(): ?CodeListElement
    {
        return $this->regionCode;
    }


    /**
     * @param CodeListElement|null $regionCode
     * @return static
     */
    public function setRegionCode(?CodeListElement $regionCode): static
    {
        $this->regionCode = $regionCode;
        return $this;
    }


    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }


    /**
     * @param string|null $postOfficeBox
     * @return static
     */
    public function setPostOfficeBox(?string $postOfficeBox): static
    {
        $this->postOfficeBox = $postOfficeBox;
        return $this;
    }


    public function getStreetAddressLines(): ?array
    {
        return $this->streetAddressLines;
    }


    /**
     * @return static
     */
    public function setStreetAddressLines(?array $streetAddressLines): static
    {
        $this->streetAddressLines = $streetAddressLines;
        return $this;
    }


    public function getTextualPostCode(): ?string
    {
        return $this->textualPostCode;
    }


    /**
     * @param string|null $textualPostCode
     * @return static
     */
    public function setTextualPostCode(?string $textualPostCode): static
    {
        $this->textualPostCode = $textualPostCode;
        return $this;
    }
}
