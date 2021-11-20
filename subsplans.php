<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose Your Plan</title>
  <link rel="stylesheet">
</head>
  <div class="pricing-table">
    <div class="pricing-card">
      <h3 class="pricing-card-header">FREE TRIAL</h3>
      <div class="price"><sup></sup>FREE<span></span></div>
      <ul>
      <li><strong>3</strong> - day free consultation</li>
      <br>
      <br>
      <img src="images/free.jpg"/>
      </ul>
      <a href="freeconsultationform.php" class="order-btn">Avail Now</a>
    </div>

    <div class="pricing-card">
      <h3 class="pricing-card-header">Professional</h3>
      <div class="price"><sup>₱</sup>699<span>/wks</span></div>
      <ul>
      <li><strong>1 week</strong> nutritional consultation</li>
      <br>
      <img src="images/1week.jpg"/>
      </ul>
    
      <a href="7dayconsultationform.php" class="order-btn">Avail Now</a>
    </div>

    <div class="pricing-card">
      <h3 class="pricing-card-header">Premium</h3>
      <div class="price"><sup>₱</sup>1299<span>/2WKS</span></div>
      <ul>
      <li><strong>2 weeks</strong> nutritional consultation</li>
      <br>
      <img src="images/14days.jpg"/>
      </ul>
      </ul>
      <a href="14dayconsultationform.php" class="order-btn">Avail Now</a>
    </div>

    <div class="pricing-card">
      <h3 class="pricing-card-header">Ultimate</h3>
      <div class="price"><sup>₱</sup>2499<span>/MO</span></div>
      <ul>
      <li><strong>1 month</strong> nutritional consultation</li>
      <br>
      <img src="images/30days.jpg"/>
      </ul>
      </ul>
      <a href="30dayconsultationform.php" class="order-btn">Avail Now</a>
    </div>
  </div>
    <div id = "containerx" >
      <button id="btnOne" value="Go Back From Whence You Came!" onclick="history.back(-1)" />Back</button>
    </div>
</body>
</html>




<style>




button{  
  font-size: 15px;
  padding:7px;
  border-radius: 4px;
  margin:5px;
  color: #009688 ;
  position: absolute;
  background: #CCCCCC;
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
  position: fixed;
background:#009688 ;
width: 170px;
height: 35px;
line-height: 30px;
bottom:  1%;
right: 5%;
border-radius: 3px;
text-align: center;
}













  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
  text-decoration: none;
  list-style: none;
}

img{
  width: 250px;
  height: 150px;
  flex-basis: 50%;
  margin: auto;
  border-radius: 10px;
}





body{
  background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.pricing-table{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  width: min(1600px, 100%);
  margin: auto;
}

.pricing-card{
  flex: 1;
  max-width: 360px;
  background-color: #fff;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #009688;
  transition: .3s linear;
}

.pricing-card-header{
  background-color: #009688;
  display: inline-block;
  color: #fff;
  padding: 12px 30px;
  border-radius: 0 0 20px 20px;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  transition: .4s linear;
}

.pricing-card:hover .pricing-card-header{
  box-shadow: 0 0 0 26em #009688;
}

.price{
  font-size: 70px;
  color: #0fbcf9;
  margin: 40px 0;
  transition: .2s linear;
}

.price sup, .price span{
  font-size: 22px;
  font-weight: 700;
}

.pricing-card:hover ,.pricing-card:hover .price{
  color: #fff;
}

.pricing-card li{
  font-size: 16px;
  padding: 10px 0;
  text-transform: uppercase;
}

.order-btn{
  display: inline-block;
  margin-bottom: 40px;
  margin-top: 80px;
  border: 2px solid #009688;
  color: #009688;
  padding: 18px 40px;
  border-radius: 8px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

.order-btn:hover{
  background-color: #009688;
  color: #fff;
}

@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}