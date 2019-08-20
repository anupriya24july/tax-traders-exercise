<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		//Validation rule for number field
		$this->form_validation->set_rules('number', 'Number', 'trim|required|greater_than[0]');

		$sum = 0;
		$number = 0;
		if (!$this->form_validation->run() == FALSE) {
			if ($this->input->post()) {
				$number = $this->input->post("number");
				if ($this->input->post("odd-sum")) {
					$sum = $this->getIndexSum($number, "ODD");
				} else if ($this->input->post("even-sum")) {
					$sum = $this->getIndexSum($number, "EVEN");
				} else {
					for ($i = 0; $i <= $number; $i++) {
						$sum = $sum + $i;
					}
				}

			}
		}
		$data = array(
			'number' => $number,
			'sum' => $sum
		);
		$this->load->view('home', $data);
	}

	public function getIndexSum($number, $type)
	{
		$array = str_split($number);
		$length = sizeof($array);
		$sum = 0;
		for ($i = 0; $i < $length; $i++) {
			switch ($type) {
				case "ODD":
					if ($i % 2 == 0)
						$sum += $array[$i];
					break;
				case "EVEN":
					if ($i % 2 != 0)
						$sum += $array[$i];
					break;
				default:
					break;
			}
		}
		return $sum;
	}
}
