<?php
	$title = "Resister Page";
	include('header.php');
?>

<form method="post" action="../controller/regCheck.php">
	<fieldset>
		<legend>Create User</legend>
		<table>
			<tr>
				<td>Employername</td>
				<td><input type="text" name="rmployername" value=""></td>
			</tr>
			<tr>
				<td>Companyname</td>
				<td><input type="text" name="companyname" value=""></td>
			</tr>
			<tr>
				<tr>
				<td>Contact no</td>
				<td><input type="contact no" name="contact no" value=""></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="username" name="username" value=""></td>
			</tr>
			<tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			
				</td>
				<tr>
				<td></td>
				<td>
					<input type="submit" name="signup" value="Resister Page"> 
					<a href="home.php">Back	</a>
				</td>
			</tr>
			</tr>
		</table>
	</fieldset>
</form>

<?php
	include('footer.php');
?>