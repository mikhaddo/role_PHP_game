<?php
namespace App\Models\DAO;
use App\Models\DAO\CharacterManager;

/**
 * functions for Warrior
 */
class WarriorManager extends CharacterManager
{

    public function talk()
    {

        parent::talk();

        if($this->getDeath() == FALSE){
            echo '<br>';
            echo 'Salut, j\'suis un barbare ! Mon nom c\'est ' . $this->getName() . ' ! J\'ai ' . $this->getHealthyPoints() . 'HP.';
            echo '<br>';
            echo 'je vais attaquer à l\'aide d\'une grosse épée. ' . $this->getWeapondEquip(); # need weapons
            echo '<br>';
            echo 'mon dieu Crom est le plus fort, il m\'attend en haut et si je ne connais pas la réponse au secret de l\'acier...';
            echo '<br>';
            echo 'si je meurs après avoir fait la ruse, Crom riera de moi, et me jetera hors du valhala.';
            echo '<br>';
            echo 'j\'ai une force de ' . $this->getStrength() . 'points, et une endurance de ' . $this->getEndurance() . ' heeuhh, et voilà, baston !';
            echo '<br>';
            echo 'je possède aussi ' . $this->getMana() . 'points de mana, mais c\'est pour les mauviettes.';
            echo '<br>';
        }
    }

}