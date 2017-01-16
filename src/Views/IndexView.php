<?php
namespace src\Views;

class IndexView extends \src\View{
    
    public function __construct($blocks){
        $this->addCSS('css/custom.css');
        
        $this->blocks = $blocks;
        
        foreach($blocks as $block){
            $this->addBody('<div class="block" data-id="' . $block->getId() . '"></div>');
        }
    }
}