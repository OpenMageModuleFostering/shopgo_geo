<?php

class Shopgo_Geo_Model_Observer
{
    public function controllerFrontInitBefore($observer)
    {
        Mage::getModel('geo/country');
    }
}