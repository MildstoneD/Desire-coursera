<!DOCTYPE html>

<head>
    <title>Soccer Lounge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- start of info nav and main nav -->
        <section>
            <nav class="infonav">
            <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i>soccerlounge@gmail.com</p></a> 
                <ul class="infonav-links">
                    <li>
                        <a href="https://chat.whatsapp.com/Flteb5H8WaGLZ7QqlqWkn" class="icons"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icons"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icons"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icons twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="./membership/login.php" class="login">Login /</a></li>
                    <li><a href="./membership/signup.php" class="signup">Sign up</a></li>
                </ul>
            </nav>
        </section>
        <section class="back-img" id="image-background">
            <nav class="main-nav">
        <h1 class="mainav-title">Soccer Lounge</h1>
                <!-- code for navbar button toggle -->
                <div class="cont-btn" id="ham">
                    <button class="hamburger">
                        <i class="fa fa-bars ham" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- end -->
                <!-- for the navigation links -->
                <ul class="mainav-links" id="links-nav">
                    <li><a href="leagues.php">Leagues</a></li>
                    <li><a href="#">Match Odds</a></li>
                    <li><a href="#">Soccer News</a></li>
                    <li><a href="#">SL Games</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <main>
        <div class="container">
            <div class="news" id='tfnews'>
                <a href="#">
                    <h4> Latest News</h4>
                    <img src="./images/jc-gellidon-HT4y0uWVtn8-unsplash.jpg" alt="">

                </a>
            </div>
            <div class="match-report">
                <a href="#">
                    <h4> Match Reports</h4>
                    <img src="./images/thomas-serer-r-xKieMqL34-unsplash.jpg" alt="">
                </a>
            </div>
            <div class="table" id='fix'>
                <a href="#">
                     <h4> Match Fixtures </h4>
                     <img src="">
                </a>
            </div>
            <div class="trivia">
                    <a href="#">
                        <h4> Sports Trivia </h4>
                        <img scr="">
                    </a>
                </div>
            </div>
        <div class='container'>
            <div class="tab">
            <button class="tablinks" onclick="openCity(event,'Recent-News')" id='defaultTab'>Recent News</button>
            <button class="tablinks" onclick="openCity(event, 'Match-Reports')">Match Reports</button>
            <button class="tablinks" onclick="openCity(event, 'live-Fixtures')">Today's Fixtures</button>
            </div>
            <!-- Tab content -->
            <div id='Recent-News' class="tabcontent">
            <h3>Recent sporting news from around the world</h3>
            </div>
            <div id='Match-Reports' class="tabcontent">
            <h3> Match results and reports</h3>
            </div>
            <div id="live-Fixtures" class="tabcontent">
            <h3> Coming fixtures and match overview</h3>
            </div>
        </div>
        
<!-- Container for the image gallery -->
<div class="image-container">
    <h3> Pictures from some of the best sporting moments this week </h3>
<!-- Full-width images with number text -->
    <div class="Slides">
        <div class="numbertext">1 / 6</div>
           <img src="" style="width:100%">
    <!-- Add links for the images-->
    </div>
    <div class="Slides">
        <div class="numbertext">2 / 6</div>
           <img src="" style="width:100%">
    </div>
   <div class="Slides">
        <div class="numbertext">3 / 6</div>
           <img src="" style="width:100%">
    </div>
    <div class="Slides">
        <div class="numbertext">4 / 6</div>
           <img src="" style="width:100%">
    </div>
     <div class="Slides">
        <div class="numbertext">5 / 6</div>
           <img src="" style="width:100%">
    </div>
     <div class="Slides">
        <div class="numbertext">6 / 6</div>
            <img src="" style="width:100%">
    </div>
<!-- Next and previous buttons copied, please confirm -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>
<!-- Thumbnail images for !Slides -->
<div class="row">
  <div class="column">
    <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="slider name">
  </div>
  <div class="column">
    <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(2)" alt="slider name2">
  </div>
  <div class="column">
    <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(3)" alt="slider name3">
  </div>
  <div class="column">
    <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(4)" alt="slider name4">
  </div>
  <div class="column">
    <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(5)" alt="slider name5">
  </div>
  <div class="column">
    <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(6)" alt="slider name6">
  </div>
</div>
</div>

<div id='poll-cont' >
<!-- Container for polls-->
<h2 class='polls-capt'> Vote for your player of the match week </h2>

<div class='poll-form' id='poll1'>
<h3> Player name </h3>
<img src="" alt="player1">
    <form> 
        select: 
        <label for="polls">Select</label><input type ="checkbox" name ="vote"
        value ="0"
        oncick="getVote(this.value)">
    </form>
</div>
   

<div class='poll-form'>
<h3> Player name2</h3>
<img src="" alt="player2">
    <form> 
        select: <input type ="checkbox" name ="vote"
        value ="0"
        oncick="getVote(this.value)">
    </form>
</div>

<div class='poll-form'>
<h3> Player name3 </h3>
<img src="" alt="player3">
    <form> 
        select: <input type ="checkbox" name ="vote"
        value ="0"
        oncick="getVote(this.value)">
    </form>
</div>

<div class='poll-form'>
<h3> Player name4 </h3>
<img src="" alt="player4">
    <form> 
        select: <input type ="checkbox" name ="vote"
        value ="0"
        oncick="getVote(this.value)">
    </form>
</div>

<div class='poll-form'>
<h3> Player name5</h3>
<img src="" alt="player5">
    <form> 
        select: <input type ="checkbox" name ="vote"
        value ="0"
        oncick="getVote(this.value)">
    </form>
</div>
</div>               
  </main>
<!-- footer html -->
  <footer class="panel-footer">
        <div class="container">
            <div class="row">
                <section id="hours" class="col-sm-4 section-1">
                    <span>Hours:</span><br> Sun-Thurs: 11:15am-10:00pm Fri:11-15am-2:30pm Saturday Closed
                    <hr class="visible-xs">
                </section>
                <section id="address" class="col-sm-4">
                    <span>Address:</span><br> 7105 Reistertown Road <br> Baltimore, MD 21215
                    <p>
                        * Delivery area within 3-4 miles, with minimum order of $20 plus $3 charge for all deliveries.
                    </p>
                    <hr class="visible-xs">
                </section>
                <section id="testimonials" class="col-sm-4">
                    <p>
                        "The best Chinese Restaurant I've been to! And that's saying a lot, since I've been to many!"
                    </p>
                    <p>
                        "Amazing food! Great service! Couldn't ask for more! I'll be back again!"
                    </p>
                </section>
            </div>
            <div class="text-center">
                &copy; Copyright David Chu's China Bistro 2022
            </div>
        </div>
    </footer>
  <script src="script.js"></script>
</body>
</html>