<?php
class Namespace_Modulename_Model_Resource_Entityname_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('namespace_modulename/entityname');
    }
}