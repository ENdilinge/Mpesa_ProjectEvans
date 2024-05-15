<?php
  include('express-stk.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
body
{
  display: flex;
justify-content: center;
align-items: center;
background: linear-gradient(#4ba9e9 0,#4ba9e9 50%,#fff 50%,#fff 100%);
min-height: 100vh;

}
.card 
{
	position: relative;
	width: 300px;
	height: 380px;
	background: #006400;
	display: flex;
	box-shadow: 0 15px 45px rgba(0,0,0,0.1);
	overflow: hidden;
	transition: 0.5s ease-in-out;
}
.card:hover 
{
	width: 600px;
}
.card .imgBx 
{
	position: relative;
	min-width: 300px;
	height: 100%;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 10;
}
.card .imgBx  img 
{
	max-width: 250px;
	transition: 0.5s ease-in-out;
}
.card:hover .imgBx  img 
{
	transform: rotate(-35deg) translateX(-20px);
}
.card .details 
{
	position: absolute;
	left: 0;
	width: 300px;
	height: 100%;
	background: #006400;
	display: flex;
	justify-content: center;
	padding: 20px;
	flex-direction: column;
	transition: 0.5s ease-in-out;
}
.card:hover .details 
{
	left: 300px;
}
.card .details::before 
{
	content: '';
	position: absolute;
	left: 0px;
	width: 0; 
  height: 0; 
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 10px solid #fff;
	z-index: 1;
}
.card .details h3 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 1.5em;
	line-height: 1em;
}
.card .details h3 span 
{
	font-size: 0.65em;
	font-weight: 300;
	opacity: 0.85;
	text-transform: none;
}
.card .details h4 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 0.9em;
	line-height: 1em;
	margin-top: 20px;
	margin-bottom: 10px;
}
p 
{
	color: #fff;
	font-size: 0.8em;
	opacity: 0.85;
}
.size 
{
	display: flex;
	gap: 10px;
}
.size li 
{
	list-style: none;
	color: #fff;
	font-size: 0.9em;
	width: 40px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	border: 2px solid #fff;
	cursor: pointer;
	font-weight: 500;
	opacity: 0.5;
}
.size li:hover 
{
	background: #fff;
	color: #4ba9e9;
	opacity: 1;
}
.group 
{
	position: relative;
	display: flex;
	justify-content: space-between;
	margin-top: 20px;
	align-items: center;
}
.card .details h2 
{
	color: #fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 2em;
}
.card .details h2 sup 
{
	font-weight: 300;
}
.card .details h2 small 
{
	font-size: 0.75em;
}
.card .details a 
{
	display: inline-flex;
	padding: 10px 25px;
	background: #fff;
	font-weight: 500;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 600;
	color: #4ba9e9;
} @import url(https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900);
@import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,200,300,500,600,700,900);
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  flex-direction: column; }

* {
  box-sizing: border-box; }

html {
  background-color: #171A3D;
  font-family: 'Lato', sans-serif; }

.price h1 {
  font-weight: 300;
  color: black;
  letter-spacing: 2px; 
  text-align:center;
}

.card {
  margin-top: 30px;
  margin-bottom: 30px;
  width: 520px; }
.card .row {
    width: 100%;
    padding: 1rem 0;
    border-bottom: 1.2px solid #292C58; }
.card .row.number{
    background-color: #242852;
}

.cardholder .info, .number .info {
  position: relative;
  margin-left: 40px; }
  .cardholder .info label, .number .info label {
    display: inline-block;
    letter-spacing: 0.5px;
    color: #8F92C3;
    width: 40%; }
  .cardholder .info input, .number .info input {
    display: inline-block;
    width: 55%;
    background-color: transparent;
    font-family: 'Source Code Pro';
    border: none;
    outline: none;
    margin-left: 1%;
    color: white; }
    .cardholder .info input::placeholder, .number .info input::placeholder {
      font-family: 'Source Code Pro';
      color: #444880; }

#cardnumber, #cardnumber::placeholder {
  letter-spacing: 2px;
font-size:16px; }

.button button {
  font-size: 1.2rem;
  font-weight: 400;
  letter-spacing: 1px;
  width: 520px;
  background-color: #18C2C0;
  border: none;
  color: #fff;
  padding: 18px;
  border-radius: 5px;
  outline: none;
  cursor:pointer;
  transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
  .button button:hover {
    background-color: #15aeac; }
  .button button:active {
    background-color: #139b99; }
  .button button i {
    font-size: 1.2rem;
    margin-right: 5px; }


        </style>
    </head>
   <body>
    <div class="card">
        <div class="imgBx">
            <img src="shoe.jpg">
        </div>
        <div class="details">
            <h3>Nike Air Max<br><span>Men's Shoe</span></h3>
            <h4>Product Details</h4>
            <p>Jacob & Evans Footwear prides itself on blending traditional craftsmanship with contemporary design to create stylish, comfortable, and durable shoes. Our commitment to ethical sourcing and eco-friendly practices ensures quality and sustainability..</p>
            <h4>Size</h4>
            <ul class="size">
                <li>36</li>
                <li>38</li>
                <li>40</li>
                <li>42</li>
                <li>44</li>
            </ul>
            <div class="group">
                <h2><sup>KSH</sup>1<small>.00</small></h2>
                <a href="#" class="buy-now" onclick="togglePaymentSection()">Buy Now</a>

            </div>
        </div>
    </div>
    <div id="paymentSection" style="display: none;">
    <div class="container">
        <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='POST'>
            <div class="price">
                <h1>Amount: KES 1</h1>
            </div>
            <div class="card__container">
                <div class="card">
                    <div class="row">
                        <img src="mpesa.png" style="width:30%;margin: 0 35%;">
                        <p style="color:#8F92C3;line-height:1.7;">1. Enter the <b>phone number</b> and press "<b>Confirm and Pay</b>"</br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b></p>
                        <?php if ($errmsg != ''): ?>
                            <p style="background: #cc2a24;padding: .8rem;color: #ffffff;"><?php echo $errmsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="row number">
                        <div class="info">
                            <input type="hidden" name="orderNo" value="#O2JDI2I3R" />
                            <label for="cardnumber">Phone number</label>
                            <input id="cardnumber" type="text" name="phone_number" maxlength="10" placeholder="0700000000" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit"><i class="ion-locked"></i> Confirm and Pay</button>
            </div>
                        </div>
        </form>
   <p style="color:#fff;line-height:1.7;margin-top:5rem;">Copyright 2022 | All Rights Reserved | Made with lots of <i class="fab fa-gratipay"></i> by Evans & Jacob</p>
</div>

<script>
    function togglePaymentSection() {
        var paymentSection = document.getElementById('paymentSection');
        if (paymentSection.style.display === 'none') {
            paymentSection.style.display = 'block';
        } else {
            paymentSection.style.display = 'none';
        }
    }
</script>

   </body>
</html>





