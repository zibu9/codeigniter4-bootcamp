<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product()
    {
        echo "product ";
    }

    protected function check()
    {
        echo "protected function";
    }
}
