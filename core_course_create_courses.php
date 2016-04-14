<?php

//executing...
$course = new stdClass;
$course->fullname    = 'Test course from webservice';
$course->shortname   = 'Test course WS';
$course->categoryid  = 1;
$course->idnumber    = 'test-0001';
$course->summary     = "Some text for summary.";
$course->lang        = 'lv';

$params = array('courses' => array($course));
include('_run.php');