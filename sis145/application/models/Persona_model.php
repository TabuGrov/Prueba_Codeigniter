<?php
	class Persona_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function getAll()
		{
			/*$this->db->select('*');
			$this->db->from('personas');*/
			$query=$this->db->get('personas');
			return $query->result();
		}
		public function setPersona($datos)
		{
			return $this->db->insert('personas',$datos);
		}
		public function getPersona($id)
		{
			$query = $this->db->where('id',$id)->get('personas');
			return $query->result();
		}
		public function updatePersona($id,$datos)
		{
			return $this->db->where('id',$id)->update('personas', $datos);
		}
		public function deletePersona($id)
		{
			return $this->db->where('id',$id)->delete('personas');
		}
		

	}
?>