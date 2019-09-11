<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encription extends CI_Controller {
	public function index()
	{
		$a='sunarno';
		echo hash('sha512',$a . config_item('encryption_key'));
	}
}
