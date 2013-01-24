<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH.'/libraries/REST_Controller.php';

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        //$this -> response($this->get('nome'), 200);
	}

	function teste($id)
	{
       //$this -> response(array('id'=>$id) , 200);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */