<?php

class Welcome extends CI_Controller {
	function __construct(){
                parent::__construct();
                $this->load->model(array('model_student'));
        }

	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function program()
	{
		$this->load->view('program');
	}

	public function program2()
	{
		$this->load->view('program-2');
	}

	public function program3()
	{
		$this->load->view('program-3');
	}

	public function program4()
	{
		$this->load->view('program-4');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function data()
	{		
		$siswa =  $this->model_student->getStudents();
		$data = array(	
			'siswa' =>$siswa
		);
		$this->load->view('datasiswa',$data);
	}

	public function registration()
	{
		$this->load->view('registration');
	}

	public function registration_form()
	{
		$this->load->view('registration-form');
	}

	public function register(){
                $data = array(
                                'nama' => $this->input->post('nama'),
                                'ttl' => $this->input->post('ttl'),
                                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                'agama' => $this->input->post('agama'),
                                'alamat' => $this->input->post('alamat'),
                                'no_tlp' => $this->input->post('no_tlp'),
                                'email' => $this->input->post('email'),
                                'asal_sekolah' => $this->input->post('asal_sekolah'),
                                'kelas' => $this->input->post('kelas'),
                                'jadwal_les' => $this->input->post('jadwal_les')
                                );
                $this->model_student->addStudent('t_registration',$data); //passing variable $data ke products_model
                echo "<script>window.alert('Registrasi berhasil, anda akan dihubungi oleh admin ESC.')
           window.location.href='index/';</script>";//redirect page ke halaman utama controller products  
        }
}
