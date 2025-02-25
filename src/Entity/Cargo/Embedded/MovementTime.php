<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\DirectionType;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\MovementTimeType;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\MovementIndicator;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Times referring to Transport Movements, used to describe specfic times such as Actual Departure time, etc.
 *
 * @link https://onerecord.iata.org/ns/cargo#MovementTime Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class MovementTime
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Direction to indicate if it's Inbound or Outbound
     *
     * @link https://onerecord.iata.org/ns/cargo#direction Ontology
     */
    #[ORM\ManyToOne(targetEntity: DirectionType::class)]
    protected ?DirectionType $direction = null;

    /**
     * The milestone list still needs to be defined, it includes elements from CXML Code List 1.92 but is not limited to those values, e.g. block-on and block-off times might be added as a comparison to wheels off and touchdown.
     *
     * @link https://onerecord.iata.org/ns/cargo#movementMilestone Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: MovementIndicator::class)]
    protected ?MovementIndicator $movementMilestone = null;

    /**
     * The type of time can be Actual, Estimated ot Scheduled
     *
     * @link https://onerecord.iata.org/ns/cargo#movementTimeType Ontology
     */
    #[ORM\ManyToOne(targetEntity: MovementTimeType::class)]
    protected ?MovementTimeType $movementTimeType = null;

    /**
     * Timestamp (date and time) of the movement time. If the movement time is recorded asynchronously, the timestamp should reflect the actual time, not when the data was created.
     *
     * @link https://onerecord.iata.org/ns/cargo#movementTimestamp Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?\DateTime $movementTimestamp = null;


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
     * @return DirectionType|null
     */
    public function getDirection(): ?DirectionType
    {
        return $this->direction;
    }


    /**
     * @param DirectionType|null $direction
     * @return static
     */
    public function setDirection(?DirectionType $direction): static
    {
        $this->direction = $direction;
        return $this;
    }


    /**
     * @return MovementIndicator|null
     */
    public function getMovementMilestone(): ?MovementIndicator
    {
        return $this->movementMilestone;
    }


    /**
     * @param MovementIndicator|null $movementMilestone
     * @return static
     */
    public function setMovementMilestone(?MovementIndicator $movementMilestone): static
    {
        $this->movementMilestone = $movementMilestone;
        return $this;
    }


    /**
     * @return MovementTimeType|null
     */
    public function getMovementTimeType(): ?MovementTimeType
    {
        return $this->movementTimeType;
    }


    /**
     * @param MovementTimeType|null $movementTimeType
     * @return static
     */
    public function setMovementTimeType(?MovementTimeType $movementTimeType): static
    {
        $this->movementTimeType = $movementTimeType;
        return $this;
    }


    public function getMovementTimestamp(): ?\DateTime
    {
        return $this->movementTimestamp;
    }


    /**
     * @param \DateTime|null $movementTimestamp
     * @return static
     */
    public function setMovementTimestamp(?\DateTime $movementTimestamp): static
    {
        $this->movementTimestamp = $movementTimestamp;
        return $this;
    }
}
