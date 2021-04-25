<?php
	class Calendar_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_travels($id = false){
			if ($id === false){
//				$this->db->select('guides. ,travels.id, travels.name, travels.body ,travels.date, travels.guide_id');
//				$this->db->from('guides.id = travels.guide_id');
//				$this->db->where('guides.id = travels.guide_id');

				$this->db->select("travels.id, travels.heading, travels.body, travels.date, travels.guide_id, guides.id, guides.name");
				$this->db->from("travels, guides");
				$this->db->where("travels.guide_id=guides.id");
				$this->db->order_by('date', 'ASC');
				$query = $this->db->get();

//				$query = $this->db->get('travels');
				return $query->result_array();
			}
			$query = $this->db->get_where('travels', array('id' => $id));
			return $query->row_array();
		}
	}
