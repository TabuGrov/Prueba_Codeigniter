<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function primera()
	{
		$this->load->view('v_primera');
	}
	public function segunda($nombre,$apellido)
	{
		//echo $nombre." ".$apellido;
		$datos = array('nombre'=> $nombre,
						'apellido'=>$apellido);
		$this->load->view("v_segunda",$datos);
	}
	public function factorial($n)
	{
		$fact=1;

  		for($i=2;$i<=$n;$i++)
 		{
	  		$fact*=$i;
	  	}
	  	echo $fact;
	}
}