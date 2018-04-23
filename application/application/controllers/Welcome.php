<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'core/Admin_Controller.php');

 
class Welcome extends MY_Controller {
 
  function __construct()
  {
    parent::__construct();
  }
 
  public function index()
  {
    //$this->data['pagetitle'] = 'test'; ...you can at any time change the variables declared in the MY_Controller...
    $this->render('login_view');
   
  }
 
}
