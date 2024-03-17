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
     ?>
     <h1><A href="">Your Ticket Confirm Booking </A></h1>
     <h1><A href="home.php">Back Home</A></h1>
     <table>
        <tr>
        <th>Name</th>
        <th>Number of Ticket</th>
        <th>Total Rs.</th>
        <th>Date</th>
        </tr>
        <tr>
        <th><?php echo $name ?></th>
        <th><?php echo $ticket ?></th>
        <th><?php echo $tot ?></th>
        <th><?php echo $date ?></th>
        </tr>
     </table>
     <?php   

    }
}


?>