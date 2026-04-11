<?php
require ("../config/database.php");

$sql_users=" 
   select 
   u.firstname||' '||u.lastname as fullname, -- comillas es para espacio
   u.email,
   u.mobile_phone,
   CASE 
       WHEN u.status = true then 'Activo' else 'Inactivo' end as Status,
	   u.profile_photo
   From 
   users u
   ";

   "update users set profile_photo='profile_photo.png'";
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border ="1" align= "center">
    <tr>
        <th> Fullname </th>
        <th> E-mail </th>
        <th> Mobile phone </th>
        <th> Status </th>
        <th> Photo </th>
        <th> Options </th>
    </tr>    
    
    <tr>
        <td> Peter Loza </td>
        <td> Peter@mail.com </td>
        <td> 300123 </td>
        <td> Active </td>
        <td> <img src="icons/user_default.png" 
        width="60" alt = "user photo" > </td>
        <td> 
        <a href="#"> <img src="icons/pencil.png" width="40" alt="Edit user"> </a>
        &nbsp;&nbsp;
        <a href="#"> <img src="icons/delete.png" width="40" alt="Delete user user"> </a>
        </td>
    </tr>    

</table>

</body>
</html>