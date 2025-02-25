<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\ContactDetailType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Contact details
 *
 * @link https://onerecord.iata.org/ns/cargo#ContactDetail Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ContactDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Type of the contact details, e.g. Phone number, Mail address
     *
     * @link https://onerecord.iata.org/ns/cargo#contactDetailType Ontology
     */
    #[ORM\ManyToOne(targetEntity: ContactDetailType::class)]
    protected ?ContactDetailType $contactDetailType = null;

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


    /**
     * @return ContactDetailType|null
     */
    public function getContactDetailType(): ?ContactDetailType
    {
        return $this->contactDetailType;
    }


    /**
     * @param ContactDetailType|null $contactDetailType
     * @return static
     */
    public function setContactDetailType(?ContactDetailType $contactDetailType): static
    {
        $this->contactDetailType = $contactDetailType;
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
