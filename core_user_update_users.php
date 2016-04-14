<?php

$user1 = new stdClass();

$user1->id = 8; //TODO - Provide the existing user ID

$user1->firstname   = 'Updated FirstName';
$user1->idnumber    = 'testid-01'; //unique reference number

$user2 = $user1;
$user2->id = 9; //TODO -update second user if necessary...

//executing...
$params = array('users' => array($user1, $user2));
include('_run.php');