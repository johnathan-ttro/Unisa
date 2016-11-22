<?php

//namespace UNISAStoryLine\PHPStencilComponent\Controllers;
/*
 * Include View Render Request Engine
 */
include_once('ViewRenderRequest.php');

/**
 * Extend October CMS Controller and Implement ViewRenderRequest Interface
 * Return View with Data
 */
//class GuidTypeofView extends \Backend\Classes\Controller implements ViewRenderRequest {
class TextTypeofView implements ViewRenderRequest 
	{
    private $textviewRender;
	//Return View Here
	public function getProperties() {
		$this->textviewRender = "<p>HELLO WORLD TEXT FACTORY - USE THIS AS A BASIS TO WRITE YOUR OWN FUNCTIONALITY</p>";
        return $this->textviewRender;
   
	}
}