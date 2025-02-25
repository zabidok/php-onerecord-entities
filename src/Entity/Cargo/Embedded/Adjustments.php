<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Adjustments in the context of CASS records
 *
 * @link https://onerecord.iata.org/ns/cargo#Adjustments Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Adjustments
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Number of the adjustment
     *
     * @link https://onerecord.iata.org/ns/cargo#correctionNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $correctionNumber = null;

    /**
     * Serial Number of the correction
     *
     * @link https://onerecord.iata.org/ns/cargo#correctionSerialNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $correctionSerialNumber = null;

    /**
     * A free text for user to include a reason for correction
     *
     * @link https://onerecord.iata.org/ns/cargo#reasonsForAdjustments Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $reasonsForAdjustments = null;


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


    public function getCorrectionNumber(): ?int
    {
        return $this->correctionNumber;
    }


    /**
     * @param int|null $correctionNumber
     * @return static
     */
    public function setCorrectionNumber(?int $correctionNumber): static
    {
        $this->correctionNumber = $correctionNumber;
        return $this;
    }


    public function getCorrectionSerialNumber(): ?string
    {
        return $this->correctionSerialNumber;
    }


    /**
     * @param string|null $correctionSerialNumber
     * @return static
     */
    public function setCorrectionSerialNumber(?string $correctionSerialNumber): static
    {
        $this->correctionSerialNumber = $correctionSerialNumber;
        return $this;
    }


    public function getReasonsForAdjustments(): ?string
    {
        return $this->reasonsForAdjustments;
    }


    /**
     * @param string|null $reasonsForAdjustments
     * @return static
     */
    public function setReasonsForAdjustments(?string $reasonsForAdjustments): static
    {
        $this->reasonsForAdjustments = $reasonsForAdjustments;
        return $this;
    }
}
