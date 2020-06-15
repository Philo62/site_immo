<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthPlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondLastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondBirthDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondBirthPlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marriedDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $telOne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailOne;

    /**
     * @ORM\Column(type="integer")
     */
    private $telTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailTwo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Procurations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Address;

    /**
     * @ORM\Column(type="integer")
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cadastre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Notary;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Exclusivity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TextPub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Dpe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ges;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;
// automatiser la création / dâte du jour
    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(string $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(string $secondName): self
    {
        $this->secondName = $secondName;

        return $this;
    }

    public function getSecondLastName(): ?string
    {
        return $this->secondLastName;
    }

    public function setSecondLastName(string $secondLastName): self
    {
        $this->secondLastName = $secondLastName;

        return $this;
    }

    public function getSecondBirthDate(): ?string
    {
        return $this->secondBirthDate;
    }

    public function setSecondBirthDate(string $secondBirthDate): self
    {
        $this->secondBirthDate = $secondBirthDate;

        return $this;
    }

    public function getSecondBirthPlace(): ?string
    {
        return $this->secondBirthPlace;
    }

    public function setSecondBirthPlace(string $secondBirthPlace): self
    {
        $this->secondBirthPlace = $secondBirthPlace;

        return $this;
    }

    public function getMarriedDate(): ?string
    {
        return $this->marriedDate;
    }

    public function setMarriedDate(string $marriedDate): self
    {
        $this->marriedDate = $marriedDate;

        return $this;
    }

    public function getTelOne(): ?int
    {
        return $this->telOne;
    }

    public function setTelOne(int $telOne): self
    {
        $this->telOne = $telOne;

        return $this;
    }

    public function getMailOne(): ?string
    {
        return $this->mailOne;
    }

    public function setMailOne(string $mailOne): self
    {
        $this->mailOne = $mailOne;

        return $this;
    }

    public function getTelTwo(): ?int
    {
        return $this->telTwo;
    }

    public function setTelTwo(int $telTwo): self
    {
        $this->telTwo = $telTwo;

        return $this;
    }

    public function getMailTwo(): ?string
    {
        return $this->mailTwo;
    }

    public function setMailTwo(string $mailTwo): self
    {
        $this->mailTwo = $mailTwo;

        return $this;
    }

    public function getProcurations(): ?bool
    {
        return $this->Procurations;
    }

    public function setProcurations(?bool $Procurations): self
    {
        $this->Procurations = $Procurations;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->PostalCode;
    }

    public function setPostalCode(int $PostalCode): self
    {
        $this->PostalCode = $PostalCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getCadastre(): ?string
    {
        return $this->Cadastre;
    }

    public function setCadastre(string $Cadastre): self
    {
        $this->Cadastre = $Cadastre;

        return $this;
    }

    public function getNotary(): ?string
    {
        return $this->Notary;
    }

    public function setNotary(string $Notary): self
    {
        $this->Notary = $Notary;

        return $this;
    }

    public function getExclusivity(): ?bool
    {
        return $this->Exclusivity;
    }

    public function setExclusivity(?bool $Exclusivity): self
    {
        $this->Exclusivity = $Exclusivity;

        return $this;
    }

    public function getTextPub(): ?string
    {
        return $this->TextPub;
    }

    public function setTextPub(string $TextPub): self
    {
        $this->TextPub = $TextPub;

        return $this;
    }

    public function getDpe(): ?string
    {
        return $this->Dpe;
    }

    public function setDpe(string $Dpe): self
    {
        $this->Dpe = $Dpe;

        return $this;
    }

    public function getGes(): ?string
    {
        return $this->Ges;
    }

    public function setGes(string $Ges): self
    {
        $this->Ges = $Ges;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
