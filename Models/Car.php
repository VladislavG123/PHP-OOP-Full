<?php 

class Car implements ICar {

    private $engine;
    private $leftIndicators;
    private $rightIndicators;
    private $stopSignal;
    private $headlight;


    public function __construct($amountOfindicatorsOnOneSide)
    {
        for ($i=0; $i < $amountOfindicatorsOnOneSide; $i++) { 
            $leftIndicators[] = new Indicator();
            $rightIndicators[] = new Indicator();
        }

        $this->engine = new Engine();

        $this->stopSignal = new StopSignal();

        $this->headlight = new Headlight();
    }

    private function TurnOffAllIndicators()
    {
        for ($i=0; $i < count($this->rightIndicators); $i++) { 
            $this->rightIndicators->TurnOff();
        }
        for ($i=0; $i < count($this->leftIndicators); $i++) { 
            $this->leftIndicators->TurnOff();
        }
    }

    private function TurnOnLeftIndicators()
    {   
        for ($i=0; $i < count($this->leftIndicators); $i++) { 
            $this->leftIndicators->TurnOn();
        }
    }

    private function TurnOnRightIndicators()
    {   
        for ($i=0; $i < count($this->rightIndicators); $i++) { 
            $this->rightIndicators->TurnOn();
        }
    }

    public function TurnOn(){
        $this->engine->TurnOn();
        $this->headlight->TurnOn();
    }

    public function TurnOff(){
        $this->engine->TurnOff();
        $this->headlight->TurnOff();

        $this->TurnOffAllIndicators();

        $this->stopSignal->TurnOff();

    }
 
    public function Move(){
        $this->stopSignal->TurnOff();
        $this->TurnOffAllIndicators();
    }

    public function Stop(){
        $this->stopSignal->TurnOn();
    }
 
    public function TurnRight(){
        $this->TurnOffAllIndicators();
        $this->TurnOnRightIndicators();
    }

    public function TurnLeft(){
        $this->TurnOffAllIndicators();
        $this->TurnOnLeftIndicators();
    }
}