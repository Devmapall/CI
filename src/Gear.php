<?php

abstract class Gear {
        
    private $stages;
    private $actualStage;
    
    function __construct($stages) {
        if(is_numeric($stages)) {
            $this->stages == $stages;
        }
    }
    
    public function getStages() {
        return $this->stages;
    }

    public function setStages($stages) {
        if(is_numeric($stages)) {
            $this->stages = $stages;
        }
    }

    public function getActualStage() {
        return $this->actualStage;
    }

    public function setActualStage($actualStage) {
        if(is_numeric($actualStage)) {
            $this->actualStage = $actualStage;
        }
    }
}

?>
