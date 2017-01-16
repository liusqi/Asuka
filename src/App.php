<?php
namespace src;

class App {
    public function __construct() {
        
    }
    
    public function run(){
        $grid = new Grid(18,32);
        $blocks = $grid->getBlocks();
        
        $view = new Views\IndexView($blocks);
        
        $view->render(); 
    }
}
