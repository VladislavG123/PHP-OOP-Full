<?php

class Engine{
    private $enabled;

    public function TurnOn(){
        $enabled = true;
    }
    
    public function TurnOff(){
        $enabled = false;
    }
}