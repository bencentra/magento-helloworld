<?php

//From 'Fundamentals of Magento Development' video, section 4 lesson 2
class GlobalThinking_HelloWorld_RenderController extends Mage_Core_Controller_Front_Action
{
	public function blockAction()
	{
		$this->getResponse()->setBody("Hello, World!");	
	}

	public function overrideAction()
	{
								//"package_module/blockname"
		$blockHtml = $this->getLayout()->createBlock('GlobalThinking_HelloWorld/sample')->toHtml();
		$this->getResponse()->setBody($blockHtml);
	}

	public function templateAction()
	{
		$blockHtml = $this->getLayout()->createBlock('core/template')
					->setTemplate('gthelloworld/random.phtml')->toHtml();
		$this->getResponse()->setBody($blockHtml);
	}
}

?>
