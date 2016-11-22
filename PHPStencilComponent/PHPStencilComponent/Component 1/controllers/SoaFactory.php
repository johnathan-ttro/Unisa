<?php

//namespace UNISAStoryLine\PHPStencilComponent\Controllers;

/*
 * Abstract Factory Class
 */
//Get Current Working Directory
$dirroot = realpath(dirname(__FILE__));
include_once('Contracts.php');
include_once('SoaTypeofView.php');

//Inherit
class SoaFactory extends Contracts
{
    //Implement Abstract Method from Contracts
    public function facMathPattern() {
        $soa=new SoaTypeofView();
        return($soa->getProperties());
    }

}

/*class Categories extends \Backend\Classes\Controller {

public function __construct()
{

    BackendMenu::setContext('Acme.Blog', 'blog', 'categories');
}
//GraphicFactory.php
