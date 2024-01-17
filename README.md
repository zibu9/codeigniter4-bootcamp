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

[docs](https://codeigniter.com/user_guide/incoming/index.html)

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

static pages route is good to render statc page in view folder

```bash
<?php

    $routes->get('pages', [Pages::class, 'index']);
    $routes->get('(:segment)', [Pages::class, 'view']);

```

you must create Pages controllers 

```bash
    <?php

    use CodeIgniter\Exceptions\PageNotFoundException;

    class Pages extends BaseController
    {
        public function index()
        {
            return view('welcome_message');
        }

        public function view($page = 'home')
        {
            if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
                throw new PageNotFoundException($page);
            }

            $data['title'] = ucfirst($page);

            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer');
        }
    }

```

see more in [docs](https://codeigniter.com/user_guide/tutorial/static_pages.html)

