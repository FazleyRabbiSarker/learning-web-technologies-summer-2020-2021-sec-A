<html>

<head>
	<title>Change Password</title>
</head>

<body>
	<table border="1" width="100%">
		<tr>
			<td>
				picture
			</td>
			
			<td align="right">
				<a href="login.php">Logged in as </a> |<a href="../controller/logout.php">Logout</a>
			</td>
		</tr>
		
		<tr style="height:150px;">
			<td> 
	<h4> <ul> Account </ul> </h4> <br>
	
		<li>
		 
		 <a href="profile.html">View Profile </a> <br/>
		 <a href="edit.php">Edit Profile </a> <br/>
		 <a href="profile.html">Change Profile Picture </a> <br/>
		 <a href="changepass.php">Change Password </a> <br/>
		 <a href="logout.php">LogOut </a>
	</li>
	</ul>
	</td>
            <td>
                <form method="post" action=".../controller/changepass.php">
                    <fieldset style="width: 90%">
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                            <tr>
                                <td>
                                    Current Password :
                                </td>
                                <td>
                                    <input type="password" name="currentPass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td style="color: green">
                                    New Password :
                                </td>
                                <td>
                                    <input type="password" name="newPass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td style="color:red">
                                    Retype New Password :
                                </td>
                                <td>
                                    <input type="password" name="rePass" value="">
                                </td>
                            </tr>
            
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
            
                        </table>
                    </fieldset>
                </form>
            </td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				Copyright @ 2017
			</td>
		</tr>			
	</table>
</body>
</html>
© 2021 GitHub, Inc.