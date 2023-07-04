<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>CT Scanner</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    @include('blog-news.blogcss')
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        @include('user.nav')

    </header>



    <!--
    Sided Template
    https://templatemo.com/tm-527-sided
    -->

    <div class="columns-bg">
        <!-- Logo & Intro -->
        <section id="logo" class="tm-section-logo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-6">
                        <div class="tm-site-name-container">
                            <div class="tm-site-name-container-inner">
                                <h1 class="text-uppercase tm-text-primary tm-site-name">
                                    News
                                </h1>
                                <p class="tm-text-primary tm-site-description">
                                    Read and enjoy our News! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Intro -->
        <section id="intro" class="tm-p-1-section-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tm-section-text-container">
                            <i class="tm-text-white">
                                <p class="mb-0">
                                    Nullam eget dignissim orci. Donec tincidunt blandit libero iaculis fermentum.
                                    Aliquam erat volutpat. Interger suscipit aliquam augue ac rutrum. Phasellus sit amet
                                    erat id sapien efficitur euismod.</p>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @foreach ($post as $post)
            <!-- Our Place -->
            <section id="our_place">
                <div class="container-fluid">
                    <div class="row">


                        <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container">
                            <img height="400px" src="/news_image/{{$post->image}}"  alt="Image" class="img-fluid" />
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="tm-section-text-container-2">
                                <h2 class="tm-text-primary tm-section-title-mb tm-sm-bg-white-alpha">
                                    {{ $post->title }} </h2>
                                <h6 class="tm-text-accent tm-section-title-mb">
                                    {{ $post->description }}
                                </h6>
                                <div class="tm-text-gray">
                                    <p class="mb-4">
                                        {{ $post->body
                                        }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Fusce, Section 4 -->
            <section id="section_4" class="tm-section-4">
                <div class="container-fluid">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-md-12 col-lg-6 tm-text-left-container">
                            <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
                                <h2 class="tm-text-accent tm-section-title-mb">
                                    {{ $post->title }}

                                </h2>
                                <h6 class="tm-text-accent tm-section-title-mb">
                                    {{ $post->description }}
                                </h6>
                                <p class="mb-0">
                                    {{ $post->body
                                    }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container">
                            <img height="400px" src="/news_image/{{$post->image}}" alt="Image" class="img-fluid tm-img-right" />
                        </div>
                    </div>
                </div>
            </section>
        <!-- Beautiful Rollovers -->
        @endforeach





<section id="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 tm-section-title-mb tm-gallery-title-col">
                        <h2 class="tm-section-title-2">Other News</h2>
                        <hr class="tm-section-title-underline" />
                    </div>

                    <div class="col-12">
                        <div class="grid">
                            @foreach ($data as $data)
                            <figure class="effect-duke mb-3">
                                <img width="300px" height="400px" src="/news_image/{{$data->image}}" alt="Image" class="img-fluid" />
                                <figcaption>
                                    <h2>{{ $data->title }}</h2>
                                    <p>{{ $data->description }}</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            @endforeach

                            {{-- <figure class="effect-duke">
                                <img src="blog/img/forty_image_12.jpg" alt="Image" class="img-fluid" />
                                <figcaption>
                                    <h2>Messy <span>Duke</span></h2>
                                    <p>When he looks at the sky, he feels to run.</p>
                                    <a href="page-2.html">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-duke mb-3">
                                <img src="blog/img/forty_image_13.jpg" alt="Image" class="img-fluid" />
                                <figcaption>
                                    <h2>Messy <span>Duke</span></h2>
                                    <p>When he looks at the sky, he feels to run.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-duke">
                                <img src="blog/img/forty_image_14.jpg" alt="Image" class="img-fluid" />
                                <figcaption>
                                    <h2>Messy <span>Duke</span></h2>
                                    <p>When he looks at the sky, he feels to run.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.columns-bg -->




    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>.
                All right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
