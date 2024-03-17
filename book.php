

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    border: none;
    outline: none;
}
body{
    background: 000;
}
header{
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1000;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: transparent;
    padding: 15px 11%;
    border-bottom: 1px solid transparent;
    transition: all ease .50s;
    background-color: #000;
    opacity: 0.8;
}
p{
    font-size: 2rem;
    font-weight: 600;
}
.navlist{
    display: flex;
    align-items: center;
}
.navlist a{
    color: #ffffff;
    font-size: 2rem;
    font-weight: 600;
    margin: 0 40px;
    transition: all ease .40s;
}
.navlist a:hover{
    color: red;
}
.btn-header{
    background-color: brown;
    color: white;
    text-decoration: none;
    font-size: 25px;
    margin-left: 25px;
    font-weight: bolder;
    border-radius: 20px;
    transition: transform .4s;
    height: 50px;
    width: 150px;
}
.btn-header:hover{
    background-color: red;
}
.logo{
    font-size: 2rem;
    color: #ffffff;
}
span{
    color: red;
    font-size: 3rem;
}
section{
    padding: 120px 5% 100px;
}
.event{
    background-color: #111111;
  background-image: linear-gradient(
    32deg,
    rgba(8, 8, 8, 0.74) 30px,
    transparent
  );
  background-size: 60px 60px;
  background-position: -5px -5px;
    position: relative;
    min-height: 100vh;
    width: 100%;
    /* background: url("photos/494243.jpg.crdownload"); */
    /* background-size: cover;
    background-position: center; */
    display: flex;
    align-items: center;
    justify-content: start;
    flex-direction: column;
    gap: 50px;
}
.main-book{
    display: flex;
    justify-content: start;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    width: 100%;
}
.book-vr{
    height: auto;
    width: 80%;
    background-color: #f2f2f2;
    display: flex;
    justify-content: start;
    flex-wrap: wrap;
    flex-direction: column;
    padding-bottom: 50px;
    align-items: center;
    text-align: center;
    background-size: cover;
    background-position: center;
    border-radius: 30px;
}
.book-vr div{
    padding-bottom: 50px;
}
.text{
    width: 100%;
    display: flex;
    justify-content: start;
    text-align: center;
}
h2{
    color: #fff;
    font-size: 4rem;
}
.book-img{
    padding-top: 20px;
}
.e_n{
    color: #000;
    font-size: 2rem;
}
.bookbtn{
    height: 40px;
    width: 120px;
    background-color: red;
    font-size: 1.1rem;
    border-radius: 10px;

    
}
.bookbtn a{
    text-decoration: none;
    color: #000;
}
.hide{
    display: none;
}

    </style>
</head>
<body>
<header class="sticky">
        <a class="logo" href="#book">Book<span>My</span>Event</a>
        <ul class="navlist">
            <li><a href="home.php">Home</a></li>
            <li><a href="#book">MyTicke</a></li>
			<li><button class="btn-header" name="login">Login</button></li>
        </ul>
    </header>
    <section class="event" id="home">
        <div class="text">
            <div class="text-center">
                <h2>Event</h2>
            </div>
        </div>
            <div class="main-book">
                <div class="book-vr">
                <?php  
           include 'connect.php';
           
            $id=$_GET['id'];
                       
           $sql = "SELECT * FROM `eventlist` where eventId='$id'";
           $result = mysqli_query($con, $sql);
       
      
           while ($row = mysqli_fetch_array($result)){
           ?> <form action="bookticket.php" method="Post">
                <div class="book-img"><img width="500px" width="500px" src="<?php echo $row['image'];?>"></div>
                    <div class="how">How many Ticket::<input type="number" name="qty"  min="1" max="100"></div>
                    <div> Event Name:<?php echo $row['Name']; ?></div>
                    <div> <?php echo $row['Description']; ?></div>
                    <div> Venue :-<?php echo $row['Venue']; ?></div>
                    <div> price:-<?php echo $row['price']; ?></div>
                    <input type="text" class="hide" name="ename" value="<?php echo $row['Name']; ?>">
                    
                    <input type="text" name="price" class="hide" value="<?php echo $row['price']; ?>">
                    <div><button class="bookbtn" name="book" class="hide" >Confirm Ticket</button></div>
                </div>
            <?php }?>
            </div>
            
    </section>
</body>
</html>
