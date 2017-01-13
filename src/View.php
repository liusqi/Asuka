<?php
namespace src;

class View {
    protected $html;
    protected $head;
    protected $body;
    
    public function __construct() {
        $this->head .= '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=, minimal-ui">
            <link rel="icon" type="favicon.ico" href="/res/img/favicon.ico">';
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
        $this->addHTML('
            <html>
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
    
    public function getHTML(){
        $this->addHTML('
            <html>
                <head>
                ' . $this->head . '
                </head>
                <body>
                ' . $this->body . '
                </body>
            </html>
        ');
        
        return $this->html;
    }
}
