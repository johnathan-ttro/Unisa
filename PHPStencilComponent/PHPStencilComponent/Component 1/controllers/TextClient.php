<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author User
 */
include_once('GuidFactory.php');
include_once('TextFactory.php');
class TextClient {
    //Client.php
    //Client class to make request though the Creator
    private $newGuidObject;
    private $newTextObject;
    
    public function __construct()
    {
    $this->newTextObject= new TextFactory();
    echo $this->newTextObject->startfacMathPattern() . "<br />";
    }
    
}
$worker=new TextClient();