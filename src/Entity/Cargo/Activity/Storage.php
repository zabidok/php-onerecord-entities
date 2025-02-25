<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Activity;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsActivity;
use Zabidok\OneRecordEntities\Entity\Cargo\Action\Storing;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Activity to describe storing processes
 *
 * @link https://onerecord.iata.org/ns/cargo#Storage Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Storage extends LogisticsActivity
{
    /**
     * References to all StoringActions performed for the Storing Activity
     *
     * @link https://onerecord.iata.org/ns/cargo#storingActions Ontology
     */
    #[ORM\ManyToMany(targetEntity: Storing::class)]
    #[ORM\JoinTable(
        name: 'storage_storing',
        joinColumns: [new ORM\JoinColumn(name: 'storage_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'storing_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $storingActions;

    /**
     * Short text holding the process number if necessary
     *
     * @link https://onerecord.iata.org/ns/cargo#storingIdentifier Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $storingIdentifier = null;


    public function __construct()
    {
        parent::__construct();
        $this->storingActions = new ArrayCollection();
    }


    /**
     * @return Collection <int, Storing>
     */
    public function getStoringActions(): Collection
    {
        return $this->storingActions;
    }


    /**
     * @param Storing $storing
     * @return static
     */
    public function addStoringActions(Storing $storing): static
    {
        if (!$this->storingActions->contains($storing)) {
            $this->storingActions->add($storing);
        }
        return $this;
    }


    /**
     * @param Storing $storing
     * @return static
     */
    public function removeStoringActions(Storing $storing): static
    {
        $this->storingActions->removeElement($storing);
        return $this;
    }


    public function getStoringIdentifier(): ?string
    {
        return $this->storingIdentifier;
    }


    /**
     * @param string|null $storingIdentifier
     * @return static
     */
    public function setStoringIdentifier(?string $storingIdentifier): static
    {
        $this->storingIdentifier = $storingIdentifier;
        return $this;
    }
}
