<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Other identifiers
 *
 * @link https://onerecord.iata.org/ns/cargo#OtherIdentifier Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class OtherIdentifier
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Identifier type or description
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifierType Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $otherIdentifierType = null;

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


    public function getOtherIdentifierType(): ?string
    {
        return $this->otherIdentifierType;
    }


    /**
     * @param string|null $otherIdentifierType
     * @return static
     */
    public function setOtherIdentifierType(?string $otherIdentifierType): static
    {
        $this->otherIdentifierType = $otherIdentifierType;
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
