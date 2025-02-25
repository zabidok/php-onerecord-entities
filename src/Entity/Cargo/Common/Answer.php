<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Actor;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Party;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Answer holds the answer to one Question
 *
 * @link https://onerecord.iata.org/ns/cargo#Answer Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Answer extends LogisticsObject
{
    /**
     * Reference to the Actor giving the Answer
     *
     * @link https://onerecord.iata.org/ns/cargo#answerActor Ontology
     */
    #[ORM\ManyToOne(targetEntity: Actor::class)]
    protected ?Actor $answerActor = null;

    /**
     * Information about an answer Value of any kind of the Answer
     *
     * @link https://onerecord.iata.org/ns/cargo#answerValue Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $answerValue = null;

    /**
     * Reference to the Location from which the Question was answered, relevant for split checks with documentary and physical elements
     *
     * @link https://onerecord.iata.org/ns/cargo#givenAtLocation Ontology
     */
    #[ORM\ManyToOne(targetEntity: Location::class)]
    protected ?Location $givenAtLocation = null;

    /**
     * Information about other Parties involved depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedParties Ontology
     */
    #[ORM\ManyToMany(targetEntity: Party::class)]
    #[ORM\JoinTable(
        name: 'answer_party',
        joinColumns: [new ORM\JoinColumn(name: 'answer_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedParties;

    /**
     * Reference to the Question the Answer is for
     *
     * @link https://onerecord.iata.org/ns/cargo#question Ontology
     */
    #[ORM\ManyToOne(targetEntity: Question::class)]
    protected ?Question $question = null;

    /**
     * Text for the Answer
     *
     * @link https://onerecord.iata.org/ns/cargo#text Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $text = null;


    public function __construct()
    {
        parent::__construct();
        $this->involvedParties = new ArrayCollection();
    }


    /**
     * @return Actor|null
     */
    public function getAnswerActor(): ?Actor
    {
        return $this->answerActor;
    }


    /**
     * @param Actor|null $answerActor
     * @return static
     */
    public function setAnswerActor(?Actor $answerActor): static
    {
        $this->answerActor = $answerActor;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getAnswerValue(): ?Value
    {
        return $this->answerValue;
    }


    /**
     * @param Value|null $answerValue
     * @return static
     */
    public function setAnswerValue(?Value $answerValue): static
    {
        $this->answerValue = $answerValue;
        return $this;
    }


    /**
     * @return Location|null
     */
    public function getGivenAtLocation(): ?Location
    {
        return $this->givenAtLocation;
    }


    /**
     * @param Location|null $givenAtLocation
     * @return static
     */
    public function setGivenAtLocation(?Location $givenAtLocation): static
    {
        $this->givenAtLocation = $givenAtLocation;
        return $this;
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
     * @return Question|null
     */
    public function getQuestion(): ?Question
    {
        return $this->question;
    }


    /**
     * @param Question|null $question
     * @return static
     */
    public function setQuestion(?Question $question): static
    {
        $this->question = $question;
        return $this;
    }


    public function getText(): ?string
    {
        return $this->text;
    }


    /**
     * @param string|null $text
     * @return static
     */
    public function setText(?string $text): static
    {
        $this->text = $text;
        return $this;
    }
}
