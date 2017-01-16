<?php
namespace src;

class Block {
    protected $id;
    protected $value;
    protected $rowIndex;
    protected $colIndex;
    
    public function __construct($row, $col, $id=null, $value=null) {
        $this->rowIndex = $row;
        $this->colIndex = $col;
        $this->id = $id;
        $this->value = $value;
    }
    
    public function setValue($val){
        $this->value = $val;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getValue(){
        return $this->value;
    }
}
