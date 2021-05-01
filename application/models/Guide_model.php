<?php
	class Guide_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_guides($slug = false){
			if ($slug === false){
				$query = $this->db->get('guides');
				return $query->result_array();
			}
			$query = $this->db->get_where('guides', array('slug' => $slug));
			return $query->row_array();
		}

		public function get_guide_from_travel($id){
			$query = $this->db->get_where('travels', array('id' => $id));
			$result = $query->row_array();
			$query = $this->db->get_where('guides', array('id' => $result['guide_id']));
			return $query->row_array();
		}

	}


?>
