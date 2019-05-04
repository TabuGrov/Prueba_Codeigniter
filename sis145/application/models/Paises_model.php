<?php
class Paises_model extends CI_Model
{
    public function __construct(){
        parent:: __construct();
    }
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('paises'); 
        $query=$this->db->get();
        return $query->result();
    }
    public function setPaises($datos)
    {
        return $this->db->insert('paises',$datos);
    }
    public function getPais($id)
    {
        $consulta=$this->db->where('id',$id)->get('paises');
        return $consulta->result();
    }
    public function updatePais($id,$datos)
		{
			return $this->db->where('id',$id)->update('paises', $datos);
		}
		public function deletePais($id)
		{
			return $this->db->where('id',$id)->delete('paises');
		}
}
?>