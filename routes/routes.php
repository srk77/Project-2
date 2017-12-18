<?php
class routes
{
    public static function getRoutes()
    {


        $routes[]=self::create('GET','show','homepage','homepageController','show');
        $routes[]=self::create('POST','create','homepage','homepageController','create');


        $routes[]=self::create('POST','logout','accounts','accountsController','logout');
        $routes[]=self::create('GET','back1','accounts','accountsController','back1');
        $routes[]=self::create('POST','show','accounts','accountsController','show');
        $routes[]=self::create('POST','login','accounts','accountsController','login');
        $routes[]=self::create('POST','delete','accounts','accountsController','delete');
        $routes[]=self::create('GET','edit','accounts','accountsController','edit');
        $routes[]=self::create('GET','register','accounts','accountsController','register');
        $routes[]=self::create('POST','save','accounts','accountsController','save');
        $routes[]=self::create('POST','store','accounts','accountsController','store');
        $routes[]=self::create('POST','edit','accounts','accountsController','edit');


        $routes[]=self::create('GET','show','tasks','tasksController','show');
        $routes[]=self::create('GET','all','tasks','tasksController','all');
        $routes[]=self::create('GET','edit','tasks','tasksController','edit');
        $routes[]=self::create('POST','store','tasks','tasksController','store');
        $routes[]=self::create('POST','delete','tasks','tasksController','delete');
        $routes[]=self::create('GET','create','tasks','tasksController','create');
        return $routes;
    }

    public static function create($http_method,$action,$page,$controller,$method) {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
        return $route;
    }
}
//this is the route prototype object  you would make a factory to return this
class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}
?>
