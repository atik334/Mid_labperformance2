<?php
if(isset($_POST['submit']))
{
 $user=$_POST['sname']	;
 $user_len=strlen($user);
 $email=$_POST['Email']	;




if(empty($user)){
	$msg="please enter a valid user id";
	
}
else if($user_len<=2){
	$msg="please enter at least 2 words";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }

else if(empty($email)){
	$msg="please enter a valid email";
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$msg="please enter a valid email";

}
else{
	$msg="ok";
}
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1></h1>


	<form method="POST" action="">
	<fieldset>
		<legend>Registration</legend>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="sname" value="" size="5" /></td>
		</tr>
		
		<tr>
			<td>Email: </td>
			<td><input type="text" name="Email" value=""/></td>
		</tr>

        
		<!--<tr>
			<td>Date of Birth:</td>
			<td><input type="date" name="Dob" value=""/></td>
		</tr>
		
	
		<tr>
		
		
			<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="Degree">SSC
				<input type="checkbox" name="Degree">HSC
				<input type="checkbox" name="Degree">BSC
				<input type="checkbox" name="Degree">MSC
			</td>
		</tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>-->
                

		<!--<tr>
			<td> Msg: </td>
			<td>
				<textarea> </textarea>
			</td>
		</tr>-->

		<input type="submit" name="submit" value="Sign up">
		<p style="color:red"><?php
			if(isset($msg)){
			echo $msg ;}
			?></p>
	</table>
	</fieldset>
	</form>
</body>
</html>