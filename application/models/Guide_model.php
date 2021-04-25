<?php
	class Guide_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_guides($id = false){
			if ($id === false){
				$query = $this->db->get('guides');
				return $query->result_array();
			}
			$query = $this->db->get_where('guides', array('id' => $id));
			return $query->row_array();
		}
	}


?>
