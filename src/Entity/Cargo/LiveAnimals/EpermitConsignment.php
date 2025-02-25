<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\LiveAnimals;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Abstract\LogisticsObject;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\Value;
use Doctrine\ORM\Mapping as ORM;

/**
 * Details of the pieces (Live animals) of the permit and specific information such as quantity measured and used to date quota
 *
 * @link https://onerecord.iata.org/ns/cargo#EpermitConsignment Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class EpermitConsignment extends LogisticsObject
{
    /**
     * Reference to te pieces (Live Animals) of the permit
     *
     * @link https://onerecord.iata.org/ns/cargo#consignmentItems Ontology
     */
    #[ORM\ManyToOne(targetEntity: PieceLiveAnimals::class)]
    protected ?PieceLiveAnimals $consignmentItems = null;

    /**
     * Reference to the Epermit of the consignment
     *
     * @link https://onerecord.iata.org/ns/cargo#epermit Ontology
     */
    #[ORM\ManyToOne(targetEntity: LiveAnimalsEpermit::class)]
    protected ?LiveAnimalsEpermit $epermit = null;

    /**
     * Quantity measured by the examining authority (box 14)
     *
     * @link https://onerecord.iata.org/ns/cargo#examiningQuantity Ontology
     */
    #[ORM\ManyToOne(targetEntity: Value::class)]
    protected ?Value $examiningQuantity = null;

    /**
     * total number of specimens exported in the current calendar year and the current annual quota for the species concerned (box 11a)
     *
     * @link https://onerecord.iata.org/ns/cargo#usedToDateQuotaQuantity Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $usedToDateQuotaQuantity = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return PieceLiveAnimals|null
     */
    public function getConsignmentItems(): ?PieceLiveAnimals
    {
        return $this->consignmentItems;
    }


    /**
     * @param PieceLiveAnimals|null $consignmentItems
     * @return static
     */
    public function setConsignmentItems(?PieceLiveAnimals $consignmentItems): static
    {
        $this->consignmentItems = $consignmentItems;
        return $this;
    }


    /**
     * @return LiveAnimalsEpermit|null
     */
    public function getEpermit(): ?LiveAnimalsEpermit
    {
        return $this->epermit;
    }


    /**
     * @param LiveAnimalsEpermit|null $epermit
     * @return static
     */
    public function setEpermit(?LiveAnimalsEpermit $epermit): static
    {
        $this->epermit = $epermit;
        return $this;
    }


    /**
     * @return Value|null
     */
    public function getExaminingQuantity(): ?Value
    {
        return $this->examiningQuantity;
    }


    /**
     * @param Value|null $examiningQuantity
     * @return static
     */
    public function setExaminingQuantity(?Value $examiningQuantity): static
    {
        $this->examiningQuantity = $examiningQuantity;
        return $this;
    }


    public function getUsedToDateQuotaQuantity(): ?int
    {
        return $this->usedToDateQuotaQuantity;
    }


    /**
     * @param int|null $usedToDateQuotaQuantity
     * @return static
     */
    public function setUsedToDateQuotaQuantity(?int $usedToDateQuotaQuantity): static
    {
        $this->usedToDateQuotaQuantity = $usedToDateQuotaQuantity;
        return $this;
    }
}
