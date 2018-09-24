
<?php

session_start();


$con = mysqli_connect("localhost", "root", "" ,"autism_db");


error_reporting(E_ERROR | E_PARSE); 

if(isset($_REQUEST['search'])){

    

    $speciality=$_POST['speciality'];
    $area=$_POST['area'];

    $sql=" SELECT * FROM doc_register WHERE speciality like '%".$speciality."%' AND division like '%".$area."%'";
    $q=mysqli_query($con, $sql);



}
else{

    
    /*$sql="SELECT * FROM users";
    $q=mysqli_query($con, $sql); */
}


?>




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

    <link href="styles/find_specialist.css" rel="stylesheet">




</head>
<body>


<!-- Navigation -->

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img src="assets/images/logo.png" alt="iit1"><a class="navbar-brand" href="index.php">Autism Circle</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  
   <a href="#join">About</a>
    <a href="#search">Search</a>
  <a href="index.php">Go Back</a>

  
 
</div>

 <span style="font-size:20px;cursor:pointer; color:#eee !important; float:right; margin-top:1%;" onclick="openNav()">&#9776; open</span>

</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

</div>
</nav>

<!-- Navigation -->


<div class="container-fluid">

<div class="front_image" id="join">

  <img src="images/ask-doctor.jpg" alt="Snow" style="width:102%">

  <h3 style="position: absolute;">ARE YOU AN AUTISM SPECIALIST?<br><br> Or a DOCTOR in related fields? <br><br> We are continuously in need of best of doctors & consultants <br> to help to manage & cure Autism & to be a better community. </h3>
  <button class="btn0" onclick="location.href='doc-signup.php'" type="button" >JOIN NOW</button>


               



<!-- member Login-->
                        <div class="example1">
                            <!-- Trigger the modal with a button -->
  <button type="button" class="btn1" id="myBtn">START HELPING PATIENTS</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock" style="color:white;"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">


        <?php


//if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 if (isset($_POST['login'])){   

$myemail = isset($_POST['email']) ? $_POST['email'] : '';
$mypass= isset($_POST['password']) ? $_POST['password'] : '';
    if ($myemail == '' || $mypass == '') {
        echo " <div class='alert alert-danger'>Enter Username or Password!</div>";

}

else
{


$con = mysqli_connect("localhost", "root", "" ,"autism_db");


$sql="select * from doc_register where email = '$myemail' and password='$mypass'" or die("query error");
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result)>0)
{

     $_SESSION['email']=$myemail;

   while($row = mysqli_fetch_array($result)){

        $_SESSION['email']=$row['email'];

}
    echo "<script>location.href='doc-profile.php'</script>";

 
}
else
{
    echo " <div class='alert alert-danger'>Your Username or Password is incorrect!!!</div>";
    echo ""; 
 
}
}
}



?>


          <form role="form" action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope" style="color:black;"></span> Email</label>
              <input type="text" class="form-control" id="usrname" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open" style="color:black;"></span> Password</label>
              <input type="text" class="form-control" id="psw" name="password" placeholder="Enter password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" name="login" ><span class="glyphicon glyphicon-off" style="color:white;"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" style="margin-right:50%;"><span class="glyphicon glyphicon-remove" style="color:white;"></span> Cancel</button>
          <p>Not a member? <a href="check_registration.php">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 



                        <div style="clear:both"></div>
                        </div>




                    <!-- End member Login-->







  </div>



<div class="module1" id="search">


    <div class="container st-submit">
        
                <div class="row">
                    
                    <h3 class="col-md-offset-5 col-md-6" >Search Specialists</h3>
                </div><br>

                
                 <form action="" method="post" enctype="multipart/form-data">
            
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="control-label col-md-5" for="name">Select Required Speciality</label>
                        <div class="col-md-7" style="margin-left:-5%;">
                            <select class="form-control" name="speciality" >
                                  <option>Select Speciality</option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>C</option>
                                  <option>D</option>
                                  <option>E</option>
                                  <option>F</option>
                                  <option>G</option>
                                  <option>H</option>
                                  
                                  </select>
                        </div>
                    </div>


                    <div class="form-group col-md-6">
                            <label class="control-label col-md-5" for="name">Select Your Preferred Area</label>
                        <div class="col-md-7" style="margin-left:-5%;">
                            <select class="form-control" name="area" >
                                  <option>Select Area</option>
                                  <option>Dhaka</option>
                                  <option>Chottogram</option>
                                  <option>Rajshahi</option>
                                  <option>Barishal</option>
                                  <option>Sylhet</option>
                                  <option>Khulna</option>
                            
                                  
                                  </select>
                        </div>
                    </div>


                    </div><br><br><br>
                    <div class="row"> 
                        <div class="col-md-offset-5 col-md-2"> 
                            <!-- <a href="info.php"><button class="btn btn-primary">Submit</button> </a> -->
                            <input class="btn btn-primary" type="submit" name="search" value="submit"><br><br><br><br>

                            
                        </div>
                    </div>
 
                </form>
                
                
        </div>



</div>
  <!--module2-->

    
 
        <!--<div class="module2" style="background-color: #eff1f4; margin-left: -1%; margin-right: -1%;">

                
                <div class="sub-module" style="width:98%; margin-left:1%;">

                    <div class="row">
                    
                   -->

                   <section id="module2"> 

                   
                      <table style="margin-bottom: 6%;">

                       <?php if ($q=mysqli_query($con, $sql)){ ?>  

                       <h3 style="margin-top:1%; margin-bottom: 4%; text-align: center;"> YOUR SEARCH RESULT </h3>

                       <div class="msgBtn">

                       <h4>*** <span>SEND MESSAGE & GET APPOINTMENT</span> ***</h4><br>
                       <p> For any query send a message! <br>('DOC ID' is required!)</p>
                       
                <button class="btn btn-info btn-lg" name="send" onclick="window.location.href='doc-info.php'" style="float:center;" > Send Message</button>

                </div>


                      <tr>
                            <td style="background-color: #D8D8D8;">DOC ID</td>
                            <td style="background-color: #D8D8D8;">Image</td>
                            <td style="background-color: #D8D8D8;">First Name</td>
                            <td style="background-color: #D8D8D8;">Last Name</td>
                            <td style="background-color: #D8D8D8;">Speciality</td>
                            <td style="background-color: #D8D8D8;">Address</td>
                             <td style="background-color: #D8D8D8;">Division</td>
                             <td style="background-color: #D8D8D8;">Phone</td>
                              <td style="background-color: #D8D8D8;">Email</td>
                            <td style="background-color: #D8D8D8;">Social ID</td>
                        </tr>

                         <?php } ?>

                        
                       <?php while($row = mysqli_fetch_array($q)):?>

                    

                        
                        <tr>
                            <td><?php echo $row['doc_id'];?></td>
                            <td><img src="images/doc_image/<?php echo $row['image']; ?>" alt="image" width=60; height=60;></td>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['speciality'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['division'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><a href="https://www.facebook.com/<?php echo $row['facebook'];?>" class="fa fa-facebook"></a>
                <a href="https://www.twitter.com/<?php echo $row['twitter'];?>" class="fa fa-twitter"></a></td>

                            
                        </tr>

                         
                        
                         <?php endwhile;?>   
                    </table>

                

                    

                  



                 
                    
                   </section>
                    <!--module2-->

                     

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
        <button type="button" class="btn btn-default" id="" style="padding:10px; margin-left:-1%; margin-top: -.5%;">Subscribe</button>
        

        </div>

    </footer>








<script src="js/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>
   