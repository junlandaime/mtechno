<?php
class Roadmap extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_roadmap');
	}
	function index(){
		$jum=$this->m_roadmap->get_roadmap();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=6;
        $config['base_url'] = base_url() . 'roadmap/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_roadmap->get_roadmap_per_page($offset,$limit);
		$this->load->view('v_roadmap',$x);
	}

}