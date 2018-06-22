<?php
class Gtk_Basicrud_Block_Adminhtml_Product extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        //indicate where we can find the controller
        $this->_controller = 'adminhtml_basicrud';
        $this->_blockGroup = 'gtk_basicrud';
        //header text
        $this->_headerText = 'Manage my movies';
        //button label 
        $this->_addButtonLabel = 'Add a movie';
        parent::__construct();
    }
}