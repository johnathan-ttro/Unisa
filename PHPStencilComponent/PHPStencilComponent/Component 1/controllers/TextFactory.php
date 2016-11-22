<?php

//namespace UNISAStoryLine\PHPStencilComponent\Controllers;

/*
 * Text Factory Class uses abstract methods
 */
//Get Current Working Directory
$dirroot = realpath(dirname(__FILE__));
include_once('Contracts.php');
include_once('TextTypeofView.php');

//Inherit
class TextFactory extends Contracts
{
    //Implement Abstract Method from Contracts
   public function facMathPattern() {
        $gui=new TextTypeofView();
        return($gui->getProperties());
    }

}

/*class Categories extends \Backend\Classes\Controller {

public function __construct()
{

    BackendMenu::setContext('Acme.Blog', 'blog', 'categories');
}
//GraphicFactory.php
*/