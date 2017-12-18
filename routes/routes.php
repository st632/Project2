<?php
class routes
{
    public static function getRoutes()
    {
        $route = new route();
        $route->http_method = 'GET';
        $route->page = 'homepage';
        $route->action = 'show';
        $route->controller = 'homepageController';
        $route->method = 'show';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;
        
        
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'back1';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'back1';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;
        
        $route = new route();
         $route->http_method = 'POST';
         $route->action = 'delete';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'delete';
         $routes[] = $route;
         
         $route = new route();
         $route->http_method = 'GET';
         $route->action = 'edit';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'edit';
         $routes[] = $route;
         
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'save';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'save';
         $routes[] = $route;
         
         $route = new route();
         $route->http_method = 'GET';
         $route->action = 'register';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'register';
         $routes[] = $route;
         
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'store';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'store';
         $routes[] = $route;
         
         $route = new route();
         $route->http_method = 'POST';
         $route->action = 'edit';
         $route->page = 'accounts';
         $route->controller = 'accountsController';
         $route->method = 'edit';
         $routes[] = $route;
         
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'store';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;
 
        return $routes;
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