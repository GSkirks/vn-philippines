<?php 
require_once "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM `users` ";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	<a href="dashboard.php">
	<div id = "containerx">
      <button id="btnOne" value="Go back!" onclick="history.back()">Back to Dashboard</button></a>
      </div>
	  <a href="create.php">
	  <div id = "containerxx">
      <button id="btnOne" value="Go back!" onclick="history.back()">Add Patient</button></a>
      </div>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Patients</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Full Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Address</th>
		<th>Type of Plan</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['fullname']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phonenumber']; ?></td>
					<td><?php echo $row['addrss']; ?></td>
					<td><?php echo $row['plan']; ?></td>
					<td><a class="btn btn-info" 
					href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger"
					href="delete.php?id=<?php echo $row['id']; ?>"
					<a href="deletelink" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>

<Style>
	
button{
  font-size: 15px;
  padding:7px;
  border-radius: 4px;
  margin:5px;
  color:  #fbfaff;
  position: relative;
  background: #009688;
  width: 10rem;
  border: none;
  outline: none;
  box-shadow:
  0 0.7px 4px rgba(0, 0, 0, 0.045),
  0 1.9px 11.1px rgba(0, 0, 0, 0.065),
  0 4.5px 26.8px rgba(0, 0, 0, 0.085),
  0 15px 89px rgba(0, 0, 0, 0.13);
}

#containerx{
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  outline: none;
}

#containerxx{
	
    padding: 30px;
    display:block;

    text-align:center;
    position: absolute;
    top: 10px;
    right: 10px;
 	
}

</Style>