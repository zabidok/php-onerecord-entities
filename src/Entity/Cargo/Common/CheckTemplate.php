<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Check;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Body of a Check referencing various Questions
 *
 * @link https://onerecord.iata.org/ns/cargo#CheckTemplate Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class CheckTemplate extends LogisticsObject
{
    /**
     * Information about other Parties involved depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'checktemplate_party',
        joinColumns: [new ORM\JoinColumn(name: 'checktemplate_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedParties;

    /**
     * Reference to an ExternalReference holding a legacy template outside of ONE Record, such as a photo or pdf of a checksheet
     *
     * @link https://onerecord.iata.org/ns/cargo#legacyTemplate Ontology
     */
    #[ORM\ManyToOne(targetEntity: ExternalReference::class)]
    protected ?ExternalReference $legacyTemplate = null;

    /**
     * References to all Questions that are part of this template
     *
     * @link https://onerecord.iata.org/ns/cargo#questions Ontology
     */
    #[ORM\ManyToMany(targetEntity: Question::class)]
    #[ORM\JoinTable(
        name: 'checktemplate_question',
        joinColumns: [new ORM\JoinColumn(name: 'checktemplate_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'question_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $questions;

    /**
     * Reference to the Check the template was used in
     *
     * @link https://onerecord.iata.org/ns/cargo#usedInCheck Ontology
     */
    #[ORM\OneToOne(targetEntity: Check::class)]
    protected ?Check $usedInCheck = null;

    /**
     * DateTime on which the CheckTemplate was released
     *
     * @link https://onerecord.iata.org/ns/cargo#date Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $date = null;

    /**
     * Human-understandable name of object depending on the context
     *
     * @link https://onerecord.iata.org/ns/cargo#name Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $name = null;

    /**
     * Purpose of the template
     *
     * @link https://onerecord.iata.org/ns/cargo#templatePurpose Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $templatePurpose = null;

    /**
     * Version of the template
     *
     * @link https://onerecord.iata.org/ns/cargo#version Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $version = null;


    public function __construct()
    {
        parent::__construct();
        $this->involvedParties = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }


    /**
     * @return Collection <int, Party>
     */
    public function getInvolvedParties(): Collection
    {
        return $this->involvedParties;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function addInvolvedParties(Party $party): static
    {
        if (!$this->involvedParties->contains($party)) {
            $this->involvedParties->add($party);
        }
        return $this;
    }


    /**
     * @param Party $party
     * @return static
     */
    public function removeInvolvedParties(Party $party): static
    {
        $this->involvedParties->removeElement($party);
        return $this;
    }


    /**
     * @return ExternalReference|null
     */
    public function getLegacyTemplate(): ?ExternalReference
    {
        return $this->legacyTemplate;
    }


    /**
     * @param ExternalReference|null $legacyTemplate
     * @return static
     */
    public function setLegacyTemplate(?ExternalReference $legacyTemplate): static
    {
        $this->legacyTemplate = $legacyTemplate;
        return $this;
    }


    /**
     * @return Collection <int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }


    /**
     * @param Question $question
     * @return static
     */
    public function addQuestions(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
        }
        return $this;
    }


    /**
     * @param Question $question
     * @return static
     */
    public function removeQuestions(Question $question): static
    {
        $this->questions->removeElement($question);
        return $this;
    }


    /**
     * @return Check|null
     */
    public function getUsedInCheck(): ?Check
    {
        return $this->usedInCheck;
    }


    /**
     * @param Check|null $usedInCheck
     * @return static
     */
    public function setUsedInCheck(?Check $usedInCheck): static
    {
        $this->usedInCheck = $usedInCheck;
        return $this;
    }


    public function getDate(): ?\DateTime
    {
        return $this->date;
    }


    /**
     * @param \DateTime|null $date
     * @return static
     */
    public function setDate(?\DateTime $date): static
    {
        $this->date = $date;
        return $this;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    /**
     * @param string|null $name
     * @return static
     */
    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }


    public function getTemplatePurpose(): ?string
    {
        return $this->templatePurpose;
    }


    /**
     * @param string|null $templatePurpose
     * @return static
     */
    public function setTemplatePurpose(?string $templatePurpose): static
    {
        $this->templatePurpose = $templatePurpose;
        return $this;
    }


    public function getVersion(): ?string
    {
        return $this->version;
    }


    /**
     * @param string|null $version
     * @return static
     */
    public function setVersion(?string $version): static
    {
        $this->version = $version;
        return $this;
    }
}
