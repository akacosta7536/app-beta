<?php
include('../config/database.php');

//Get data
$f_name=$_POST['fname'];
$l_name = $_POST['lname'];
$e_mail = $_POST['email'];
$m_phone = $_POST['mphone'];
$p_sswd = $_POST['passwd'];

//Query to insert in to SQL
$sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, password)
 VALUES ('joan','$l_name', '$e_mail','$m_phone','$p_sswd')";

 //Execute query
 pg_query ($sql);

