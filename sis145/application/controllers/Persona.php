<?php 
	class Persona extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->Model('Persona_model','per');
		}
		public function index()
		{
			$data= array('datos'=>$this->per->getAll());
			$this->load->view('v_persona',$data);
		}
		public function guardar()
		{
			if($this->input->post())
			{
				$nro_dip=$_POST['nro_dip'];
				$nombre=$_POST['nombre'];
				$paterno=$_POST['paterno'];
				$materno=$_POST['materno'];
				$this->per->setPersona($_POST);
				header("Location:".base_url()."index.php/Persona");	
			}
		}
		public function modificar($id)
		{
			$data= array('datos'=>$this->per->getPersona($id));
			$this->load->view('v_modifP',$data);
		}
		public function actualizar()
		{
			$nro_dip=$_POST['nro_dip'];
			$nombre=$_POST['nombre'];
			$paterno=$_POST['paterno'];
			$materno=$_POST['materno'];
			$this->per->updatePersona($_POST['id'], $_POST);
			header("Location:".base_url()."index.php/Persona");		
		}
		public function eliminar($id)
		{	
			$this->per->deletePersona($id);
			header("Location:".base_url()."index.php/Persona");
	}
	}
?>