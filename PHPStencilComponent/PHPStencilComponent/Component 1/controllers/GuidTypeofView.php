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
class GuidTypeofView implements ViewRenderRequest {
    private $guidviewRender;
	//Use Only as Guideline to your GUID View
	//Put Your Code Right here

    public function getProperties() {
		
		$this->guidviewRender.="<centre>";
		$this->guidviewRender="<iframe width='600' height='450' frameborder='1' style='border:0' src='https://www.google.com/maps/embed/v1/place?q=place_id:ChIJPc8tFwFulR4REslBHKGI3n8&key= AIzaSyCKsQpZUykFBo93VzizSnuc_dgQ18BhVa8' ></iframe>";
        $this->guidviewRender.="</centre>";
		return $this->guidviewRender;
   
	}
}