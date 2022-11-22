<?php

namespace App\core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /**
     * @param  string  $file
     * @return mixed
     */
    public static function load(string $file)
    {
        $router = new static;
        require $file;

        return $router;
    }

    /**
     * @return void
     */
    public function defineUrl($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param  string  $uri
     * @param  string  $controller
     * @return void
     */
    public function get(string $uri, string $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param  string  $uri
     * @param  string  $controller
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param  string  $uri
     * @param  string  $requestMethod
     * @return void
     * @throws \Exception
     */
    public function direct(string $uri, string $requestMethod)
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            $routArray = explode('@', $this->routes[$requestMethod][$uri]);
            $controller = $routArray[0];
            $action = $routArray[1];

            return $this->callAction(
                $controller, $action
            );
        }

        throw new \Exception('No route defined for this URI');
    }

    /**
     * @param  string  $controller
     * @param  string  $action
     * @return void
     * @throws \Exception
     */
    protected function callAction(string $controller, string $action)
    {
        $controller = "App\\controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new \Exception("In the controller {$controller} is not method {$action}");
        }

        return $controller->$action();
    }
}
