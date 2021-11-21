<html>
    <head>
        <title>Match</title>
        <link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
    <body>
        <div style="overflow:scroll; width:1500px" >
<table id="tables">
    <tr>
        <th>Match ID</th>
        <th>Player ID</th>
        <th>Started on Bench</th>
        <th>Substituted</th>
        <th>Goals</th>
        <th>Attempts</th>
        <th>Attempts on Target</th>
        <th>Successful Passes</th>
        <th>Failed Passes</th>
        <th>Tackles</th>
        <th>Yellow Cards</th>
        <th>Red Cards</th>
        <th>Fouls</th>

<?php 
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "football";

    $db = mysqli_connect($db_host, $db_username, $db_password);
    mysqli_select_db($db, $db_database);

    $sql = "SELECT * FROM match;";

    $result = mysqli_query($db, $sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["match_id"] . "</td><td>" . $row["player_id"] . "</td><td>" . $row["started_on_bench"] . "</td><td>" . $row["substituted"] . "</td><td>" . $row["goals"] . "</td><td>" . $row["attempts"] . "</td><td>" . $row["attempts_on_target"] . "</td><td>" . $row["successful_passes"] . "</td><td>" . $row["failed_passes"] . "</td><td>" . $row["tackles"] . "</td><td>" . $row["yellow_cards"] . "</td><td>" . $row["red_cards"] . "</td><td>" . $row["fouls"] . "</td></tr>";
    }
    mysqli_close($db);
?>
<table>
</body>
</html>