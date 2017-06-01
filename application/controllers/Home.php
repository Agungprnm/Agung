<?php 
/**
* 
*/
class Home extends CI_Controller
{
	
	function index(){
		$read=$this->Mymodel->Getfoto('galeri');
		$data['read']=$read;
		$this->load->view('home',$data);
	
	}
}

 ?>