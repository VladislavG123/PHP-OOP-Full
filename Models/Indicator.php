<?php

class Indicator{
    private $enabled;

    public function TurnOn(){
        $enabled = true;
    }
    
    public function TurnOff(){
        $enabled = false;
    }
}