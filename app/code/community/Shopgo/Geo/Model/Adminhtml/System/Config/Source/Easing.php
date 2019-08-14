<?php

class Shopgo_Geo_Model_Adminhtml_System_Config_Source_Easing
{
   public function toOptionArray()
   {
       $themes = array(
           array('value' => 'linear', 'label' => 'Linear'),
           array('value' => 'swing', 'label' => 'Swing'),
           array('value' => 'easeInQuad', 'label' => 'EaseInQuad'),
           array('value' => 'easeOutQuad', 'label' => 'EaseOutQuad'),
           array('value' => 'easeInOutQuad', 'label' => 'EaseInOutQuad'),
           array('value' => 'easeInCubic', 'label' => 'EaseInCubic'),
           array('value' => 'easeOutCubic', 'label' => 'EaseOutCubic'),
           array('value' => 'easeInOutCubic', 'label' => 'EaseInOutCubic'),
           array('value' => 'easeInQuart', 'label' => 'EaseInQuart'),
           array('value' => 'easeOutQuart', 'label' => 'EaseOutQuart'),
           array('value' => 'easeInOutQuart', 'label' => 'EaseInOutQuart'),
           array('value' => 'easeInQuint', 'label' => 'EaseInQuint'),
           array('value' => 'easeOutQuint', 'label' => 'EaseOutQuint'),
           array('value' => 'easeInOutQuint', 'label' => 'EaseInOutQuint'),
           array('value' => 'easeInExpo', 'label' => 'EaseInExpo'),
           array('value' => 'easeOutExpo', 'label' => 'EaseOutExpo'),
           array('value' => 'easeInOutExpo', 'label' => 'EaseInOutExpo'),
           array('value' => 'easeInSine', 'label' => 'EaseInSine'),
           array('value' => 'easeOutSine', 'label' => 'EaseOutSine'),
           array('value' => 'easeInOutSine', 'label' => 'EaseInOutSine'),
           array('value' => 'easeInCirc', 'label' => 'EaseInCirc'),
           array('value' => 'easeOutCirc', 'label' => 'EaseOutCirc'),
           array('value' => 'easeInOutCirc', 'label' => 'EaseInOutCirc'),
           array('value' => 'easeInElastic', 'label' => 'EaseInElastic'),
           array('value' => 'easeOutElastic', 'label' => 'EaseOutElastic'),
           array('value' => 'easeInOutElastic', 'label' => 'EaseInOutElastic'),
           array('value' => 'easeInBack', 'label' => 'EaseInBack'),
           array('value' => 'easeOutBack', 'label' => 'EaseOutBack'),
           array('value' => 'easeInOutBack', 'label' => 'EaseInOutBack'),
           array('value' => 'easeInBounce', 'label' => 'EaseInBounce'),
           array('value' => 'easeOutBounce', 'label' => 'EaseOutBounce'),
           array('value' => 'easeInOutBounce', 'label' => 'EaseInOutBounce'),
       );
 
       return $themes;
   }
}