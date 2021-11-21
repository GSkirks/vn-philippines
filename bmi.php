<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
    <style>
    a { text-decoration: none; }
  </style>
		<meta charset="utf-8">
		<title>Get Your BMI</title>
	</head>
	<style media="screen">
		
button{
  font-size: 15px;
  padding:7px;
  border-radius: 4px;
  margin:5px;
  color: #009688 ;
  position: relative;
  background: #fbfaff;
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


		body{
			margin: 0;
			padding: 0;
			text-align: center;
			font-family: sans-serif;
            background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
            background-size: cover;
            background-position: center;
			height: 100vh;
		}
		div{
			width: 500px;
			position: absolute;
			top: 50%;
			left: 50%;
			background-color: #fff;
			transform: translate(-50%, -50%);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 1px 1px 20px #009688;
		}
		h2{
			font-size: 30px;
			font-weight: 600;
		}
		.text{
			text-align: left;
			margin-left: 150px;
		}
		#w, #h{
			color: #009688;
			text-align: left;
			font-size: 20px;
			font-weight: 200;
			outline: none;
			border: none;
			background: none;
			border-bottom: 1px solid #009688;
			width: 200px;
		}
			#w:focus, #h:focus{
				border-bottom: 2px solid #009688;
				width: 300px;
				transition: 0.5s;
			}
			#result{
				color: #009688;
			}
			#btn{
				font-family: inherit;
				margin-top: 10px;
				border: none;
				color: #fff;
				background-image: linear-gradient(120deg,#009688, #009688);
				width: 150px;
				padding: 10px;
				border-radius: 30px;
				outline: none;
				cursor: pointer;
			}
			#btn:hover{
				box-shadow: 1px 1px 10px #009688;
			}
			#info{
				font-size: 12px;
				font-family: inherit;
			}
	</style>
	<script type="text/javascript">
		function BMI() {
			var h=document.getElementById('h').value;
			var w=document.getElementById('w').value;
			var bmi=w/(h/100*h/100);
			var bmio=(bmi.toFixed(2));

			document.getElementById("result").innerHTML="Your BMI is " + bmio;
		}
	</script>
	<body a link="#009688" vlink="#009688">
		<div>
			<h2>Get Your BMI</h2>
			<p class="text">Height</p>
			<input type="text" id="h">
			<p class="text">Weight</p>
			<input type="text" id="w">
			<p id="result"></p>
			<button id="btn" onClick="BMI()">Calculate</button>
			<p id="info">Please enter height [cm] and weight [kg]</p>

            
            <button><a href="index.php">Home</button></a>
          
			<a href="https://www.nhlbi.nih.gov/health/educational/lose_wt/BMI/bmi_dis">
            <p>Want to know more about your BMI?</p></a>
		</div>
	</body>
</html>