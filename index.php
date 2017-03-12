<?php
 $page['name'] = !empty($_GET['page']) ? $_GET['page'] : '';

 switch ($page['name']) {
 	case 'home':
 	require 'home.php';
 	break;

 	case 'about':
 	require 'about.php';
 	break;

 	case 'contact':
 	require 'contact.php';
 	break;

 	default:
 	require 'home.php';
 }