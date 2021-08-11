<?php

namespace App\Controllers;

use App\Models\Demo;

class DemoController extends BaseController
{
    public function index()
    {
        echo 'This is a brick.t';
    }

    public function show($id)
    {
        echo 'This is the ' . $id . ' brick.';
    }

    public function example()
    {
        $demo = new Demo();
        $data = $demo->select('your-table-name', 'operator'); // 如 demos表，* 全表查询
        $this->assign('parameter', $data); // 如 demos
        $this->display('your-template-name'); // 如 index
    }
}
