<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13278261;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/13278261/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="style.css">

	<title>Payment Method</title>
</head>
<body>
	<form action="home.php">
	<div class="modal">
		<div class="modal-box">
			<!-- <div class="icon">
				<i class="fa fa-times"></i>
			</div> -->
			<div class="imgBox">
				<img src="images/gcash.png" alt="Image">
			</div>
			<div class="content">
				<h4 class="title">Pay with Gcash</h4>
				<p class="desc"><b>Please follow these steps to pay with Gcash:</b><br><br>
				<b>1. </b>Chat <b>"Pay with gcash"</b> in the live chat located at the bottom<br>
                 right of the screen.
                <br><br>
                <b>2. </b>Choose your desired plan and upload your proof of payment.
            </p>
        <div id = "containerx">
         <button id="btnOne" value="Go back!">Home</button>
        </div>
				</div>
			</div>
		</div>
	</div>
    </form>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


button{
  font-size: 15px;
  padding:7px;
  border-radius: 4px;
  margin:5px;
  color: #fff ;
  position: relative;
  background: #009688 ;
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


















* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


.modal {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
    background-size: cover;
    background-position: center;
    padding: 0 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: .3s;
}

.modal .modal-box {
    background: #FFF;
    border-radius: 5px;
    width: 600px;
    min-height: 400px;
    margin: 20px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 60px;
}

.modal .modal-box .icon {
    position: absolute;
    right: 20px;
    top: 15px;
}

.modal .modal-box .icon i {
    color: #111;
    font-size: 1rem;
    cursor: pointer;
    transition: .1s;
}

.modal .modal-box .icon i:hover {
    color: #009688;
    transform: scale(1.1);
}

.modal .modal-box .imgBox {
    width: 80px;
    height: 80px;
}

.modal .modal-box .imgBox img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.modal .modal-box .content .title {
    margin-top: 20px;
    font-size: 1.5rem;
    font-weight: 800;
    text-align: center;
    color: #009688;
}

.modal .modal-box .content .desc {
    margin: 20px 0;
    text-align: center;
    color: #444;
    font-size: .9rem;
}

.modal .modal-box .content .modal-links {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.modal .modal-box .content .modal-links a {
    text-decoration: none;
    display: inline-block;
    background: #009688;
    color: #FFF;
    padding: .5rem 1.5rem;
    margin: 10px;
    border-radius: 4px;
    text-align: center;
    box-shadow:
  0 0.7px 4px rgba(0, 0, 0, 0.045),
  0 1.9px 11.1px rgba(0, 0, 0, 0.065),
  0 4.5px 26.8px rgba(0, 0, 0, 0.085),
  0 15px 89px rgba(0, 0, 0, 0.13);
}   
</style>