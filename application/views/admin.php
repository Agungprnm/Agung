<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin KusKus Photography</title>

    <!-- Bootstrap Core CSS -->
    <link href=" <?php echo base_url('assets/admin/vendor/bootstrap/css/bootstrap.min.css') ?> " rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/admin/vendor/metisMenu/metisMenu.min.css') ?> " rel="stylesheet">

    <!-- Custom CSS -->
    <link href=" <?php echo base_url('assets/admin/dist/css/sb-admin-2.css') ?> " rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/admin/vendor/morrisjs/morris.css') ?> " rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=" <?php echo base_url('assets/admin/vendor/font-awesome/css/font-awesome.min.css') ?> " rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">KusKus Photography</a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!--li>
                            <a href="<?php echo base_url('views/gallery') ?>"><i class="fa fa-dashboard fa-fw"></i> Gallery</a>
                        </li-->
                        <li>
                            <a href="<?php echo base_url('index.php/admin/logout'); ?>"><i class="fa fa-dashboard fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                    <?php 
                        echo $this->session->flashdata('sukses');
                     ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class='row'>
                <div class='col-md-6'>
                    <?php echo form_open_multipart('admin/process') ?>
                        <p> <input type="text" class="form-control" placeholder=" id foto" name="id"></p>
                        <p> <input type="text" class="form-control" placeholder=" judul" name="judul"></p>
                        <p> <input type="file" class="form-control" placeholder=" foto" name="foto"></p>
                        <p> <input type="text" class="form-control" placeholder=" deskripsi" name="deskripsi"></p>
                        <p> <input type="submit" class="btn btn-primary " value="Kirim"></p>
                    </form>
                </div>
            </div>
            <br>
            <h2>Update</h2>
            <div class='row'>
                <div class='col-md-6'>
                    <?php echo form_open('admin/update') ?>
                        <p> <input type="text" class="form-control" placeholder=" id foto" name="id"></p>
                        <p> <input type="text" class="form-control" placeholder=" judul" name="judul"></p>
                        <p> <input type="text" class="form-control" placeholder=" deskripsi" name="deskripsi"></p>
                        <p> <input type="submit" class="btn btn-primary " value="update"></p>
                    </form>
                </div>
            </div>
            <br>
            <h2>Delete</h2>
            <div class='row'>
                <div class='col-md-6'>
                    <?php echo form_open('admin/delete') ?>
                        <p> <input type="text" class="form-control" placeholder=" id foto" name="id"></p>
                        <p> <input type="submit" class="btn btn-primary " value="delete"></p>
                    </form>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js') ?>  "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=" <?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.min.js') ?> "></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/metisMenu/metisMenu.min.js') ?>  "></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/admin/vendor/raphael/raphael.min.js')?> "> </script>
    <script src="<?php echo base_url('assets/admin/vendor/morrisjs/morris.min.js')?> "></script>
    <script src="<?php echo base_url('assets/admin/data/morris-data.js')?> "></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js')?> "></script>

</body>

</html>
