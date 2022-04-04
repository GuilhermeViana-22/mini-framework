<?php

// namespace e autoload

namespace app\controller;
use app\core\Controller;

    class TesteController extends Controller{

      public function index()
      
      {
        $this->load('home/main',[
            'nome' => 'satelite'
        ]);
      }

    }

?>