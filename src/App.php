<?php
namespace src;

class App {
    public function __construct() {
        
    }
    
    public function run(){
        $grid = new Grid(18,32);
        
        $view = new Views\IndexView();
        $view->addBody('<h1>hi</hi>');
        $view->render();
    }
}
