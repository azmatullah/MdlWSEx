<?php

$enrolment = new stdClass();

$enrolment->roleid = 5; //TODO - Provide the role id - 5 - student

$enrolment->courseid = 5; //the course id

$enrolment->userid = 10; //TODO - provide user id


//executing...
$params = array('enrolments' => array($enrolment));
include('_run.php');