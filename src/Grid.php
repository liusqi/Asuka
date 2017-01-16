<?php
namespace src;

class Grid {
    protected $grid;
    protected $row;
    protected $col;
    protected $blocks;
    
    public function __construct($row, $col) {
        $this->row = $row;
        $this->col = $col;
        $id = 0;
        
        for($i = 0; $i < $row; $i++){
            for($j = 0; $j < $col; $j++){
                $block = new Block($i, $j, $id);
                $this->grid[$i][$j] = $block;
                $this->blocks[] = $block;
                $id++;
            }
        }
    }
    
    public function getGrid(){
        foreach($this->grid as $col){
            foreach($col as $block){
                echo $block->getValue() . ' ';
            }
            echo '<br>';
        }
    }
    
    public function getBlockCount(){
        return $this->row * $this->col;
    }
    
    public function getBlocks(){
        return $this->blocks;
    }
}
