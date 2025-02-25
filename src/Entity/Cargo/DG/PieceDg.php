<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\DG;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Piece;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CodeListElement;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dangerous Goods subtype of Piece
 *
 * @link https://onerecord.iata.org/ns/cargo#PieceDg Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class PieceDg extends Piece
{
    /**
     * Reference to the Dangerous Goods declaration
     *
     * @link https://onerecord.iata.org/ns/cargo#dgDeclaration Ontology
     */
    #[ORM\ManyToOne(targetEntity: DgDeclaration::class)]
    protected ?DgDeclaration $dgDeclaration = null;

    /**
     * Identifies the Logistic Unit package type. UN Recommendation on Transport of Dangerous Goods, Model Regulations
     *
     * @link https://onerecord.iata.org/ns/cargo#overpackTypeCode Ontology
     */
    #[ORM\ManyToOne(targetEntity: CodeListElement::class)]
    protected ?CodeListElement $overpackTypeCode = null;

    /**
     * A statement identifying that the dangerous goods listed above are all contained in the same outer packaging. Takes the form All packed in one aaaa (description of packaging type) x nn (number of packages). Applies to air transport only. (Air)
     *
     * @link https://onerecord.iata.org/ns/cargo#allPackedInOneIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $allPackedInOneIndicator = null;

    /**
     * Applies to fissile material only, other than fissile excepted. A numeric value expressed to one decimal place preceded by the letters CSI.
     *
     * @link https://onerecord.iata.org/ns/cargo#overpackCriticalitySafetyIndexNumeric Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $overpackCriticalitySafetyIndexNumeric = null;

    /**
     * Overpack indicator
     *
     * @link https://onerecord.iata.org/ns/cargo#overpackIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $overpackIndicator = null;

    /**
     * A single number assigned to a package, overpack or freight container to provide control over radiation exposure.
     *
     * @link https://onerecord.iata.org/ns/cargo#overpackT1 Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $overpackT1 = null;

    /**
     * Most instances of all packed in one will require the addition of the Q value which  1. Applies to air transport only. (Air)
     *
     * @link https://onerecord.iata.org/ns/cargo#qValueNumeric Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?float $qValueNumeric = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return DgDeclaration|null
     */
    public function getDgDeclaration(): ?DgDeclaration
    {
        return $this->dgDeclaration;
    }


    /**
     * @param DgDeclaration|null $dgDeclaration
     * @return static
     */
    public function setDgDeclaration(?DgDeclaration $dgDeclaration): static
    {
        $this->dgDeclaration = $dgDeclaration;
        return $this;
    }


    /**
     * @return CodeListElement|null
     */
    public function getOverpackTypeCode(): ?CodeListElement
    {
        return $this->overpackTypeCode;
    }


    /**
     * @param CodeListElement|null $overpackTypeCode
     * @return static
     */
    public function setOverpackTypeCode(?CodeListElement $overpackTypeCode): static
    {
        $this->overpackTypeCode = $overpackTypeCode;
        return $this;
    }


    public function getAllPackedInOneIndicator(): ?bool
    {
        return $this->allPackedInOneIndicator;
    }


    /**
     * @param bool|null $allPackedInOneIndicator
     * @return static
     */
    public function setAllPackedInOneIndicator(?bool $allPackedInOneIndicator): static
    {
        $this->allPackedInOneIndicator = $allPackedInOneIndicator;
        return $this;
    }


    public function getOverpackCriticalitySafetyIndexNumeric(): ?string
    {
        return $this->overpackCriticalitySafetyIndexNumeric;
    }


    /**
     * @param string|null $overpackCriticalitySafetyIndexNumeric
     * @return static
     */
    public function setOverpackCriticalitySafetyIndexNumeric(?string $overpackCriticalitySafetyIndexNumeric): static
    {
        $this->overpackCriticalitySafetyIndexNumeric = $overpackCriticalitySafetyIndexNumeric;
        return $this;
    }


    public function getOverpackIndicator(): ?bool
    {
        return $this->overpackIndicator;
    }


    /**
     * @param bool|null $overpackIndicator
     * @return static
     */
    public function setOverpackIndicator(?bool $overpackIndicator): static
    {
        $this->overpackIndicator = $overpackIndicator;
        return $this;
    }


    public function getOverpackT1(): ?bool
    {
        return $this->overpackT1;
    }


    /**
     * @param bool|null $overpackT1
     * @return static
     */
    public function setOverpackT1(?bool $overpackT1): static
    {
        $this->overpackT1 = $overpackT1;
        return $this;
    }


    public function getQValueNumeric(): ?float
    {
        return $this->qValueNumeric;
    }


    /**
     * @param float|null $qValueNumeric
     * @return static
     */
    public function setQValueNumeric(?float $qValueNumeric): static
    {
        $this->qValueNumeric = $qValueNumeric;
        return $this;
    }
}
