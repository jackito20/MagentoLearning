<?php

class Gtk_Test_IndexController extends Mage_Core_Controller_Front_Action {
 
 public function indexAction() {
  //echo "‘Hola Mundo!’";
  $this->loadLayout();
  $this->renderLayout();
 }

 public function saludarAction() {
  
    $this->loadLayout();
    $this->renderLayout();
    //echo $this->getLayout()->createBlock('gtk_block/saludogtk')->setTemplate('gtksaludo/gtksaludo.phtml')->toHtml();
    //var_dump($this->getLayout()->createBlock('gtk_block/saludogtk'));

 }
}