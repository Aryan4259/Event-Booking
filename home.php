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
.home{
    background-color: #E8E8E8;
    position: relative;
    min-height: 100vh;
    width: 100%;
    /* background: url("photos/494243.jpg.crdownload"); */
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: flex-start;
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
    justify-content: flex-start;
    flex-direction: column;
    gap: 50px;
}
.main-book{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}
.book-vr{
    height: 400px;
    width: 300px;
    background-color: #f2f2f2;
    display: flex;
    justify-content: start;
    flex-wrap: wrap;
    flex-direction: column;
    gap: 50px;
    align-items: center;
    text-align: center;
    background-size: cover;
    background-position: center;
    border-radius: 30px;
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
</style>
</head>
<body>
<header class="sticky">
        <a class="logo" href="#book">Book<span>My</span>Event</a>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#book">MyTicke</a></li>
			<li><a href="login.php"><button class="btn-header" name="login">Login</button></li></a>
        </ul>
    </header>
    <section class="home" id="home">

    </section>




    <section class="event" id="book">
            <div class="text-center">
                <h2>Events</h2>
            </div>
            <div class="main-book">
                <div class="book-vr">
                    <div class="book-img"><img width="150px" width="100px" src="trading.png"></div>
                    <div class="e_n">Burgar</div>
                    <div><button class="bookbtn"><a href="book.php">Book Now</a></button></div>
                </div>
            </div>
    </section>
</body>
</html>