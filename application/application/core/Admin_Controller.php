<?php
class Admin_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
	
	 if (!$this->ion_auth->logged_in())
     {
      //redirect them to the login page if not logged in via Ion_auth
      redirect('admin/user/login', 'refresh');
     }
  }
}