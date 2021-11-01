<?php
namespace App\Controller\Console;

class Main extends \Tiny\MVC\Controller\ConsoleController
{
    public function onstart()
    {
        echo "\nonstart\n";
    }

    public function onstop()
    {
        echo "\nonstop\n";
    }

    public function testAction()
    {
        echo "bbbbbbbbbb";
    }
    public function index1Action()
    {
        echo "demo1" . $this->config['status.index'];
    }
    
    public function indexAction()
    {
        echo $this->config['status.index'];
        echo "aaaa";
        return;
    }

}
?>