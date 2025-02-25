<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * PieceGroup details
 *
 * @link https://onerecord.iata.org/ns/cargo#PieceGroup Ontology
 */
#[ORM\Entity]
#[ORM\InheritanceType('JOINED')]
#[ORM\DiscriminatorColumn(name: 'type', type: 'string', length: 25)]
#[Version('3.1 RC1')]
class PieceGroup
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Weight of dry ice
     *
     * @link https://onerecord.iata.org/ns/cargo#dryIceWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $dryIceWeight = null;

    /**
     * Total gross weight of the piece group
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceGroupGrossWeight Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $pieceGroupGrossWeight = null;

    /**
     * Number of pieces in the piece group
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceGroupCount Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $pieceGroupCount = null;

    /**
     * Identifier of the piece group, increasing integers
     *
     * @link https://onerecord.iata.org/ns/cargo#pieceGroupId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $pieceGroupId = null;


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
    public function getDryIceWeight(): ?Value
    {
        return $this->dryIceWeight;
    }


    /**
     * @param Value|null $dryIceWeight
     * @return static
     */
    public function setDryIceWeight(?Value $dryIceWeight): static
    {
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getPieceGroupGrossWeight(): ?Value
    {
        return $this->pieceGroupGrossWeight;
    }


    /**
     * @param Value|null $pieceGroupGrossWeight
     * @return static
     */
    public function setPieceGroupGrossWeight(?Value $pieceGroupGrossWeight): static
    {
        $this->pieceGroupGrossWeight = $pieceGroupGrossWeight;
        return $this;
    }


    public function getPieceGroupCount(): ?int
    {
        return $this->pieceGroupCount;
    }


    /**
     * @param int|null $pieceGroupCount
     * @return static
     */
    public function setPieceGroupCount(?int $pieceGroupCount): static
    {
        $this->pieceGroupCount = $pieceGroupCount;
        return $this;
    }


    public function getPieceGroupId(): ?int
    {
        return $this->pieceGroupId;
    }


    /**
     * @param int|null $pieceGroupId
     * @return static
     */
    public function setPieceGroupId(?int $pieceGroupId): static
    {
        $this->pieceGroupId = $pieceGroupId;
        return $this;
    }
}
