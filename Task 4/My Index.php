<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>

					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td>Profession:  </td>
						<td>
							<select name="profession">
								<option selected disabled>--Select--</option>
								<?php
									foreach($professions as $pf){
										if($prof == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_prof;?></span></td>
					</tr>
					<tr>
						<td>Hobbies:  </td>
						<td>
							<input type="checkbox" value="Movies" <?php if(hobbyExist("Movies")) echo "checked";?>  name="hobbies[]"> Movies
							<input type="checkbox" value="Music" <?php if(hobbyExist("Music")) echo "checked";?> name="hobbies[]"> Music<br>
							<input type="checkbox" value="Sports" <?php if(hobbyExist("Sports")) echo "checked";?> name="hobbies[]"> Sports
							<input type="checkbox" value="Games" <?php if(hobbyExist("Games")) echo "checked";?> name="hobbies[]"> Games
						</td>
						<td><span><?php echo $err_hobbies;?></span></td>
					</tr>
					<tr>
						<td>Bio:  </td>
						<td>
							<textarea name="bio"><?php echo $bio;?></textarea>
						</td>
						<td><span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>