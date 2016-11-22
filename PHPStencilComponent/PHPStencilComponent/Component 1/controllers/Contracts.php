<?php

//namespace UNISAStoryLine\PHPStencilComponent\Controllers;

/**
 * Description of Contracts
 * The Contracts Abstract Class uses an abstract class and a concrete method to Start the Factory
 * @return void
 */
abstract class Contracts
    {
    //Abstract Method
    public abstract function facMathPattern();
    
    //Implement Method
    public function startfacMathPattern()
    {
        $startfm = $this->facMathPattern();
        return $startfm;
    }
}
