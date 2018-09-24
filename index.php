<!DOCTYPE html>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>Project Autism</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="styles/demo.css" rel="stylesheet">
   
    <link href="styles/index.css" rel="stylesheet">




</head>
<body>


<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img src="assets/images/logo.png" alt="iit1"><a class="navbar-brand page-scroll" href="#page-intro">Autism Circle</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
               
                    <li>
<!-- Modal login form-->


             <!-- Button to open the modal login form -->
<button class="login" onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="check_login.php" method="POST">
    <div class="imgcontainer">
      <img src="assets/images/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" required><br>

      <label><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required><br>

      <button type="submit" class="submitbtn" name="login">Login</button><br>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1; width:100%;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#" style="color:blue;">password?</a></span><br>
      <span class="psw">Not a member? <a href="signup.php" style="color:blue;">Sign Up!</a></span>
    </div>
  </form>
</div> 

<!-- Modal login form-->

            </li>
             </ul>

            </div>
            <!-- /.navbar-collapse -->



        </div>
        <!-- /.container-fluid -->
    </nav>


<div
        class="parallax-image-wrapper"
        data-anchor-target="#page-intro"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/image5.jpg)"
            data-anchor-target="#page-intro"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>
<div
        class="parallax-image-wrapper"
        data-anchor-target=".body-text + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/image2-bw.jpg)"
            data-anchor-target=".body-text + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>
<div
        class="parallax-image-wrapper"
        data-anchor-target=".features-list + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/image3-bw.jpg)"
            data-anchor-target=".features-list + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>
<div
        class="parallax-image-wrapper"
        data-anchor-target=".about-us + .gap"
        data-bottom-top="transform:translateY(200%)"
        data-top-bottom="transform:translateY(0)">

    <div
            class="parallax-image"
            style="background-image:url(assets/images/image4-bw.jpg)"
            data-anchor-target=".about-us + .gap"
            data-bottom-top="transform: translateY(-80%);"
            data-top-bottom="transform: translateY(80%);"
            >

    </div>
</div>

