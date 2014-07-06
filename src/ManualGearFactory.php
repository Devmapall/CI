<?php
require_once("ManualGear.php");
require_once("GearFactory.php");

class ManualGearFactory implements GearFactory {
    
    public function createFiveStage() {
        return new ManualGear(5);
    }

    public function createSixStage() {
        return new ManualGear(6);
    }

}

?>
