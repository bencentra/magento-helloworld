<?php

class GlobalThinking_HelloWorld_Block_Sample extends Mage_Core_Block_Template
{
	protected function _toHtml()
	{
		return "Hello, World! (from ".__FILE__.")";
	}
}

?>
