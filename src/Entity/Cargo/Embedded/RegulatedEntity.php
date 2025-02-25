<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\RegulatedEntityCategoryCode;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Regulated Entity
 *
 * @link https://onerecord.iata.org/ns/cargo#RegulatedEntity Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class RegulatedEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Reference to the Organization for which the RegulatedEntity information is valid
     *
     * @link https://onerecord.iata.org/ns/cargo#owningOrganization Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $owningOrganization = null;

    /**
     * Category code of the Regulated Entity
     *
     * @link https://onerecord.iata.org/ns/cargo#regulatedEntityCategory Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: RegulatedEntityCategoryCode::class)]
    protected ?RegulatedEntityCategoryCode $regulatedEntityCategory = null;

    /**
     * Expiry date 4 digits month/year
     *
     * @link https://onerecord.iata.org/ns/cargo#regulatedEntityExpiryDate Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $regulatedEntityExpiryDate = null;

    /**
     * Regulated entity identifier as per IATA e-CSD/CSD Resolution 65
     *
     * @link https://onerecord.iata.org/ns/cargo#regulatedEntityIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $regulatedEntityIdentifier = null;


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
     * @return Organization|null
     */
    public function getOwningOrganization(): ?Organization
    {
        return $this->owningOrganization;
    }


    /**
     * @param Organization|null $owningOrganization
     * @return static
     */
    public function setOwningOrganization(?Organization $owningOrganization): static
    {
        $this->owningOrganization = $owningOrganization;
        return $this;
    }


    /**
     * @return RegulatedEntityCategoryCode|null
     */
    public function getRegulatedEntityCategory(): ?RegulatedEntityCategoryCode
    {
        return $this->regulatedEntityCategory;
    }


    /**
     * @param RegulatedEntityCategoryCode|null $regulatedEntityCategory
     * @return static
     */
    public function setRegulatedEntityCategory(?RegulatedEntityCategoryCode $regulatedEntityCategory): static
    {
        $this->regulatedEntityCategory = $regulatedEntityCategory;
        return $this;
    }


    public function getRegulatedEntityExpiryDate(): ?\DateTime
    {
        return $this->regulatedEntityExpiryDate;
    }


    /**
     * @param \DateTime|null $regulatedEntityExpiryDate
     * @return static
     */
    public function setRegulatedEntityExpiryDate(?\DateTime $regulatedEntityExpiryDate): static
    {
        $this->regulatedEntityExpiryDate = $regulatedEntityExpiryDate;
        return $this;
    }


    public function getRegulatedEntityIdentifier(): ?string
    {
        return $this->regulatedEntityIdentifier;
    }


    /**
     * @param string|null $regulatedEntityIdentifier
     * @return static
     */
    public function setRegulatedEntityIdentifier(?string $regulatedEntityIdentifier): static
    {
        $this->regulatedEntityIdentifier = $regulatedEntityIdentifier;
        return $this;
    }
}
