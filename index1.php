﻿<!DOCTYPE html>

<html>
<head>

    <title>travel booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
  <nav>
    <div class="logo">
        <i class="fa fa-plane"></i>
        <p style="display: inline-block" >  India's Largest Travel Site</p>
</div>
    
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#exploit">Exploit</a></li>
            <li><a href="#collection">Collection</a></li>
            <li><a href="#contact">Contact</a></li>
    </nav>
       
        <section class="home" id="home">
       
       
        <a href="#exploit" class="btn">Get started</a>
        <div class="par">
        <p>Take only memories, leave only footprints</p>
        </div>
    </section>
    <section class="exploit" id="exploit">
        <p><br>
        <br>
    <br>
<br></p>
        <h1 class="heading">Exploiot idea !</h1>
        <div class="box-container">

            <div class="box">
                <img src="sab4.jpg" alt="">
                <h3>Wonderla</h3>
                <a href="https://www.wonderla.com/" class="btn1">read more</a>
            </div>
            <div class="box">
                <img src="sab5.jpg" alt="">
                <h3>Mountaineering</h3>
                <a href="https://en.wikipedia.org/wiki/Mountaineering" class="btn1">read more</a>
            </div>
            <div class="box">
                <img src="sab6.jpg" alt="">
                <h3>Parachute Ride</h3>
                <a href=https://deepdive.ist/en/parachute-riding-in-istanbul/" class="btn1">read more</a>
            </div>
            <div class="box">
                <img src="sab7.jpg" alt="">
                <h3>Jet Ski Ride</h3>
                <a href=https://www.thrillophilia.com/tours/jet-skiing class="btn1">read more</a>
            </div>
    </section>
    <section class="collection" id="collection">
        <div class="col">
            <div class="col1">
                <p><br>
                    <br>
            </p>
                <h1>Popular places</h1>
            </div>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="col1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ladakh</h3>
                    <a href="#contact" class="btn2">visit now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="col2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Taj Mahal</h3>

                    <a href="#contact" class="btn2">visit now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="col3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Golden Temple</h3>

                    <a href="#contact" class="btn2">visit now</a>
                </div>
            </div>
            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="col4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Himachal pradesh</h3>
                        <a href="#contact" class="btn2">visit now</a>
                    </div>
                </div>
                </div>
    </section>
    <section class="contact" id="contact">

        <div class="mob">
            <div class="mob1">
                <h1>contact us form</h1>
            </div>
            <div class="contact1">
                <form method="post" action="contact.php">
                    <div class="input-fields">

                        <input type="text" class="input" placeholder="Name" name="name">
                        <input type="email" class="input" placeholder="Email Address" name="email" pattern=".+@gmail\.com">
                        <input type="phone" class="input" placeholder="Phone" name="phone">
                        <input type="text" class="input" placeholder="Subject" name="subject">
                    </div>
                    <div class="msg">
                        <textarea placeholder="Message" name="message"></textarea>
                        <div class="btn1"><button type="submit">send</div>
                </form>
            </div>
        </div>
        </div>

    </section>
    


</body>
</html>