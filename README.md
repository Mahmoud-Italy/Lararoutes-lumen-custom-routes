# Lumen Custom Routes
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

![lumen-custom-routes](assets/background.png)

Lumen package to help you customize your routes.
Specialize for whom using lumen, <br/>
If you don't you better do now, Lumen is stunningly micro-framework <b>Faster 4x than laravel</b>.

# Installation
<pre>composer require lararoutes/lumen-custom-routes</pre>

# Usage
Add those lines in top of routes/web.php
<pre>
  use Lararoutes\Lumen\CustomRoutes;
  $app = new CustomRoutes($router);
</pre>

That's it. done

# Example
Instead of doing this shit
<pre>
  $router->get('posts', 'PostController@index');
  $router->post('posts', 'PostController@store');
  $router->get('posts/{id}', 'PostController@show');
  $router->put('posts/{id}', 'PostController@update');
  $router->delete('posts/{id}', 'PostController@destroy');
</pre>

We can simple do this now
<pre>$app->apiResource('posts', 'PostController');</pre>

However, you can also custom your routes as much as u want in Lararoutes\Lumen\CustomRoutes.php
<pre>
    function apiResoruce($uri, $controller)
    {
        $this->app->get($uri, $controller.'@index');
        $this->app->post($uri, $controller.'@store');
        $this->app->get($uri.'/{id}', $controller.'@show');
        $this->app->put($uri.'/{id}', $controller.'@update');
        $this->app->delete($uri.'/{id}', $controller.'@destroy');

        // feel free to add more..

    }
</pre>

Another example for what you can do else<br/>
Instead of doing this
<pre>
  $router->group(['prefix' => 'auth'], function ($router) {
    $router->post('resister', 'AuthController@register');
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->get('me', 'AuthController@me');
  }
</pre>

You can just drop one line like that
<pre>$app->authResource('auth', 'AuthController');</pre>
Just create new function authResource in Lararoutes\Lumen\CustomRoutes.php
<pre>
  function authResource($uri, $controller)
    {
      $this->app->post($uri.'/register', $controller.'@register');
      $this->app->post($uri.'/login', $controller.'@login');
      $this->app->post($uri.'/logout', $controller.'@logout');
      $this->app->post($uri.'/refresh', $controller.'@refresh');
      $this->app->post($uri.'/me', $controller.'@me');
    }
</pre>
You are welcome :)

# Credits

  <ul>
    <li><a href="https://github.com/Mahmoud-Italy">Mahmoud Italy</a></li>
    <li><a href="https://github.com/Mahmoud-Italy/Lararoutes-lumen-custom-routes/graphs/contributors">All Contributors</a></li>
  </ul>

# License
The MIT License (MIT). Please see License File for more information.