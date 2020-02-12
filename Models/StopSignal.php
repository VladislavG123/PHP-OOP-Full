<?php

class StopSignal{
    private $enabled;

    public function TurnOn(){
        $enabled = true;
    }
    
    public function TurnOff(){
        $enabled = false;
    }
}