<?php
//initialize variable
$username = "";
$email = "";
$password = "";
$confirm_password ="";
$first_name ="";
$last_name ="";
$gender ="";
$dob ="";
$address ="";
$contact_no ="";
$married_status ="";
$hobbies ="";
$talk_about_urself ="";
$skills ="";
$What_you_think_you_can_do_as_a_programmer = "";
$offer ="";
$agree ="";
$id = 0;

//connect to database
	$db=mysqli_connect('localhost','root','','register');

// if save button is clicked
if (isset($_POST['save']))
{
	//echo "here";
	$username = $_POST['username'];
	$email =$_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$contact_no = $_POST['contact_no'];
	$married_status = $_POST['married_status'];
	$hobbies = $_POST['hobbies'];
	$talk_about_urself = $_POST['talk_about_urself'];
	$skills = $_POST['skills'];
	$what_you_think_you_can_do_as_a_programmer = $_POST['what_you_think_you_can_do_as_a_programmer'];
	$offer =$_POST['offer'];
	$agree =$_POST['agree'];

  
	$query ="INSERT INTO info (username, email, password, confirm_password, first_name, last_name, gender, dob, address, contact_no, married_status, hobbies, talk_about_urself, skills, what_you_think_you_can_do_as_a_programmer, offer, agree) values ('$username','$email','$password','$confirm_password','$first_name','$last_name','$gender','$dob','$address','$contact_no','$married_status','$hobbies','$talk_about_urself','$skills','$what_you_think_you_can_do_as_a_programmer','$offer','$agree')";
	
	if (mysqli_query($db, $query) === TRUE) {
    	echo "New record created successfully";
	} else {
	    echo "Error: " . $query . "<br>" . $db->error;
	}
	//header('location: index.php');//redirect to index page after inserting
}

//retrieve records
	$result =mysqli_query($db,"SELECT * FROM info");
?>

