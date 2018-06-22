<?php
class Namespace_Modulename_Block_Blockname extends Mage_Core_Block_Template
{
     public function methodblock()
     {
         //return "informations de mon block !!" ;

         

        /*$model = Mage::getModel('namespace_modulename/entityname')->load(1);
        var_dump($model);

        echo "<br> ENTIDAD ".$model->getNameAttribute()."</br>";*/
        
        $collection = Mage::getModel('namespace_modulename/entityname')
                            ->getCollection()
                            ->setOrder('id_tablename','asc');

        foreach($collection as $data)
        {
            echo '<h3>'.$data->getNameAttribute().'</h3>';
                //echo $data->getData('name_attribute.').'<br />';

        }
     }
}