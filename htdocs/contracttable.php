<html>
<head>
<title>Contract</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div style="overflow:scroll; width:1500px;height:400px" >
<table id="tables">
<tr>
	<th>Player ID</th>
	<th>Contract ID</th>
	<th>Salary</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>Additional Conditions</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "football";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM contract;";
$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["id"] . "</td><td>" . $row["contract_id"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["additional_conditions"] . "</td></tr>";
}

mysqli_close($db);

?>
</table>
</div>
</body>
</html>