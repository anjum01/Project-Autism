<?php

require 'connection.php';

$qry=$con->prepare("select * from forum_table");
	
	$qry->execute();
	
	$row=$qry->fetchAll();

        if (isset($_POST['search'])) {


    $event_title=$_POST['event_title'];


    $qry=$con->prepare("select * from event_table where event_title like '$event_title%'");
    
    $qry->execute();
    
    $row=$qry->fetchAll();
}
    //var_dump($row);
 
?>

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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel='stylesheet' type='text/css' >


    <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

   
    <link href="styles/forum.css" rel="stylesheet">
	
    <style>
	#read_comments{
		display:block;
	}
	</style>
    

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

            <a href="index.php" style="font-size:20px;cursor:pointer; color:#eee !important; float:right; margin-top:1%; text-decoration: none;"> Go Back</a>

            
</nav>

<!-- Navigation -->

<header>
		<div class="header">
		<h1>Welcome to Autism Forum</h1>
		</div>
</header>

<!-- Content -->
        <?php
 foreach($row as $result)
{
    ?> 
		 <div class="row">
			<div class="leftcolumn">
				<div class="media-content">
				   <h1> Recent Posts </h1><br>
                   <img src="images/<?php echo $result['event_image']; ?>" style="height:315px, width:900px;"></img>
            		<div class="primary-content">
					    <h2><?php echo $result['event_title']; ?></h2>
						<ul class="entry-meta">
						<li class="date"><?php echo $result['event_date']; ?></li>
						</ul>
                        <p><?php echo $result['event_description']; ?><b><a href="" target="_blank"> Read More...</a></b> </p>
                        </div>
						<!-- Like-Unlike-->
				          <div class="like-unlike">
				             <i class="fa fa-thumbs-up icon"></i>
				             <i class="fa fa-thumbs-down icon"></i>
				          </div>	
					
          <!-- User Reply -->

				              <div class="user-reply">
				              <button class="btn" id="read_comments" onclick="myFunction()" >Read Comments</button>
				
				              <div id="comments" style="display:none;"class="row2">
				             
               <!-- commentlist -->
                              <ol class="commentlist">

                                 <li class="depth-1">

                                     <div class="user-dp">
                                     <img width="50" height="50" class="user-dp" src="assets/images/avatars/7.png" alt="">
                                     </div>

                                         <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Quazi Maliha</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                             </div>
	                                        </div>

	                                                <div class="comment-text">
	                                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
	                                                   facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	                                                </div>

	                                    </div>

                                </li>

                                <li class="thread-alt depth-1">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/8.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Sumi Ismail</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                             </div>
	                                       </div>

	                                                <div class="comment-text">
	                                                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
	                                                   urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
	                                                   tantas semper delicatissimi.</p>                        
	                                                </div>

	                                    </div>

                                <ul class="children">

                                <li class="depth-2">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/9.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Sourav Hasan</cite>

	                                            <div class="comment-meta">
	                                            <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                            <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                            </div>
	                                       </div>

	                                                <div class="comment-text">
	                                                <p>Duis sed odio sit amet nibh vulputate
	                                                   cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
	                                                   cursus a sit amet mauris</p>
	                                                </div>

                                        </div>

                               <ul class="children">

                               <li class="depth-3">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/10.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Sagar Paul</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                            </div>
	                                       </div>

	                                                <div class="comment-text">
	                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
	                                                   etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
	                                               </div>

                                       </div>

                              </li>

                              </ul>

                              </li>

                              </ul>

                              </li>

                              <li class="depth-1">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/11.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                         <div class="comment-info">
	                                         <cite>Mahmud Pulock</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                            </div>
	                                       </div>

	                                                 <div class="comment-text">
	                                                 <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
	                                                 </div>

                                       </div>

                           </li>

                           </ol> <!-- Commentlist End -->			   
                




                            </div><!-- end user comments -->	<script src="js/forum.js"></script>	
							
							
                 <!-- User Reply Form -->   
			               <button class="btn" onclick="myFunction2()">Leave a comment</button>
                            <div id="reply" class="row3">

                   <!-- respond -->
                             <div class="respond">
                             <form name="contactForm" id="contactForm" method="post" action="">
							 
  					            <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                <input class="input-field" type="text" placeholder="Username" name="usrnm">
                                </div>

                                <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="text" placeholder="Email" name="email">
                                </div>
  
                                <div class="input-container">
                                <i class="fa fa-comment icon"></i>
                                <input class="input-field" type="text" placeholder="Your Message" name="msg">
                                </div>

                          <button type="submit" class="btn2">Submit</button>
  				            </form> <!-- Form End -->

                           </div> <!-- Respond End -->


                           </div>	<!-- User Reply Form End--> <script src="js/forum.js"></script>	
				
               </div> <!-- User Reply End --> 
			   
			   
						<a href="delete_event.php?id=<?php echo $result['id'];?>"> Delete Event</a><br>
       
						<a href="edit_event.php?id=<?php echo $result['id'];?>"> Edit Event</a>
			   
						
                
     	        </div>
				
				<?php 

} ?>
			<form action="add_event.php" method="POST">

					<!--<input type="submit" name="add_event" value="Add an Event">-->
					<button type = "submit" class = "btn btn-primary" name= "add_event" >Add Event</button>
					</form>
				
					
					
						
				<div class="media-content">
				<h1> Trending Topics </h1><br>
				  <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="images/one.jpg" style="width:100%">
                            
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="images/two.jpg" style="width:100%">
                             
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="images/three.jpg" style="width:100%">
                            
                        </div>

                  </div>
                  <br>

                  <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  </div>

