<?php
namespace App\Models\DTO;

/**
 * @Character class abstraction
 * give all to every extends
 */
abstract class Character
{
    // constants
    const SCREAMING = '<p>haaaaaaaaaagegblbllb !</p>';

    // attributs protected || private ?
    protected $name = 'Celestin';
    protected $healthyPoints = 100;
    protected $mana = 50;
    protected $endurance = 50;
    protected $strength = 50;
    protected $death = FALSE;

    // custom at fighters
    protected $deathText = 'est décédé dans de tragiques circonstances...';
    protected $weapondEquip = 'w_knife';

    public function __construct(string $name, int $healthyPoints, int $mana, int $endurance, int $strength, bool $death)
    {
        $this->setName($name);
        $this->setHealthyPoints($healthyPoints);
        $this->setMana($mana);
        $this->setEndurance($endurance);
        $this->setStrength($strength);
        $this->setDeath($death);
    }

    // methods getters (accesseurs)
    public function getName() : string
    {
        return $this->name;
    }
    public function getHealthyPoints() : int
    {
        return $this->healthyPoints;
    }
    public function getMana() : int
    {
        return $this->mana;
    }
    public function getEndurance() : int
    {
        return $this->endurance;
    }
    public function getStrength() : int
    {
        return $this->strength;
    }
    public function getDeath() : bool
    {
        return $this->death;
    }
    public function getDeathText() : string
    {
        return $this->deathText;
    }
    public function getWeapondEquip() : string
    {
        return $this->weapondEquip;
    }

    // methods setters (mutateurs)
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setHealthyPoints(int $healthyPoints)
    {
        $this->healthyPoints = $healthyPoints;
    }
    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }
    public function setEndurance(int $endurance)
    {
        $this->endurance = $endurance;
    }
    public function setStrength(int $strength)
    {
        $this->strength = $strength;
    }
    public function setDeath(bool $death)
    {
        $this->death = $death;
    }
    public function setDeathText(string $deathText)
    {
        $this->deathText = $deathText;
    }
    public function setWeapondEquip(string $weapondEquip)
    {
        $this->weapondEquip = $weapondEquip;
    }
}