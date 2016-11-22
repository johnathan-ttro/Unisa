<?php


namespace UNISAStoryLine\PHPStencilComponent;

class TimezonesController extends \Backend\Classes\Controller
{
    /*
     * Initialise Method
     * 
     * @return true;
     */
    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }

}