<?php
namespace src;

class Block {
    protected $value;
    protected $rowIndex;
    protected $colIndex;
    
    public function __construct($row, $col, $value=null) {
        $this->rowIndex = $row;
        $this->colIndex = $col;
        $this->value = $value;
    }
    
    public function setValue($val){
        $this->value = $val;
    }
    
    public function getValue(){
        return $this->value;
    }
}
