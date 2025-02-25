<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Embedded object used for AWB mapping (box 10)
 *
 * @link https://onerecord.iata.org/ns/cargo#AccountingNote Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class AccountingNote
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * String holding accounting information (AWB box 10)
     *
     * @link https://onerecord.iata.org/ns/cargo#accountingNoteIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $accountingNoteIdentifier = null;

    /**
     * String holding the identifier in an accounting note (AWB box 10)
     *
     * @link https://onerecord.iata.org/ns/cargo#accountingNoteText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $accountingNoteText = null;


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


    public function getAccountingNoteIdentifier(): ?string
    {
        return $this->accountingNoteIdentifier;
    }


    /**
     * @param string|null $accountingNoteIdentifier
     * @return static
     */
    public function setAccountingNoteIdentifier(?string $accountingNoteIdentifier): static
    {
        $this->accountingNoteIdentifier = $accountingNoteIdentifier;
        return $this;
    }


    public function getAccountingNoteText(): ?string
    {
        return $this->accountingNoteText;
    }


    /**
     * @param string|null $accountingNoteText
     * @return static
     */
    public function setAccountingNoteText(?string $accountingNoteText): static
    {
        $this->accountingNoteText = $accountingNoteText;
        return $this;
    }
}
