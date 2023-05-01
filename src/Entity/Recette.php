<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 2)]
    private ?string $timecook = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0', nullable: true)]
    private ?string $voteNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $labelRegime = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $ingredientList = null;

    #[ORM\Column(length: 255)]
    private ?string $preparationSteps = null;

    #[ORM\Column(length: 255)]
    private ?string $restTime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getTimecook(): ?string
    {
        return $this->timecook;
    }

    public function setTimecook(string $timecook): self
    {
        $this->timecook = $timecook;

        return $this;
    }

    public function getVoteNumber(): ?string
    {
        return $this->voteNumber;
    }

    public function setVoteNumber(?string $voteNumber): self
    {
        $this->voteNumber = $voteNumber;

        return $this;
    }

    public function getLabelRegime(): ?string
    {
        return $this->labelRegime;
    }

    public function setLabelRegime(?string $labelRegime): self
    {
        $this->labelRegime = $labelRegime;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIngredientList(): ?string
    {
        return $this->ingredientList;
    }

    public function setIngredientList(string $ingredientList): self
    {
        $this->ingredientList = $ingredientList;

        return $this;
    }

    public function getPreparationSteps(): ?string
    {
        return $this->preparationSteps;
    }

    public function setPreparationSteps(string $preparationSteps): self
    {
        $this->preparationSteps = $preparationSteps;

        return $this;
    }

    public function getRestTime(): ?string
    {
        return $this->restTime;
    }

    public function setRestTime(string $restTime): self
    {
        $this->restTime = $restTime;

        return $this;
    }
}
