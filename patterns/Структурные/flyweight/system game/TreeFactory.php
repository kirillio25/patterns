<?php

namespace Структурные\flyweight\system use TreeType;

game;
require_once 'TreeType.php';

class TreeFactory
{
    private static array $treeTypes = [];

    public static function getTreeType(string $name, string $color, string $texture): TreeType
    {
        $key = md5($name . $color . $texture);

        if (!isset(self::$treeTypes[$key])) {
            self::$treeTypes[$key] = new TreeType($name, $color, $texture);
            echo "Создан новый тип дерева: {$name}\n";
        }

        return self::$treeTypes[$key];
    }
}
