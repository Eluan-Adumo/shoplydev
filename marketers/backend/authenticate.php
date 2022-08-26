<?php 

session_start();
include "../../backend/conn.php";

$m_name = $_POST ['m_name'];
$m_email = $_POST ['m_email'];
$m_dob = $_POST ['m_dob'];
$m_phone = $_POST ['m_phone'];

$query = mysqli_query($conn, "SELECT * FROM marketers WHERE 
email_address = '".mysqli_real_escape_string($conn, $m_email)."' 
AND date_of_birth = '".mysqli_real_escape_string($conn, $m_dob)."'") or die (mysqli_error($conn));


	if(mysqli_num_rows($query) > 0){
	echo "user already exixts";
	}else{

    $ref_code = generate_ref_code();
    $query = mysqli_query($conn, "INSERT  INTO marketers(
      fullname,
      email_address,
      ref_code,
      date_of_birth,
      phone_number
      )VALUES(
        '".mysqli_real_escape_string($conn, $m_name)."',
        '".mysqli_real_escape_string($conn, $m_email)."',
        '".mysqli_real_escape_string($conn, $ref_code)."',
        '".mysqli_real_escape_string($conn, $m_dob)."',
        '".mysqli_real_escape_string($conn, $m_phone)."'
        
        )")or die(mysqli_error($conn));
        $id = mysqli_insert_id($conn);
        $_SESSION['mkt_id']=$id;
        echo "success";
  }
  function generate_ref_code(){
    include "../../backend/conn.php";
    $code =  "SM";
    $random_value = rand(1000, 9999);

    $final_code = $code."".$random_value;

    $query = mysqli_query($conn, "SELECT ref_code FROM marketers WHERE ref_code = '".mysqli_real_escape_string($conn, $final_code)."'")or die(mysqli_error ($conn));
    $count = mysqli_num_rows($query);
    if($count > 0){
      generate_ref_code();
    }else{
      return $final_code;
    }
  }









?>