<?php

/// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION
$user1 = new stdClass();
$user1->username    = 'turibawstestuser';
$user1->password    = 'testp.Aassword1';
$user1->firstname   = 'testfirstname1';
$user1->lastname    = 'testlastname1';
$user1->email       = 'TuribaWSTestUser@moodle.com';
$user1->auth        = 'manual';
$user1->idnumber    = 'testid-01'; //unique reference number
$user1->lang        = 'lv';
$user1->timezone    = 'Europe/Riga';
$user1->description = 'Test import';
$user1->city        = 'Riga';
$user1->country     = 'lv';

//executing...
$params = array('users' => array($user1));
include('_run.php');