<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
    user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@700&family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" >
</head>
<body>
<style>
    a { text-decoration: none; }
</style>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Virtual Nutritionist <b>PH</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="admimages/user1.jpg">
				<h4>Kimpoy</h4>
			</div>
			<ul>
				<li>
					<a href="https://dashboard.stripe.com/test/dashboard">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="https://my.livechatinc.com/chats">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>Messages</span>
					</a>
				</li>
				<li>
					<a href="view.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Patients</span>
					</a>
				</li>
				<li>
					<a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWQDGJLBjZXJSvxQdCJrzWtJbdbHWcBhbHQpXkSShgwzMNDGwWhJwqtckLDMDqZFkhgZL">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<span>Email</span>
					</a>
				</li>
				<!-- <li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Setting</span>
					</a>
				</li> -->
				<li>
					<a href="#">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<a href= "adminlogin.php" onclick="return confirm('Are you sure you want to logout?')">logout</a></td>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>Virtual Nutritionist PH</h1>
			<p>#YourPersonalHealthcareCompanion</p>

            <div class="social-links">
    <a href="https://www.facebook.com/virtualnutritionistph"
    <i class="fab fa-facebook"></i></a>
    
    <a href="https://twitter.com/NutritionistPh?t=_10sE2EqxhUIFbn7TKeBmw&s=09"
    <i class="fab fa-twitter"></i></a>

    <a href="https://twitter.com/NutritionistPh?t=_10sE2EqxhUIFbn7TKeBmw&s=09"
    <i class="fab fa-instagram"></i></a>

    <a href="https://www.youtube.com/channel/UCbxehGoAkIjoxr5w6z_pieQ"
    <i class="fab fa-youtube"></i></a>
</div>





		</section>
        
        </div>

</section>
	</div>

</body>
</html>





<style>



* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
body{
  background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
  background-size: cover;
  background-position: center;
  
}
.header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px 30px;
	background: #23242b;
	color: #fff;
}
.u-name {
	font-size: 20px;
	padding-left: 17px;
}
.u-name b {
	color: #127b8e;
}
.header i {
	font-size: 30px;
	cursor: pointer;
	color: #fff;
}
.header i:hover {
	color: #127b8e;
}
.user-p {
	text-align: center;
	padding-left: 10px;
	padding-top: 25px;
}
.user-p img {
	width: 100px;
	border-radius: 50px;
}
.user-p h4 {
	color: #ccc;
	padding: 5px 0;

}
.side-bar {
	width: 250px;
	background: #262931;
	min-height: 100vh;
	transition: 500ms width;
}
.body {
	display: flex;
}
.section-1 {
	width: 100%;
	background: url("../img/bg.jpg");
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.section-1 h1 {
	color: #fff;
	font-size: 60px;
    font-family: 'Kaisei HarunoUmi', serif;
}
.section-1 p {
	color: #127b8e;
	font-size: 20px;
	background: #fff;
	padding: 7px;
	border-radius: 5px;
}
.side-bar ul {
	margin-top: 20px;
	list-style: none;
}
.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 20px;
	transition: 500ms background;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.side-bar ul li:hover {
	background: #127b8e;
}
.side-bar ul li a {
	text-decoration: none;
	color: #eee;
	cursor: pointer;
	letter-spacing: 1px;
}
.side-bar ul li a i {
	display: inline-block;
	padding-right: 10px;
	font-size: 23px;
}
#navbtn {
	display: inline-block;
	margin-left: 70px;
	font-size: 20px;
	transition: 500ms color;
}
#checkbox {
	display: none;
}
#checkbox:checked ~ .body .side-bar {
	width: 60px;
}
#checkbox:checked ~ .body .side-bar .user-p{
	visibility: hidden;
}
#checkbox:checked ~ .body .side-bar a span{
	display: none;
}

.social-links{
    text-align: center;
}
.social-links .fab{
    height: 40px;
    width: 40px;
    font-size: 20px;
    line-height: 40px;
    border: 1px solid #fff;
    margin: 40px 5px 0;
    color: #fff;
    cursor: pointer;
    transition: .5s;
}
.social-links .fab:hover{
    background: #fff;
    color: #23242b;
    transform: translateY(-7px);
}