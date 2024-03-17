<?php

if(isset($_POST['book']))
{
    session_start();
    include 'connect.php';
    $date=date("Y-m-d");
    // echo date("Y-m-d");
    
    $ticket=$_POST['qty'];
    if(empty($_POST['qty']))
    {
        $ticket=1; 
    }
    $name=$_SESSION['name'];
    $ename=$_POST['ename'];
    $price=$_POST['price'];
    $tot=$ticket*$price;
    // echo $ticket.$name.$tot;
    $sql="INSERT INTO `booked_tickets`(`name`, `event_name`, `no_of_tickets`, `total`,`date`) 
    VALUES ('$name','$ename','$ticket','$tot','$date')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
    header("location:home.php");
    }
}


?>