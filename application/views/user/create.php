<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Polindes Kabar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google Font link-->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootsnav.css">

    <!-- xsslider slider css -->


    <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/responsive.css" />

    <script src="<?php echo base_url('') ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


    <!-- Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!--End off Preloader -->


    <div class="culmn">
        <!--Home page style-->


        <nav class="navbar navbar-default bootsnav navbar-fixed">
            <div class="navbar-top bg-grey fix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="navbar-callus text-left sm-text-center">
                                <ul class="list-inline">
                                    <li><a href=""><i class="fa fa-phone"></i> Call us: 0819-9797-2666</a></li>
                                    <li><a href=""><i class="fa fa-envelope-o"></i> Contact us:
                                            polindes_kabar@email.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="navbar-socail text-right sm-text-center">
                                <ul class="list-inline">
                                    <li><a href="https://id-id.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/login?lang=id"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://web.whatsapp.com/%F0%9F%8C%90/id"><i
                                                class="fa fa-whatsapp"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->


            <div class="container">
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h1 class="mt-5" style="color:lightseagreen;"><b>PolindesKabar</b></h1>

                </div>
                <!-- End Header Navigation -->

                <!-- navbar menu -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('user/index') ?>">Home</a></li>
                        <li><a href="<?php echo base_url('user/metode') ?>">Daftar Kunjungan</a></li>
                        <li><a href="<?php echo base_url('user/metode2') ?>">Informasi</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>

        <!--Home Sections-->

        <div class="container m-5">

            <div class="row">
                <br><br><br><br>
                <br><br><br><br>

                <div class="col-4 mb-5">

                    <h4>-------------Lengkapi Data Pribadi Anda---------</h4> <br><br>
                    <?php echo $this->session->flashdata('pesan'); ?>

                    <form method="post" action="<?= base_url('user/create') ?>" style="width: 500px;"
                        class="text-center mb-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control text-center" name="nama" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control text-center" name="nohp" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Berkunjung</label>
                            <input type="date" class="form-control text-center" name="tgllahir" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Tanggal Berkunjung">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keluhan</label>
                            <input type="text" class="form-control text-center" name="jurusan" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Keluhan">
                        </div>


                        <button type="submit" class="btn btn-success btn-block m-5">Input</button> <br><br><br>
                    </form>

                </div>

            </div>

        </div>


        <footer id="contact" class="footer action-lage bg-black p-top-80">
            <div class="navbar-top bg-dark fix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="navbar-callus text-left sm-text-center">
                                <ul class="list-inline">
                                    <li><a href=""><i class="fa fa-phone"></i> Call us: 0819-9797-2666</a></li>
                                    <li><a href=""><i class="fa fa-envelope-o"></i> Contact us:
                                            polindes_kabar@email.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="navbar-socail text-right sm-text-center">
                                <ul class="list-inline">
                                    <li><a href="https://id-id.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/login?lang=id"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://web.whatsapp.com/%F0%9F%8C%90/id"><i
                                                class="fa fa-whatsapp"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                <div class="col-md-12">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                        Made with
                        <i class="fa fa-heart"></i>
                        by
                        <a target="_blank" href="#">KKD_PKKM</a>
                        2021. Polindes Kabar
                    </p>
                </div>


            </div>
        </footer>




    </div>
    <!-- JS includes -->

    <script src="<?php echo base_url('') ?>assets/js/vendor/jquery-1.11.2.min.js"></script>
    <sc ript src="<?php echo base_url('') ?>assets/js/vendor/bootstrap.min.js">



        </script>

        <sc ript src="<?php echo base_url('') ?>assets/js/owl.carousel.min.js">
            </script>
            <script src="<?php echo base_url('') ?>assets/js/jquery.magnific-popup.js"></script>
            <script src="<?php echo base_url('') ?>assets/js/jquery.easing.1.3.js"></script>


       
     <script src="<?php echo base_url('') ?>assets/css/slick/slick.js"></script>
            <script src="<?php echo base_url('') ?>assets/css/slick/slick.min.js"></script>
            <script src="<?php echo base_url('') ?>assets/js/jquery.collapse.js"></script>
            <script src="<?php echo base_url('') ?>assets/js/bootsnav.js"></script>
            <script src="<?php echo base_url('') ?>assets/js/plugins.js"></script>
            <script src="<?php echo base_url('') ?>assets/js/main.js"></script>

</body>

</html>