<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
</head>

<body>
    <div class="page-wrapper">

    	<header class="site-header header-one header-one__home-two">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo base_url('assets/images/logo-2-1.png'); ?>" class="main-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>
                    <div class="main-navigation">
                        <ul class=" navigation-box one-page-scroll-menu ">
                            <li class="scrollToLink">
                                <a href="#home">Beranda</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#tips">Tips</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#condition">Kondisi</a>
                                
                            </li>
                            <li class="scrollToLink">
                                <a href="#info">Info</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="right-side-box">
                        <a href="#" class="header-one__btn">Kontak</a>
                    </div>
                </div>
            </nav>
        </header>


        <section class="banner-one banner-one__home-two" id="home">
        	<img src="<?php echo base_url('assets/images/banner-moc-2.png'); ?>" class="banner-one__moc" alt="Awesome Image"/>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-one__content">
                            <div class="block-title">
                                <div class="block-title__text"><span>Virus Corona</span> <br> <span>COVID-19</span></div>
                            </div>
                            <p class="banner-one__text">Bersama lindungi diri sendiri dan sesama <br> dari wabah virus corona covid-19.</p>
                            <a href="#tips" class="banner-one__btn">Cari Tahu</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-one" id="tips">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Langkah Penting</span> <br> <span>3 Hal yang harus diketahui</span></div>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-human-resources"></i>
                            <h3 class="service-one__title"><a href="https://bit.ly/3dwcsTd" target="_blank">Cara Mengurangi Resiko</a></h3>
                            <p class="service-one__text">Sering cuci tangan pakai sabun dan air mengalir adalah pertahanan pertama dari virus Corona.</p>
                            <a href="https://bit.ly/3dwcsTd" target="_blank" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-presentation"></i>
                            <h3 class="service-one__title"><a href="https://bit.ly/2QNKhp0" target="_blank">Cari Informasi Yang Benar</a></h3>
                            <p class="service-one__text">Virus Corona adalah penyakit baru dan para ahli masih terus meneliti sejauh mana tingkat penyebarannya.</p>
                            <a href="https://bit.ly/2QNKhp0" target="_blank" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-target"></i>
                            <h3 class="service-one__title"><a href="https://bit.ly/3bm4PwK" target="_blank">Apa Yang Perlu Dilakukan <br> Bila Sakit</a></h3>
                            <p class="service-one__text">Gejala utama infeksi virus corona adalah demam, batuk, dan sesak napas.</p>
                            <a href="https://bit.ly/3bm4PwK" target="_blank" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fun-fact-one" id="condition">
            <img src="<?php echo base_url('assets/images/banner-icon-1-4.png'); ?>" alt="Awesome Image" class="bubble-1" />
            <img src="<?php echo base_url('assets/images/banner-icon-1-2.png'); ?>" alt="Awesome Image" class="bubble-2" />
            <img src="<?php echo base_url('assets/images/banner-icon-1-1.png'); ?>" alt="Awesome Image" class="bubble-3" />
            <img src="<?php echo base_url('assets/images/banner-icon-1-6.png'); ?>" alt="Awesome Image" class="bubble-4" />
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Situasi virus corona</span> <br> <span>(COVID-19)</span></div>
                </div>
                <div class="fun-fact-one__box-wrapper">
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                <?php echo $data_positif; ?>
                            </h3>
                            <p class="fun-fact-one__text">
                                Positif
                            </p>
                        </div>
                    </div>
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                <?php echo $data_sembuh; ?>
                            </h3>
                            <p class="fun-fact-one__text">
                                Sembuh
                            </p>
                        </div>
                    </div>
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                <?php echo $data_meninggal; ?>
                            </h3>
                            <p class="fun-fact-one__text">
                                Meninggal
                            </p>
                        </div>
                    </div>
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                <?php echo $total_provinsi; ?>
                            </h3>
                            <p class="fun-fact-one__text">
                                Provinsi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-one" id="info">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Info Penting</span> <br> <span>Berita & Artikel</span></div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__single-inner-block">
                                <div class="blog-one__date">26 Maret 2010</div>
                                <h3 class="blog-one__title"><a href="https://bit.ly/3dy6HEw" target="_blank">RS Darurat COVID-19 Wisma Atlet Bisa Operasikan Dua Tower Tambahan</a></h3>
                                <p class="blog-one__text">Pemerintah Indonesia akan mengoperasikan dua tower tambahan Wisma Atlet Kemayoran sebagai skenario antisipasi apabila terjadi lonjakan pasien covid-19.</p>
                                <a href="https://bit.ly/3dy6HEw" target="_blank" class="blog-one__link"><i class="nonid-icon-left-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__single-inner-block">
                                <div class="blog-one__date">25 Maret 2020</div>
                                <h3 class="blog-one__title"><a href="https://bit.ly/2UjPaIG" target="_blank">Peran Multipihak Bagian dari Pentaheliks Penanganan Pandemik</a></h3>
                                <p class="blog-one__text">Ketua Gugus Tugas Doni Monardo selalu menekankan pelibatan multipihak atau pentaheliks dalam penanggulangan bencana, termasuk dalam penanganan COVID – 19.</p>
                                <a href="https://bit.ly/2UjPaIG" target="_blank" class="blog-one__link"><i class="nonid-icon-left-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__single-inner-block">
                                <div class="blog-one__date">24 Maret 2020</div>
                                <h3 class="blog-one__title"><a href="https://bit.ly/2xqhIak" target="_blank">Arahan Presiden kepada Gubernur Soal Penanganan Covid-19</a></h3>
                                <p class="blog-one__text">Presiden Joko Widodo (Jokowi) menyampaikan beberapa arahan kepada para Gubernur menghadapi pandemik virus Korona (Covid-19) melalui konferensi video dari Istana Merdeka.</p>
                                <a href="https://bit.ly/2xqhIak" target="_blank" class="blog-one__link"><i class="nonid-icon-left-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="site-footer">
            <img src="<?php echo base_url('assets/images/banner-icon-1-1.png'); ?>" alt="Awesome Image" class="bubble-1" />
            <img src="<?php echo base_url('assets/images/banner-icon-1-3.png'); ?>" alt="Awesome Image" class="bubble-2" />
            <img src="<?php echo base_url('assets/images/banner-icon-1-2.png'); ?>" alt="Awesome Image" class="bubble-3" />
            <img src="<?php echo base_url('assets/images/banner-icon-1-4.png'); ?>" alt="Awesome Image" class="bubble-4" />
            <div class="site-footer__bottom-footer text-center">
                <div class="container">
                    <p>&copy; copyright 2020 by <a href="rahmatfh.com">RahmatFH</a></p>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.bxslider.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>