<?php
class Grid {
    protected $grid;
    protected $row;
    protected $col;
    
    public function __construct($row, $col) {
        $this->row = $row;
        $this->col = $col;
        
        for($i = 0; $i < $row; $i++){
            for($j = 0; $j < $col; $j++){
                $this->grid[$i][$j] = 0;
            }
        }
    }
    
    public function getGrid(){
        foreach($this->grid as $col){
            foreach($col as $row){
                echo $row . ' ';
            }
            echo '<br>';
        }
    }
}
