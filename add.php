<?php

include 'Page.php';
$page = new Page();
$page->title = 'Add Task';


include 'header.php';
include 'form_tpl.php';
include 'footer.php';

// 1.
// Put the Task class in a file called Task.php
// Then include it here as is done for the header.php and form_tpl.php and footer.php 
// files above
include 'Task.php';		//includes the definition for the Task class
include 'Tasklist.php';	//includes the definition for the Tasklist class


function addTask($input) {
    // 2.
    // Put code here to add the task to the CSV file
    // you should use the Task class that you developed earlier here
	//echo "testing ";	  
    //var_dump($input);		//debug
	
	//creating new task using $input parameters
	$task = new Task($input["task"], $input["note"]," ", $input["datecompleted"]);
	if ($task->getDateCompleted()!= NULL){
		$task->setCompleted("YES");
		}
	else {
		$task->setCompleted("NO");
		};
	//saving the created task to file
	$task->saveTask();
	//$task->printTask();	
}

// 3. 
// this check is what will start the process to add the task , it assures
// the process of not printing anything other than the form and a success message
// when the task is successfully added.
if(isset($_POST['submittask'])) {
   addTask($_POST); 
}
