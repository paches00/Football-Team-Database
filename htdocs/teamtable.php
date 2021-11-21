<html>
    <head>
        <title>Team</title>
        <link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
    <body>
        <div style="overflow:scroll; width:1500px" >
<table id="tables">
    <tr>
        <th>Team ID</th>
        <th>Team Name</th>
        <th>Country</th>
        <th>Coach</th>
        <th>Player Count</th>

<?php 
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "football";

    $db = mysqli_connect($db_host, $db_username, $db_password);
    mysqli_select_db($db, $db_database);

    $sql = "SELECT * FROM team;";

    $result = mysqli_query($db, $sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["team_id"] . "</td><td>" . $row["team_name"] . "</td><td>" . $row["country"] . "</td><td>" . $row["coach"] . "</td><td>" . $row["player_count"] . "</td></tr>";
    }
    mysqli_close($db);
?>
<table>
</body>
</html>