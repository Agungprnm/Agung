<?php 
/**
* 
*/
class admin extends CI_Controller
{
	
	function index(){
		
		if ($this->session->has_userdata('username')) {
				$this->load->view('admin');	
			}	
		else{
			redirect('admin/login');
		}

	}
	function login(){
		$this->load->view('login');
	}
	function checklogin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$data=$this->Mymodel->read('admin', 'username', $username)->result_array();
		foreach ($data as $d) {
			$user = $d['username'];
			$pass = $d['password'];
		}
		if ($username==$user&&$password==$pass) {
			$session = array('username' =>$username );
			$this->session->set_userdata($session);
			redirect('admin');
		}
		else{
			$this->session->set_flashdata('gagal','login gagal');

				redirect('admin/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	function update(){
			$id=$this->input->post('id');
			$judul=$this->input->post('judul');
			$deskripsi=$this->input->post('deskripsi');
			$data = array(
				'judul' =>$judul,
				'deskripsi' =>$deskripsi,
			 	);
			if ($this->Mymodel->UpdateData('galeri', $data, 'id', $id)) {
				$this->session->set_flashdata('sukses','update berhasil');

				redirect('admin');
			}
			else{
				$this->session->set_flashdata('sukses','update gaga;');

				redirect('admin');
			}
	}
	function delete(){
			$id=$this->input->post('id');
			
			if ($this->Mymodel->DeleteData('galeri', 'id', $id)) {
				$this->session->set_flashdata('sukses','delete berhasil');

				redirect('admin');
			}
			else{
				$this->session->set_flashdata('sukses','delete gagal');

				redirect('admin');
			}
	}
	function process(){
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;


        $this->load->library('upload', $config);
        if (! $this->upload->do_upload('foto')) {
        	echo print_r(array('error'=> $this->upload->display_errors()));
        }
        else{
        	$id=$this->input->post('id');
			$judul=$this->input->post('judul');
			$foto= $this->upload->data('file_name');
			$deskripsi=$this->input->post('deskripsi');
			$data = array(
				'id' => $id,
				'judul' => $judul,
				'foto' => $foto,
				'deskripsi' => $deskripsi, 
			);
			if($this->Mymodel->InsertData('galeri',$data)){
				$this->session->set_flashdata('sukses','upload berhasil');

				redirect('admin');
			}
			else{
				echo 'gagal';
			}

        }
		
	}
}

 ?>