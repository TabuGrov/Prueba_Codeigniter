<?php 

class persona_pais extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Per_pai_model','pepa');
    }
    public function index()
    {
        $data= array('datos'=> $this->pepa->getAll(),
                     'datos1'=> $this->pepa->getPersona(),
                     'datos2'=> $this->pepa->getPais());
        $this->load->view('v_pers_pais',$data);
    }
    public function guardar()
    {
        $id_persona=$_POST['id_persona'];
        $id_pais=$_POST['id_pais'];
        $fecha_registro=$_POST['fecha_registro'];
        $estado=$_POST['estado'];
        $this->pepa->setPersonaPaises($_POST);
        header("Location:".base_url()."index.php/persona_pais");
    }
    public function modificar($id)
    {
        $data= array('datos'=>$this->pepa->mostrarPersonaPais($id),
                     'datos1'=> $this->pepa->getPersona(),
                     'datos2'=> $this->pepa->getPais());
        $this->load->view('v_modifPerPai',$data);
    }
    public function actualizar()
    {
        $this->pepa->updatePersonaPais($_POST['id'], $_POST);
        header("Location:".base_url()."index.php/persona_pais");      
    }
    public function eliminar($id)
    {   
        $this->pepa->deletePersonaPais($id);
        header("Location:".base_url()."index.php/persona_pais");
    }
}
 ?>