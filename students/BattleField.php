<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public
    static function createMyWarrior()
    {
        $newWarrior = new MarvelWarrior($GLOBALS['warriorName']);
        $newWarrior->imageUrl = 'https://i0.wp.com/www.devenirtriathlete.com/wp-content/uploads/2022/03/Screenshot-2022-03-14-at-12.24.31-1.png?fit=600%2C548&ssl=1';
        $newWarrior->weapon = new Weapon(1, 1000);
        $newWarrior->weapon->imageUrl = 'https://pbs.twimg.com/media/EgaObuNWsAUrpZj?format=jpg&name=4096x4096';
        $newWarrior->saveNew();
    }

    public
    static function createOtherWarrior()
    {
        $otherWarrior = new MarvelWarrior('Hulk');
        $otherWarrior->imageUrl = 'https://www.toutlecd.com/wp-content/uploads/2023/03/the-hulk-facts.jpeg';
        $otherWarrior->weapon = new Weapon(2, 10000);
        $otherWarrior->weapon->imageUrl = 'https://p.turbosquid.com/ts-thumb/Yy/T5KxF1/T0PfA5Wt/preview1.2/jpg/1595422402/600x600/fit_q87/3f6869997b39e26599d0f4e63dcd81338b8892f6/preview1.2.jpg';
        $otherWarrior->saveNew();
    }
}

