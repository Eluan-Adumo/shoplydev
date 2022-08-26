<?php 

session_start();
include "../../backend/conn.php";

$m_login_email = $_POST ['m_login_email'];
$m_login_dob = $_POST ['m_login_dob'];

$query = mysqli_query($conn, "SELECT * FROM marketers WHERE 
email_address = '".mysqli_real_escape_string($conn, $m_login_email)."' 
AND date_of_birth = '".mysqli_real_escape_string($conn, $m_login_dob)."'") or die (mysqli_error($conn));

if(mysqli_num_rows($query) < 1){
  echo "please fill in the form";
}else{
  $query = mysqli_query($conn, "SELECT * FROM marketers WHERE
  email_address = '".mysqli_real_escape_string($conn, $m_login_email)."'
  AND date_of_birth = '".mysqli_real_escape_string($conn, $m_login_dob)."'") or die(mysqli_error($conn));

  $row_count = mysqli_num_rows($query);
  if($row_count > 0){
    $arr = mysqli_fetch_array($query);
    $_SESSION['mkt_id']= $arr['marketers_id'];
    
    echo "success";
  }else{
    
}
}




?>