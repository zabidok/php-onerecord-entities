<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * Company details of carriers
 *
 * @link https://onerecord.iata.org/ns/cargo#Carrier Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Carrier extends Company
{
    /**
     * IATA two-character airline code
     *
     * @link https://onerecord.iata.org/ns/cargo#airlineCode Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $airlineCode = null;

    /**
     * IATA three-numeric airline prefix number
     *
     * @link https://onerecord.iata.org/ns/cargo#prefix Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $prefix = null;


    public function __construct()
    {
        parent::__construct();
    }


    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }


    /**
     * @param string|null $airlineCode
     * @return static
     */
    public function setAirlineCode(?string $airlineCode): static
    {
        $this->airlineCode = $airlineCode;
        return $this;
    }


    public function getPrefix(): ?string
    {
        return $this->prefix;
    }


    /**
     * @param string|null $prefix
     * @return static
     */
    public function setPrefix(?string $prefix): static
    {
        $this->prefix = $prefix;
        return $this;
    }
}
