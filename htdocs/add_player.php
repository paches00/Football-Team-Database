<?php

$link = mysqli_connect("localhost", "root", "", "football");

$player_id = mysqli_real_escape_string($link, $_POST['id']);
 $player_current_team_id = mysqli_real_escape_string($link, $_POST['current_team_id']);
            $player_first_name = mysqli_real_escape_string($link, $_POST['first_name']);
            $player_middle_name = mysqli_real_escape_string($link, $_POST['middle_name']);
            $player_surname = mysqli_real_escape_string($link, $_POST['surname']);
            $player_dob = mysqli_real_escape_string($link, $_POST['date_of_birth']);
            $player_height = mysqli_real_escape_string($link, $_POST['height']);
            $player_weight = mysqli_real_escape_string($link, $_POST['weight_in_kg']);
            $player_position = mysqli_real_escape_string($link, $_POST['position']);
            $player_exp_clubs == mysqli_real_escape_string($link, $_POST['experience_clubs']);
            $player_exp_international == mysqli_real_escape_string($link, $_POST['international']);
            $player_team_ids == mysqli_real_escape_string($link, $_POST['previous_team_ids']);
            $player_address_home_ground == mysqli_real_escape_string($link, $_POST['address_home_ground']);
            $player_type == mysqli_real_escape_string($link, $_POST['player_type']);
           
            $sql = "INSERT INTO player VALUES ('$player_id', '$player_current_team_id', '$player_first_name', 
			'$player_middle_name', '$player_surname', '$player_dob', '$player_height', '$player_weight', 
			'$player_position', '$player_exp_clubs', '$player_exp_international', '$player_team_ids', 
			'$player_address_home_ground', '$player_type');";
			
if (mysqli_query($link, $sql)) {
	echo "Records added successfully.";
}

else {	
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>