<?php
error_reporting(E_ALL); 
ini_set('display_errors', 0); 
function dbConnect($username, $password) {
	$dbConn = mysqli_connect("localhost", $username, $password,"fooddb") ;
	if (!$dbConn )
	{
		print "<p>Cannot connect to database - check username and password<br/>";
		print mysql_error()."</p>";
		print "</body>";
   	print "</html>";
		exit();
	}
	return $dbConn;
}
function dbSelect( $dbname) {
	$db = mysql_select_db($dbname);
	if (!$db)
	{
		print "<p>Cannot connect to database $dbname</br>";
		print mysql_error()."</p>";
		print "</body>";
   	print "</html>";
		exit("Bye");
	}
}

function insertRow($link,$query) {

	$insResult = mysqli_query($link,$query);
	if ($insResult)
   	print($query . " Record inserted<br/>");
	else
		print $query. " " . mysqli_error($link). "<br/>";   //vital to know why it failed
}

function runQuery($link,$query) {

	$result = mysqli_query($link,$query);
	if ($result) {
   	//print($query . "<br/>");
   	return $result;
   }
	else
	{
	//don't expect to come here unless program logic error
	//or some other problem with the database
		print $query. " " . mysqli_error($link). "<br/>";   //vital to know why it failed
		print "</body>";
   	print "</html>";
		exit("Bye");
	}		
}
function displayTable($result) {
	$numrows = mysqli_num_rows($result);
	if ($numrows == 0)
	{
	   print "<p>There was nothing in the table</p>";	
   	print "</body>";
      print "</html>";
   	exit();
   }
   //set up table
   print '<table border = "1">';
   
   //print headings
   $fieldCount = mysqli_num_fields($result);
   print "<tr>";
   
   for ($i=0; $i<$fieldCount; $i++) {              
       // Set some values
       $fieldName = mysqli_fetch_field_direct($result, $i);
       print "<th>".$fieldName->name."</th>";
   }
   print "</tr>";
   
   //output each line
   // the fetch function gets the next row from the resultset and puts it into $row
   while ($row = mysqli_fetch_row($result) )
   {
   	print ("<tr>");
      for ($i=0; $i<$fieldCount; $i++) 
   	{
   		print ("<td>". $row[$i] . "</td>") ;  
   	}
   	print ("</tr>");
   }
   print ("</table>");
}
function displayVertTable($result) {
   $numrows = mysqli_num_rows($result);
   if ($numrows == 0)
   {
   	print "<p>There was nothing in the table</p>";	
   	print "</body>";
      print "</html>";
   	exit();
   }
   //set up table
   print '<table border = "1">';
   $fieldCount = mysqli_num_fields($result);
   $row = mysqli_fetch_row($result);   
   for ($i=0; $i<$fieldCount; $i++) 
   {
   	 print ("<tr>");
     $fieldName = mysqli_fetch_field_direct($result, $i);
     print "<td><em>".$fieldName->name."</em></td>";
   	 print ("<td>". $row[$i] . "</td>") ; 
   	 print "</tr>";
   }
   print ("</table>");
}



?>