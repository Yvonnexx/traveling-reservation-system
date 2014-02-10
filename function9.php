<?php

include('connectionData.php');

$conn = mysqli_connect($server, $user, $pass, $dbname, $port)
or die('Error connecting to MySQL server.');

?>

<html>
<head>
  <title>Function 9</title>
  </head>
  
  <body>
  <p>
  <b>Select the airport you wants to depart</b><br>
  </p>
  
  <hr>
  
  
<?php
  
$Origion = $_POST['Origion'];
$query ="SELECT * from FLIGHTS
WHERE Origion = '".$Origion."'  ";



?>

<p>
The query:
<p>
<?php
print $query;
?>

<hr>
<p>
Result of query:
<p>

<?php
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));

print "<pre>";
while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
  {
    print "\n";
     print "$row[Origion] $row[Destination] $row[FLight_number]";  }
print "</pre>";

mysqli_free_result($result);

mysqli_close($conn);

?>

</p>


<a href="function9.txt">Codes of this page</a>
 
</body>
</html>
	  
