<?php
include __DIR__ . '/Models/DTO/Character.php';
include __DIR__ . '/Models/DAO/CharacterManagerInterface.php';

// CharacterManager extends Character implements CharacterManagerInterface
include __DIR__ . '/Models/DAO/CharacterManager.php';

// *Class*Manager extends CharacterManager
include __DIR__ . '/Models/DAO/WarriorManager.php';
include __DIR__ . '/Models/DAO/WizardManager.php';

// final *Class* extends *Class*Manager
include __DIR__ . '/Models/DTO/Warrior.php';
include __DIR__ . '/Models/DTO/Wizard.php';
use App\Models\DTO\Warrior;
use App\Models\DTO\Wizard;

try{
    //throw new \Exception('another world');

    /**
     * create people and instant-hydrating
     * arguments :
     * string $name, int $healthyPoints, int $mana, int $endurance, int $strength, bool $death
     */
    $warrior = New Warrior();
    $wizard = New Wizard();

    // debug dump
    // echo '<pre>';
    // var_dump($warrior);
    // var_dump($wizard);
    // echo '</pre>';

    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex06-Reload_RPG_game</title>
</head>
<body>
    <?php
        // present
        echo Warrior::SCREAMING;
        $warrior->talk();
        echo Wizard::SCREAMING;
        $wizard->talk();

        // while of death !
        while($warrior->getDeath() == FALSE && $wizard->getDeath() == FALSE )
        {
            $warrior->attack($wizard);
            $wizard->attack($warrior);
        }
    ?>
</body>
</html>
<?php
    } catch (\Exception $e) {
        die('rust in pieces :: ' . $e->getMessage());
    }
?>