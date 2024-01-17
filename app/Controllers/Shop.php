<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product($id)
    {
        echo "product : $id";
    }

    protected function check()
    {
        echo "protected function";
    }
}
