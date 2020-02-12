# Role_PHP_game
RPG about wizard && warriors in PHP
> it's a commun exercice for praticing POO.

## enhancements
- [ ] class Archer
- [ ] class Truand
- front-end
    - [ ] HTML
    - [ ] css
    - [ ] javaScript
    - [ ] images
- [ ] class Weapond
- [ ] switch compentences, weaponds, or something
- [...]

### versions
> [0.3.0 beta](../../releases/tag/v0.3.0beta)
- [x] allready workin'
- [x] class Warrior
- [x] class Wizard

#### 'le énoncé'
- l'exercice doit être réalisé dans un dossier à part non mélangé avec le cours ou d'autres exos.
- Dans ce dossier : créer un fichier index.php et un sous-dossier 'classes'. Chaque classe créée dans l'exercice devra se trouver
    un un fichier dans ce sous dossier. Ex: la classe Car serait dans un fichier 'Car.class.php' dans le sous-dossier 'classe'.
- L'exercice devra être réalisé dans le fichier index dans lequel on incluera les fichiers des classes au tout début.

1) Créer une classe "Character" (personnage en anglais) (qui ne devra pas être instanciable) avec ces caractéristiques
    (et leurs getters/setters) :
    - nom, points de vie, points d'attaque.

2) Créer les classes suivantes, héritant de personnage: Wizard (magicien), Warrior (guerrier)
    (ces classes ne doivent pas pouvoir être héritable).

3) Dans la classe personnage, créer les méthodes abstraites suivantes : parler, attaquer, mourrir.

4) Dans la classe guerrier uniquement, créer un attribut energie physique et dans la classe magicien
    créer un attribut energie magique (avec leur getter/setter)

5) Recréer les méthodes abstraite dans les classes filles :

    - parler() = doit afficher avec un echo une phrase de présentation du personnage avec son nom, ses points de vies restants,
        son attaque et son energie physique/magique restante. (vérifier si le personnage n'est pas mort sinon afficher
        "xxx est mort il ne peut pas parler !" à la place)

    - mourrir() = affiche une phrase type 'xxx est mort !' avec un echo.

    - attaquer($target) = enlève à $target autant de point de vie que l'attaquant a de points d'attaque et diminuer
        l'énergie physique ou magique de l'attaquant. (vérifier que l'énergie de l'attaque soit suffisante sinon afficher
        une phrase type 'xxxx est fatigué !' au lieu de faire l'attaque). Si $target est mort, appeler sa méthode mourrir.
        (après l'attaque, afficher une phrase de type 'xxxx attaque yyyy, il lui enlève zzz points de vies et lui en reste donc xxxx')

6) Instancier un magicien et un guerrier dans index.php. Les faire se présenter puis les faire s'attaquer tour à tour
jusqu'à ce qu'il y en ait un qui soit mort.

BONUS) Rajouter un peu d'aléatoire dans les dégâts provoqués par les attaques

#### rnd()
![powered-by](https://web.archive.org/web/20061209091918im_/http://www.elroubio.net/nouveaute/phpinup_gpl_7.jpg)
