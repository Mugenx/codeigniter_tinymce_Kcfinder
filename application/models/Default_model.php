<?php
class Default_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		return $this;
	}

	public function get_display(){

		$this->db->select('content');
		$this->db->where('id', 1);
		$query = $this->db->get('display');
		$ret = $query->row();
		return $ret->content;
	}

	public function update($content){
		$fields = array(
			'id' => 1,
			'content' => $content
			);
		$this->db->update('display', $fields);
		
	}

	

}
