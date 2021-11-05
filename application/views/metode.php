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
        <div class="container">
            <br><br><br><br><br>
            <br><br>
            <h2><b>Daftar Kunjungan Polindes Kabar</b></h2>
            <a href="<?php echo base_url('/user/create') ?>" class="btn btn-success">Tambah Data</a>
            <table class="table" style="width:800px">
                <thead>
                    <br>
                    <br>
                    <br>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Berkunjung</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$no = 1;
					foreach ($list_nama2 as $item) { ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->nohp ?></td>
                        <td><?= date('d-m-Y', strtotime($item->tgllahir)) ?></td>
                        <td><?= $item->jurusan ?></td>
                        <td>
                            <a href="<?php echo base_url('/user/update/' . $item->id) ?>" style="width: 10px;"
                                class="btn btn-success text-center">Edit</a>
                            <a href="<?php echo base_url('/user/delete/' . $item->id) ?>" style="width: 10px;"
                                class="btn btn-danger text-center">Delete</a>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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