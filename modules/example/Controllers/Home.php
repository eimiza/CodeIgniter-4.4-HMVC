<?php

namespace Modules\Example\Controllers; //CHANGE MODULE NAME "EXAMPLE"

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function __construct(){

    }

    private function render($view, $data){
        $path = '\Modules\Example\Views\\'; //CHANGE MODULE NAME "EXAMPLE"
        echo view($path.$view, $data);
    }


    public function index()
    {
        $data = ["name" => "Eimiza", "email" => "eimizafaisha@gmail.com"];
        $this->render('index', $data);
    }
}
