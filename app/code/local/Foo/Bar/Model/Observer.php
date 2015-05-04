<?php

class Foo_Bar_Model_Observer{


	public function catalogProductLoadAfter(Varien_Event_Observer $observer){
		// 	echo "string";
		$product= $observer->getProduct();
		$product->setName($product->getName(). 'is cool');
		$product->setPrice(5);
	}

}