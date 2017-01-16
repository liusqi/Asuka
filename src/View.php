<?php
namespace src;

class View {
    protected $html = '';
    protected $head = '';
    protected $body = '';
    
    public function __construct() {
    }
    
    public function addHead($content){
        $this->head .= $content;
    }
    
    public function addBody($content){
        $this->body .= $content;
    }
    
    public function addHTML($content){
        $this->html .= $content;
    }
    
    public function render(){
        $this->generateHead();
        $this->addHTML('
            <!DOCTYPE html>
                <head>
                ' . $this->head . '
                </head>
                <body>
                ' . $this->body . '
                </body>
            </html>
        ');
        
        echo $this->html;
    }
    
    private function generateHead(){
        $this->head = '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=, minimal-ui">
            <link rel="icon" type="favicon.ico" href="res/img/asuka.ico">' . $this->head;
    }
    
    public function getHTML(){
        $this->generateHead();
        $this->html = '
            <!DOCTYPE html>
                <head>
                ' . $this->head . '
                </head>
                <body>
                ' . $this->body . '
                </body>
            </html>
        ';

        return $this->html;
    }
    
    public function addCSS($content){
        $this->addHead('<link rel="stylesheet" type="text/css" href="' . $content . '">');
    }
    
    public function addJS($content){
        $this->addHead('<script type="text/javascript" src="' . $content . '"></script>');
    }
}
