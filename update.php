<?php 
include "admconfig.php";


// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$fullname       = $_POST['fname'];
		$user_id        = $_POST['user_id'];
		$age            = $_POST['aged'];
		$gender         = $_POST['gen'];
		$email          = $_POST['mail'];
		$phonenumber    = $_POST['num'];
		$address        = $_POST['add'];
		$postalcode     = $_POST['pscode'];


		// write the update query
		$sql = "UPDATE `users` SET `fullname`='$fullname',`age`='$age',`gender`='$gender',`email`='$email',`phonenumber`='$phonenumber',`addrss`='$address',`plan`='$postalcode'WHERE `id`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		while ($row = $result->fetch_assoc()) {
			$fullname       = $row['fullname'];
			$age            = $row['age'];
			$gender         = $row['gender'];
			$email          = $row['email'];
			$phonenumber    = $row['phonenumber'];
			$address        = $row['addrss'];
			$postalcode     = $row['plan'];
			$id             = $row['id'];
		}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet">
</head>
<body>
<div>
<form action="" method="post">
<div class="wrapper">
    <div class="title">
      Consultation Form
    </div>
    <div class="form">
		<div class="inputfield">
          <label for="id">ID</label>
          <input type="text" name="user_id" class="input" value="<?php echo $id; ?>" required>
       </div>  

       <div class="inputfield">
          <label for="fname">Full Name</label>
          <input type="text" name="fname" class="input" value="<?php echo $fullname; ?>" required>
       </div>  

       <div class="inputfield">
          <label for="aged">Age</label>
          <input type="text" name="aged" class="input" value="<?php echo $age; ?>" required>
       </div> 


     <div class="inputfield">
          <label for="gen">Gender</label>
          <input type="text" name="gen" class="input" value="<?php echo $gender; ?>" required>
       </div> 


      <div class="inputfield">
          <label for="mail">Email Address</label>
          <input type="email" name="mail" class="input" value="<?php echo $email; ?>" required>
       </div> 

      <div class="inputfield">
          <label for="num">Phone Number</label>
          <input type="text" name="num" class="input" value="<?php echo $phonenumber; ?>" required>
       </div> 

      <div class="inputfield">
          <label for="add">Address</label>
          <input type="text" name="add" class="input" value="<?php echo $address; ?>" required></textarea>
       </div> 

      <div class="inputfield">
          <label for="pscode">Type of Plan</label>
          <input type="text" name="pscode" class="input" value="<?php echo $postalcode; ?>" required>
       </div> 
       
      <div class="inputfield">
        <input type="submit" value= "Update "name="update" class="btn">
      </div>
      </form>
    </div>
</div>	
</body>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
  background-size: cover;
  background-position: center;
  height: 100vh;
}
.wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #009688;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #009688;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #009688;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #009688;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #009688;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #009688;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>