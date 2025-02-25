<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Packaging details
 *
 * @link https://onerecord.iata.org/ns/cargo#PackagingType Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class PackagingType extends LogisticsObject
{
    /**
     * Piece on which the Packaging type is applicable
     *
     * @link https://onerecord.iata.org/ns/cargo#appliedOnPieces Ontology
     */
    #[ORM\ManyToMany(targetEntity: Piece::class)]
    #[ORM\JoinTable(
        name: 'packagingtype_piece',
        joinColumns: [new ORM\JoinColumn(name: 'packagingtype_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'piece_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $appliedOnPieces;

    /**
     * Packaging type identifier as per UNECE Rec 21 Annex V and VI e.g. 1A - Drum, steel - Packaging material code. Identifies the Logistic Unit package type. UN Recommendation on Transport of Dangerous Goods, Model Regulations
     *
     * @link https://onerecord.iata.org/ns/cargo#typeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $typeCode = null;

    /**
     * Natural language description if required
     *
     * @link https://onerecord.iata.org/ns/cargo#description Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $description = null;


    public function __construct()
    {
        parent::__construct();
        $this->appliedOnPieces = new ArrayCollection();
    }


    /**
     * @return Collection <int, Piece>
     */
    public function getAppliedOnPieces(): Collection
    {
        return $this->appliedOnPieces;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function addAppliedOnPieces(Piece $piece): static
    {
        if (!$this->appliedOnPieces->contains($piece)) {
            $this->appliedOnPieces->add($piece);
        }
        return $this;
    }


    /**
     * @param Piece $piece
     * @return static
     */
    public function removeAppliedOnPieces(Piece $piece): static
    {
        $this->appliedOnPieces->removeElement($piece);
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getTypeCode(): ?CodeListElement
    {
        return $this->typeCode;
    }


    /**
     * @param CodeListElement|null $typeCode
     * @return static
     */
    public function setTypeCode(?CodeListElement $typeCode): static
    {
        $this->typeCode = $typeCode;
        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }


    /**
     * @param string|null $description
     * @return static
     */
    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
