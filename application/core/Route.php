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
        if (!empty($routes[1]))
        {
            $controllerName = $routes[1];
        }

        // получаем имя экшена
        if (!empty($routes[2]))
        {
            $actionWithParams = explode('?', $routes[2]);
            $actionName = $actionWithParams[0];
            $params = explode('&', $actionWithParams[1]);
            extract($params);
        }

        // добавляем префиксы
        $modelName = $controllerName;
        $controllerName = $controllerName.'Controller';
        $modelFile = $actionName.'.php';
        $actionName = 'action'.$actionName;

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
            include "../application/controllers/PageController.php";
            Route::ErrorPage404();
            exit;
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

    static function ErrorPage404()
    {
        $controller = new PageController();
        $controller->actionPageNotFound();
    }
}