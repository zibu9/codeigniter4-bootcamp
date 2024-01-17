<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo "admin shop area";
    }

    public function product($id)
    {
        echo "product : $id";
    }

}
