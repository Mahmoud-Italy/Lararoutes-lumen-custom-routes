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

}
