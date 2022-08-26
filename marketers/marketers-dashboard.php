<?php 
  include "../backend/conn.php";

  session_start();

  $marketer_id = $_SESSION['mkt_id'];

  if(!isset($marketer_id)){
    header ("Location: ../index.php") ;
  }
  $query = mysqli_query($conn, "SELECT * FROM marketers WHERE marketers_id = '$marketer_id'")or die(mysqli_error($conn));
  $arr = mysqli_fetch_array($query);
  $fullname = $arr['fullname'];
  $email_address = $arr['email_address'];
  $ref_code = $arr['ref_code'];

?>
<!DOCTYPE html>
<html lang ="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=1">
        <title>SHOPLY - MARKETERS DASHBOARD</title>
        <link rel="stylesheet" href="css/gen1.css" type = 'text/css'/>
    <link rel="stylesheet" href="css/marketers-dashboard.css" type = 'text/css' media="screen and (min-width:781px)" />
        <link rel="stylesheet" href="css/marketers-dashboard-mobile.css" type = 'text/css' media="screen and (max-width:781px)" />
    <script type = 'text/javascript' src = '../js/jquery.js'></script>
    <script type = 'text/javascript' src = 'js/index.js'></script>
</head>
<body>
  <main>
    <section id="em-section-1">
      <nav id="section-1-nav">
        <img src="images/4.png">
      </nav>

      <div id="section-1-content">
        <h2>NAME: <?php echo $fullname ?></h2>
        <h2>EMAIL: <?php echo $email_address; ?></h2>
      </div>
    </section>
    <section id="em-section-2">
      <nav id="section-2-nav">
        <ul>
          <li>REF. CODE</li>
          <li>TOTAL DOWNLINES</li>
          <li>TOTAL EARNINGS</li>
        </ul>
      </nav>
      <div id="section-2-text">
        <h2> <?php echo $ref_code; ?> </h2>
        
      </div>
      <div id="section-2-content">
        <?php   fetch_downlines($ref_code)   ?>
        
      </div>

      <a href="../logout.php"><input type="button" id="btn1" value="LOG OUT"></a>

        
    </section>
  </main>

  <?php 
  
  function fetch_downlines($ref_code){
      
      include "../backend/conn.php";

      $query = mysqli_query($conn, "SELECT * FROM business_account WHERE
       ref_code = '".mysqli_real_escape_string($conn, $ref_code)."' ")or die(mysqli_error($conn));

       if (mysqli_num_rows($query) > 0){
        echo "
        <table>
        <thead>
          
        
            <td>BUSINESS</td>
            <td>STATUS</td>
            <td>DATE</td>
            <td>EXPECTED <br>PAYMENT</td>
            <td>CASHOUT</td>
          
          
        </thead>
        <tbody>

        ";
        // generate table content

        $total_available = 0;
        $total_not_available = 0;
      

        while ($arr = mysqli_fetch_array($query)){
          $biz_name = $arr['business_name'];
          $sub_status = $arr['sub_status'];
          $expected_payment = "1000";
          $cashout = 'NIL';

          if($sub_status == 'trial'){
              $sub_status = 'NOT SUBSCRIBED';
              
          }else {
            $sub_status = 'SUBSCRIBED';
            $cashout = "<input type='button' value='Cashout' id='cashout-btn'>";
          }

          if($sub_status == 'SUBSCRIBED'){
            $total_available += 1000;
          }else{
            $total_not_available += 1000;
          }

          echo "<tr>
                    <td>$biz_name</td>
                    <td>$sub_status</td>
                    <td>NIL</td>
                    <td>$expected_payment</td>
                    <td>$cashout</td>
          
          </tr>";

          
        }
        echo"

        </tbody>
        </table>
        ";
        echo "<p>Available Funds = $total_available <input type='button' value='Cashout' id='cashout-btn'></p>
              <p>Not Available Funds = $total_not_available</p>";
       }else{
        echo "You have no subscribers yet";
       }

       

  }
  
  
  ?>
</body>
</html>