<?php

namespace Engine\Core\Router;

class Router
{
  /**
   * @var array
   */
    private $routes = [];

  /**
   * @var string
   */
    private $host;

  /**
   * Router constructor
   * @param $host
   */
    public function __construct($host)
    {
        $this->host = $host;
    }

  /**
   * @param $key
   * @param $pattern
   * @param $controller
   * @param $method
   */
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method
        ];
    }
}