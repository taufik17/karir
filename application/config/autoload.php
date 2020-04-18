<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('session','database', 'email','form_validation', 'upload','encryption', 'pagination');
$autoload['drivers'] = array();
$autoload['helper'] = array('url','form','email','captcha');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('model_daftar','model_userlogin','model_keamanan','model_data', 'model_news', 'globalmodel');
