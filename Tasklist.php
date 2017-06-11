<?php

//Define the Tasklist Class
class Tasklist {
    private $task;
    
    public function __construct() {
         $this->task = []; 
    }

    public function addTask($description=NULL, $note=NULL, $completed=NULL, $dateCompleted=NULL) {
       $this->task[] = new Task($description, $note, $completed, $dateCompleted);
    } 
    
    public function printTaskList() {
        foreach ($this->task as $data) {
            $data->printTask();
            //echo "\n";
        }
    }
    
    public function saveTaskList($taskfile) {
        foreach ($this->task as $data) {
            $data->saveTask($taskfile);
        }
    }
}
/*
//Testing the Task Class
//This part works
$task = new Task();
$task->setDescription("Finish this program");
$task->setNote("the task note");
$task->setCompleted('Y');
$task->setDateCompleted(date("m.d.y"));
$task->printTask();
*/


//Testing the Tasklist Class
//this pasrt works as well
/*$mylist = new Tasklist;
$mylist->addTask("do task 1","task 1 Note", "Y", "2/3/2017");
$mylist->addTask("do task 2","another task note", "N");
$mylist->addTask("do task 3","task3 note", "Y","3/8/2013");
$mylist->addTask("do task 4","task4 note", "Y","3/9/2013");
*/ 

//$mylist->printTaskList();

//Testing saving to a file
//this works as well
//$mylist->saveTaskList($taskfile);


?>