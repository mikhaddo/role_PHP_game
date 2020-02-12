<?php
namespace App\Models\DAO;
use App\Models\DTO\Character;

/**
 * the next who implements this must reuse everything
 */
interface CharacterManagerInterface
{
    // randomise attacks
    public function randEndurance();
    public function weapondDegats();

    public function talk();
    public function attack(Character $target);

    // App\Models\DAO\CharacterInterface\Die(), not \Die() !
    public function die();
}