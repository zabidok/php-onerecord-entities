<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\DG;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Person;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Item;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dangerous Goods subtype of Item
 *
 * @link https://onerecord.iata.org/ns/cargo#ItemDg Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ItemDg extends Item
{
    /**
     * Contains the Emergency contact name (e.g. the name of the agency) and phone number (min required)
     *
     * @link https://onerecord.iata.org/ns/cargo#emergencyContact Ontology
     */
    #[ORM\ManyToOne(targetEntity: Person::class)]
    protected ?Person $emergencyContact = null;

    /**
     * The total net weight of dangerous goods transported of this line item. For air transport the value must be the volume or mass in each package.
     *
     * @link https://onerecord.iata.org/ns/cargo#netWeightMeasure Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $netWeightMeasure = null;

    /**
     * Reportable quantities, To and from the USA only
     *
     * @link https://onerecord.iata.org/ns/cargo#reportableQuantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $reportableQuantity = null;

    /**
     * Additional information that may be added in addition to the proper shipping name to more fully describe the goods or to identify a particular condition
     *
     * @link https://onerecord.iata.org/ns/cargo#supplementaryInfoPrefix Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $supplementaryInfoPrefix = null;

    /**
     * Additional information that may be added in addition to the proper shipping to more fully describe the goods or to identify a particular condition
     *
     * @link https://onerecord.iata.org/ns/cargo#supplementaryInfoSuffix Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $supplementaryInfoSuffix = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Person|null
     */
    public function getEmergencyContact(): ?Person
    {
        return $this->emergencyContact;
    }


    /**
     * @param Person|null $emergencyContact
     * @return static
     */
    public function setEmergencyContact(?Person $emergencyContact): static
    {
        $this->emergencyContact = $emergencyContact;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getNetWeightMeasure(): ?Value
    {
        return $this->netWeightMeasure;
    }


    /**
     * @param Value|null $netWeightMeasure
     * @return static
     */
    public function setNetWeightMeasure(?Value $netWeightMeasure): static
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }


    public function getReportableQuantity(): ?string
    {
        return $this->reportableQuantity;
    }


    /**
     * @param string|null $reportableQuantity
     * @return static
     */
    public function setReportableQuantity(?string $reportableQuantity): static
    {
        $this->reportableQuantity = $reportableQuantity;
        return $this;
    }


    public function getSupplementaryInfoPrefix(): ?string
    {
        return $this->supplementaryInfoPrefix;
    }


    /**
     * @param string|null $supplementaryInfoPrefix
     * @return static
     */
    public function setSupplementaryInfoPrefix(?string $supplementaryInfoPrefix): static
    {
        $this->supplementaryInfoPrefix = $supplementaryInfoPrefix;
        return $this;
    }


    public function getSupplementaryInfoSuffix(): ?string
    {
        return $this->supplementaryInfoSuffix;
    }


    /**
     * @param string|null $supplementaryInfoSuffix
     * @return static
     */
    public function setSupplementaryInfoSuffix(?string $supplementaryInfoSuffix): static
    {
        $this->supplementaryInfoSuffix = $supplementaryInfoSuffix;
        return $this;
    }
}
