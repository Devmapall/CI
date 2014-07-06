<?php
require_once("GearFactory.php");
require_once("AutomaticGear.php");

class AutomaticGearFactory implements GearFactory {
    
    public function createFiveStage(Engine $engine) {
        $gear = new AutomaticGear($engine, 5);
        return $gear;
    }

    public function createSixStage(Engine $engine) {
        $gear = new AutomaticGear($engine, 6);
        return $gear;
    }

}

?>
