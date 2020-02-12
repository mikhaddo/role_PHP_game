<?php
namespace App\Models\DTO;
use App\Models\DAO\WarriorManager;

/**
 * Warrior
 */
final class Warrior extends WarriorManager
{

    protected $deathText = ' a rendu l\'épée à Crom.';
    protected $weapondEquip = 'w_longSword';

    /**
     * if nothing : default
     * string $name, int $healthyPoints, int $mana, int $endurance, int $strength, bool $death
     */
    public function __construct(
        string $name = 'Conan',
        int $healthyPoints = 170,
        int $mana = 20,
        int $endurance = 100,
        int $strength = 45,
        bool $death = FALSE
    ){
        // 'Conan', 170, 20, 100, 45, FALSE
        parent::__construct($name, $healthyPoints, $mana, $endurance, $strength, $death);
    }

}