<?php 

require_once "controllers/Controller.php";
global $dataid;
global $datausername;
global $datapassword;
 ?>
<div class="container-child">


	<h1 class="test"><?php WINPRINT("WELCOME TO WINTERESSO !"); ?></h1>
	<h3 style="margin-top: 20px; text-align: center;margin-bottom: 10px;"><?php WINPRINT("Example :"); ?></h3>


	<div class="table" style="display: flex;justify-content: center;">
	<table border="1">
		<tr>
			<td><label>id user</label></td>
			<td><label>username</label></td>
			<td><label>password</label></td>
		</tr>

		<tr>
			<td><?php echo $dataid; ?></td>
			<td><?php echo $datausername; ?></td>
			<td><?php echo $datapassword; ?></td>
		</tr>
	</table>
	</div>

</div>