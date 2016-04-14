<?php

/// PARAMETERS - NEED TO BE CHANGED IF YOU CALL A DIFFERENT FUNCTION
$group= new stdClass();

$group->courseid          = 5;//TODO - set the course id

$group->name              = 'Test group';
$group->description       = 'Test group description';
$group->idnumber          = 'testgroup-01';

//executing...
$params = array('groups' => array($group));
include('_run.php');