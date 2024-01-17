# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Requirement

requirement : php 7.4 or latest version [Requirement](https://codeigniter.com/user_guide/intro/requirements.html)


## Controllers and Routing

in CI4 if you want to use autoroutes you must setAutoroutes to true in config/routes.php file like 

```bash
<?php
    use App\Controllers\Pages;
    use CodeIgniter\Router\RouteCollection;

    $routes->setAutoRoute(true); //this line can activate the default route based on controllers/your-public-method
```

if you have example.com/user/showAll you must have user as a controllers to your namespace App/Controllers and showAll as a public function in your User controllers

for example

```bash
<?php

    namespace App\Controllers;

    class User extends BaseController
    {
        public function showAll()
        {
            echo "showing all user";
        }

    }

```
