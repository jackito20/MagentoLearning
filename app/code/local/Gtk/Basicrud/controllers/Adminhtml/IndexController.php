<?php

class Gtk_Basicrud_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
            $this->loadLayout();
            $this->renderLayout();
    }

    public function createAction() {
        /*$this->loadLayout();
        $this->renderLayout();*/
        echo "Hello";
    }
}