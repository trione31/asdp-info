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
            <h1>ASDP INDONESIA FERRY</h1>
            <div >
                <div id="sb-search" class="sb-search">
                    <?= form_open('welcome/cari') ?>
                        <input class="sb-search-input" placeholder="Masukkan Kata Kunci..." type="text" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    <?= form_close() ?>
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
    <script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
</body>

</html>
