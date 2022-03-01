<?php

namespace App\Entity;

use App\Repository\AisShipTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AisShipTypeRepository::class)
 * @ORM\Table(name="aisshiptype")
 */
class AisShipType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $libelle;
    
    /**
     * @ORM\ManyToMany(targetEntity=Port::class, mappedBy="lesTypes")
     */
    private $lesPorts;

    /**
     * @ORM\Column(type="integer", name="aisshiptype")
     * @Assert\Length(min=1,
     *          max=9,
     *          minMessage = "Le type d'un navire est compris entre 1 et 9",
     *          maxMessage = "Le type d'un navire est compris entre 1 et 9",
     *          allowEmptyString = false
     *          )
     */
    private $aisShipType;

    public function __construct()
    {
        $this->lesPorts = new ArrayCollection();
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Port[]
     */
    public function getLesPorts(): Collection
    {
        return $this->lesPorts;
    }

    public function addLesPort(Port $lesPort): self
    {
        if (!$this->lesPorts->contains($lesPort)) {
            $this->lesPorts[] = $lesPort;
        }

        return $this;
    }

    public function removeLesPort(Port $lesPort): self
    {
        $this->lesPorts->removeElement($lesPort);

        return $this;
    }

    public function getAisShipType(): ?int
    {
        return $this->aisShipType;
    }

    public function setAisShipType(int $aisShipType): self
    {
        $this->aisShipType = $aisShipType;

        return $this;
    }
}
