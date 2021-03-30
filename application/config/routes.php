<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'mailboxes/index';
$route['tutorial'] = 'pages/tutorial';
$route['about'] = 'pages/about';
$route['inbox'] = 'mailboxes/inbox';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