<div id="skrollr-body">



    <div id="page-intro" class="gap" style="background-image:url(assets/images/image5.jpg); ">

    <div class="intro-bottom">

    <h1>Awareness</h1>

    <h1>Acceptance</h1>


    </div>
        
    </div>


    <div id="about" class="body-text content">

        <h2>About Autism</h2>

        <p data-300-center-top="transform: scale(0.8); opacity: 0" data-300-center-center="transform: scale(1); opacity: 1">
            Autism spectrum disorder (ASD) is a complex developmental disability; signs typically appear during early childhood and affect a person’s ability to communicate, and interact with others. ASD is defined by a certain set of behaviors and is a “spectrum condition” that affects individuals differently and to varying degrees. 
        </p>


        <p data-200-center-top="transform: scale(0.8); opacity: 0" data-200-center-center="transform: scale(1); opacity: 1">
            Some of the behaviors associated with autism include delayed learning of language; difficulty making eye contact or holding a conversation; difficulty with executive functioning, which relates to reasoning and planning; narrow, intense interests; poor motor skills’ and sensory sensitivities.
        </p>

        <p data-100-center-top="transform: scale(0.8); opacity: 0" data-100-center-center="transform: scale(1); opacity: 1">
            There is no known single cause of autism, but increased awareness and early diagnosis /intervention, access to appropriate services /supports and proper healthcare lead to significantly improved outcomes. The diagnosis of autism spectrum disorder is applied based on analysis of all behaviors and their severity. 
        </p>

    </div>

    <div class="gap" style="background-image:url(assets/images/image2-bw.jpg); "></div>

    <div id="features" class="features-list">

        <h2>Features</h2>

       <a href="circle.php"><div data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">location_on</i>
            <h4>Find an <b>Autism Circle</b> of your own</h4>
        </div></a>

        <a href="awareness_hub.php"><div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">live_tv</i>
            <h4>Look into our <b>awareness hub</b></h4>
        </div></a>

        <a href="forum_without_logins.php"><div data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1">
            <i class="material-icons">forum</i>
            <h4> Visit daily our <b>Autism Forum</b></h4>
        </div></a>

        <a href="aq.php"><div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">exposure</i>
            <h4><b>Autism</b> Spectrum Quotient</h4>
        </div></a>

        <a href="find_specialist.php"><div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">person_add</i>
            <h4>Find the best <b>Specialists</b></h4>
        </div></a>

        <a href="Userfeedback-edited.php"><div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">feedback</i>
            <h4>Give us a <b>Feedback</b></h4>
        </div></a>

        <a href="autism_bot.php"><div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">android</i>
            <h4>Talk to our <b>AutismBot</b></h4>
        </div></a>


    </div>

    <div class="gap" style="background-image:url(assets/images/image3-bw.jpg); "></div>


    <div id="team" class="about-us">

        <h2>MEET <span style="font-size:20px;">the</span> TEAM</h2>

        <div data-150-bottom-center="transform: rotate(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1">
            <img src="assets/images/avatars/10.png" alt="avatar">

           <h3 style="padding:2%; color:#5a5e56; font-weight:bold; font-size:;">Dr. Md Whaiduzzaman</h3>
           <h4>FOUNDER</h4>
           
        </div>

        <div data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1">
            <img src="assets/images/avatars/7.png" alt="avatar">
            <h3 style="padding:2%; color:#5a5e56; font-weight:bold; font-size:;">Anjum Ismail Sumi</h3>
           <h4>DEVELOPER</h4>
        </div>

        <div data-50-bottom-center="transform: rotate(-90deg); opacity: 0" data-50-center-center="transform: rotate(0); opacity: 1">
            <img src="assets/images/avatars/12.png" alt="avatar">
            <h3 style="padding:2%; color:#5a5e56; font-weight:bold; font-size:;">Quazi Maliha Masud</h3>
           <h4>DEVELOPER</h4>
        </div>

        <div data-150-bottom-center="transform: rotateY(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1">
            <img src="assets/images/avatars/8.png" alt="avatar">
            <h3 style="padding:2%; color:#5a5e56; font-weight:bold; font-size:;">Puja Roy</h3>
           <h4>MARKETING MANAGER</h4>
        </div>

        <div data-100-bottom-center="transform: rotateY(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1">
            <img src="assets/images/avatars/9.png" alt="avatar">
            <h3 style="padding:2%; color:#5a5e56; font-weight:bold; font-size:;">Raihan Mahmud Pulock</h3>
           <h4>DEVELOPER</h4>
        </div>

        <div data-50-bottom-center="transform: rotateY(-90deg); opacity: 0" data-50-center-center="transform: rotate(0); opacity: 1">
            <img src="assets/images/avatars/11.png" alt="avatar">
            <h3 style="padding:2%; color:#5a5e56; font-weight:bold; font-size:;">John Doe</h3>
           <h4>ADVISOR</h4>
        </div>

        <a class="attribution"></a>

    </div>
    <div class="gap" style="background-image:url(assets/images/image4-bw.jpg);"></div>

    <div id="gallery" class="gallery">
    </div>



<div class="scroll-pause" data-anchor-target=".gallery" data-100p-top-top="transform:translateY(100%);" data-top-top="transform:translateY(0%)" data--150p-top-top="" data--300p-top-top="transform:translateY(-100%)">

    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(0%);" data--150p-top-top="transform: translateX(-50%);">
        <div style="background-image:url(assets/images/small/image1.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image2.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image3.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image4.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image5.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image6.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image1.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image2.jpg);" ></div>
    </div>


    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(-50%);" data--150p-top-top="transform: translateX(0);">

        <div style="background-image:url(assets/images/small/image3.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image4.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image5.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image6.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image1.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image2.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image3.jpg);" ></div>

        <div style="background-image:url(assets/images/small/image4.jpg);" ></div>

    </div>

</div>



    <footer id="contact">

        <div class="footer-left">

            <h3>Autism Circle</h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Donation</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="social-buttons">


                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>


            </p>

            <p class="footer-company-name">Autism Circle &copy; 2017</p>

        </div>

        <div class="footer-right"  data-bottom-top="max-width: 600px;" data-bottom-bottom="max-width: 600px;">

            <form method="get" action="#">
                <input placeholder="Search our website"  />
                <i class="material-icons">search</i>
            </form><br><br>

            <h3 class="text-uppercase" style="font-size: 15px; font-family: Montserrat; font-weight:bolder;">Subscribe to our newsletter</h3><br>

        <input type="email" placeholder="Your Email" style="padding:10px;">
        <button type="button" class="btn btn-default" id="" style="padding:9px; margin-left:-1%; margin-top: -.5%;">Subscribe</button>
        

        </div>

    </footer>


</div>

<script src="js/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>