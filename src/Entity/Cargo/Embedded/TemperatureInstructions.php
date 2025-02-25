<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * TemperatureInstructions details
 *
 * @link https://onerecord.iata.org/ns/cargo#TemperatureInstructions Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class TemperatureInstructions
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Maximum temperature of the range
     *
     * @link https://onerecord.iata.org/ns/cargo#maxTemperature Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $maxTemperature = null;

    /**
     * Minimum temperature of the range
     *
     * @link https://onerecord.iata.org/ns/cargo#minTemperature Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $minTemperature = null;


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
    public function getMaxTemperature(): ?Value
    {
        return $this->maxTemperature;
    }


    /**
     * @param Value|null $maxTemperature
     * @return static
     */
    public function setMaxTemperature(?Value $maxTemperature): static
    {
        $this->maxTemperature = $maxTemperature;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getMinTemperature(): ?Value
    {
        return $this->minTemperature;
    }


    /**
     * @param Value|null $minTemperature
     * @return static
     */
    public function setMinTemperature(?Value $minTemperature): static
    {
        $this->minTemperature = $minTemperature;
        return $this;
    }
}
