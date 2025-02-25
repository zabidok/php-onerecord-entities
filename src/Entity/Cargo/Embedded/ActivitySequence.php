<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsActivity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Embedded object to create a sequence of Activities in the context of a Service
 *
 * @link https://onerecord.iata.org/ns/cargo#ActivitySequence Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ActivitySequence
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Reference to the Activity that is performed as part of a Service
     *
     * @link https://onerecord.iata.org/ns/cargo#activity Ontology
     */
    #[ORM\ManyToOne(targetEntity: LogisticsActivity::class)]
    protected ?LogisticsActivity $activity = null;

    /**
     * Short text to detail sequence number (alphanumeric)
     *
     * @link https://onerecord.iata.org/ns/cargo#sequenceNumber Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $sequenceNumber = null;


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
     * @return LogisticsActivity|null
     */
    public function getActivity(): ?LogisticsActivity
    {
        return $this->activity;
    }


    /**
     * @param LogisticsActivity|null $activity
     * @return static
     */
    public function setActivity(?LogisticsActivity $activity): static
    {
        $this->activity = $activity;
        return $this;
    }


    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }


    /**
     * @param string|null $sequenceNumber
     * @return static
     */
    public function setSequenceNumber(?string $sequenceNumber): static
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
}