<script src="js/forum.js"></script>	


            	<div class="primary-content">
					    <h2>Misconceptions About Autism | Autism</h2>
						<ul class="entry-meta">
						<li class="date">April 24, 2018</li>
						</ul>It is estimated that 1 in 68 children born in the U.S. have an Autism Spectrum Disorder (ASD), according to the Autism Society, yet despite its prevalence there are still many common misconceptions about autism. There is still much to learn about autism, but here are a few myths we know are not true that<b><a href="" target="_blank"> Read More...</a></b> </p>
                        </div>
					<!-- Like-Unlike-->
				          <div class="like-unlike">
				             <i class="fa fa-thumbs-up icon"></i>
				             <i class="fa fa-thumbs-down icon"></i>
				          </div>	
					
          <!-- User Reply -->

				              <div class="user-reply">
				              <button class="btn" onclick="myFunction()">Read Comments</button>
				
				              <div id="comments" class="row2">
				             
               <!-- commentlist -->
                              <ol class="commentlist">

                                 <li class="depth-1">

                                     <div class="user-dp">
                                     <img width="50" height="50" class="user-dp" src="assets/images/avatars/7.png" alt="">
                                     </div>

                                         <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Quazi Maliha</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                             </div>
	                                        </div>

	                                                <div class="comment-text">
	                                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
	                                                   facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	                                                </div>

	                                    </div>

                                </li>

                                <li class="thread-alt depth-1">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/8.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Sumi Ismail</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                             </div>
	                                       </div>

	                                                <div class="comment-text">
	                                                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
	                                                   urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
	                                                   tantas semper delicatissimi.</p>                        
	                                                </div>

	                                    </div>

                                <ul class="children">

                                <li class="depth-2">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/9.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Sourav Hasan</cite>

	                                            <div class="comment-meta">
	                                            <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                            <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                            </div>
	                                       </div>

	                                                <div class="comment-text">
	                                                <p>Duis sed odio sit amet nibh vulputate
	                                                   cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
	                                                   cursus a sit amet mauris</p>
	                                                </div>

                                        </div>

                               <ul class="children">

                               <li class="depth-3">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/10.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                        <div class="comment-info">
	                                        <cite>Sagar Paul</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                            </div>
	                                       </div>

	                                                <div class="comment-text">
	                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
	                                                   etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
	                                               </div>

                                       </div>

                              </li>

                              </ul>

                              </li>

                              </ul>

                              </li>

                              <li class="depth-1">

                                    <div class="user-dp">
                                    <img width="50" height="50" class="user-dp" src="assets/images/avatars/11.png" alt="">
                                    </div>

                                        <div class="comment-content">

	                                         <div class="comment-info">
	                                         <cite>Mahmud Pulock</cite>

	                                             <div class="comment-meta">
	                                             <time class="comment-time" datetime="2018-05-26T23:05">May 26, 2018 @ 23:05</time>
	                                             <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                                            </div>
	                                       </div>

	                                                 <div class="comment-text">
	                                                 <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
	                                                 </div>

                                       </div>

                           </li>

                           </ol> <!-- Commentlist End -->			   
                




                            </div><!-- end user comments -->	<script src="js/forum.js"></script>	
							
							
                 <!-- User Reply Form -->   
			               <button class="btn" onclick="myFunction2()">Leave a comment</button>
                            <div id="reply" class="row3">

                   <!-- respond -->
                             <div class="respond">
                             <form name="contactForm" id="contactForm" method="post" action="">
							 
  					            <div class="input-container">
                                <i class="fa fa-user icon"></i>
                                <input class="input-field" type="text" placeholder="Username" name="usrnm">
                                </div>

                                <div class="input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input class="input-field" type="text" placeholder="Email" name="email">
                                </div>
  
                                <div class="input-container">
                                <i class="fa fa-comment icon"></i>
                                <input class="input-field" type="text" placeholder="Your Message" name="msg">
                                </div>

                          <button type="submit" class="btn2">Submit</button>
  				            </form> <!-- Form End -->

                           </div> <!-- Respond End -->


                           </div>	<!-- User Reply Form End--> <script src="js/forum.js"></script>	
				
               </div> <!-- User Reply End --> 
			   <a href="delete_event.php?id=<?php echo $result1['id'];?>"> Delete Event</a><br>
				<a href="edit_trading.php?id=<?php echo $result1['id'];?>"> Edit Event</a>
                
		   
				</div>
						
				
			</div>
		<div class="rightcolumn">
				<div class="media-content">
				   <form class="search-box">
                   <input type="text" name="search" placeholder=" Search..">
                   
                   </form>    
				</div>
			<div class="media-content">
			<div class="post">
			<h2><ins>New Posts</ins></h2> 
			
			<div class="post-content">
			<h1><img src="assets/images/avatars/7.png" alt="Avatar" class="avatar"><b>Hello Everyone- I Need Help</b></h1> 
			<p>My Name is Channing I am a 46 years old Female with Autism. I have found out I am going to be homeless Every Thursday, Friday, Saturday and Sunday because the Caretaker who takes care of me on the<b><a href="" target="_blank"> Read More...</a></b</p>
			</div>
			
            
			
			<div class="post-content">
			<h1><img src="assets/images/avatars/8.png" alt="Avatar" class="avatar"><b>I am Being Neglected</b></h1> 
			<p>Hi This is Channing . I have autism. I am Being EXTREMELY SEVERELY NEGLECTED the Caregiver who I am Staying with Does not have Hot Water for Batheing, The Care Giver will not take me to my medical appointments I have an appointment<b><a href="" target="_blank"> Read More...</a></b</p>
			</div>
			
           
			
			<div class="post-content">
			<h1> <img src="assets/images/avatars/9.png" alt="Avatar" class="avatar"><b>How does Eye-Contact"Feel"</b></h1> 
			<p>Hi all, I hope I'm not repeating this. I'd like to hear from anyone willing to share what their inner experiences are when making eye contact. I learned at an early age that I needed to do it for survival. I've had some  <b><a href="" target="_blank"> Read More...</a></b</p>
			</div>
			
			</div>
			</div>
			<div class="media-content">
			        <h1 class="heading"><ins>Forum Rating </ins></h1>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<p>4.1 average based on 254 reviews.</p>
					<hr style="border:2px solid #031b56">

						<div class="rating">
							<div class="side">
								<div>5 star</div>
							</div>
						<div class="middle">
							<div class="bar-container">
							    <div class="bar-5"></div>
							</div>
						</div>
						<div class="side right">
							<div>150</div>
						</div>
						<div class="side">
							<div>4 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
							<div class="bar-4"></div>
							</div>
						</div>
						<div class="side right">
							<div>63</div>
						</div>
						<div class="side">
							<div>3 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
								<div class="bar-3"></div>
							</div>
						</div>
						<div class="side right">
							<div>15</div>
						</div>
						<div class="side">
							<div>2 star</div>
						</div>
						<div class="middle">
								<div class="bar-container">
									<div class="bar-2"></div>
								</div>
						</div>
						<div class="side right">
							<div>6</div>
						</div>
						<div class="side">
							<div>1 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
								<div class="bar-1"></div>
							</div>
						</div>
						<div class="side right">
							<div>20</div>
						</div>
				</div>
		</div>
		<div class="media-content">
				<h2><ins>Autism Spectrum Discussions</ins></h2> 
				<div class="chat-light">
                  <img src="assets/images/avatars/10.png" alt="Avatar" style="width:100%;">
                  <p>What is your level of Autism?</p>
                  <span class="time-right">11:00</span>
               </div>

               <div class="chat-dark">
                 <img src="assets/images/avatars/11.png" alt="Avatar" style="width:100%;">
                 <p>I am moderate.</p>
                 <span class="time-left">11:01</span>
               </div>

               <div class="chat-light">
                  <img src="assets/images/avatars/12.png" alt="Avatar" style="width:100%;">
                  <p>High-functioning.Sometimes I say "hyper-functioning" because, good gracious, I sometimes wish my brain would just stop for 5 minutes and give me some peace!</p>
                  <span class="time-right">11:02</span>
              </div>

              <div class="chat-dark">
                  <img src="assets/images/avatars/9.png" alt="Avatar" style="width:100%;">
                  <p>Well, my diagnostic report states 'moderate Asperger's disorder'</p>
                  <span class="time-left">11:05</span>
              </div>
			  <button class="join">Join the discussion now</button>
		</div>
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
        <button type="button" class="btn btn-default" id="" style="padding:10px; margin-left:-1%; margin-top: -.3%;">Subscribe</button>
        

        </div>

    </footer>




<script src="js/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--<script src="js/forum.js"></script>-->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function myFunction() {
    var x = document.getElementById("comments");
    console.log(x.style.display);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function myFunction2() {
    var x = document.getElementById("reply");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

</script>


</body>
</html>