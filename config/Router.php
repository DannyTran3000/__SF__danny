<?php
include_once DIR_APP . 'controllers/PageController.php';

class Router
{
  protected $prefix = '';
  private $routes = [];

  public function dispatch($method, $uri)
  {
    $parse_url = $this->parse_url($uri);
    $params = $parse_url['params'];
    $queries = $parse_url['queries'];

    if (isset($this->routes[$method][$uri])) {
      $action = $this->routes[$method][$uri];
      if (is_callable($action)) {
        return $action($params, $queries);
      } else {
        list($controllerName, $methodName) = explode('@', $action);
        $controller = new $controllerName();
        return $controller->$methodName($params, $queries);
      }
    } else {
      echo "Page not found";
    }
  }

  public function group($prefix, $callback)
  {
      $previousPrefix = $this->prefix;
      $this->prefix = $previousPrefix . $prefix;
      $callback($this);
      $this->prefix = $previousPrefix;
  }

  public function get($uri, $action)
  {
      $this->routes['GET'][$this->prefix . $uri] = $action;
  }

  public function post($uri, $action)
  {
      $this->routes['POST'][$this->prefix . $uri] = $action;
  }



  private function parse_url($request_uri)
  {
    $uri = rtrim($request_uri);

    $split_uri = explode('?', $uri);
    $params = $split_uri[0] == '/' ? '/' : rtrim($split_uri[0], '/');

    $queries = [];

    if (isset($split_uri[1])) {
      $params = explode('&', $split_uri[1]);

      for ($i = 0; $i < count($params); $i++) {
        $splitParam = explode('=', $params[$i]);

        if (count($splitParam) >= 2) {
          $queries[$splitParam[0]] = "$splitParam[1]";
        }
      }
    }

    return [
      'params' => $params,
      'queries' => $queries
    ];
  }
}

$ROUTER = new Router();

include_once(DIR . 'routes/web.php');