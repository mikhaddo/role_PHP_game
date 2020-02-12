<?php
namespace App\Models\DTO;
use App\Models\DAO\WizardManager;

/**
 * Wizard
 */
final class Wizard extends WizardManager
{

    protected $deathText = ' a déposé son bâton dans les vents.';
    protected $weapondEquip = 'w_staff';

    /**
     * if nothing : default
     * string $name, int $healthyPoints, int $mana, int $endurance, int $strength, bool $death
     */
    public function __construct(
        string $name = 'Gandalf',
        int $healthyPoints = 100,
        int $mana = 80,
        int $endurance = 50,
        int $strength = 5,
        bool $death = FALSE
    ){
        // 'Gandalf', 100, 80, 50, 5, FALSE
        parent::__construct($name, $healthyPoints, $mana, $endurance, $strength, $death);
    }


}