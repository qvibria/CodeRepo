<?php

$action = $argv[1];
switch ($action) {
    case 'crmod':
        $name = $argv[2];
        $dir = __DIR__;
        $dir = str_replace("bin", "", $dir);
        if (file_exists("$dir/" . strtolower($name))) {
            die();
        }
        if (mkdir("$dir/" . strtolower($name))) {
            echo "Создана корневая папка модуля $name" . PHP_EOL;
            $dir .= "/$name/";
            if (mkdir($dir . "controller")){
                echo "Создана папка контроллеров\n";
                
            }
            if (mkdir($dir . "view"))
                echo "Создана папка вида\n";
            if (mkdir($dir . "model"))
                echo "Создана папка модели \n";
        } else {
            echo "Ошибка при создании корневой папки модуля $name" . PHP_EOL;
        }

        break;
}

