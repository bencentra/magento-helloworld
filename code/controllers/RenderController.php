<?php

//From 'Fundamentals of Magento Development' video, section 4 lesson 2
class GlobalThinking_HelloWorld_RenderController extends Mage_Core_Controller_Front_Action
{
	public function blockAction()
	{
		$this->getResponse()->setBody("Hello, World!");
		
	}
}

?>