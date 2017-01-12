<?php
require_once('Grid.php');

class App {
    public function __construct() {
        
    }
    
    public function run(){
        $grid = new Grid(9,16);
        $grid->getGrid();
    }
}
