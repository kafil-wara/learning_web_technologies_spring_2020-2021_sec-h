<center>
	<form method="POST" action = "../controller/userPasswordChange.php">
		<table>
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="cPass"/><br />
						New Password<br />
						<input type="password" name="nPass"/><br />
						Retype New Password<br />
						<input type="password" name="rnPass"/>								
						<hr />
						<input type="submit" name = "change" value="Change"/>     
						<a href="userHome.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>