<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Agent;

use Zabidok\OneRecordEntities\Attribute\Version;
use Zabidok\OneRecordEntities\Entity\Cargo\Common\ExternalReference;
use Zabidok\OneRecordEntities\Entity\Cargo\Embedded\ContactDetail;
use Zabidok\OneRecordEntities\Entity\Cargo\Enum\ContactRole;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Person details
 *
 * @link https://onerecord.iata.org/ns/cargo#Person Ontology
 */
#[ORM\Entity]
#[Version('3.1 RC1')]
class Person extends Actor
{
    /**
     * Information about contactDetails
     *
     * @link https://onerecord.iata.org/ns/cargo#contactDetails Ontology
     */
    #[ORM\ManyToMany(targetEntity: ContactDetail::class)]
    #[ORM\JoinTable(
        name: 'person_contactdetail',
        joinColumns: [new ORM\JoinColumn(name: 'person_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'contactdetail_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $contactDetails;

    /**
     * Contact type - e.g. Emergency contact, Customs contact, Customer contact
     *
     * @link https://onerecord.iata.org/ns/cargo#contactRole Ontology
     */
    #[ORM\ManyToOne(targetEntity: ContactRole::class)]
    protected ?ContactRole $contactRole = null;

    /**
     * Linked documents to the person, e.g. driver's license, ID, etc.
     *
     * @link https://onerecord.iata.org/ns/cargo#documents Ontology
     */
    #[ORM\ManyToMany(targetEntity: ExternalReference::class)]
    #[ORM\JoinTable(
        name: 'person_externalreference',
        joinColumns: [new ORM\JoinColumn(name: 'person_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'externalreference_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
    )]
    protected Collection $documents;

    /**
     * Department / Division / Unit
     *
     * @link https://onerecord.iata.org/ns/cargo#department Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $department = null;

    /**
     * Employee ID
     *
     * @link https://onerecord.iata.org/ns/cargo#employeeId Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $employeeId = null;

    /**
     * First name / given name
     *
     * @link https://onerecord.iata.org/ns/cargo#firstName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $firstName = null;

    /**
     * Job title / position
     *
     * @link https://onerecord.iata.org/ns/cargo#jobTitle Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $jobTitle = null;

    /**
     * Last name / family name / surname
     *
     * @link https://onerecord.iata.org/ns/cargo#lastName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $lastName = null;

    /**
     * Middle name/ other name
     *
     * @link https://onerecord.iata.org/ns/cargo#middleName Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $middleName = null;

    /**
     * Salutation
     *
     * @link https://onerecord.iata.org/ns/cargo#salutation Ontology
     */
    #[ORM\Column(nullable: true)]
    protected ?string $salutation = null;


    public function __construct()
    {
        parent::__construct();
        $this->contactDetails = new ArrayCollection();
        $this->documents = new ArrayCollection();
    }


    /**
     * @return Collection <int, ContactDetail>
     */
    public function getContactDetails(): Collection
    {
        return $this->contactDetails;
    }


    /**
     * @param ContactDetail $contactDetail
     * @return static
     */
    public function addContactDetails(ContactDetail $contactDetail): static
    {
        if (!$this->contactDetails->contains($contactDetail)) {
            $this->contactDetails->add($contactDetail);
        }
        return $this;
    }


    /**
     * @param ContactDetail $contactDetail
     * @return static
     */
    public function removeContactDetails(ContactDetail $contactDetail): static
    {
        $this->contactDetails->removeElement($contactDetail);
        return $this;
    }


    /**
     * @return ContactRole|null
     */
    public function getContactRole(): ?ContactRole
    {
        return $this->contactRole;
    }


    /**
     * @param ContactRole|null $contactRole
     * @return static
     */
    public function setContactRole(?ContactRole $contactRole): static
    {
        $this->contactRole = $contactRole;
        return $this;
    }


    /**
     * @return Collection <int, ExternalReference>
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }


    /**
     * @param ExternalReference $externalReference
     * @return static
     */
    public function addDocuments(ExternalReference $externalReference): static
    {
        if (!$this->documents->contains($externalReference)) {
            $this->documents->add($externalReference);
        }
        return $this;
    }


    /**
     * @param ExternalReference $externalReference
     * @return static
     */
    public function removeDocuments(ExternalReference $externalReference): static
    {
        $this->documents->removeElement($externalReference);
        return $this;
    }


    public function getDepartment(): ?string
    {
        return $this->department;
    }


    /**
     * @param string|null $department
     * @return static
     */
    public function setDepartment(?string $department): static
    {
        $this->department = $department;
        return $this;
    }


    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }


    /**
     * @param string|null $employeeId
     * @return static
     */
    public function setEmployeeId(?string $employeeId): static
    {
        $this->employeeId = $employeeId;
        return $this;
    }


    public function getFirstName(): ?string
    {
        return $this->firstName;
    }


    /**
     * @param string|null $firstName
     * @return static
     */
    public function setFirstName(?string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }


    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }


    /**
     * @param string|null $jobTitle
     * @return static
     */
    public function setJobTitle(?string $jobTitle): static
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }


    public function getLastName(): ?string
    {
        return $this->lastName;
    }


    /**
     * @param string|null $lastName
     * @return static
     */
    public function setLastName(?string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }


    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }


    /**
     * @param string|null $middleName
     * @return static
     */
    public function setMiddleName(?string $middleName): static
    {
        $this->middleName = $middleName;
        return $this;
    }


    public function getSalutation(): ?string
    {
        return $this->salutation;
    }


    /**
     * @param string|null $salutation
     * @return static
     */
    public function setSalutation(?string $salutation): static
    {
        $this->salutation = $salutation;
        return $this;
    }
}
