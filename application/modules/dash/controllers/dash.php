<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mdl_dash');
		$this->load->module('common');
	}

	
	function home(){
		$css_array = array();
		$js_array = array();
		$this->common->header($css_array,$js_array,null,null,'SMS Engine');
		$this->common->nav();
		$this->load->view('home');
		$this->common->footer();
	}	

	function comingsoon(){
		$css_array = array();
		$js_array = array();
		$this->common->header($css_array,$js_array,null,null,'SMS Engine');
		$this->load->view('comingsoon');
		$this->common->footer();
	}	

	
}
