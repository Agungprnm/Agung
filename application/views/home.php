<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KusKus Photography</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Montserrat:400,700') ?>" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/grayscale.min.css') ?>" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="glyphicon glyphicon-eye-open"></i> <span class="light">KusKus</span> Photography
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Welcome</h1>
                        <p class="intro-text">Every moment you have
                            <br>Should Capture it.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>About Us</h3>
                <p style="font-size: 13px; text-align: left;" >KusKus Photography. Founder of KusKus Photography is Kusuma Novi Bagus Saputra. He was born in Surabaya September 14 1995.</p>
                 <p style="font-size: 13px; text-align: left;" >This business plan will be released September 2018</p>
             </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
        <h1>Galeri  </h1>
        <?php foreach ($read as $r) { ?>
          <div class="  col-md-4">
            <div class="thumbnail" style="height: 550px; max-height : 550px; ">
              <img src="<?php echo base_url('uploads/'.$r['foto']); ?>" alt="" style="height:280px; weight:280px;">
              <div class="caption">
                <h3><?php echo $r['judul'] ?></h3>
                <p style="font-size: 13px; text-align: left;" ><?php echo $r['deskripsi'] ?>    </p>
              </div>
            </div>
          </div>
          <?php } ?>        
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
    
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div id="contactdetails">
        <h2>Our Contact Details !</h2>
        <ul>
          <li>KusKus Photography</li>
          <li>Gubeng Airlangga 3 No 29</li>
          <li>Surabaya</li>
          <li>60286</li>
          <li>Instagram: @kusumasayu</li>
          <li>Facebook: Facebook.com/kusumasayu OR Kusuma novi bagus saputro</li>
          <li>Email: 09kusuma@gmail.com</li>
        </ul>
      </div>
            </div>
        </div>
    
    </section>

    <!-- Map Section -->
    <!--div id="map"></div-->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') ?>"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="<?php echo base_url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false') ?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/grayscale.min.js') ?>"></script>

</body>

</html>
