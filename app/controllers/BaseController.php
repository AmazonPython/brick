<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class BaseController
{
    protected $twig;
    protected $data = array();

    public function __construct()
    {
        $loader = new FilesystemLoader(dirname(__DIR__) . '/views');
        $this->twig = new Environment($loader, []);
    }

    public function assign($var, $value=null)
    {
        if(is_array($var)) {
            $this->data = array_merge($this->data, $var);
        } else {
            $this->data[$var] = $value;
        }
    }

    public function display($template)
    {
        echo $this->twig->render($template . '.html', $this->data);
    }
}
