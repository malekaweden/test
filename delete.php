<?php

include 'conn.php';

if(isset($_POST['d']))
{
$user_id=$_POST['d'];
$query1 = $connect->prepare( "DELETE FROM `user_data` WHERE user_ID='{$user_id}'");
$query1->execute();
}
?>