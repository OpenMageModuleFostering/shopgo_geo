<?php

class Shopgo_Geo_Model_Adminhtml_System_Config_Source_Lifetime
{
   public function toOptionArray()
   {
       $themes = array(
           array('value' => '1', 'label' => '1'),
           array('value' => '2', 'label' => '2'),
           array('value' => '3', 'label' => '3'),
           array('value' => '4', 'label' => '4'),
           array('value' => '5', 'label' => '5'),
           array('value' => '6', 'label' => '6'),
           array('value' => '7', 'label' => '7'),
           array('value' => '8', 'label' => '8'),
           array('value' => '9', 'label' => '9'),
           array('value' => '10', 'label' => '10')
       );
 
       return $themes;
   }
}