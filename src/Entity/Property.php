<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 * @UniqueEntity("title")
 * @Vich\Uploadable()
 */
class Property
{
    const HEAT = [
        0 => 'Electrique',
        1 => 'Gaz',
        2 => 'Autres'
    ];
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @var string|null
     * hack ajout de nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var File|null
     * @Assert\Image(
     * mimeTypes="image/jpeg"
     * )
     * @Vich\UploadableField(mapping="property_image", fileNameProperty="filename")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * hack ajout de nullable
     */
    private $type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=10, max=400)
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $rooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $bedrooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $floor;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=30000, max=900000)
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $heat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex("/^[0-9]{5}/")
     */
    private $postal_code;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $sold = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Option", inversedBy="properties")
     */
    private $options;

    /**
     * hack ajout de nullable
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seller;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->options = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSlug(): string
    {
        return (new Slugify())->slugify($this->title);
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->bedrooms;
    }

    public function setBedrooms(int $bedrooms): self
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
    public function getFormattedPrice(): string
    {
        return number_format($this->price, 0, '', ' ');
    }

    public function getHeat(): ?int
    {
        return $this->heat;
    }

    public function setHeat(int $heat): self
    {
        $this->heat = $heat;

        return $this;
    }

    public function getHeatType(): string
    {
        return self::HEAT[$this->heat];
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getSold(): ?bool
    {
        return $this->sold;
    }

    public function setSold(bool $sold): self
    {
        $this->sold = $sold;

        return $this;
    }

    public function getCreatedAt($format = 'D-m-y H:i:s')
    {
        return $this->created_at->format($format);
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection|Option[]
     */
    public function getOptions(): Collection
    {
        return $this->options;
    }

    public function addOption(Option $option): self
    {
        if (!$this->options->contains($option)) {
            $this->options[] = $option;
            $option->addProperty($this);
        }

        return $this;
    }

    public function removeOption(Option $option): self
    {
        if ($this->options->contains($option)) {
            $this->options->removeElement($option);
            $option->removeProperty($this);
        }

        return $this;
    }

    /**
 
     * @return  null|string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @param  null|string  $filename
     * @return Property
     */
    public function setFilename(?string $filename): Property
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return null|File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param null|File $imageFile
     * @return Property
     */
    public function setImageFile(?File $imageFile): Property
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile) {
            $this->updated_at = new \DateTime('now');
        }

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


    
    public function __toString()
    {
        return $this->type;
    }

    public function getSeller(): ?string
    {
        return $this->seller;
    }

    public function setSeller(string $seller): self
    {
        $this->seller = $seller;

        return $this;
    }

    //  test fusion //



    

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $birthDate;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $birthPlace;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondName;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondLastName;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondBirthDate;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondBirthPlace;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marriedDate;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telOne;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailOne;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telTwo;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailTwo;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Procurations;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
     private $AddressProperty;

    // /**
    //  * hack ajout du nullable
    //  * @ORM\Column(type="integer", nullable=true)
    //  */
    // private $PostalCode2;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Country;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Cadastre;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Notary;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Exclusivity;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TextPub;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Dpe;

    /**
     * hack ajout du nullable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Ges;

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
//  Redéfinir pour les proprios //

    public function getAddressProperty(): ?string
    {
        return $this->AddressProperty;
    }

    public function setAddressProperty(string $AddressProperty): self
    {
        $this->AddressProperty = $AddressProperty;

        return $this;
    }

    // public function getPostalCode2(): ?int
    // {
    //     return $this->PostalCode2;
    // }

    // public function setPostalCode2(int $PostalCode2): self
    // {
    //     $this->PostalCode2 = $PostalCode2;

    //     return $this;
    // }

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

    
}