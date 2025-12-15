<?php 

abstract class Controller {
    protected function view(string $view):void{
        require __DIR__ . "/../views/$view.php";
    }


}





