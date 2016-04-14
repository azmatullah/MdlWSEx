<?php

/// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION
$user1 = new stdClass();
$user1->username    = 'testusername1';
$user1->password    = 'testpassword1';
$user1->firstname   = 'testfirstname1';
$user1->lastname    = 'testlastname1';
$user1->email       = 'testemail1@moodle.com';
$user1->auth        = 'manual';
$user1->idnumber    = 'testidnumber1'; //unique reference number
$user1->lang        = 'lv';
$user1->theme       = 'standard';
$user1->timezone    = '-12.5';
$user1->mailformat  = 0;
$user1->description = 'Test import';
$user1->city        = 'Riga';
$user1->country     = 'au';
$user1->preferences = array(
    array('type' => 'preference1', 'value' => 'preferencevalue1'),
    array('type' => 'preference2', 'value' => 'preferencevalue2'));

$user2 = new stdClass();
$user2->username  = 'testusername2';
$user2->password  = 'testpassword2';
$user2->firstname = 'testfirstname2';
$user2->lastname  = 'testlastname2';
$user2->email     = 'testemail1@moodle.com';
$user2->timezone  = 'Europe/Riga';


//executing...
$functionname = 'core_user_create_users';
$params = array($user1, $user2);
include('_run.php');