<?php

include 'Page.php';
$page = new Page();
$page->title = 'Index';
include 'header.php';
include 'footer.php';

echo '<h1>CIS94 - Final project</h1>';
echo '<h2>Task list manager</h2>';

//echo '<p>This is a paragraph.</p>';

echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th></th>';

echo '      </tr>';
echo '    </thead>';

echo '    <tbody>';
echo '      <tr>';
echo '        <td>Created by:</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>Jesus Hernandez</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>Notes:</td>';
echo '      </tr>';
echo '      <tr>';
echo '        <td>All files are located under /Applications/XAMPP/xamppfiles/htdocs/tasklist</td>';
echo '      </tr>';
echo '    </tbody>';
echo '</table>';
