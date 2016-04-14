<?php

$member = new stdClass();

$member->groupid = 2; //TODO - Provide the existing user ID

$member->userid = 10; //TODO - provide user id


//executing...
$params = array('members' => array($member));
include('_run.php');