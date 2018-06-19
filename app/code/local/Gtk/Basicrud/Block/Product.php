<?php

class Gtk_Basicrud_Block_Product extends Mage_Core_Block_Template {
    
    public function metodo(){
        return " Probando Producto ";
    }

    public function getProductList(){
        $products = Mage::getModel('gtk_basicrud/product')->getCollection();
        foreach($products as $pro){
            echo '<h3>'.$pro->getName().'</h3>';
            echo nl2br($pro->getPrice());
        }

    }
}