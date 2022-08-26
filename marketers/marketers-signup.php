<!DOCTYPE html>
<html lang ="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=1">
        <title>SHOPLY - MARKETERS SIGN UP</title>
        <link rel="stylesheet" href="css/gen1.css" type = 'text/css'/>
    <link rel="stylesheet" href="css/marketers-signup.css" type = 'text/css' media="screen and (min-width:781px)" />
        <link rel="stylesheet" href="css/marketers-signup-mobile.css" type = 'text/css' media="screen and (max-width:781px)" />
    <script type = 'text/javascript' src = '../js/jquery.js'></script>
    <script type = 'text/javascript' src = 'js/index.js'></script>
</head>
<body>
  <nav id="header-section">
      <img src="images/4.png">
    </nav>
    
  <section id="first-section">
    
    <img src="images/41.png" id="img-sect">
    <h1>CREATE MARKETER <br>ACCOUNT</h1>

    <p>and start earning through referrals. Earn 25% from every merchant who registers using your referral code</p>

  </section>

  <section id="form-section">
    <div id="form">
      <div id="name-div">
        <label for="fullname">Name:</label>
        <input type="text" name="fullname" id="fullname" placeholder="Fullname" >
      </div>
      
      <div id="email-div">
        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" placeholder="Email Address">
      </div>
      
      <div id="date-div">
        <label for="birth-date">D.O.B:</label>
        <input type="text" name="birth-date" id="birth-date" placeholder="YY/MM/DD">
      </div>
      
      <div id="phone-div">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="Phone Number">
      </div>
      
      <button onclick='signUpMarketer()'>CREATE</button>
      <p>Already have an account?</p>
      <a href="marketers-login.php"><input type="submit" id="btn" value="LOGIN"></a>
</div>
  </section>
</body>
</html>