<?php

namespace Lararoutes\Lumen;

class CustomRoutes
{
    protected $app;
      
    public function __construct($router='')
    {
      $this->app = $router;
    }
      
    function apiResource($uri, $controller)
    {
      $this->app->get($uri, $controller.'@index');
      $this->app->post($uri, $controller.'@store');
      $this->app->get($uri.'/{id}', $controller.'@show');
      $this->app->put($uri.'/{id}', $controller.'@update');
      $this->app->delete($uri.'/{id}', $controller.'@destroy');

      // feel free to add more
    }


    function authResource($uri, $controller)
    {
      $this->app->post($uri.'/register', $controller.'@register');
      $this->app->post($uri.'/login', $controller.'@login');
      $this->app->post($uri.'/logout', $controller.'@logout');
      $this->app->post($uri.'/refresh', $controller.'@refresh');
      $this->app->post($uri.'/me', $controller.'@me');

      // feel free to add more
    }
}
