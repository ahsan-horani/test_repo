<?php 
	
if(!isset($_COOKIE['channel']))
{
	$cookie_name = "channel";
	$cookie_value = "sindh";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
}
?>
<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */

// List containing the registered chat users:
$users = array();

// Default guest user (don't delete this one):
$users[0] = array();
$users[0]['userRole'] = AJAX_CHAT_GUEST;
$users[0]['userName'] = null;
$users[0]['password'] = null;
$users[0]['channels'] = array(6);

// Sample admin user:
$users[1] = array();
$users[1]['userRole'] = AJAX_CHAT_ADMIN;
$users[1]['userName'] = 'admin';
$users[1]['password'] = 'admin';
$users[1]['channels'] = array(0,1);

// Sample moderator user:
$users[2] = array();
$users[2]['userRole'] = AJAX_CHAT_MODERATOR;
$users[2]['userName'] = 'moderator';
$users[2]['password'] = 'moderator';
$users[2]['channels'] = array(0,1);

// Sample registered user:
$users[3] = array();
$users[3]['userRole'] = AJAX_CHAT_USER;
$users[3]['userName'] = 'user';
$users[3]['password'] = 'user';
$users[3]['channels'] = array(0,1);


//Check admin's current selected channel [sindh,kpk,rwp,punjab]
if(isset($_COOKIE['channel']))
{
	if(strtolower($_COOKIE['channel']) == 'sindh')
	{	// Sample admin user:
		$users[4] = array();
		$users[4]['userRole'] = AJAX_CHAT_ADMIN;
		$users[4]['userName'] = 'rjsindh';
		$users[4]['password'] = 'sindh';
		$users[4]['channels'] = array(0,1);
	}
}

//Check admin's current selected channel [sindh,kpk,rwp,punjab]
if(isset($_COOKIE['channel']))
{
	if(strtolower($_COOKIE['channel']) == 'punjab')
	{	
		$users[5] = array();
		$users[5]['userRole'] = AJAX_CHAT_ADMIN;
		$users[5]['userName'] = 'rjpunjab';
		$users[5]['password'] = 'punjab';
		$users[5]['channels'] = array(0,1);
	}
}

//Check admin's current selected channel [sindh,kpk,rwp,punjab]
if(isset($_COOKIE['channel']))
{
	if(strtolower($_COOKIE['channel']) == 'rwp')
	{
		$users[6] = array();
		$users[6]['userRole'] = AJAX_CHAT_ADMIN;
		$users[6]['userName'] = 'rjrwp';
		$users[6]['password'] = 'rwp';
		$users[6]['channels'] = array(0,1);
	}
}

//Check admin's current selected channel [sindh,kpk,rwp,punjab]
if(isset($_COOKIE['channel']))
{
	if(strtolower($_COOKIE['channel']) == 'kpk')
	{
		$users[7] = array();
		$users[7]['userRole'] = AJAX_CHAT_ADMIN;
		$users[7]['userName'] = 'rjkpk';
		$users[7]['password'] = 'kpk';
		$users[7]['channels'] = array(0,1);
	}
}




?>