<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo "all post";
    }

    public function create()
    {
        return view('blog_form');
    }

    public function store()
    {
        echo'<pre>';
            print_r($_POST);
        echo'</pre>';
    }

}
