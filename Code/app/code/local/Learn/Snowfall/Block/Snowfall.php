<?php
/**
 * Integrate Snowfall
 *
 * @category   Snowfall
 * @package    Learn_Snowfall
 * @author     Vijayakumar
 *
 */
 
class Learn_Snowfall_Block_Snowfall extends Mage_Core_Block_Template
{
	public function getSnowfallFont() {
		$snow_helper = Mage::helper('snowfall');
		return $snow_helper->snowfall_font();
	}
	public function getSnowfallJsonOptions() {
		$snow_helper = Mage::helper('snowfall');
		$options = new stdClass();
		$options->flakes 	= $snow_helper->snowfall_count();
		$options->color 	= array(
			"#".$snow_helper->snowfall_color_1(),
			"#".$snow_helper->snowfall_color_2(),
			"#".$snow_helper->snowfall_color_3(),
			"#".$snow_helper->snowfall_color_4(),
			"#".$snow_helper->snowfall_color_5()
		);
		$options->text 		= $snow_helper->snowfall_text();
		$options->speed 	= $snow_helper->snowfall_speed();
		$options->size 		= (object) array(
			'min' =>  $snow_helper->snowfall_minsize(),
			'max' =>  $snow_helper->snowfall_maxsize()
		);
		return json_encode($options);
	}
}