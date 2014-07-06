<?php
require_once("Engine.php");

class EngineFactory {
    public function create105PS() {
        return new Engine(105,77);
    }
    
    public function create150PS() {
        return new Engine(150,110);
    }
}

?>
