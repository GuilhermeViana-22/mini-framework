<?php
    require_once('../vendor/autoload.php');
    require_once('../app/config/config.php');
    require_once('../app/functions/functions.php');
 

      use app\controller\TesteController;
      // colocar o use dentro de um paranteses isola a propriedade
      (new app\core\RouterCore());

      $controller = new TesteController();

?>