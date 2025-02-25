<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsAgent;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ParticipantIdentifier;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * Refers to a Company and its role in a specific context, e.g Company A as shipper. Cargo-XML Code List 1.15 can be used as a reference with the addition of "Notify Party"
 *
 * @link https://onerecord.iata.org/ns/cargo#Party Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Party
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', length: 36, unique: true)]
    protected ?string $id;

    /**
     * Details about any other identifier, depending on the context of use
     *
     * @link https://onerecord.iata.org/ns/cargo#otherIdentifiers Ontology
     */
    #[ORM\ManyToMany(targetEntity: OtherIdentifier::class)]
    #[ORM\JoinTable(
        name: 'party_otheridentifier',
        joinColumns: [new ORM\JoinColumn(name: 'party_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'otheridentifier_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $otherIdentifiers;

    /**
     * Reference to the Agent described by the role of the Party
     *
     * @link https://onerecord.iata.org/ns/cargo#partyDetails Ontology
     */
    #[ORM\ManyToOne(targetEntity: LogisticsAgent::class)]
    protected ?LogisticsAgent $partyDetails = null;

    /**
     * Role fo the Company in the context. Can refer to Code List 1.36 in the CXML Toolkit
     *
     * @link https://onerecord.iata.org/ns/cargo#partyRole Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ParticipantIdentifier::class)]
    protected ?ParticipantIdentifier $partyRole = null;


    public function __construct()
    {
        $this->id = $this->generateUuid();
        $this->otherIdentifiers = new ArrayCollection();
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
     * @return Collection <int, OtherIdentifier>
     */
    public function getOtherIdentifiers(): Collection
    {
        return $this->otherIdentifiers;
    }


    /**
     * @param OtherIdentifier $otherIdentifier
     * @return static
     */
    public function addOtherIdentifiers(OtherIdentifier $otherIdentifier): static
    {
        if (!$this->otherIdentifiers->contains($otherIdentifier)) {
            $this->otherIdentifiers->add($otherIdentifier);
        }
        return $this;
    }


    /**
     * @param OtherIdentifier $otherIdentifier
     * @return static
     */
    public function removeOtherIdentifiers(OtherIdentifier $otherIdentifier): static
    {
        $this->otherIdentifiers->removeElement($otherIdentifier);
        return $this;
    }


    /**
     * @return LogisticsAgent|null
     */
    public function getPartyDetails(): ?LogisticsAgent
    {
        return $this->partyDetails;
    }


    /**
     * @param LogisticsAgent|null $partyDetails
     * @return static
     */
    public function setPartyDetails(?LogisticsAgent $partyDetails): static
    {
        $this->partyDetails = $partyDetails;
        return $this;
    }


    /**
     * @return ParticipantIdentifier|null
     */
    public function getPartyRole(): ?ParticipantIdentifier
    {
        return $this->partyRole;
    }


    /**
     * @param ParticipantIdentifier|null $partyRole
     * @return static
     */
    public function setPartyRole(?ParticipantIdentifier $partyRole): static
    {
        $this->partyRole = $partyRole;
        return $this;
    }
}
