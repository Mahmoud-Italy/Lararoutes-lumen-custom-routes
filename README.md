# Lumen Custom Routes
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/Mahmoud-Italy/Lararoutes-lumen-custom-routes/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

![lumen-custom-routes](assets/background.png)

A Simple Lumen package to help you customize your routes apiResources.
Specialize for whom using lumen, if you don't you better do now ^^ <br/>
Lumen is stunningly micro-framework Faster 4x than laravel.

# Installation
<pre>composer require lararoutes/lumen-custom-routes</pre>

# Usage
Add this line in top of routes/web.php
<pre>use Lararoutes\Lumen\CustomRoutes;</pre>
<pre>$app = new CustomRoutes($router);</pre>

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

We Can simple do this now
<pre>$app->apiResoruce('posts', 'PostController');</pre>

However, you can also custom your routes as much as u want in Lararoute\Lumen\CustomRoutes.php
<pre>
    function apiResoruce($uri, $controller)
    {
        $this->app->get($uri, $controller.'@index');
        $this->app->post($uri, $controller.'@store');
        $this->app->get($uri.'/{id}', $controller.'@show');
        $this->app->put($uri.'/{id}', $controller.'@update');
        $this->app->delete($uri.'/{id}', $controller.'@destroy');

        // feel free to add more

    }
</pre>

# Credits

  <ul>
    <li><a href="https://github.com/Mahmoud-Italy">Mahmoud Italy</a></li>
    <li><a href="https://github.com/Mahmoud-Italy/Lararoutes-lumen-custom-routes/graphs/contributors">All Contributors</a></li>
  </ul>

# License
The MIT License (MIT). Please see License File for more information.