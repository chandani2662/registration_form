
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<link rel="stylesheet" type="text/css" href="index.css">
<script src="index.js"></script>

<body>


<!-- 	<table>
		<thead>
			<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Confirm_Password</th>
			<th>First_name</th>
			<th>Last_name</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Address</th>
			<th>Contact_no</th>
			<th>Married_status</th>
			<th>Hobbies</th>
			<th>Talk_about_urself</th>
			<th>Skills</th>
			<th>What_you_think_you_can_do_as_a_programmer</th>
			<th>Offer</th>
			<th>Agree</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row =mysqli_fetch_array($result)){?>
			<tr>
				<td><?php echo $row["Name"]; ?></td>
				<td><?php echo $row["Email"]; ?></td>
				<td><?php echo $row["Password"]; ?></td>				
				<td><?php echo $row["Confirm_Password"]; ?></td>
				<td><?php echo $row["First_name"]; ?></td>
				<td><?php echo $row["Last_name"]; ?></td>
				<td><?php echo $row["Gender"]; ?></td>
				<td><?php echo $row["DOB"]; ?></td>
				<td><?php echo $row["Address"]; ?></td>
				<td><?php echo $row["Contact_no"]; ?></td>
				<td><?php echo $row["Married_status"]; ?></td>
				<td><?php echo $row["Hobbies"]; ?></td>
				<td><?php echo $row["Talk_about_urself"]; ?></td>
				<td><?php echo $row["Skills"]; ?></td>
				<td><?php echo $row["What_you_think_you_can_do_as_a_programmer"]; ?></td>
				<td><?php echo $row["Offer"]; ?></td>
				<td><?php echo $row["Agree"]; ?></td>
				<td>
					<a href="#">Delete</a>
				</td>
			</tr>
		<?php }?>
		</tbody>
	</table> -->

	<h1>Register Form</h1>
<div class="contact form">
	<form id ="Register_form" method="post" action="server.php">

				<input type="hidden" name="id" value="<?php echo $id; ?>">


				<label for="usrname">Username:</label>
    					<input type="text" id="usrname" name="username" required><br/>


				<label for="email">E-mail:</label>
					  <input type="email" name="emailaddress"><br/>
				

    			<!-- <label for="psw">Password:</label>
    					<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br/>
    			
    			<label for="txtConfirmPassword">Confirm Password:</label>
    					<input type="password" id="txtConfirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br/>


 -->
			<label for="psw">Password:</label>
					<input type="password" id="psw" name="psw" ><br/>
			<label for="txtConfirmPassword">Confirm Password:</label>
    					<input type="password" id="txtConfirmPassword">

			<h3>Personal Details</h3>
				<label for="full name">Full Name: </label>
					<input type="name" name="text" placeholder="First Name">
					<input type="name" name="text" placeholder="Last Name"><br/>

			 	<label for="gender">Gender: </label>
				    <input type="radio" id="gender" name="gender" value="female"/>Female  
					<input type="radio" id="gender" name="gender" value="male"/>Male
				    <input type="radio" id="gender" name="gender" value="other"/>Other<br/>

				<label for="dob">DOB: </label>
				    <input type="date" name="bday"><br/>


				<label for="add">Address: </label>
					  <input type="street" class="form-control" id="autocomplete" placeholder="Street"><br/>
					  <input type="city" class="form-control" id="inputCity" placeholder="City"><br/>
					  <input type="state" class="form-control" id="inputState" placeholder="State"><br/>
					  <input type="zip" class="form-control" id="inputZip" placeholder="Zip"><br/>
					  <input type="country" class="form-control" id="inputCounty" placeholder="Country"><br/>
  				
  				<label for="Ph.no.">Contact No: </label>
					<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="123-456-7890">
				
				<label for="status">Marital Status: </label>
					<select>
						<option value="single">Single</option>
  						<option value="married">Married</option>
  						<option value="other">Other</option>
					</select><br/>
				
				<label for= hobbies>Hobbies: </label>
					<input type="name" name="text" placeholder="Hobbies"><br/>

				<label for= urself>Talk About Urself: </label>
					<textarea placeholder="Talk About Urself"></textarea><br/>
				
				<label for= skills>Skills: </label><br/>

					<input type="checkbox" id="html" name="html">
					<label for="html">HTML</label>
					
					<input type="checkbox" id="css" name="css">
					<label for="css">CSS</label>
					
					<input type="checkbox" id="javascript" name="javascript">
					<label for="javascript">Java Script</label>
					
					<input type="checkbox" id="java" name="java">
					<label for="java">Java</label>
					
					<input type="checkbox" id="php" name="php">
					<label for="php">PHP</label><br/>
					
					<input type="checkbox" id="python" name="python">
					<label for="python">Python</label>

					<input type="checkbox" id="rube" name="rube">
					<label for="rube">Rube</label>

					<input type="checkbox" id="jquery" name="jquery">
					<label for="jquery">JQuery</label>

					<input type="checkbox" id="sql" name="sql">
					<label for="sql">SQL</label><br/>

					<input type="name" name="text" placeholder="other skills"><br/>

					<label for= urself>What you think you can do as a programmer: </label><br/>
					<textarea placeholder="Talk About Urself"></textarea><br/>

					<input type="checkbox" id="news" name="news">
					<label for="news">I want to receive news and special offers</label><br/>

					<input type="checkbox" id="agree" name="agree">
					<label for="agree">I agree with the <a href="#">term and conditions</a></label><br/>

					<button type="submit" name="save" class="btn">Save</button>
	
	</form>



</body>
</html>