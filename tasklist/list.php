<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';
include 'Task.php';
include 'Tasklist.php';

$HEAD_ROW = 1;

// Add code here that will load the CSV file with the tasks in it
// and will print the tasks in a table
// The following is an example of how the table will be printed 
// between the header and the footer

//This is the header of the table
echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Description</th>';
echo '        <th>Completed(Y/N)</th>';
echo '        <th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
//Here goes the body of the table
echo '    <tbody>';
//echo '      <tr>';

//the following is a "Dummy" task
/*
echo '        <td>The Task</td>';
echo '        <td>The Task Description</td>';
echo '        <td>Y</td>';
echo '        <td>6/1/2018</td>';
echo '      </tr>';
echo '    </tbody>';
echo '</table>';
*/

//CSV file stuff here vvv
if (($handle = fopen($FILENAME, "r")) !== FALSE) {
    echo '      <tr>';
    while (($data = fgetcsv($handle, 100, ",")) !== FALSE) {
        $num = count($data);
        	for ($c=0; $c < $num; $c++) {
        	//this line not needed since we are using a header for the table.
            //echo $header[$c].": ".$data[$c]."\t";
            echo ' <td>'.$data[$c].'</td>';
        	}
      echo ' 	</tr>';  
    }
    	
    fclose($handle);
}

echo '  </tbody>';
echo '</table>';
echo "\n";


include 'footer.php';

