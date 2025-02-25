<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Embedded;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\CoreCodeLists\ULDLoadingIndicator;
use Doctrine\ORM\Mapping as ORM;

/**
 * ULDBasicPiece details
 *
 * @link https://onerecord.iata.org/ns/cargo#ULDBasicPiece Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class ULDBasicPiece extends PieceGroup
{
    /**
     * Indicator related to ULD loading (e.g. Main deck only)
     *
     * @link https://onerecord.iata.org/ns/cargo#uldLoadingIndicator Ontology
     */
    #[ORM\Column(type: 'string', nullable: true, enumType: ULDLoadingIndicator::class)]
    protected ?ULDLoadingIndicator $uldLoadingIndicator = null;

    /**
     * Shipper's Load And Count  ( total contained piece count as provided by shipper)
     *
     * @link https://onerecord.iata.org/ns/cargo#slac Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?int $slac = null;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return ULDLoadingIndicator|null
     */
    public function getUldLoadingIndicator(): ?ULDLoadingIndicator
    {
        return $this->uldLoadingIndicator;
    }


    /**
     * @param ULDLoadingIndicator|null $uldLoadingIndicator
     * @return static
     */
    public function setUldLoadingIndicator(?ULDLoadingIndicator $uldLoadingIndicator): static
    {
        $this->uldLoadingIndicator = $uldLoadingIndicator;
        return $this;
    }


    public function getSlac(): ?int
    {
        return $this->slac;
    }


    /**
     * @param int|null $slac
     * @return static
     */
    public function setSlac(?int $slac): static
    {
        $this->slac = $slac;
        return $this;
    }
}
