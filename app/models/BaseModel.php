<?php

namespace App\Models;

use Medoo\Medoo;

class BaseModel extends Medoo
{
    public function __construct()
    {
        $options = [
            'database_type' => 'mysql',
            'database_name' => 'root',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'prefix' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'port' => 3306,
        ];

        parent::__construct($options);
    }
}
