<?php 

require_once __DIR__ . '/Factories/PlayerFactory.php';

class App 
{
    public function run()
    {
        $factory = new PlayerFactory();

        $mobylePlayer = $factory->listing('mobile');
        $mobylePlayer->play('chacten biber');
    }
}