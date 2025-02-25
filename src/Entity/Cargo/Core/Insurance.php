<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Core;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Agent\Organization;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\CurrencyValue;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Insurance details
 *
 * @link https://onerecord.iata.org/ns/cargo#Insurance Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Insurance extends LogisticsObject
{
    /**
     * Party covering the insurance
     *
     * @link https://onerecord.iata.org/ns/cargo#coveringOrganization Ontology
     */
    #[ORM\ManyToOne(targetEntity: Organization::class)]
    protected ?Organization $coveringOrganization = null;

    /**
     * Insured amount - amount covered by the insurance policy
     *
     * @link https://onerecord.iata.org/ns/cargo#insuredAmount Ontology
     */
    #[ORM\ManyToOne(targetEntity: CurrencyValue::class)]
    protected ?CurrencyValue $insuredAmount = null;

    /**
     * Reference to the shipments insured
     *
     * @link https://onerecord.iata.org/ns/cargo#insuredShipments Ontology
     */
    #[ORM\ManyToMany(targetEntity: Shipment::class)]
    #[ORM\JoinTable(
        name: 'insurance_shipment',
        joinColumns: [new ORM\JoinColumn(name: 'insurance_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'shipment_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $insuredShipments;


    public function __construct()
    {
        parent::__construct();
        $this->insuredShipments = new ArrayCollection();
    }


    /**
     * @return Organization|null
     */
    public function getCoveringOrganization(): ?Organization
    {
        return $this->coveringOrganization;
    }


    /**
     * @param Organization|null $coveringOrganization
     * @return static
     */
    public function setCoveringOrganization(?Organization $coveringOrganization): static
    {
        $this->coveringOrganization = $coveringOrganization;
        return $this;
    }


    /**
     * @return CurrencyValue|null
     */
    public function getInsuredAmount(): ?CurrencyValue
    {
        return $this->insuredAmount;
    }


    /**
     * @param CurrencyValue|null $insuredAmount
     * @return static
     */
    public function setInsuredAmount(?CurrencyValue $insuredAmount): static
    {
        $this->insuredAmount = $insuredAmount;
        return $this;
    }


    /**
     * @return Collection <int, Shipment>
     */
    public function getInsuredShipments(): Collection
    {
        return $this->insuredShipments;
    }


    /**
     * @param Shipment $shipment
     * @return static
     */
    public function addInsuredShipments(Shipment $shipment): static
    {
        if (!$this->insuredShipments->contains($shipment)) {
            $this->insuredShipments->add($shipment);
        }
        return $this;
    }


    /**
     * @param Shipment $shipment
     * @return static
     */
    public function removeInsuredShipments(Shipment $shipment): static
    {
        $this->insuredShipments->removeElement($shipment);
        return $this;
    }
}
