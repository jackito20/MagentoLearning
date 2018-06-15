<?php
class Gtk_Basicrud_Model_Resource_Product extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('gtk_basicrud/product', 'product_id');
    }
}