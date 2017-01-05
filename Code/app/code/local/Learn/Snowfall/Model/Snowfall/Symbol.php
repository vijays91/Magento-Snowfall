<?php
/**
 * Integrate Snowfall
 *
 * @category   Snowfall
 * @package    Learn_Snowfall
 * @author     Vijayakumar
 *
 */
 
class Learn_Snowfall_Model_Snowfall_Symbol
{

	public function toOptionArray() {
			$row = 1;
			foreach (range('A', 'Z') as $char) {
				$br_tag = ($row % 10 == 0) ? "<br />" : " ";
				$data[]	= array(
					'value' => "1*".$char,
					'label' => "<label class='snowfall'>".$char."</label>". $br_tag,
				);
				$row++;
			}
			foreach (range('a', 'z') as $char) {
				$br_tag = ($row % 10 == 0) ? "<br />" : " ";
				$data[]	= array(
					'value' => "1*".$char,
					'label' => "<label class='snowfall'>".$char."</label>". $br_tag,
				);
				$row++;
			}
			foreach (range('0', '9') as $char) {
				$br_tag = ($row % 10 == 0) ? "<br />" : " ";
				$data[]	= array(
					'value' => "1*".$char,
					'label' => "<label class='snowfall'>".$char."</label>". $br_tag,
				);
				$row++;
			}
			foreach (range('A', 'Z') as $char) {
				$br_tag = ($row % 10 == 0) ? "<br />" : " ";
				$data[] = array(
					'value' => "2*".$char,
					'label' => "<label class='heartsfall'>".$char."</label>". $br_tag,
				);
				$row++;
			}
			foreach (range('a', 'z') as $char) {
				$br_tag = ($row % 10 == 0) ? "<br />" : " ";
				$data[] = array(
					'value' => "2*".$char,
					'label' => "<label class='heartsfall'>".$char."</label>". $br_tag,
				);
				$row++;
			}
			/*
			foreach (range('0', '9') as $char) {
				$br_tag = ($row % 10 == 0) ? "<br />" : " ";
				$data[] = array(
					'value' => "2*".$char,
					'label' => "<label class='heartsfall'>".$char."</label>". $br_tag,
				);
				$row++;
			}
			*/
		return $data;
	}
}