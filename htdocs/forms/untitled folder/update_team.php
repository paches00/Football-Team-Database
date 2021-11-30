<?php
	if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbdatabase = 'football';
            
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
			  
            $player_id = mysqli_real_escape_string($conn, $_POST['id']);
            $player_current_team_id = mysqli_real_escape_string($conn, $_POST['current_team_id']);
            $player_first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
            $player_middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
            $player_surname = mysqli_real_escape_string($conn, $_POST['surname']);
            $player_dob = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
            $player_height = mysqli_real_escape_string($conn, $_POST['height']);
            $player_weight = mysqli_real_escape_string($conn, $_POST['weight_in_kg']);
            $player_position = mysqli_real_escape_string($conn, $_POST['position']);
            $player_exp_clubs == mysqli_real_escape_string($conn, $_POST['experience_clubs']);
            $player_exp_international == mysqli_real_escape_string($conn, $_POST['international']);
            $player_team_ids == mysqli_real_escape_string($conn, $_POST['previous_team_ids']);
            $player_address_home_ground == mysqli_real_escape_string($conn, $_POST['address_home_ground']);
            $player_type == mysqli_real_escape_string($conn, $_POST['player_type']);
            
           
            $sql = "UPDATE player SET current_team_id = '$player_current_team_id' WHERE id = $player_id AND current_team_id != null;" .
               " UPDATE player SET first_name = '$player_first_name' WHERE id = $player_id AND first_name != '';" .
               " UPDATE player SET middle_name = '$player_middle_name' WHERE id = $player_id AND middle_name != null;" .
               " UPDATE player SET surname = '$player_surname' WHERE id = $player_id AND surname != '';" .
               " UPDATE player SET date_of_birth = '$player_dob' WHERE id = $player_id AND date_of_birth != null;" .
               " UPDATE player SET height = '$player_height' WHERE id = $player_id AND height != null;" .
               " UPDATE player SET weight_in_kg = '$player_weight' WHERE id = $player_id AND weight_in_kg != null;" .
               " UPDATE player SET position = '$player_position' WHERE id = $player_id AND position != '';" .
               " UPDATE player SET experience_clubs = '$player_exp_clubs' WHERE id = $player_id AND experience_clubs != null;" .
               " UPDATE player SET experience_international = '$player_exp_international' WHERE id = $player_id AND experience_international != null;" .
               " UPDATE player SET previous_team_ids = '$player_team_ids' WHERE id = $player_id AND previous_team_ids != null;" .
               " UPDATE player SET address_home_ground = '$player_address_home_ground' WHERE id = $player_id AND address_home_ground != '';" .
               " UPDATE player SET player_type = '$player_type' WHERE id = $player_id AND player_type != '';";

            mysqli_select_db($conn, $dbdatabase);
            
            $retval = mysqli_multi_query( $conn, $sql );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            
            echo "Updated data successfully\n";
            
            mysqli_close($conn);
			} else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table>
                     <tr>
                        <td>Player ID</td>
                        <td><input name = "id" type = "text" 
                           id = "id"></td>
                     </tr>
                  
                     <tr>
                        <td>Current Team ID</td>
                        <td><input name = "current_team_id" type = "text" 
                           id = "current_team_id"></td>
                     </tr>
                     
                     <tr>
                        <td>First Name</td>
                        <td><input name = "first_name" type = "text" 
                           id = "first_name"></td>
                     </tr>
                     
                     <tr>
                        <td>Middle Name</td>
                        <td><input name = "middle_name" type = "text" 
                           id = "middle_name"></td>
                     </tr>
                     
                     <tr>
                        <td>Surname</td>
                        <td><input name = "surname" type = "text" 
                           id = "surname"></td>
                     </tr>
                     
                     <tr>
                        <td>Date of Birth</td>
                        <td><input name = "date_of_birth" type = "date" 
                           id = "date_of_birth"></td>
                     </tr>
                     
                     <tr>
                        <td>Height</td>
                        <td><input name = "height" type = "text" 
                           id = "height"></td>
                     </tr>
                     
                     <tr>
                        <td>Weight in kg</td>
                        <td><input name = "weight_in_kg" type = "text" 
                           id = "weight_in_kg"></td>
                     </tr>
                     
                     <tr>
                        <td>Position</td>
                        <td><input name = "position" type = "text" 
                           id = "position"></td>
                     </tr>
                     
                     <tr>
                        <td>Clubs Experience</td>
                        <td><input name = "experience_clubs" type = "text" 
                           id = "experience_clubs"></td>
                     </tr>
                     
                     <tr>
                        <td>International Experience</td>
                        <td><input name = "experience_international" type = "text" 
                           id = "experience_international"></td>
                     </tr>
                     
                     <tr>
                        <td>Previous Team IDs</td>
                        <td><input name = "previous_team_ids" type = "text" 
                           id = "previois_team_ids"></td>
                     </tr>
                     
                     <tr>
                        <td>Address Home Ground</td>
                        <td><input name = "address_home_ground" type = "text" 
                           id = "address_home_ground"></td>
                     </tr>
                     
                     <tr>
                        <td>Player Type</td>
                        <td><input name = "player_type" type = "text" 
                           id = "player_type"></td>
                     </tr>
<tr>
                        <td> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td> </td>
                        <td>
                           <input name = "update" type = "submit" id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>