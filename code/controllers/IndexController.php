<?php

class GlobalThinking_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
	//http://bcentra.local/magento/index.php/helloworld/index/index
	public function indexAction() {
		echo "<h1>Hello, World!</h1>";
		//$this->loadLayout();
		//$this->renderLayout();
	}
	
	//http://bcentra.local/magento/index.php/helloworld/index/goodbye
	public function goodbyeAction() {
		echo "<h1>Goodbye, World!</h1>";
	}
	
	//http://bcentra.local/magento/index.php/helloworld/index/params/key/value/key/value...
	public function paramsAction() {
		echo "<dl>";
		foreach($this->getRequest()->getParams() as $key=>$value) {
			echo "<dt><b>".$key."</b></dt>";
			echo "<dt>".$value."</dt>";
		}
		echo "</dl>";
	}
}

?>