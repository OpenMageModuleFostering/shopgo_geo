<?php

class Shopgo_Geo_Model_Cron
{
    public function run()
    {
        /** @var $info Shopgo_Geo_Model_Info */
        $info = Mage::getModel('geo/info');
        $info->update();
    }
}