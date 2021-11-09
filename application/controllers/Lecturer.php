<?php 
class Lecturer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$this->load->model('M_lecturer');
		$data['tbl_lecturer'] = $this->M_lecturer->getAllLecturer();
		$this->load->view('v_lecturer', $data);
	}
}