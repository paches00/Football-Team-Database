<?php

$link = mysqli_connect("localhost", "root", "", "football");

$player_id = mysqli_real_escape_string($link, $_POST['id']);
 $player_current_team_id = mysqli_real_escape_string($link, $_POST['current_team_id']);
            $player_first_name = mysqli_real_escape_string($link, $_POST['first_name']);
            $player_middle_name = mysqli_real_escape_string($link, $_POST['middle_name']);
            $player_surname = mysqli_real_escape_string($link, $_POST['surname']);
            $player_dob = mysqli_real_escape_string($link, $_POST['date_of_birth']);
            $player_height = mysqli_real_escape_string($link, $_POST['height_in_cm']);
            $player_weight = mysqli_real_escape_string($link, $_POST['weight_in_kg']);
            $player_position = mysqli_real_escape_string($link, $_POST['current_position_id']);
            $player_prevposition == mysqli_real_escape_string($link, $_POST['previous_positions']);
            $player_prevclubs == mysqli_real_escape_string($link, $_POST['previous_clubs']);
            $player_clublevel == mysqli_real_escape_string($link, $_POST['matches_club_level']);
            $player_intlevel == mysqli_real_escape_string($link, $_POST['matches_international_level']);
            $player_address == mysqli_real_escape_string($link, $_POST['address_home']);
            $player_type == mysqli_real_escape_string($link, $_POST['player_type_id']);
            $player_salary == mysqli_real_escape_string($link, $_POST['salary']);
            $player_sdate == mysqli_real_escape_string($link, $_POST['start_date']);
            $player_edate == mysqli_real_escape_string($link, $_POST['end_date']);
            $player_add == mysqli_real_escape_string($link, $_POST['additional_conditions']);
            $player_occ == mysqli_real_escape_string($link, $_POST['occupation_type_id']);
            $player_institute == mysqli_real_escape_string($link, $_POST['institute_name']);
            $player_hobby == mysqli_real_escape_string($link, $_POST['hobby_id']);
            $player_expenses == mysqli_real_escape_string($link, $_POST['away_expenses_sum']);
           
            $sql = "INSERT INTO player VALUES ('$player_id', '$player_current_team_id', '$player_first_name', '$player_middle_name', '$player_surname', '$player_dob', '$player_height', '$player_weight', '$player_position', '$player_prevposition', '$player_prevclubs', '$player_clublevel', '$player_intlevel', '$player_address', '$player_type', '$player_salary', '$player_sdate', '$player_edate', '$player_add', '$player_occ', '$player_institute', '$player_hobby', '$player_expenses');";
			
if (mysqli_query($link, $sql)) {
	echo "Records added successfully.";
}

else {	
	echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>