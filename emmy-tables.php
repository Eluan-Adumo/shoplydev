<?php 
include "../../backend/conn.php";

$query = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS marketers(
	marketers_id 		INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fullname		VARCHAR(100) NOT NULL,
	date_of_birth		VARCHAR(100) NOT NULL,
	email_address			VARCHAR(50) NOT NULL,
	ref_code				VARCHAR(10) NOT NULL,
	phone_number		VARCHAR(20) NOT NULL,
	date_registered		DATETIME NOT NULL
)")or die(mysqli_error($conn));

$query = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS marketers_payment_request(
	marketers_request_id         INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  marketers_id              INT NOT NULL,
  account_id              INT NOT NULL,
  amount_to_pay           VARCHAR(50) NOT NULL,
  status                  VARCHAR(50) NOT NULL
  )")or die(mysqli_error($conn));

$query = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS marketers_account_details(
  marketers_account_id      INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  marketers_id              INT NOT NULL,
  marketers_bank_name       VARCHAR(50) NOT NULL,
  marketers_account_name    VARCHAR(50) NOT NULL,
  marketers_account_number  VARCHAR(50) NOT NULL
)")or die(mysqli_error($conn));

$query = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS ratings(
  rating_id               INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  merchant_id             INT NOT NULL,
  product_id              INT NOT NULL,
  rate_main               VARCHAR(25) NOT NULL,
  date_rated              DATETIME NOT NULL
)")or die(mysqli_error($conn));








?>