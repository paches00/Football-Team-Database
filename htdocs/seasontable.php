<html>
    <head>
        <title>Season</title>
        <link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
    <body>
        <div style="overflow:scroll; width:1500px" >
<table id="tables">
    <tr>
        <th>Match ID</th>
        <th>Team 1 ID</th>
        <th>Team 2 ID</th>
        <th>Date</th>
        <th>Place</th>
        <th>Score</th>
        <th>Penalty</th>
        <th>Extra Time</th>

<?php 
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "football";

    $db = mysqli_connect($db_host, $db_username, $db_password);
    mysqli_select_db($db, $db_database);

    $sql = "SELECT * FROM season;";

    $result = mysqli_query($db, $sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["match_id"] . "</td><td>" . $row["1_team_id"] . "</td><td>" . $row["2_team_id"] . "</td><td>" . $row["date"] . "</td><td>" . $row["place"] . "</td><td>" . $row["score"] . "</td><td>" . $row["penalty"] . "</td><td>" . $row["extra_time"] . "</td></tr>";
    }
    mysqli_close($db);
?>
<table>
</body>
</html>