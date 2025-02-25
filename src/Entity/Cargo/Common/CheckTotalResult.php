<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Check;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Person;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\ORM\Mapping as ORM;

/**
 * Result of a Check
 *
 * @link https://onerecord.iata.org/ns/cargo#CheckTotalResult Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CheckTotalResult extends LogisticsObject
{
    /**
     * Reference to the Actor certifying the result of the Check if required
     *
     * @link https://onerecord.iata.org/ns/cargo#certifiedByActor Ontology
     */
    #[ORM\ManyToOne(targetEntity: Person::class)]
    protected ?Person $certifiedByActor = null;

    /**
     * @link https://onerecord.iata.org/ns/cargo#resultOfCheck Ontology
     */
    #[ORM\OneToOne(targetEntity: Check::class)]
    protected ?Check $resultOfCheck = null;

    /**
     * Information about a result Value of any kind of the Check
     *
     * @link https://onerecord.iata.org/ns/cargo#resultValue Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $resultValue = null;

    /**
     * Free text remarks to the check result
     *
     * @link https://onerecord.iata.org/ns/cargo#checkRemark Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $checkRemark = null;

    /**
     * Boolean indicating whether the Check was passed
     *
     * @link https://onerecord.iata.org/ns/cargo#passed Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $passed = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Person|null
     */
    public function getCertifiedByActor(): ?Person
    {
        return $this->certifiedByActor;
    }


    /**
     * @param Person|null $certifiedByActor
     * @return static
     */
    public function setCertifiedByActor(?Person $certifiedByActor): static
    {
        $this->certifiedByActor = $certifiedByActor;
        return $this;
    }


    /**
     * @return Check|null
     */
    public function getResultOfCheck(): ?Check
    {
        return $this->resultOfCheck;
    }


    /**
     * @param Check|null $resultOfCheck
     * @return static
     */
    public function setResultOfCheck(?Check $resultOfCheck): static
    {
        $this->resultOfCheck = $resultOfCheck;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getResultValue(): ?Value
    {
        return $this->resultValue;
    }


    /**
     * @param Value|null $resultValue
     * @return static
     */
    public function setResultValue(?Value $resultValue): static
    {
        $this->resultValue = $resultValue;
        return $this;
    }


    public function getCheckRemark(): ?string
    {
        return $this->checkRemark;
    }


    /**
     * @param string|null $checkRemark
     * @return static
     */
    public function setCheckRemark(?string $checkRemark): static
    {
        $this->checkRemark = $checkRemark;
        return $this;
    }


    public function getPassed(): ?bool
    {
        return $this->passed;
    }


    /**
     * @param bool|null $passed
     * @return static
     */
    public function setPassed(?bool $passed): static
    {
        $this->passed = $passed;
        return $this;
    }
}
