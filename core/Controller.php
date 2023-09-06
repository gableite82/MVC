<?php 

namespace core;

use app\classes\uri;

class Controller {

    private $uri;

    public function __construct()
    {
       $this->uri = Uri::uri();
    }


    public function load()
    {
        if($this->isHome()){
            return $this->ControllerHome();
        }
        return $this->ControllerNotHome();
    }


    private function ControllerHome()
    {

    }


    private function ControllerNotHome()
    {
        
    }

    
    private function isHome()
    {
        return ($this-> uri == '/');
    }

}

?>