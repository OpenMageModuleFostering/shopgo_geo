<?php

class Shopgo_Geo_Block_Adminhtml_Notifications extends Mage_Adminhtml_Block_Template
{
    public function checkFilePermissions()
    {
        /** @var $info Shopgo_Geo_Model_Info */
        $info = Mage::getModel('geo/info');
        return $info->checkFilePermissions();
    }
}
