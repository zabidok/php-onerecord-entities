<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Abstract;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\IotDevice;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Superclass: PhysicalLogisticObjects represent the digital twin of an object in the logistics supply chain that physically exist
 *
 * @link https://onerecord.iata.org/ns/cargo#PhysicalLogisticsObject Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
abstract class PhysicalLogisticsObject extends LogisticsObject
{
    /**
     * References to all connected IotDevices
     *
     * @link https://onerecord.iata.org/ns/cargo#attachedIotDevices Ontology
     */
    #[ORM\OneToMany(targetEntity: IotDevice::class, mappedBy: 'attachedToObject', cascade: ['persist', 'remove'])]
    protected Collection $attachedIotDevices;

    /**
     * References to the Actions the object is involved in
     *
     * @link https://onerecord.iata.org/ns/cargo#involvedInActions Ontology
     */
    #[ORM\ManyToMany(targetEntity: LogisticsAction::class)]
    #[ORM\JoinTable(
        name: 'physicallogisticsobject_logisticsaction',
        joinColumns: [new ORM\JoinColumn(name: 'physicallogisticsobject_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'logisticsaction_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $involvedInActions;


    public function __construct()
    {
        parent::__construct();
        $this->attachedIotDevices = new ArrayCollection();
        $this->involvedInActions = new ArrayCollection();
    }


    /**
     * @return Collection <int, IotDevice>
     */
    public function getAttachedIotDevices(): Collection
    {
        return $this->attachedIotDevices;
    }


    /**
     * @param IotDevice $iotDevice
     * @return static
     */
    public function addAttachedIotDevices(IotDevice $iotDevice): static
    {
        if (!$this->attachedIotDevices->contains($iotDevice)) {
            $this->attachedIotDevices->add($iotDevice);
            $iotDevice->setAttachedToObject($this);
        }
        return $this;
    }


    /**
     * @param IotDevice $iotDevice
     * @return static
     */
    public function removeAttachedIotDevices(IotDevice $iotDevice): static
    {
        if ($this->attachedIotDevices->removeElement($iotDevice)) {
            if ($iotDevice->getAttachedToObject() === $this ) {
                $iotDevice->setAttachedToObject(null);
            }
        }
        return $this;
    }


    /**
     * @return Collection <int, LogisticsAction>
     */
    public function getInvolvedInActions(): Collection
    {
        return $this->involvedInActions;
    }


    /**
     * @param LogisticsAction $logisticsAction
     * @return static
     */
    public function addInvolvedInActions(LogisticsAction $logisticsAction): static
    {
        if (!$this->involvedInActions->contains($logisticsAction)) {
            $this->involvedInActions->add($logisticsAction);
        }
        return $this;
    }


    /**
     * @param LogisticsAction $logisticsAction
     * @return static
     */
    public function removeInvolvedInActions(LogisticsAction $logisticsAction): static
    {
        $this->involvedInActions->removeElement($logisticsAction);
        return $this;
    }
}
