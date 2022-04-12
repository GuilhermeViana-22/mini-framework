<?php 

    $this->get('/', function(){
        (new \app\controller\TesteController)->index();
    });

  $this->get('/categoria', 'TesteController');

?>