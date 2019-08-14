<?php

class Shopgo_Geo_Adminhtml_GeoController extends Mage_Adminhtml_Controller_Action
{
    public function statusAction()
    {
        /** @var $_session Mage_Core_Model_Session */
        $_session = Mage::getSingleton('core/session');
        /** @var $info Shopgo_Geo_Model_Info */
        $info = Mage::getModel('geo/info');

        $_realSize = filesize($info->getArchivePath());
        $_totalSize = $_session->getData('_geo_file_size');
        echo $_totalSize ? $_realSize / $_totalSize * 100 : 0;
    }

    public function synchronizeAction()
    {
        /** @var $info Shopgo_Geo_Model_Info */
        $info = Mage::getModel('geo/info');
        $info->update();
    }
}
