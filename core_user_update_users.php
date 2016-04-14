<?php

$user = new stdClass();

$user->id = 10; //TODO - Provide the existing user ID

$user->firstname   = 'Updated FirstName Test';
$user->idnumber    = 'testid01'; //unique reference number

//executing...
$params = array('users' => array($user));
include('_run.php');