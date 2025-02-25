<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * Company details
 *
 * @link https://onerecord.iata.org/ns/cargo#Company Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Company extends Organization
{
    /**
     * IATA accredited cargo agent 7 digit number
     *
     * @link https://onerecord.iata.org/ns/cargo#iataCargoAgentCode Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $iataCargoAgentCode = null;

    /**
     * IATA CASS cargo agent 4 digit branch number / location identifier
     *
     * @link https://onerecord.iata.org/ns/cargo#iataCargoAgentLocationIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $iataCargoAgentLocationIdentifier = null;


    public function __construct()
    {
        parent::__construct();
    }


    public function getIataCargoAgentCode(): ?string
    {
        return $this->iataCargoAgentCode;
    }


    /**
     * @param string|null $iataCargoAgentCode
     * @return static
     */
    public function setIataCargoAgentCode(?string $iataCargoAgentCode): static
    {
        $this->iataCargoAgentCode = $iataCargoAgentCode;
        return $this;
    }


    public function getIataCargoAgentLocationIdentifier(): ?string
    {
        return $this->iataCargoAgentLocationIdentifier;
    }


    /**
     * @param string|null $iataCargoAgentLocationIdentifier
     * @return static
     */
    public function setIataCargoAgentLocationIdentifier(?string $iataCargoAgentLocationIdentifier): static
    {
        $this->iataCargoAgentLocationIdentifier = $iataCargoAgentLocationIdentifier;
        return $this;
    }
}
