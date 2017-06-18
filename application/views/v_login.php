<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASDP Info</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>assets/css/Header-Icons.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/color/default.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/css/component.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/css/default.css" rel="stylesheet">
        <link href="<?= base_url()?>assets/css/full-image.css" rel="stylesheet">
        
        <style>
            /*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
/* 
    Created on : May 31, 2017, 10:30:01 AM
    Author     : -
*/

* {
box-sizing: border-box;
}

*:focus {
	outline: none;
}

.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #EB8B1B;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #EB8B1B;
}

.login-form {
text-align: center;
color: #EB8B1B;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #EB8B1B;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #EB8B1B;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
	margin-top: 12px;
}

            </style>

</head>

<body  >


    <nav class="navbar navbar-default" id="colorful-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="home"><a href="<?= base_url()?>welcome"><span class="glyphicon glyphicon-home"></span><h5>HOME</h5></a></li>
                    <li class="home"><a href="#"><span class="glyphicon glyphicon-star"></span><h5>SOP</h5></a></li>
                    <li class="home"><a href="#"><span class="glyphicon glyphicon-file"></span><h5>Document</h5></a></li>
                    <li class="home"><a href="#"><span class="glyphicon glyphicon-calendar"></span><h5>AngLeb 2017</h5></a></li>
                    
                    <li class="home"><a href="<?= base_url()?>login"><span class="glyphicon glyphicon-log-in"></span><h5>Login</h5></a></li>
                </ul>
            </div>
        </div>
    </nav>


	<!-- Section: intro -->
    
		
        
        <div class="main clearfix">
            
            <div class="login-form">
                <h1>LOGIN</h1>
		<div class="control-group">
		<?php echo form_open('login') ?>
                    <input type="text" name="username" placeholder="Masukan Username" required/></div>
			
		<div class="control-group">
                    <input type="password" name="password" placeholder="Masukan Password" required/></div>

            <input type="submit" name="login" value="LOGIN" class="btn"/>
		
            
            </div>
                
            </div>
            <div>
                <a href="http://ticket.indonesiaferry.co.id" alt="Klik Untuk Menuju Link"><img src="<?=base_url()?>assets/img/maskot.gif" class="gif img-responsive" style="position: fixed; left: 0; bottom: 0; margin: 0; padding: 0; height: 35%; width: 30%"></a>
                </div>
        </div>

	<!-- /Section: intro -->

	
		
	

	

	

    <!-- Core JavaScript Files -->
    <script src="<?= base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.easing.min.js"></script>	
	<script src="<?= base_url()?>assets/js/classie.js"></script>
	<script src="<?= base_url()?>assets/js/gnmenu.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.scrollTo.js"></script>
	<script src="<?= base_url()?>assets/js/nivo-lightbox.min.js"></script>
	<script src="<?= base_url()?>assets/js/stellar.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url()?>assets/js/custom.js"></script>
    <script src="<?= base_url()?>assets/js/uisearch.js"></script>
 
</body>

</html>
