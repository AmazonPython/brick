<?php

namespace App\Controllers;

class DemoController extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        echo 'This is a brick.';
    }

    public function show($id)
    {
        echo 'This is the ' . $id . ' brick.';
    }
}
