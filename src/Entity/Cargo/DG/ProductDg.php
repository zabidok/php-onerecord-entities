<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\DG;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Core\Product;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ExplosiveCompatibilityGroupCode;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\PackagingDangerLevelCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dangerous Goods subtype of Product
 *
 * @link https://onerecord.iata.org/ns/cargo#ProductDg Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ProductDg extends Product
{
    /**
     * Dg Radioactive Material
     *
     * @link https://onerecord.iata.org/ns/cargo#dgRadioactiveMaterial Ontology
     */
    #[ORM\OneToOne(targetEntity: DgProductRadioactive::class)]
    protected ?DgProductRadioactive $dgRadioactiveMaterial = null;

    /**
     * Specifies the reference to the group which identifies the kind of substances and articles that are deemed to be compatible. Mandatory field in case of transport of explosive articles or substances
     *
     * @link https://onerecord.iata.org/ns/cargo#explosiveCompatibilityGroupCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ExplosiveCompatibilityGroupCode::class)]
    protected ?ExplosiveCompatibilityGroupCode $explosiveCompatibilityGroupCode = null;

    /**
     * Packing group, If used must reference I, II or III
     *
     * @link https://onerecord.iata.org/ns/cargo#packagingDangerLevelCode Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: PackagingDangerLevelCode::class)]
    protected ?PackagingDangerLevelCode $packagingDangerLevelCode = null;

    /**
     * Identifies the subsidiary hazard class / division identification containing a numeric field separated by a decimal. There may be , 1 or 2 subsidiary risk classes or divisions. If there is more than one, each should be separated by a comma. The subsidiary risk must be shown in parentheses.
     *
     * @link https://onerecord.iata.org/ns/cargo#additionalHazardClassificationId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $additionalHazardClassificationId = null;

    /**
     * Contains additional information relating to an approval, permission or other specific detail applicable to the commodity (e.g. Dangerous Goods in excepted quantities)
     *
     * @link https://onerecord.iata.org/ns/cargo#authorizationInformation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $authorizationInformation = null;

    /**
     * Identifies the hazard class / division identification containing a numeric field separated by a decimal
     *
     * @link https://onerecord.iata.org/ns/cargo#hazardClassificationId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $hazardClassificationId = null;

    /**
     * The packing instruction number applicable to the UN number / proper shipping name entry. A three-numeric value which may be preceded by the letter Y.  Mandatory field for air transport (Air)
     *
     * @link https://onerecord.iata.org/ns/cargo#packingInstructionNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $packingInstructionNumber = null;

    /**
     * The name used to describe the particular article or substance as shown in the UN Model Regulations Dangerous Goods List
     *
     * @link https://onerecord.iata.org/ns/cargo#properShippingName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $properShippingName = null;

    /**
     * For Air Mode: Special Provision may show a single, double or triple digit number preceded by the letter A, against appropriate entries in the List of Dangerous Goods
     *
     * @link https://onerecord.iata.org/ns/cargo#specialProvisionId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $specialProvisionId = null;

    /**
     * This is additional chemical name(s) required for some proper shipping names. When added the technical must be shown in parentheses immediately following the proper shipping name.
     *
     * @link https://onerecord.iata.org/ns/cargo#technicalName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $technicalName = null;

    /**
     * Reference identifying the United Nations Dangerous Goods serial number assigned within the UN to substances and articles contained in a list of the dangerous goods most commonly carried. e.g. 1189 - Ethylene glycol monomethyl ether acetate
     *
     * @link https://onerecord.iata.org/ns/cargo#unNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $unNumber = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return DgProductRadioactive|null
     */
    public function getDgRadioactiveMaterial(): ?DgProductRadioactive
    {
        return $this->dgRadioactiveMaterial;
    }


    /**
     * @param DgProductRadioactive|null $dgRadioactiveMaterial
     * @return static
     */
    public function setDgRadioactiveMaterial(?DgProductRadioactive $dgRadioactiveMaterial): static
    {
        $this->dgRadioactiveMaterial = $dgRadioactiveMaterial;
        return $this;
    }


    /**
     * @return ExplosiveCompatibilityGroupCode|null
     */
    public function getExplosiveCompatibilityGroupCode(): ?ExplosiveCompatibilityGroupCode
    {
        return $this->explosiveCompatibilityGroupCode;
    }


    /**
     * @param ExplosiveCompatibilityGroupCode|null $explosiveCompatibilityGroupCode
     * @return static
     */
    public function setExplosiveCompatibilityGroupCode(
        ?ExplosiveCompatibilityGroupCode $explosiveCompatibilityGroupCode,
    ): static
    {
        $this->explosiveCompatibilityGroupCode = $explosiveCompatibilityGroupCode;
        return $this;
    }


    /**
     * @return PackagingDangerLevelCode|null
     */
    public function getPackagingDangerLevelCode(): ?PackagingDangerLevelCode
    {
        return $this->packagingDangerLevelCode;
    }


    /**
     * @param PackagingDangerLevelCode|null $packagingDangerLevelCode
     * @return static
     */
    public function setPackagingDangerLevelCode(?PackagingDangerLevelCode $packagingDangerLevelCode): static
    {
        $this->packagingDangerLevelCode = $packagingDangerLevelCode;
        return $this;
    }


    public function getAdditionalHazardClassificationId(): ?string
    {
        return $this->additionalHazardClassificationId;
    }


    /**
     * @param string|null $additionalHazardClassificationId
     * @return static
     */
    public function setAdditionalHazardClassificationId(?string $additionalHazardClassificationId): static
    {
        $this->additionalHazardClassificationId = $additionalHazardClassificationId;
        return $this;
    }


    public function getAuthorizationInformation(): ?string
    {
        return $this->authorizationInformation;
    }


    /**
     * @param string|null $authorizationInformation
     * @return static
     */
    public function setAuthorizationInformation(?string $authorizationInformation): static
    {
        $this->authorizationInformation = $authorizationInformation;
        return $this;
    }


    public function getHazardClassificationId(): ?string
    {
        return $this->hazardClassificationId;
    }


    /**
     * @param string|null $hazardClassificationId
     * @return static
     */
    public function setHazardClassificationId(?string $hazardClassificationId): static
    {
        $this->hazardClassificationId = $hazardClassificationId;
        return $this;
    }


    public function getPackingInstructionNumber(): ?string
    {
        return $this->packingInstructionNumber;
    }


    /**
     * @param string|null $packingInstructionNumber
     * @return static
     */
    public function setPackingInstructionNumber(?string $packingInstructionNumber): static
    {
        $this->packingInstructionNumber = $packingInstructionNumber;
        return $this;
    }


    public function getProperShippingName(): ?string
    {
        return $this->properShippingName;
    }


    /**
     * @param string|null $properShippingName
     * @return static
     */
    public function setProperShippingName(?string $properShippingName): static
    {
        $this->properShippingName = $properShippingName;
        return $this;
    }


    public function getSpecialProvisionId(): ?string
    {
        return $this->specialProvisionId;
    }


    /**
     * @param string|null $specialProvisionId
     * @return static
     */
    public function setSpecialProvisionId(?string $specialProvisionId): static
    {
        $this->specialProvisionId = $specialProvisionId;
        return $this;
    }


    public function getTechnicalName(): ?string
    {
        return $this->technicalName;
    }


    /**
     * @param string|null $technicalName
     * @return static
     */
    public function setTechnicalName(?string $technicalName): static
    {
        $this->technicalName = $technicalName;
        return $this;
    }


    public function getUnNumber(): ?string
    {
        return $this->unNumber;
    }


    /**
     * @param string|null $unNumber
     * @return static
     */
    public function setUnNumber(?string $unNumber): static
    {
        $this->unNumber = $unNumber;
        return $this;
    }
}
