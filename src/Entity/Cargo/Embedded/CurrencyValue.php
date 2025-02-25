<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\CurrencyCode;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Embedded object to transmit currencies
 *
 * @link https://onerecord.iata.org/ns/cargo#CurrencyValue Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CurrencyValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Information about the currency used in a CurrencyValue. Create an instance of CurrencyCode based on ISO 4217
     *
     * @link https://onerecord.iata.org/ns/cargo#currencyUnit Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: CurrencyCode::class)]
    protected ?CurrencyCode $currencyUnit = null;

    /**
     * Numerical value
     *
     * @link https://onerecord.iata.org/ns/cargo#numericalValue Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $numericalValue = null;


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
     * @return CurrencyCode|null
     */
    public function getCurrencyUnit(): ?CurrencyCode
    {
        return $this->currencyUnit;
    }


    /**
     * @param CurrencyCode|null $currencyUnit
     * @return static
     */
    public function setCurrencyUnit(?CurrencyCode $currencyUnit): static
    {
        $this->currencyUnit = $currencyUnit;
        return $this;
    }


    public function getNumericalValue(): ?float
    {
        return $this->numericalValue;
    }


    /**
     * @param float|null $numericalValue
     * @return static
     */
    public function setNumericalValue(?float $numericalValue): static
    {
        $this->numericalValue = $numericalValue;
        return $this;
    }
}
