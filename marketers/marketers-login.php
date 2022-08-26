


<!DOCTYPE html>
<html lang ="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=1">
        <title>SHOPLY - MARKETERS LOGIN</title>
        <link rel="stylesheet" href="css/gen1.css" type = 'text/css'/>
    <link rel="stylesheet" href="css/marketers-login.css" type = 'text/css' media="screen and (min-width:781px)" />
        <link rel="stylesheet" href="css/marketers-login-mobile.css" type = 'text/css' media="screen and (max-width:781px)" />
    <script type = 'text/javascript' src = '../js/jquery.js'></script>
    <script type = 'text/javascript' src = 'js/index.js'></script>
</head>
<body>
  
    <nav id="header-section">
      <img src="images/4.png">
    </nav>
      
    <section id="first-section">
      <img src="images/41.png" id="img-sect">
      <h1>MARKETER <br>LOGIN</h1>
  
    </section>
  
    <section id="form-section">
      <div id="form2">
        
        <div id="email-div">
          <label for="Email">Email:</label>
          <input type="text" name="Email" id="Email" placeholder="Email Address">
        </div>
        
        <div id="date-div">
          <label for="birth-date">D.O.B:</label>
          <input type="text" name="birth-date" id="birth-date" placeholder="YY/MM/DD">
        </div>
        
        
        <button onclick = 'loginMarketer()'>LOGIN</button>
        <p id="form-p">Not Registered yet?</p>
        <a href="marketers-signup.php"><input type="submit" id="btn" value="SIGN UP"></a>
      </div>
    </section>
</body>
</html>