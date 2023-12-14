<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong"> 
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />      
<link rel="stylesheet" href="quiz.css">
</head>
<body>

    <div class="topnav" id="navbar">
        <a class="active" onclick="logo()" id="image">
            <img src="img/36.jpg" height="50px" width="50px" id="logo"/>
          </a>
        <a href="#home">Home</a>
        <a href="#crs">Courses</a>
        <a href="#con">Contact Us</a>
        <a href="login.php" style="float:right"><span id="logout">Log Out</span></a>
        <a class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="fullimageview">
        <img id="fullimage"/>
        <span id="closebutton" onclick="closefullview()">&times;</span>
    </div>
    <a name="home"></a>
    <div class="banner">
        <div class="ban1">
            <h3 class="a1">Don't waste Time</h3>   
            <!--<h3 class="a2">Let's</h3>--> 
            <h1 class="a3"><b>TAKE A QUIZ</b></h1>
            <h3 class="a6">-Attempt more, learn more</h3>
         
            
        </div>
        


    </div>
  
  <a name="crs"></a>
    <div class="cour">
      <div class="row1">
        <h1 class="section-heading">Available Courses</h1>
      </div>
      <div class="row1">
        
        <div class="column1">
          <div class="card1">
            <div class="icon-wrapper">
              <img class="lang" src="img/21.jpeg"/>
            </div>
            <h3 class="hd">C Language</h3>
            <p class="hp">
              Unlike most computer languages C is a "What you see is all you get" programming language.                            
            </p> 
            <a href="index_doop.html"><button class="bt"> play </button></a>
          
          </div>
          
        </div>
     
        <div class="column1">
          <div class="card1">
            <div class="icon-wrapper1">
              <img class="lang" src="img/22.png"/>
            </div>
            <h3 class="hd">Python</h3>
            <p class="hp">
              The canonical, "Python is a great first language", elicited,"Python is the is a great last language"         
            </p>
            <a href="ind_p.html"><button class="bt"> play </button></a>
          </div>
          
        </div>
        
        <div class="column1">
          <div class="card1">
            <div class="icon-wrapper1">
              <img class="lang" src="img/23.jpeg"/>
            </div>
            <h3 class="hd">C++</h3>
            <p class="hp">
              C makes it easy to shoot yourself in foot; C++ makes it harder, but when you do it blows away your whole leg.
            </p>
            <a href="ind_cp.html"><button class="bt"> play </button></a>
          </div>
          
        </div>
        <div class="column1">
          <div class="card1">
            <div class="icon-wrapper1">
              <img class="lang" src="img/24.png"/>
            </div>
            <h3 class="hd">Java</h3>
            <p class="hp">
              Life is like a JAVA Programming, A small mistake.. & there will be a Syntax ERROR!..                            
            </p>
            <a href="ind_j.html" ><button class="bt"> play </button></a>
          </div>
        </div>
       
      </div>
    </div>

   

  <!-- contact section start -->
  <a name="con"></a>
  <section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact Me </h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
               
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Meghana Pasupuleti</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Repalle,AP</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">pasupuletimeghana21@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message me</div>
                <form action="mailto:pasupuletimeghana21@gmail.com" method="GET">
                    
                        <div class="field">
                            <input type="text" placeholder="Name" name="name" required><br>
                        </div>
                        <div class="field">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                      
                    <div class="field">
                        <input type="text" placeholder="Subject" name="subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer section start -->
<footer>
    <span>Created By <a href="#">Meghana Pasupuleti</a></span>
<div>

<a href="https://www.linkedin.com/in/pasupuleti-meghana-a4b8aa25b/"><i class="fa fa-linkedin fa-2x"></i></a>
<a href="https://github.com/Pasupuleti-Meghana"><i class="fa fa-github fa-2x"></i></a>
<a href="https://www.hackerrank.com/profile/pasupuletimegha1"><i class="fa fa-code fa-2x"></i> </a>


</div>
   
    </footer>
    <script src="quiz.js"></script>
</body>
</html>