<?php

include('connectionData.php');

$conn = mysqli_connect($server, $user, $pass, $dbname, $port)
or die('Error connecting to MySQL server.');

?>

<html>
<head>
  <title>Function 7</title>
  </head>
  
  <body>
  <p>
  <b>List the total amount the passenger should pay(including tickets fee and baggages overweight charging fee</b><br>
  
  </p>
  
  <hr>
  
  
<?php
  

$query = "select t.Passport_ID,t.Payment+b.Fee total
from TICKETS t,BAGGAGES b
where t.Flight_number=b.Flight_number
and t.Passport_ID=b.Passport_ID; "


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
    print "$row[Passport_ID] $row[total] ";
  }
print "</pre>";

mysqli_free_result($result);

mysqli_close($conn);

?>

</p>

<a href="function8.txt">Codes of this page</a>
 
 
</body>
</html>
	  
