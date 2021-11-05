<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Tokobibit_Utami</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/') ?>images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/') ?>images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

                        <li class="nav-item"><a class="nav-link active"
                                href="<?php echo base_url('user/index') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo base_url('user/gallery') ?>">Produk</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo base_url('user/contact_us') ?>">Pemesanan</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->


            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Produk</h2>

                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produk</h1>
                        <p>produk yang di beli.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <h4>Tomat</h4>
                    <p>Tomat adalah buah kaya serat dan memiliki sejumlah vitamin serta zat antioksidan penting bagi
                        tubuh.</p>
                </div>
                <div class="col">

                    <img src="<?php echo base_url('assets/') ?>images/img-pro-02.jpg" class="img-fluid text-center"
                        alt="Image">
                    <div class="mask-icon">

                        <a style="width: 200px;" class="cart text-center"
                            href="<?php echo base_url('user/contact_us') ?>">Beli</a>


                        <div class="why-text">
                            <h4>Tomato</h4>
                            <h5>Rp. 9.000</h5>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>



    <!-- End Gallery  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Alamat:Masbagik.Desa,Kumbang
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Hp: <a
                                            href="tel:+1-888705770">+6281918766286</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="mailto:contactinfo@gmail.com">UD_Uhan@gmail.com</a></p>
                                </li>
                                <li>
                                    <p><i class="fab fa-whatsapp"></i>WA: <a href="https://web.whatsapp.com/">Wa
                                            Contack</a></p>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">UD_Uhan. &copy; 2021 <a href="#">Tokobibit</a> Design By :
            <a href="https://html.design/">handriwati</a>
        </p>
    </div>
    <!-- End copyright  -->
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url('assets/') ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootstrap-select.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/inewsticker.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootsnav.js."></script>
    <script src="<?php echo base_url('assets/') ?>js/images-loded.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/isotope.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/form-validator.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/contact-form-script.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/custom.js"></script>
</body>

</html>