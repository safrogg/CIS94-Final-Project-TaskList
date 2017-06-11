<?php
//This is the file where the tasks will be saved
$FILENAME = "taskfile.csv";

//This opens up the file for access and sets up the header
/*
$taskfile = fopen($FILENAME, "w") or die("Unable to open file!");
$txt = "Task, Task_Note, Completed, Date_Comopleted"."\n"; 
fwrite($taskfile, $txt);
fclose($taskfile); 
*/

//Deffine the Task class
class Task {
  private $description;
  private $note;
  private $completed;
  private $date_completed;
        
  public function getDescription() {
     return $this->description;
  }
  
  public function setDescription($name) {
     $this->description = $name;
  }
  
  public function getNote() {
     return $this->note;
  }
  
  public function setNote($note) {
     $this->note = $note;
  }
  
  public function getCompleted() {
     return $this->get_completed;
  }
  
  public function setCompleted($done) {
     $this->completed = $done;
  }
  
  public function getDateCompleted() {
     return $this->date_completed;
  }
  
  public function setDateCompleted($date) {
     $this->date_completed = $date;
  }
  
  
 //Task Constructor
 function __construct($description = NULL, $note = NULL, $completed = NULL, $dateCompleted = NULL)   {  
     $this->setDescription($description);  
     $this->setNote($note); 
     $this->setCompleted($completed);
     $this->setDateCompleted($dateCompleted); 
     } 
     
  public function printTask() {
	//*note this creates a net table every time a new task is printed
	
	//echo '<table style="width:100%">';
	echo '<table class="table">';
	echo '    <tbody>';
	echo '		<tr>';
	echo '			<td>'.$this->description.'</td>';
	echo '			<td>'.$this->note.'</td>';
	echo '			<td>'.$this->completed.'</td>';
	echo '			<td>'.$this->date_completed.'</td>';
	echo '		</tr>';
	echo '    </tbody>';
	echo '</table>';
    }
	
  public function saveTask() {
  	global $FILENAME;
 	$taskfile = fopen($FILENAME, "a") or die("Unable to open file!");
 	$desc = $this->description;
 	$note = $this->note;
 	$done = $this->completed;
 	$doneDate = $this->date_completed;
 
 	$txt = $desc.",".$note.",".$done.",".$doneDate."\n"; 
 	
 	fwrite($taskfile, $txt);
 	fclose($taskfile);
 	
  }
}

?>