<?php
/**
 * Integrate Snowfall
 *
 * @category   Snowfall
 * @package    Learn_Snowfall
 * @author     Vijayakumar
 *
 */
 
class Learn_Snowfall_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_SNOWFALL_ACTIVE					= 'snowfall/settings/snowfall_active';
	const XML_PATH_SNOWFALL_TEXT					= 'snowfall/settings/snowfall_text';
	const XML_PATH_SNOWFALL_COLOR_1				 	= 'snowfall/settings/snowfall_color_1';
	const XML_PATH_SNOWFALL_COLOR_2	 				= 'snowfall/settings/snowfall_color_2';
	const XML_PATH_SNOWFALL_COLOR_3	 				= 'snowfall/settings/snowfall_color_3';
	const XML_PATH_SNOWFALL_COLOR_4	 				= 'snowfall/settings/snowfall_color_4';
	const XML_PATH_SNOWFALL_COLOR_5	 				= 'snowfall/settings/snowfall_color_5';
	const XML_PATH_SNOWFALL_COUNT 					= 'snowfall/settings/snowfall_count';
	const XML_PATH_SNOWFALL_SPEED	 				= 'snowfall/settings/snowfall_speed';
	const XML_PATH_SNOWFALL_MINSIZE	 				= 'snowfall/settings/snowfall_minsize';
	const XML_PATH_SNOWFALL_MAXSIZE	 				= 'snowfall/settings/snowfall_maxsize';

	private function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	public function snowfall_enable($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_ACTIVE, $store);
	}
	public function snowfall_text_with_font($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_TEXT, $store);
	}
	public function snowfall_color_1($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_COLOR_1, $store);
	}
	public function snowfall_color_2($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_COLOR_2, $store);
	}
	public function snowfall_color_3($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_COLOR_3, $store);
	}
	public function snowfall_color_4($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_COLOR_4, $store);
	}
	public function snowfall_color_5($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_COLOR_5, $store);
	}
	public function snowfall_count($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_COUNT, $store);
	}
	public function snowfall_speed($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_SPEED, $store);
	}
	public function snowfall_minsize($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_MINSIZE, $store);
	}
	public function snowfall_maxsize($store = null) {
		return $this->conf(self::XML_PATH_SNOWFALL_MAXSIZE, $store);
	}
	public function snowfall_text($store = null) {
		$snow_text_with_font = self::snowfall_text_with_font();
		$snow_text = explode('*', $snow_text_with_font);
		return $snow_text[1];
	}
	public function snowfall_font($store = null) {
		$snow_text_with_font = self::snowfall_text_with_font();
		$snow_text = explode('*', $snow_text_with_font);
		return $snow_text[0];
	}
}