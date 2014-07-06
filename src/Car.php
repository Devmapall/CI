<?php

class Car {
    
    private $engine;
    private $doors;
    private $constructor;
    private $model;
    private $buildyear;
    private $gear;
    
    function __construct() {
        
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setEngine($engine) {
        if($engine instanceof Engine) {
            $this->engine = $engine;
        }
    }

    public function getDoors() {
        return $this->doors;
    }

    public function setDoors($doors) {
        $this->doors = $doors;
    }

    public function getConstructor() {
        return $this->constructor;
    }

    public function setConstructor($constructor) {
        $this->constructor = $constructor;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getBuildyear() {
        return $this->buildyear;
    }

    public function setBuildyear($buildyear) {
        $this->buildyear = $buildyear;
    }

    public function getGear() {
        return $this->gear;
    }

    public function setGear($gear) {
        if($gear instanceof Gear) {
            $this->gear = $gear;
        }
    }

    public function accelerate() {
        if($this->engine instanceof Engine) {
            $this->engine->increaseRevolutions();
        }
    }
}

?>
