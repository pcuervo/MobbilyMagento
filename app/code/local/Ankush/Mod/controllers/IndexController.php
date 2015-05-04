<?php


class Ankush_Mod_IndexController extends Mage_Core_Controller_Front_Action{

	public function indexAction(){
		echo "My Fisst index action";
	}


	public function layoutAction(){
		echo "My Fisst layout";
		 $xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
		 echo  $xml ;
		 // Mage::log('ankush',Zend_log::INFO,'test.log',true);
	}


	public function modelAction(){


		// $object = Mage::getModel('ankush_mod') ;
		// echo get_class($object);
		echo get_class( Mage::getModel('ankush_mod/test') )  ;
	}
	public function default1Action(){
		$this->loadLayout()->renderLayout();

				 Mage::log('ankush',Zend_log::INFO,'test.log',true);  // FOR DEBUGGING PURPOSE

	}


}

