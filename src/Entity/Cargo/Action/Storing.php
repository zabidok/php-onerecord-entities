<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Action;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAction;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\PhysicalLogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\StoringType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Action to describe store-in or store-out
 *
 * @link https://onerecord.iata.org/ns/cargo#Storing Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Storing extends LogisticsAction
{
    /**
     * Reference to the Objects being stored in or stored out
     *
     * @link https://onerecord.iata.org/ns/cargo#storedObjects Ontology
     */
    #[ORM\ManyToMany(targetEntity: PhysicalLogisticsObject::class)]
    #[ORM\JoinTable(
        name: 'storing_physicallogisticsobject',
        joinColumns: [new ORM\JoinColumn(name: 'storing_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [
        new ORM\JoinColumn(name: 'physicallogisticsobject_id', referencedColumnName: 'id', onDelete: 'CASCADE'),
    ],
    )]
    protected Collection $storedObjects;

    /**
     * Enum stating whether the StoringAction describes the store-in or the store-out
     *
     * @link https://onerecord.iata.org/ns/cargo#storingType Ontology
     */
    #[ORM\ManyToOne(targetEntity: StoringType::class)]
    protected ?StoringType $storingType = null;

    /**
     * Short text stating the exact place of storage
     *
     * @link https://onerecord.iata.org/ns/cargo#storagePlaceIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $storagePlaceIdentifier = null;


    public function __construct()
    {
        parent::__construct();
        $this->storedObjects = new ArrayCollection();
    }


    /**
     * @return Collection <int, PhysicalLogisticsObject>
     */
    public function getStoredObjects(): Collection
    {
        return $this->storedObjects;
    }


    /**
     * @param PhysicalLogisticsObject $physicalLogisticsObject
     * @return static
     */
    public function addStoredObjects(PhysicalLogisticsObject $physicalLogisticsObject): static
    {
        if (!$this->storedObjects->contains($physicalLogisticsObject)) {
            $this->storedObjects->add($physicalLogisticsObject);
        }
        return $this;
    }


    /**
     * @param PhysicalLogisticsObject $physicalLogisticsObject
     * @return static
     */
    public function removeStoredObjects(PhysicalLogisticsObject $physicalLogisticsObject): static
    {
        $this->storedObjects->removeElement($physicalLogisticsObject);
        return $this;
    }


    /**
     * @return StoringType|null
     */
    public function getStoringType(): ?StoringType
    {
        return $this->storingType;
    }


    /**
     * @param StoringType|null $storingType
     * @return static
     */
    public function setStoringType(?StoringType $storingType): static
    {
        $this->storingType = $storingType;
        return $this;
    }


    public function getStoragePlaceIdentifier(): ?string
    {
        return $this->storagePlaceIdentifier;
    }


    /**
     * @param string|null $storagePlaceIdentifier
     * @return static
     */
    public function setStoragePlaceIdentifier(?string $storagePlaceIdentifier): static
    {
        $this->storagePlaceIdentifier = $storagePlaceIdentifier;
        return $this;
    }
}
