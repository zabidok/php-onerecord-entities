<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;

/**
 * LoosePiece details
 *
 * @link https://onerecord.iata.org/ns/cargo#LoosePiece Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class LoosePiece extends PieceGroup
{
    /**
     * Height of a single piece
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceHeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $pieceHeight = null;

    /**
     * Length of a single piece
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceLength Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $pieceLength = null;

    /**
     * Weight of a single piece
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $pieceWeight = null;

    /**
     * Width of a single piece
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceWidth Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $pieceWidth = null;

    /**
     * Stackable indicator for the pieces (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#stackable Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $stackable = null;

    /**
     * Turnable indicator for the pieces (boolean)
     *
     * @link https://onerecord.iata.org/ns/cargo#turnable Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $turnable = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return Value|null
     */
    public function getPieceHeight(): ?Value
    {
        return $this->pieceHeight;
    }


    /**
     * @param Value|null $pieceHeight
     * @return static
     */
    public function setPieceHeight(?Value $pieceHeight): static
    {
        $this->pieceHeight = $pieceHeight;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getPieceLength(): ?Value
    {
        return $this->pieceLength;
    }


    /**
     * @param Value|null $pieceLength
     * @return static
     */
    public function setPieceLength(?Value $pieceLength): static
    {
        $this->pieceLength = $pieceLength;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getPieceWeight(): ?Value
    {
        return $this->pieceWeight;
    }


    /**
     * @param Value|null $pieceWeight
     * @return static
     */
    public function setPieceWeight(?Value $pieceWeight): static
    {
        $this->pieceWeight = $pieceWeight;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getPieceWidth(): ?Value
    {
        return $this->pieceWidth;
    }


    /**
     * @param Value|null $pieceWidth
     * @return static
     */
    public function setPieceWidth(?Value $pieceWidth): static
    {
        $this->pieceWidth = $pieceWidth;
        return $this;
    }


    public function getStackable(): ?bool
    {
        return $this->stackable;
    }


    /**
     * @param bool|null $stackable
     * @return static
     */
    public function setStackable(?bool $stackable): static
    {
        $this->stackable = $stackable;
        return $this;
    }


    public function getTurnable(): ?bool
    {
        return $this->turnable;
    }


    /**
     * @param bool|null $turnable
     * @return static
     */
    public function setTurnable(?bool $turnable): static
    {
        $this->turnable = $turnable;
        return $this;
    }
}
