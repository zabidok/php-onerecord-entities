<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Common;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question as part of a CheckTemplate
 *
 * @link https://onerecord.iata.org/ns/cargo#Question Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Question extends LogisticsObject
{
    /**
     * Reference to the Answer to the Question
     *
     * @link https://onerecord.iata.org/ns/cargo#answer Ontology
     */
    #[ORM\OneToOne(targetEntity: Answer::class)]
    protected ?Answer $answer = null;

    /**
     * Reference to the CheckTemplate the Question is from
     *
     * @link https://onerecord.iata.org/ns/cargo#checkTemplate Ontology
     */
    #[ORM\ManyToOne(targetEntity: CheckTemplate::class, inversedBy: 'questions')]
    protected ?CheckTemplate $checkTemplate = null;

    /**
     * Text restrictions to the Answer
     *
     * @link https://onerecord.iata.org/ns/cargo#answerOptionsText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $answerOptionsText = null;

    /**
     * Value restrictions to the answer
     *
     * @link https://onerecord.iata.org/ns/cargo#answerOptionsValue Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $answerOptionsValue = null;

    /**
     * Long text of the question
     *
     * @link https://onerecord.iata.org/ns/cargo#longText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $longText = null;

    /**
     * Number of the Question within the template (alphanumeric)
     *
     * @link https://onerecord.iata.org/ns/cargo#questionNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $questionNumber = null;

    /**
     * Section of the CheckTemplate this Question is part of
     *
     * @link https://onerecord.iata.org/ns/cargo#questionSection Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $questionSection = null;

    /**
     * Short text of the Question
     *
     * @link https://onerecord.iata.org/ns/cargo#shortText Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $shortText = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Answer|null
     */
    public function getAnswer(): ?Answer
    {
        return $this->answer;
    }


    /**
     * @param Answer|null $answer
     * @return static
     */
    public function setAnswer(?Answer $answer): static
    {
        $this->answer = $answer;
        return $this;
    }


    /**
     * @return CheckTemplate|null
     */
    public function getCheckTemplate(): ?CheckTemplate
    {
        return $this->checkTemplate;
    }


    /**
     * @param CheckTemplate|null $checkTemplate
     * @return static
     */
    public function setCheckTemplate(?CheckTemplate $checkTemplate): static
    {
        $this->checkTemplate = $checkTemplate;
        return $this;
    }


    public function getAnswerOptionsText(): ?string
    {
        return $this->answerOptionsText;
    }


    /**
     * @param string|null $answerOptionsText
     * @return static
     */
    public function setAnswerOptionsText(?string $answerOptionsText): static
    {
        $this->answerOptionsText = $answerOptionsText;
        return $this;
    }


    public function getAnswerOptionsValue(): ?string
    {
        return $this->answerOptionsValue;
    }


    /**
     * @param string|null $answerOptionsValue
     * @return static
     */
    public function setAnswerOptionsValue(?string $answerOptionsValue): static
    {
        $this->answerOptionsValue = $answerOptionsValue;
        return $this;
    }


    public function getLongText(): ?string
    {
        return $this->longText;
    }


    /**
     * @param string|null $longText
     * @return static
     */
    public function setLongText(?string $longText): static
    {
        $this->longText = $longText;
        return $this;
    }


    public function getQuestionNumber(): ?string
    {
        return $this->questionNumber;
    }


    /**
     * @param string|null $questionNumber
     * @return static
     */
    public function setQuestionNumber(?string $questionNumber): static
    {
        $this->questionNumber = $questionNumber;
        return $this;
    }


    public function getQuestionSection(): ?string
    {
        return $this->questionSection;
    }


    /**
     * @param string|null $questionSection
     * @return static
     */
    public function setQuestionSection(?string $questionSection): static
    {
        $this->questionSection = $questionSection;
        return $this;
    }


    public function getShortText(): ?string
    {
        return $this->shortText;
    }


    /**
     * @param string|null $shortText
     * @return static
     */
    public function setShortText(?string $shortText): static
    {
        $this->shortText = $shortText;
        return $this;
    }
}
