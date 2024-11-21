<?php

namespace App\Controllers;


class Blog extends BaseController
{
    public function index()
    {
        echo 'Hello World!';
    }
    public function AAA()
    {
        echo 'AAAA';
    }

    public function bbb($id)
    {
        echo $id;
    }
}