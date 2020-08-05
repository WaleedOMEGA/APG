<!DOCTYPE html>
<html lang="en" dir="ltr">
    <!-- HEAD -->
    <head>
        <!-- META -->
		<meta http-equiv="content-type" content="text/html: charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Arab Pharmaceutical Company">
        <meta name="keywords" content="APG apgglass pharmaceutical apg apgco arab waleedomega">
        <meta name="author" content="Waleed OMEGA">
        <!-- END META -->
        <!-- TITLE -->
        <title> A . P . G | Contact Us</title>
        <!-- END TITLE -->
        <!-- ICON -->
        <link rel="icon" href="assets/icons/newlogocrop.ico">
        <!-- END ICON -->
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> 
        <!--End Fonts-->
        <!-- STYLES -->
        <link rel="stylesheet" href="style/css/base/normalize.css">
        <link rel="stylesheet" href="style/css/main.css">
        <link rel="stylesheet" href="style/css/pages/contact.css">
        <!-- END STYLES -->
        <!--[if lt IE 9]>
        <script src="plugin/vendors/html5shiv.min.js"></script>
        <script src="plugin/vendors/respond.min.js"></script>
        <![endif]-->
        <!-- SCRIPT -->
    </head>
    <!-- END HEAD -->
    <!-- BODY -->
    <body>
        <!-- HEADER -->
        <header>
            <!--logo-->
            <div class="logo">
                <img src="assets/photos/logo.png">
            </div>
            <!--end logo-->
            <!--nav-->
            <nav>
                <button class="nav-btn">
                    <span class="btn-line"></span>
                    <span class="btn-line"></span>
                    <span class="btn-line"></span>
                </button>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="prod.html">Products</a></li>
                    <li><a href="mprocess.html">Manufacturing process</a></li>
                    <li><a href="cat.html">Catalogs</a></li>
                    <li><a href="client.html">Clients</a></li>
                    <li><a href="iso.html">ISO</a></li>
                    <li><a href="faq.html">FAQ'S</a></li>
                    <li><a href="#"  class="active">Contact Us</a></li>
                    <li><a href="ar.html" class="special">عربي</a></li>
                </ul>
            </nav>
            <!--end nav-->
        </header>
        <!-- END HEADER -->
        <div class="clearfix"></div>
        <!--front-->
        <div class="front">
            
        </div>
        <!--end front-->
        <div class="clearfix"></div>
        <!-- CONTENT -->
        <section id="content">
            <div class="section mainsection">
                <div class="container">
                    <h1 class="headline center"> Contact Us</h1>
                    <form class="contact-form" action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control name" name="name" placeholder="type your name"/>
                            <div class="alert alert-danger custom-alert" id="name">
                            Name can't be less than<strong> 4 </strong>Characters
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control company-name" placeholder="type your Company name" name="companyname"/>
                            <div class="alert alert-danger custom-alert">
                            Company Name can't be <strong>Empty</strong>
                            </div>
                        </div>
                        <div class="form-group">
					       <input type="email" name="email" class="form-control email" placeholder="type Your email"  value="" required/>
                            <div class="alert alert-danger custom-alert">
                            Email can't be <strong>Empty</strong>
                            </div>
                        </div>
                        <div class="form-group">
					       <input type="text" name="mobile" class="form-control mobile" placeholder="type your mobile number"  value=""/>
                           <div class="alert alert-danger custom-alert">
                            Mobile Number can't be <strong>Empty</strong>
                           </div>
                        </div>
                        <div class="form-group">
					       <textarea class="form-control msg" placeholder="Your Message" name="msg"></textarea>
                           <div class="alert alert-danger custom-alert">
                            Message can't be less than<strong> 10 </strong>Characters
                           </div>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn-primary btn-block"/>
                    </form>
                </div>
            </div>
        </section>
        <!-- END CONTENT -->
        <div class="clearfix"></div>
        <!--our info -->
        <div class="info center content">
            <div class="container">
            <p>
                Headquarters:          <span class="bold">Attaka, Suez,</span><br> 
                P.O. Box                     <span class="bold">123 Suez, Egypt</span><br>
                Tel:                              <span class="bold">002-062-3360012/13</span>
                Fax:                             <span class="bold">002-062-3360014</span><br>
                Cairo Sales Office:  <span class="bold">002-02-4539223/ 002-02- 2576627</span><br>
                To email sales staff : <span class="bold">sales@apgglass.com</span>
                </p>
                </div>
        </div>
        <!--end our info-->
        <div class="clearfix"></div>
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="info center">
                    <h3 class="center">Arab Pharmaceutical Glass Company</h3>
                    All Rights Reserved 2017 &copy;<span><a href="http://www.waleedomega.com/" target="_blank"> Waleed OMEGA</a></span>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <!-- SCRIPTS -->
        <script src="plugin/vendors/jquery-3.2.1.min.js"></script>
        <script src="plugin/vendors/jquery.nicescroll.min.js"></script>
		<script src="plugin/main.js"></script>
        <script></script>
        <!-- END SCRIPTS -->
        <?php
        if($_SERVER{'REQUEST_METHOD'} == 'POST'){
        $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $name=$_POST['name'];
    $companyname=$_POST['companyname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
	
    $to='waleedomega@gmail.com';
    $subject=$_POST['companyname'];
	
    $message ="<div align=center><h1>Waleed OMEGA</h1></div>";
    $message .= "<div align=center><h2>Name</h2></div>";
	$message .= "<h3>$name</h3><br>";
	$message .= "<div align=center><h2>Company Name</h2></div>";
	$message .= "<h3>$companyname</h3><br>";
    $message .= "<div align=center><h2>Mobile</h2></div>";
	$message .= "<h3>$mobile</h3><br>";
	$message .= "<div align=center><h2>E-Mail</h2></div>";
	$message .= "<h3>$email</h3><br>";
	$message .= "<div align=center><h2>Message</h2></div>";
	$message .= wordwrap($msg, 70, "\n", true); 
	
    $from="Waleed OMEGA";
	
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From: " .  $from;
     if(mail($to,$subject,$message,$headers)){	
	echo '<div id="send" align=center><h2>Thanks For Contacting Me</h2><br><a href="index.html">Back</a></div>';
	}else{	
	echo '<div id="send" align=center><h2>Email Sending Failed Try Again Later</h2><br><a href="index.html">Back</a></div>';
    }
        }
                          
 
?> 
	</body>
    <!-- END BODY -->
</html>