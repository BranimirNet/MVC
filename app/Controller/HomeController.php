<?php



class HomeController extends Controller {
    public function index():void{
        $this->view('home');
    }
     public function error()
    {
        require __DIR__ . '/../View/error.php';
    }
}