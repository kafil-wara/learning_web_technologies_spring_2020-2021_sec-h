<?php
	session_start();
	require_once('../model/dbConn.php');
	require_once('../model/userModel.php');
	$currUser = getUserById($_SESSION['currUserId']);
?>

<div>
	<fieldset>
		<legend>Profile</legend>
		<?php
		echo "<table>
			<tr>
				<td>ID</td>
				<td>{$currUser['id']}</td>
			</tr>
			<tr>
				<td>NAME</td>
				<td>{$currUser['name']}</td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td>{$currUser['email']}</td>
			</tr>
				<td>USER TYPE</td>
				<td>{$currUser['type']}</td>
			</tr>
			<tr>
				<td align = 'right'>
				<a href='userHome.php'> Go Home</a>
				</td>
			</tr>
		</table>";
	?>
	</fieldset>
</div>