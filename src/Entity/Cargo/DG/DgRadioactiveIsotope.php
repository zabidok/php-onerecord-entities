<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\DG;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\RadioactiveMaterialClassification;
use Doctrine\ORM\Mapping as ORM;

/**
 * Details of the radioactive isotope contained in the product
 *
 * @link https://onerecord.iata.org/ns/cargo#DgRadioactiveIsotope Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class DgRadioactiveIsotope extends LogisticsObject
{
    /**
     * Reference to the DgProductRadioactive this Isotope is contained in
     *
     * @link https://onerecord.iata.org/ns/cargo#contentOfDgProductRadioactive Ontology
     */
    #[ORM\ManyToOne(targetEntity: DgProductRadioactive::class, inversedBy: 'isotopes')]
    protected ?DgProductRadioactive $contentOfDgProductRadioactive = null;

    /**
     * A description of the physical and chemical form of the material.
     *
     * @link https://onerecord.iata.org/ns/cargo#physicalChemicalForm Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: RadioactiveMaterialClassification::class)]
    protected ?RadioactiveMaterialClassification $physicalChemicalForm = null;

    /**
     * Numeric expression of the activity of a radioactive Item
     *
     * @link https://onerecord.iata.org/ns/cargo#activityLevelMeasure Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $activityLevelMeasure = null;

    /**
     * Applies to fissile material only, other than fissile excepted. A numeric value expressed to one decimal place preceded by the letters CSI.
     *
     * @link https://onerecord.iata.org/ns/cargo#criticalitySafetyIndexNumeric Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $criticalitySafetyIndexNumeric = null;

    /**
     * Id of each radionuclide or for mixtures of radionuclides.
     *
     * @link https://onerecord.iata.org/ns/cargo#isotopeId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $isotopeId = null;

    /**
     * The name or symbol of each radionuclide or for mixtures of radionuclides, an appropriate general description, or a list of the most restrictive radionuclides.
     *
     * @link https://onerecord.iata.org/ns/cargo#isotopeName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $isotopeName = null;

    /**
     * A notation that the material is low dispersible radioactive material.
     *
     * @link https://onerecord.iata.org/ns/cargo#lowDispersibleIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $lowDispersibleIndicator = null;

    /**
     * A notation that the material is special form
     *
     * @link https://onerecord.iata.org/ns/cargo#specialFormIndicator Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?bool $specialFormIndicator = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return DgProductRadioactive|null
     */
    public function getContentOfDgProductRadioactive(): ?DgProductRadioactive
    {
        return $this->contentOfDgProductRadioactive;
    }


    /**
     * @param DgProductRadioactive|null $contentOfDgProductRadioactive
     * @return static
     */
    public function setContentOfDgProductRadioactive(?DgProductRadioactive $contentOfDgProductRadioactive): static
    {
        $this->contentOfDgProductRadioactive = $contentOfDgProductRadioactive;
        return $this;
    }


    /**
     * @return RadioactiveMaterialClassification|null
     */
    public function getPhysicalChemicalForm(): ?RadioactiveMaterialClassification
    {
        return $this->physicalChemicalForm;
    }


    /**
     * @param RadioactiveMaterialClassification|null $physicalChemicalForm
     * @return static
     */
    public function setPhysicalChemicalForm(?RadioactiveMaterialClassification $physicalChemicalForm): static
    {
        $this->physicalChemicalForm = $physicalChemicalForm;
        return $this;
    }


    public function getActivityLevelMeasure(): ?string
    {
        return $this->activityLevelMeasure;
    }


    /**
     * @param string|null $activityLevelMeasure
     * @return static
     */
    public function setActivityLevelMeasure(?string $activityLevelMeasure): static
    {
        $this->activityLevelMeasure = $activityLevelMeasure;
        return $this;
    }


    public function getCriticalitySafetyIndexNumeric(): ?string
    {
        return $this->criticalitySafetyIndexNumeric;
    }


    /**
     * @param string|null $criticalitySafetyIndexNumeric
     * @return static
     */
    public function setCriticalitySafetyIndexNumeric(?string $criticalitySafetyIndexNumeric): static
    {
        $this->criticalitySafetyIndexNumeric = $criticalitySafetyIndexNumeric;
        return $this;
    }


    public function getIsotopeId(): ?string
    {
        return $this->isotopeId;
    }


    /**
     * @param string|null $isotopeId
     * @return static
     */
    public function setIsotopeId(?string $isotopeId): static
    {
        $this->isotopeId = $isotopeId;
        return $this;
    }


    public function getIsotopeName(): ?string
    {
        return $this->isotopeName;
    }


    /**
     * @param string|null $isotopeName
     * @return static
     */
    public function setIsotopeName(?string $isotopeName): static
    {
        $this->isotopeName = $isotopeName;
        return $this;
    }


    public function getLowDispersibleIndicator(): ?bool
    {
        return $this->lowDispersibleIndicator;
    }


    /**
     * @param bool|null $lowDispersibleIndicator
     * @return static
     */
    public function setLowDispersibleIndicator(?bool $lowDispersibleIndicator): static
    {
        $this->lowDispersibleIndicator = $lowDispersibleIndicator;
        return $this;
    }


    public function getSpecialFormIndicator(): ?bool
    {
        return $this->specialFormIndicator;
    }


    /**
     * @param bool|null $specialFormIndicator
     * @return static
     */
    public function setSpecialFormIndicator(?bool $specialFormIndicator): static
    {
        $this->specialFormIndicator = $specialFormIndicator;
        return $this;
    }
}
