<?php
namespace src\Views;

class IndexView extends \src\View{
    
    public function __construct($blocks){
        $this->blocks = $blocks;
        
        foreach($blocks as $block){
            $this->addHTML('<div class="block" data-id="' . $block->getValue() . '">');
        }
    }
}