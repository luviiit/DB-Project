<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: home.php');
    }
?>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Welcome to Apollo Pharmacy</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="static/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Apollo Pharmacy</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input placeholder="Email" class="form-control" type="text">
            </div>
            <div class="form-group">
              <input placeholder="Password" class="form-control" type="password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      
        <h3 style="color:#095d58">About Us</h3>
        <p style="font-size:15px">Apollo Hospitals Group with over 8500 beds across 54 hospitals, a string of nursing, hospital management colleges, Health insurance services and dual lifeline services, viz. pharmacies and diagnostic clinics, Apollo provides a Integrated seamless healthcare delivery service across Asia. </p><br><p style="font-size:15px">As pioneers and leaders in bringing the finest healthcare to India, we have served and saved many lives. With a significant presence at every touch-point of the medical value chain, Apollo Hospitals is one of Asia’s largest healthcare powerhouse you can trust.

Apollo pharmacy with the first outlet opened in 1983, has gained trust of millions of people over the past 27 years for the quality of service we deliver. Since then Apollo pharmacy has grown to be a thousand plus pharmacies strong and is well established in terms of brand awareness, customer service etc.
 As a part of the chairman’s vision of touching a billion lives-our growing retail pharmacy network touches lives across the length and breadth of India and we serve more than 1.5 lakh customers a day. The vast pharmacy network enables us to provide medicine support to our customers even when they are on move for their treatments.
</p>
<p style="font-size:15px">Our extensive range of pharmacy & healthcare products and services help keep you healthy at all times. Our Prescription Reminder service makes it easier to manage your repeat prescriptions. It is a convenient way for you saving you time, and is simple to arrange your medicines.

Our mission at Apollo Pharmacy is a “promise beyond prescriptions”. We make people well and help them stay well. In your wellness lies our happiness and success.</p>
</p><!--        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>-->
      <br>
       

<div class="footertopicon" style="background-color:#ffdc9f;padding:5px;text-align:center;overflow:hidden;color:#0b6365;font-size:15px">
<div>
<div>
Apollo takes pride in delivering an exceptionally safe, secure, and enjoyable shopping experience  
</div>
</div>
</div>


<br>
      <br>
      <br>
      <br>
      <br>


        <form role="form">
          <div class="form-group">
            <h4 style="color:#095d58">Full Name</h4>
           <input type="text"class="form-control" id="customer-name" style="width:50em">
          </div>
          <div class="form-group">
            <h4 style="color:#095d58">Your FeedBack</h4>
            <textarea type="text"  rows="6"  cols="50" class="form-control" id="feedback" style="width:50em "></textarea> 
          </div>
        
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/jquery-1.11.0.js"></script>
    <script src="static/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="static/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>
