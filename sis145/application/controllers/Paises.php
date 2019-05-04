<?php
class Paises extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Paises_model','pais');
    }
    public function index()
    {
        $data= array('datos'=> $this->pais->getAll());
       // print_r($data);
        $this->load->view('v_paises',$data);
    }
    //recibe toddos los post
    public function guardar()
    {
        $nombre_pais=$_POST['nombre_pais'];
        $moneda=$_POST['moneda'];
        $idioma=$_POST['idioma'];
        $estado=$_POST['estado'];
        $this->pais->setPaises($_POST);
        header("Location:".base_url()."index.php/Paises");
    }
    public function modificar($id)
		{
			$data= array('datos'=>$this->pais->getPais($id));
			$this->load->view('v_modifPais',$data);
		}
		public function actualizar()
		{
			$nombre_pais=$_POST['nombre_pais'];
			$moneda=$_POST['moneda'];
			$idioma=$_POST['idioma'];
			$estado=$_POST['estado'];
			$this->pais->updatePais($_POST['id'], $_POST);
			header("Location:".base_url()."index.php/Paises");		
		}
		public function eliminar($id)
		{	
			$this->pais->deletePais($id);
			header("Location:".base_url()."index.php/Paises");
	}
	

}
?>