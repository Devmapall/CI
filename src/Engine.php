<?php

class Engine {
    
    private $hp;
    private $kw;
    private $revolutions;
    private $automaticGear = null;
    
    function __construct($hp, $kw) {
        if(is_numeric($hp) && is_numeric($kw)) {
            $this->hp = $hp;
            $this->kw = $kw;
        }
    }

    public function getHp() {
        return $this->hp;
    }

    public function setHp($hp) {
        if(is_numeric($hp)) {
            $this->hp = $hp;
        }
    }

    public function getKw() {
        return $this->kw;
    }

    public function setKw($kw) {
        if(is_numeric($kw)) {
            $this->kw = $kw;
        }
    }
    
    public function getRevolutions() {
        return $this->revolutions;
    }

    public function setRevolutions($revolutions) {
        if(is_numeric($revolutions)) {
            $this->revolutions = $revolutions;
        }
    }
    
    public function setAutomaticGear($automaticGear) {
        if($automaticGear instanceof AutomaticGear) {
            $this->automaticGear = $automaticGear;
        }
    }
    
    public function increaseRevolutions() {
        $this->revolutions += 300;
        if($this->automaticGear != null && $this->automaticGear instanceof AutomaticGear) {
            $inc = $this->automaticGear->checkRevolutions($this->revolutions);
            if($inc) {
                $this->revolutions = 1000;
            }
        }
    }

}

?>
