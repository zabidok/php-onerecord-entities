<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Carrier product details
 *
 * @link https://onerecord.iata.org/ns/cargo#CarrierProduct Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CarrierProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Carrier's product code
     *
     * @link https://onerecord.iata.org/ns/cargo#productCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $productCode = null;

    /**
     * Service level code
     *
     * @link https://onerecord.iata.org/ns/cargo#serviceLevelCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $serviceLevelCode = null;

    /**
     * Carrier's product description
     *
     * @link https://onerecord.iata.org/ns/cargo#productDescription Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $productDescription = null;


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
    public function getProductCode(): ?CodeListElement
    {
        return $this->productCode;
    }


    /**
     * @param CodeListElement|null $productCode
     * @return static
     */
    public function setProductCode(?CodeListElement $productCode): static
    {
        $this->productCode = $productCode;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getServiceLevelCode(): ?CodeListElement
    {
        return $this->serviceLevelCode;
    }


    /**
     * @param CodeListElement|null $serviceLevelCode
     * @return static
     */
    public function setServiceLevelCode(?CodeListElement $serviceLevelCode): static
    {
        $this->serviceLevelCode = $serviceLevelCode;
        return $this;
    }


    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }


    /**
     * @param string|null $productDescription
     * @return static
     */
    public function setProductDescription(?string $productDescription): static
    {
        $this->productDescription = $productDescription;
        return $this;
    }
}
