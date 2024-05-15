<?php
  session_start();
  include('status.php');
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900);
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
      color: #18C2C0;
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
      margin: 0 40px; }
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
  <div class="container">
    <form action='' method='POST'>
      <div class="price">
        <h1>Awesome, that's KES 1</h1>
      </div>
      <div class="card__container">
        <div class="card">
          <div class="row">
            <img src="mpesa.png" style="width:30%;margin: 0 35%;">
          </div>
          <div class="row number">
            <div class="info">
              <p style="color:#8F92C3;line-height:1.7;">3. After receiving the payment confirmation message, press "Confirm Payment" to finish making your order</p>
              <input type="hidden" name="phone_number" value="<?php echo isset($_SESSION["phone"]) ? $_SESSION["phone"] : ''; ?>" />
              <input type="hidden" name="orderNo" value="<?php echo isset($_SESSION["MerchantRequestID"]) ? $_SESSION["MerchantRequestID"] : ''; ?>" />
            </div>
          </div>
        </div>
      </div>
      <div class="button">
        <button type="submit"><i class="ion-locked"></i> Confirm Payment</button>
      </div>
    </form>
    <p style="color:#8F92C3;line-height:1.7;margin-top:5rem;">Copyright 2022 | All Rights Reserved | Made with lots of <i class="fab fa-gratipay"></i> by Evans & Jacob</p>
  </div>
</body>
</html>
