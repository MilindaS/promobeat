<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_common');
	}

	public function header($css_array=null,$js_array=null,$meta_array=null,$meta_og_array=null,$site_title = null){
		$data['css_array'] = $css_array;
		$data['js_array'] = $js_array;
		$data['meta_array'] = $meta_array;
		$data['meta_og_array'] = $meta_og_array;
		$data['site_title'] = $site_title;
		$this->load->view('header',$data);
	}

	public function getDivisionById($id){
		return $this->mdl_common->getDivisionById($id);
	}

	public function nav(){
		$this->load->view('navMenu');
	}


	public function getDivisions(){
		return $this->mdl_common->getDivisions();
	}

	public function getDesignations(){
		return $this->mdl_common->getDesignations();
	}

	public function getDesignationById($id){
		return $this->mdl_common->getDesignationById($id);
	}
	

	public function footer(){
		$this->load->view('footer');
	}

	public function memFooter(){
		$this->load->view('memFooter');
	}

	public function imageUpload(){
		// log_message('error','hi');
		// echo 1;
		$this->load->view('imageUpload');
	}

	public function fileUpload(){
		$this->load->view('fileUpload');
	}

	public function imageUploadProfPic(){
		// log_message('error','hi');
		// echo 1;
		$this->load->view('imageUploadProfPic');
	}

}
