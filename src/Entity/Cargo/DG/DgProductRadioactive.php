<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\DG;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\RaTypeCode;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Details of the radioactive products
 *
 * @link https://onerecord.iata.org/ns/cargo#DgProductRadioactive Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class DgProductRadioactive extends LogisticsObject
{
    /**
     * The category of the package or all packed in one. Complete text to be transmitted: I-White, II-Yellow, III-Yellow instead of I, II, III
     *
     * @link https://onerecord.iata.org/ns/cargo#dgRaTypeCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: RaTypeCode::class)]
    protected ?RaTypeCode $dgRaTypeCode = null;

    /**
     * Reference to the ProductDg this DgProductRadioactive details
     *
     * @link https://onerecord.iata.org/ns/cargo#forProductDg Ontology
     */
    #[ORM\ManyToOne(targetEntity: ProductDg::class)]
    protected ?ProductDg $forProductDg = null;

    /**
     * DgRadioactiveIsotope.
     *
     * @link https://onerecord.iata.org/ns/cargo#isotopes Ontology
     */
    #[ORM\ManyToMany(targetEntity: DgRadioactiveIsotope::class)]
    #[ORM\JoinTable(
        name: 'dgproductradioactive_dgradioactiveisotope',
        joinColumns: [new ORM\JoinColumn(name: 'dgproductradioactive_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [
        new ORM\JoinColumn(name: 'dgradioactiveisotope_id', referencedColumnName: 'id', onDelete: 'CASCADE'),
    ],
    )]
    protected Collection $isotopes;

    /**
     * Indicates if Fissile is excepted
     *
     * @link https://onerecord.iata.org/ns/cargo#fissileExceptionIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $fissileExceptionIndicator = null;

    /**
     * Fissile exception reference, mandatory if Fissile Exception Indicator is true.
     *
     * @link https://onerecord.iata.org/ns/cargo#fissileExceptionReference Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $fissileExceptionReference = null;

    /**
     * Radioactive Transport-Index value of the package or all packed in one. Conditionally mandatory and applies to categories II-Yellow and III-Yellow only; field only contains the value, if printed, TI must be added as a prefix to the value  to be printed in the Packing Instructions column
     *
     * @link https://onerecord.iata.org/ns/cargo#transportIndexNumeric Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $transportIndexNumeric = null;


    public function __construct()
    {
        parent::__construct();
        $this->isotopes = new ArrayCollection();
    }


    /**
     * @return RaTypeCode|null
     */
    public function getDgRaTypeCode(): ?RaTypeCode
    {
        return $this->dgRaTypeCode;
    }


    /**
     * @param RaTypeCode|null $dgRaTypeCode
     * @return static
     */
    public function setDgRaTypeCode(?RaTypeCode $dgRaTypeCode): static
    {
        $this->dgRaTypeCode = $dgRaTypeCode;
        return $this;
    }


    /**
     * @return ProductDg|null
     */
    public function getForProductDg(): ?ProductDg
    {
        return $this->forProductDg;
    }


    /**
     * @param ProductDg|null $forProductDg
     * @return static
     */
    public function setForProductDg(?ProductDg $forProductDg): static
    {
        $this->forProductDg = $forProductDg;
        return $this;
    }


    /**
     * @return Collection <int, DgRadioactiveIsotope>
     */
    public function getIsotopes(): Collection
    {
        return $this->isotopes;
    }


    /**
     * @param DgRadioactiveIsotope $dgRadioactiveIsotope
     * @return static
     */
    public function addIsotopes(DgRadioactiveIsotope $dgRadioactiveIsotope): static
    {
        if (!$this->isotopes->contains($dgRadioactiveIsotope)) {
            $this->isotopes->add($dgRadioactiveIsotope);
        }
        return $this;
    }


    /**
     * @param DgRadioactiveIsotope $dgRadioactiveIsotope
     * @return static
     */
    public function removeIsotopes(DgRadioactiveIsotope $dgRadioactiveIsotope): static
    {
        $this->isotopes->removeElement($dgRadioactiveIsotope);
        return $this;
    }


    public function getFissileExceptionIndicator(): ?bool
    {
        return $this->fissileExceptionIndicator;
    }


    /**
     * @param bool|null $fissileExceptionIndicator
     * @return static
     */
    public function setFissileExceptionIndicator(?bool $fissileExceptionIndicator): static
    {
        $this->fissileExceptionIndicator = $fissileExceptionIndicator;
        return $this;
    }


    public function getFissileExceptionReference(): ?string
    {
        return $this->fissileExceptionReference;
    }


    /**
     * @param string|null $fissileExceptionReference
     * @return static
     */
    public function setFissileExceptionReference(?string $fissileExceptionReference): static
    {
        $this->fissileExceptionReference = $fissileExceptionReference;
        return $this;
    }


    public function getTransportIndexNumeric(): ?int
    {
        return $this->transportIndexNumeric;
    }


    /**
     * @param int|null $transportIndexNumeric
     * @return static
     */
    public function setTransportIndexNumeric(?int $transportIndexNumeric): static
    {
        $this->transportIndexNumeric = $transportIndexNumeric;
        return $this;
    }
}
