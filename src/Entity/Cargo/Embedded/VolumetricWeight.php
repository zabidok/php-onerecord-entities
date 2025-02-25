<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Volumetric weight details
 *
 * @link https://onerecord.iata.org/ns/cargo#VolumetricWeight Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class VolumetricWeight
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Chargeable weight
     *
     * @link https://onerecord.iata.org/ns/cargo#chargeableWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $chargeableWeight = null;

    /**
     * Volume to weight conversion factor
     *
     * @link https://onerecord.iata.org/ns/cargo#conversionFactor Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $conversionFactor = null;


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
     * @return Value|null
     */
    public function getChargeableWeight(): ?Value
    {
        return $this->chargeableWeight;
    }


    /**
     * @param Value|null $chargeableWeight
     * @return static
     */
    public function setChargeableWeight(?Value $chargeableWeight): static
    {
        $this->chargeableWeight = $chargeableWeight;
        return $this;
    }


    public function getConversionFactor(): ?float
    {
        return $this->conversionFactor;
    }


    /**
     * @param float|null $conversionFactor
     * @return static
     */
    public function setConversionFactor(?float $conversionFactor): static
    {
        $this->conversionFactor = $conversionFactor;
        return $this;
    }
}
