<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
{
  protected $data = array();
	 protected function render($the_view = NULL)
	{
	$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
	$this->load->view('templates/master_view', $this->data); }
  function __construct()
  {
    parent::__construct();
	 $this->load->library('ion_auth');
    $this->data['pagetitle'] = 'Booking System';
  }
}