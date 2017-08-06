<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_student extends CI_model{
    
	public function __construct()
    {
        parent::__construct();
		$this->load->database();

    }
    
    function addStudent($daba,$data)
	{
		//untuk insert data ke database
		if(isset($_POST['simpan'])) {
			$this->db->insert($daba, $data);
			$notif['info'] = 'Berhasil Menyimpan';
			
		}
		$notif['info'] = 'Gagal menyimpan';
	}

	    function getStudents()
		{
			$this->db->from('t_registration');
			return $this->db->get()->result();	
		}

}



