<?php

class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'Page';
        $actionName = 'Index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if ( !empty($routes[1]) )
        {
            $controllerName = $routes[1];
        }

        // получаем имя экшена
        if ( !empty($routes[2]) )
        {
            $actionName = $routes[2];
        }

        // добавляем префиксы
        $modelName = $controllerName;
        $controllerName = $controllerName.'Controller';
        $actionName = 'action'.$actionName;

        // подцепляем файл с классом модели (файла модели может и не быть)

        $modelFile = strtolower($modelName).'.php';
        $modelPath = "../application/models/".$modelFile;
        if(file_exists($modelPath))
        {
            include "../application/models/".$modelFile;
        }

        // подцепляем файл с классом контроллера
        $controllerFile = $controllerName.'.php';
        $controllerPath = "../application/controllers/".$controllerFile;
        if(file_exists($controllerPath))
        {
            include "../application/controllers/".$controllerFile;
        }
        else
        {
            Route::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controllerName;
        $action = $actionName;

        if(method_exists($controller, $action))
        {
            $controller->$action();
        }
        else
        {
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
//        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
//        header('HTTP/1.1 404 Not Found');
//        header("Status: 404 Not Found");
//        header('Location:'.$host.'404');
    }
}