<?php

//executing...
$course = new stdClass;

$course->id = 4; //TODO - provide id!

$course->fullname    = 'Test course from webservice Updated title';
$course->summary     = "Some text for summary. Added additional description";

$params = array('courses' => array($course));
include('_run.php');