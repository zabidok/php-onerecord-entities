<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\ORM\Mapping as ORM;

/**
 * CO2 Calculation
 *
 * @link https://onerecord.iata.org/ns/cargo#CO2Emissions Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CO2Emissions extends LogisticsObject
{
    /**
     * CO2 emissions calculated
     *
     * @link https://onerecord.iata.org/ns/cargo#calculatedEmissions Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $calculatedEmissions = null;

    /**
     * Reference to the TransportMovement or TransportLegs the CO2Emissions have been calculated for
     *
     * @link https://onerecord.iata.org/ns/cargo#calculationFor Ontology
     */
    #[ORM\ManyToOne(targetEntity: LogisticsObject::class)]
    protected ?LogisticsObject $calculationFor = null;

    /**
     * Name of the CO2 calculation method
     *
     * @link https://onerecord.iata.org/ns/cargo#methodName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $methodName = null;

    /**
     * Version used for the calculation
     *
     * @link https://onerecord.iata.org/ns/cargo#methodVersion Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $methodVersion = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Value|null
     */
    public function getCalculatedEmissions(): ?Value
    {
        return $this->calculatedEmissions;
    }


    /**
     * @param Value|null $calculatedEmissions
     * @return static
     */
    public function setCalculatedEmissions(?Value $calculatedEmissions): static
    {
        $this->calculatedEmissions = $calculatedEmissions;
        return $this;
    }


    /**
     * @return LogisticsObject|null
     */
    public function getCalculationFor(): ?LogisticsObject
    {
        return $this->calculationFor;
    }


    /**
     * @param LogisticsObject|null $calculationFor
     * @return static
     */
    public function setCalculationFor(?LogisticsObject $calculationFor): static
    {
        $this->calculationFor = $calculationFor;
        return $this;
    }


    public function getMethodName(): ?string
    {
        return $this->methodName;
    }


    /**
     * @param string|null $methodName
     * @return static
     */
    public function setMethodName(?string $methodName): static
    {
        $this->methodName = $methodName;
        return $this;
    }


    public function getMethodVersion(): ?string
    {
        return $this->methodVersion;
    }


    /**
     * @param string|null $methodVersion
     * @return static
     */
    public function setMethodVersion(?string $methodVersion): static
    {
        $this->methodVersion = $methodVersion;
        return $this;
    }
}
