<?php

class Brainsins_Holamundo_IndexController extends Mage_Core_Controller_Front_Action {
 
 public function indexAction() {
  //echo "‘Hola Mundo!’";
  $this->loadLayout();
  $this->renderLayout();
 }

 public function saludarAction() {
  
    echo $this->getLayout()->createBlock('brainsins_holamundo/holamundo')->setTemplate('holamundo/holamundo.phtml')->toHtml();
    die("here");
 }
}