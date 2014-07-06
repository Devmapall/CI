<?php
require_once("Gear.php");

class AutomaticGear extends Gear {

    private $engine;
    
    function __construct($engine,$stages) {
        $this->engine = $engine;
        $this->stages = $stages;
    }

    public function checkRevolutions($rev) {
        if($rev > 2500) {
            $this->actualStage++;
            return true;
        }
        
        return false;
    }
}

?>
