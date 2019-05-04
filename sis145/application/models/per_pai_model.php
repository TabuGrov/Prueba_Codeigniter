<?php 
class per_pai_model extends CI_Model
{
    public function __construct(){
        parent:: __construct();
    }
    public function getAll()
    {
        $this->db->select('pe.nombre,
        				   pa.nombre_pais,
                           pp.id,
        				   pp.fecha_registro');
        $this->db->from('personas as pe');
        $this->db->join('personas_paises as pp','pe.id = pp.id_persona');
        $this->db->join('paises pa','pa.id=pp.id_pais'); 
        $query=$this->db->get();
        return $query->result();
    }
    public function getPersona()
        {
            $query=$this->db->get('personas');
            return $query->result();
        }
    public function getPais()
        {
            $query=$this->db->get('paises');
            return $query->result();
        }
    public function setPersonaPaises($datos)
        {
            return $this->db->insert('personas_paises',$datos);
        }
        public function mostrarPersonaPais($id)
        {
            $consulta=$this->db->where('id',$id)->get('personas_paises');
            return $consulta->result();
        }
        public function updatePersonaPais($id,$datos)
        {
            return $this->db->where('id',$id)->update('personas_paises', $datos);
        }
        public function deletePersonaPais($id)
        {
            return $this->db->where('id',$id)->delete('personas_paises');
        }    
}

 ?>