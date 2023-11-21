<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
	public function get(){
		return json_encode($this->db->get('ecm_market_categories')->result_array());
	}
}
