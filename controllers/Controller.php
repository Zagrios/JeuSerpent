<?php

abstract class Controller{

    private $vars = array();
    private $layout = 'default';

    public function set($d){
        $this->vars = array_merge($this->vars, $d);
    }

    protected function render($view){
        extract($this->vars);
        ob_start();
        require_once(WEB_ROOT."views/$view.php");
        $content_base = ob_get_clean();
        if(!$this->layout){
            echo $content_base;
        }
        else{
            require_once(WEB_ROOT."views/$this->layout.php");
        }
    } 

}


?>