<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Product additional details
 *
 * @link https://onerecord.iata.org/ns/cargo#Characteristic Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Characteristic
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Product characteristics code - e.g. CLR - Color. Not restricted to a list.
     *
     * @link https://onerecord.iata.org/ns/cargo#characteristicType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $characteristicType = null;

    /**
     * Textual value filled on use context (eg. characteristic colour, contactDetail mail address, etc.)
     *
     * @link https://onerecord.iata.org/ns/cargo#textualValue Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $textualValue = null;


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


    public function getCharacteristicType(): ?string
    {
        return $this->characteristicType;
    }


    /**
     * @param string|null $characteristicType
     * @return static
     */
    public function setCharacteristicType(?string $characteristicType): static
    {
        $this->characteristicType = $characteristicType;
        return $this;
    }


    public function getTextualValue(): ?string
    {
        return $this->textualValue;
    }


    /**
     * @param string|null $textualValue
     * @return static
     */
    public function setTextualValue(?string $textualValue): static
    {
        $this->textualValue = $textualValue;
        return $this;
    }
}
