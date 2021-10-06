<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("user_infos")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_infos")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=32)
     * @Groups("user_infos")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=64)
     * @Groups("user_infos")
     */
    private $lastname;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("user_infos")
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_infos")
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("user_infos")
     */
    private $situation;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     * @Groups("user_infos")
     */
    private $licence;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity=SocialNetwork::class, mappedBy="user", orphanRemoval=true)
     * @Groups("user_social_networks")
     */
    private $socialNetworks;

    /**
     * @ORM\OneToMany(targetEntity=Hobby::class, mappedBy="user", orphanRemoval=true)
     * @Groups("user_hobbies")
     */
    private $hobbies;

    /**
     * @ORM\OneToMany(targetEntity=Skill::class, mappedBy="user", orphanRemoval=true)
     * @Groups("user_skills")
     */
    private $skills;

    /**
     * @ORM\OneToMany(targetEntity=Experience::class, mappedBy="user", orphanRemoval=true)
     * @Groups("user_experiences")
     */
    private $experiences;

    /**
     * @ORM\OneToMany(targetEntity=TrainingAndGraduate::class, mappedBy="user", orphanRemoval=true)
     * @Groups("user_training_and_graduate")
     */
    private $trainingAndGraduates;

    public function __construct()
    {
        $this->socialNetworks = new ArrayCollection();
        $this->hobbies = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->experiences = new ArrayCollection();
        $this->trainingAndGraduates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getLicence(): ?string
    {
        return $this->licence;
    }

    public function setLicence(?string $licence): self
    {
        $this->licence = $licence;

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

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection|SocialNetwork[]
     */
    public function getSocialNetworks(): Collection
    {
        return $this->socialNetworks;
    }

    public function addSocialNetwork(SocialNetwork $socialNetwork): self
    {
        if (!$this->socialNetworks->contains($socialNetwork)) {
            $this->socialNetworks[] = $socialNetwork;
            $socialNetwork->setUser($this);
        }

        return $this;
    }

    public function removeSocialNetwork(SocialNetwork $socialNetwork): self
    {
        if ($this->socialNetworks->removeElement($socialNetwork)) {
            // set the owning side to null (unless already changed)
            if ($socialNetwork->getUser() === $this) {
                $socialNetwork->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Hobby[]
     */
    public function getHobbies(): Collection
    {
        return $this->hobbies;
    }

    public function addHobby(Hobby $hobby): self
    {
        if (!$this->hobbies->contains($hobby)) {
            $this->hobbies[] = $hobby;
            $hobby->setUser($this);
        }

        return $this;
    }

    public function removeHobby(Hobby $hobby): self
    {
        if ($this->hobbies->removeElement($hobby)) {
            // set the owning side to null (unless already changed)
            if ($hobby->getUser() === $this) {
                $hobby->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Skill[]
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->setUser($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            // set the owning side to null (unless already changed)
            if ($skill->getUser() === $this) {
                $skill->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Experience[]
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Experience $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->setUser($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): self
    {
        if ($this->experiences->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getUser() === $this) {
                $experience->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TrainingAndGraduate[]
     */
    public function getTrainingAndGraduates(): Collection
    {
        return $this->trainingAndGraduates;
    }

    public function addTrainingAndGraduate(TrainingAndGraduate $trainingAndGraduate): self
    {
        if (!$this->trainingAndGraduates->contains($trainingAndGraduate)) {
            $this->trainingAndGraduates[] = $trainingAndGraduate;
            $trainingAndGraduate->setUser($this);
        }

        return $this;
    }

    public function removeTrainingAndGraduate(TrainingAndGraduate $trainingAndGraduate): self
    {
        if ($this->trainingAndGraduates->removeElement($trainingAndGraduate)) {
            // set the owning side to null (unless already changed)
            if ($trainingAndGraduate->getUser() === $this) {
                $trainingAndGraduate->setUser(null);
            }
        }

        return $this;
    }
}
