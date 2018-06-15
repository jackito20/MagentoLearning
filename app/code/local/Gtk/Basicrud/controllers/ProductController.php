<?php

class Gtk_Basicrud_ProductController extends Mage_Core_Controller_Front_Action {
 
    public function testAction() {
        echo "‘Hola Mundo!’";
    }
    
    public function showOneProductAction(){
        $params = $this->getRequest()->getParams();
        $product = Mage::getModel('gtk_basicrud/product');
        echo("Loading the Product with an ID of ".$params['id']);
        $product->load($params['id']);
        $data = $product->getData();
        var_dump($data);
    }

    public function showAllProductsAction() {
        $products = Mage::getModel('gtk_basicrud/product')->getCollection();
        foreach($products as $pro){
            echo '<h3>'.$pro->getName().'</h3>';
            echo nl2br($pro->getPrice());
        }
        //var_dump($products);
    }

    public function createNewProductAction() {
        $params = $this->getRequest()->getParams();
        $product = Mage::getModel('gtk_basicrud/product');
        $product->setName($params['productName']);
        $product->setPrice($params['productPrice']);
        $product->save();
        echo 'product with ID ' . $product->getId() . ' created';
    }
    

}