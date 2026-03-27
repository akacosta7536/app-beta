<?php
include('../config/database.php');

//Get data
$f_name=$_POST['fname'];
$l_name = $_POST['lname'];
$e_mail = $_POST['email'];
$m_phone = $_POST['mphone'];
$p_sswd = $_POST['passwd'];
$enc_pass = md5($p_sswd);

//Validar email existente
$check_email = "SELECT * FROM users WHERE email = '$e_mail'";
$result_email = pg_query($check_email);

if (pg_num_rows($result_email) > 0) {
    echo "El email ya está registrado";
    exit;
}

//Validar teléfono existente
$check_phone = "SELECT * FROM users WHERE mobile_phone = '$m_phone'";
$result_phone = pg_query($check_phone);

if (pg_num_rows($result_phone) > 0) {
    echo "El número ya está registrado";
    exit;
}

//Query to insert in to SQL
$sql = "INSERT INTO users (firstname, lastname, email, mobile_phone, password)
 VALUES ('$f_name','$l_name', '$e_mail','$m_phone','$enc_pass')";

 //Execute query
 //pg_query ($sql);

 pg_query("BEGIN");

$result = pg_query($sql);

if ($result) {
    pg_query("COMMIT");
    echo "Usuario registrado correctamente";
} else {
    pg_query("ROLLBACK");
    echo "Error en el registro";
}

