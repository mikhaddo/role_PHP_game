<?php
namespace App\Models\DAO;
use App\Models\DTO\Character;
use App\Models\DAO\CharacterManagerInterface;

/**
 * big CharacterManager
 * the boss who contain all functions and all getters-setters
 */
class CharacterManager extends Character implements CharacterManagerInterface
{
    /**
     * randomise Endurance
     */
    public function randEndurance()
    {
        $randEndurance = round($this->getEndurance() * rand(1,10) / 50 );
        if($randEndurance < 3){ echo 'echec endurance !'; }
        if($randEndurance > 17){ echo 'réussite endurance !'; }

        return $randEndurance;
    }

    /**
     * weapond mod
     * need instance of Weapond $weapond
     */
    public function weapondDegats()
    {
        $weapondEquip = $this->getWeapondEquip();
        $randomDegats = rand(1,100) / 500;

        if($weapondEquip == 'w_staff' ){
            $attackStyle = round($this->getMana() * $randomDegats );
        } else if($weapondEquip == 'w_longSword' ){
            $attackStyle = round($this->getStrength() * $randomDegats );
        } else {
            echo ' (mdr avec quoi tu vas frapper ?) ';
            $attackStyle = 1;
        }

        echo $attackStyle;
        return $attackStyle;

    }

    /**
     * need
     */
    public function talk()
    {
        if($this->getDeath()){
            echo 'wtf ? the character has died... ' . $this->getName() . $this->getDeathText();
            return;
        }

    }

    /**
     * baston !
     */
    public function attack(Character $target)
    {

        if($this->getDeath()){ return; }

        echo '<br>';
        echo 'endurance restante de ' . $this->getName() . ' :: ' . $this->getEndurance() . 'points .';
        echo '<br>';

        if($this->getEndurance() <= 10){
            echo '<br>';
            echo 'il est trop fatigué et doit se reposer pour regagner des points d\'endurance dans ce round.';
            echo '<br>';
            $this->setEndurance( $this->getEndurance() + $this->randEndurance() );
        }

        $this->setEndurance( $this->getEndurance() - $this->randEndurance() );
        echo '<br>';
        echo $this->getName() . ' enlève à ' . $target->getName() . ' exactement ';
        $target->setHealthyPoints( $target->getHealthyPoints() - $this->weapondDegats() );
        echo ' points de vie';
        echo '<br>';
        echo 'il reste donc à ce cher ' . $target->getName() . ' exactement ' . $target->getHealthyPoints() . 'HP.';
        echo '<br>';

        if($target->getHealthyPoints() <= 0){
            $target->die();
        }

    }

    // App\Models\DAO\CharacterManager\Die(), not \Die() !
    public function die(){
        echo CharacterManager::SCREAMING;
        echo $this->getName() . ' ' . $this->getDeathText();
        return $this->setDeath(TRUE);
    }
}