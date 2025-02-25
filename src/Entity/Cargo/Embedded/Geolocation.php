<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Geolocation details - e.g. for drones, automated vehicles
 *
 * @link https://onerecord.iata.org/ns/cargo#Geolocation Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Geolocation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Elevation from sea level - Change of data type to Value as of ontology v1.1
     *
     * @link https://onerecord.iata.org/ns/cargo#elevation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $elevation = null;

    /**
     * Location latitude decimal
     *
     * @link https://onerecord.iata.org/ns/cargo#latitude Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $latitude = null;

    /**
     * Location longitude decimal
     *
     * @link https://onerecord.iata.org/ns/cargo#longitude Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $longitude = null;


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
    public function getElevation(): ?Value
    {
        return $this->elevation;
    }


    /**
     * @param Value|null $elevation
     * @return static
     */
    public function setElevation(?Value $elevation): static
    {
        $this->elevation = $elevation;
        return $this;
    }


    public function getLatitude(): ?float
    {
        return $this->latitude;
    }


    /**
     * @param float|null $latitude
     * @return static
     */
    public function setLatitude(?float $latitude): static
    {
        $this->latitude = $latitude;
        return $this;
    }


    public function getLongitude(): ?float
    {
        return $this->longitude;
    }


    /**
     * @param float|null $longitude
     * @return static
     */
    public function setLongitude(?float $longitude): static
    {
        $this->longitude = $longitude;
        return $this;
    }
}
