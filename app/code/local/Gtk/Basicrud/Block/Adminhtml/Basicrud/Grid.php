<?php
class Gtk_Basicrud_Block_Adminhtml_Basicrud_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
   public function __construct()
   {
       parent::__construct();
       $this->setId('basicrudGrid');
       $this->setDefaultSort('product_id');
       $this->setDefaultDir('DESC');
       $this->setSaveParametersInSession(true);
   }

   protected function _prepareCollection()
   {
      $collection = Mage::getModel('gtk_basicrud/product')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
    }

   protected function _prepareColumns()
   {
       $this->addColumn('product_id',
             array(
                    'header' => 'ID',
                    'align' =>'right',
                    'width' => '50px',
                    'index' => 'product_id',
               ));

       $this->addColumn('name',
               array(
                    'header' => 'name',
                    'align' =>'left',
                    'index' => 'name',
              ));

         return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
         return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}