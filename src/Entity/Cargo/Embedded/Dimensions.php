<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Dimension details
 *
 * @link https://onerecord.iata.org/ns/cargo#Dimensions Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Dimensions
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Height
     *
     * @link https://onerecord.iata.org/ns/cargo#height Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $height = null;

    /**
     * Length
     *
     * @link https://onerecord.iata.org/ns/cargo#length Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $length = null;

    /**
     * Volume
     *
     * @link https://onerecord.iata.org/ns/cargo#volume Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $volume = null;

    /**
     * Width
     *
     * @link https://onerecord.iata.org/ns/cargo#width Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $width = null;


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
    public function getHeight(): ?Value
    {
        return $this->height;
    }


    /**
     * @param Value|null $height
     * @return static
     */
    public function setHeight(?Value $height): static
    {
        $this->height = $height;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getLength(): ?Value
    {
        return $this->length;
    }


    /**
     * @param Value|null $length
     * @return static
     */
    public function setLength(?Value $length): static
    {
        $this->length = $length;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getVolume(): ?Value
    {
        return $this->volume;
    }


    /**
     * @param Value|null $volume
     * @return static
     */
    public function setVolume(?Value $volume): static
    {
        $this->volume = $volume;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getWidth(): ?Value
    {
        return $this->width;
    }


    /**
     * @param Value|null $width
     * @return static
     */
    public function setWidth(?Value $width): static
    {
        $this->width = $width;
        return $this;
    }
}
