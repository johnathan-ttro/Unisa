<?php

//namespace UNISAStoryLine\PHPStencilComponent\Controllers;

/*
 * Inherits Abstract Factory Class Methods
 */
//Get Current Working Directory
$dirroot = realpath(dirname(__FILE__));
include_once('Contracts.php');
include_once('GuidTypeofView.php');

//Inherit
class GuidFactory extends Contracts
{
    //Implement Abstract Method from Contracts
    public function facMathPattern() {
        $gui=new GuidTypeofView();
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
