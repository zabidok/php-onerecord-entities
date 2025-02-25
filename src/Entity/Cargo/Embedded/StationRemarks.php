<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\Location;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * StationRemarks details
 *
 * @link https://onerecord.iata.org/ns/cargo#StationRemarks Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class StationRemarks
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Reference to the station (Airport), mandatory
     *
     * @link https://onerecord.iata.org/ns/cargo#station Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $station = null;

    /**
     * Details of the remarks, mandatory
     *
     * @link https://onerecord.iata.org/ns/cargo#remarksText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $remarksText = null;


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
     * @return Location|null
     */
    public function getStation(): ?Location
    {
        return $this->station;
    }


    /**
     * @param Location|null $station
     * @return static
     */
    public function setStation(?Location $station): static
    {
        $this->station = $station;
        return $this;
    }


    public function getRemarksText(): ?string
    {
        return $this->remarksText;
    }


    /**
     * @param string|null $remarksText
     * @return static
     */
    public function setRemarksText(?string $remarksText): static
    {
        $this->remarksText = $remarksText;
        return $this;
    }
}
