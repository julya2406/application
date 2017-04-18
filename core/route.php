<?php

    class Route{

        static function start(){
            //контролле и действие по умолчанию
            $controllerName = 'Main';
            $actionName = 'Index';

            $routes = explode('/', $_SERVER['REQUEST_URI']);

            if( !empty($routes[1])  ){
                $controllerName = $routes[1];
            }

            if( !empty($routes[2])  ){
                $actionName = $routes[2];
            }

            $modelName = 'Model_' . $controllerName;
            $controllerName = 'controller_' . $controllerName;
            $actionName = 'action' . $actionName;

            $modelFile = strtolower($modelName) . '.php';
            $modelPath = 'application/models/' . $modelFile;
            if(file_exists($modelPath)){
                include "application/models/" . $modelFile;
            }

            $controllerFile = strtolower($controllerName) . '.php';
            $controllerPath = 'application/controllers/' . $controllerFile;
            if(file_exists($controllerPath)){
                include "application/controllers/" . $controllerFile;
            }
            else{
                Route::ErrorPage404();
            }
            $controller = new $controllerName;
            var_dump($controllerName);
            $action = $actionName;
            var_dump($action);

            if(method_exists($controller, $action))
            {
                $controller->actionIndex();
            }
            else
            {
                var_dump($controller);
            }
        }


        function ErrorPage404(){
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
        }
    }