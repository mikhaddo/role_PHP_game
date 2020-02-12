<?php
namespace App\Models\DAO;
use App\Models\DAO\CharacterManager;

/**
 * functions for Wizard
 */
class WizardManager extends CharacterManager
{

    public function talk()
    {

        parent::talk();

        if($this->getDeath() == FALSE){
            echo '<br>';
            echo 'Salutations voyageur, je suis ' . $this->getName() . ' et j\'ai ' . $this->getHealthyPoints() . 'HP.';
            echo '<br>';
            echo 'je vais attaquer à l\'aide de mon bâton de mage ! ' . $this->getWeapondEquip(); # need weapons
            echo '<br>';
            echo 'mon dieu est celui du vent il habite encore plus haut que le tiens.';
            echo '<br>';
            echo 'et souffle bien plus fort que tu ne peux l\'imaginer !';
            echo '<br>';
            echo 'j\'ai une force de ' . $this->getStrength() . 'points, et une endurance de ' . $this->getEndurance() . ' mais ce n\'est pas ma spécialitée !';
            echo '<br>';
            echo 'je préfère l\'érudition avec mes ' . $this->getMana() . 'points de mana, j\'ai de la monnaie à rendre.';
            echo '<br>';
        }
    }

}