<?php

/**
 * Description of Route
 *
 * @author igor
 */
class Route {

    static function hw(){
        echo "hello world";
    }
    static function start() {
        // контроллер и действие по умолчанию
        $module_name = 'Main';
        $action_name = 'index';
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя модуля, к которому обращаемся
        if (!empty($routes[1])) {
            $module_name = $routes[1];
        }

        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // добавляем префиксы
         $model_name = 'Model_' . ucfirst($module_name);
         $controller_name = 'Controller_' . ucfirst($module_name);
         $action_name = 'action_' . ucfirst($action_name);
        
        // подцепляем файл с классом модели (файла модели может и не быть)

        $model_file = $model_name . '.php';
        $model_path = "application/". $module_name ."/model/" . $model_file;
        if (file_exists($model_path)) {
            include $model_path;
        }

        // подцепляем файл с классом контроллера
        $controller_file = ($controller_name) . '.php';
        $controller_path = "application/". $module_name . "/controller/" . $controller_file;
        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            /*
              правильно было бы кинуть здесь исключение,
              но для упрощения сразу сделаем редирект на страницу 404
             */
            Route::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    }

    function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }

}
