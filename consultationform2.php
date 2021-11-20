<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultation Form</title>
	<link rel="stylesheet" href="newform.css">
</head>
<body>

<div>
  <?php
  if(isset($_POST['next'])){
    echo 'User submitted.';
  }
  ?>
</div>

<form action="consultationform.php" method="post">
<div class="wrapper">
    <div class="title">
      Consultation Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label for="height">Height&nbsp;<small>(ft)</small></label>
          <input type="number" class="input" name="height" required>
       </div>  

       <div class="inputfield">
          <label for="weight">Weight&nbsp;<small>(kg)</small></label>
          <input type="number" class="input" name="weight" required>
       </div>  

       <div class="inputfield">
          <label for="bodymassindex">Body Mass Index</label>
          <div class="custom_select">
            <select required>
              <option value=""></option>
              <option value="male">Normal</option>
              <option value="female">Underweight</option>
              <option value="female">Obese</option>
            </select>
          </div>
       </div> 

        <div class="inputfield">
          <label for="waistcirc">Waist Circumference&nbsp;<small>(in)</small></label>
          <input type="number" name="waistcirc" class="input" required>
       </div> 

       <div class="inputfield">
        <label for="hipcirc">Hip Circumference&nbsp;<small>(in)</small></label>
        <input type="number" class="input" name="hipcirc" required>
       </div> 
       
       <div class="inputfield">
        <label for="neckcirc">Neck Circumference&nbsp;<small>(in)</small></label>
        <input type="number" class="input" name="neckcirc" required>
      </div>  

      <div class="inputfield">
          <label for="medicalhistory">Medical Family History</label>
          <textarea name="medicalhistory" class="textarea" required></textarea>
      </div> 

     <div class="inputfield">
        <label for="foodallergy">Food Allergy</label>
        <textarea name="foodallergy" class="textarea" required></textarea>
     </div> 

     <div class="inputfield">
        <label for="24hourfood">24-Hour Food Recall</label>
        <textarea name="24hourfood" class="textarea" required></textarea>
     </div> 
     <div class="inputfield">
        <label for="physicalactivity">Physical Activity</label>
        <textarea name="physicalactivity" class="textarea" required></textarea>
     </div>   

     <div class="inputfield">
        <input type="submit" name="next" value="Next" class="btn">
      </div>
    </div>
</div>	
	
</body>
</html>

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
  padding: 0 10px;
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