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
                            <a href="#"><span class="mai-call text-primary"></span> +383 44 383838</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> poliklinika.ctscanner@gmail.com</a>
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

        @php $count = 0; @endphp
        @foreach ($posts as $singlePost)
            <!-- Our Place -->
            @if ($count % 2 == 0)
                <section id="our_place">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container">
                                <img height="400px" src="/news_image/{{ $singlePost->image }}" alt="Image"
                                    class="img-fluid" />
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="tm-section-text-container-2">
                                    <h2 class="tm-text-primary tm-section-title-mb tm-sm-bg-white-alpha">
                                        {{ $singlePost->title }} </h2>
                                    <h6 class="tm-text-accent tm-section-title-mb">
                                        {{ $singlePost->description }}
                                    </h6>
                                    <div class="tm-text-gray">
                                        <p class="mb-4">
                                            {{ $singlePost->body }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            @else
                <!-- Fusce, Section 4 -->
                <section id="section_4" class="tm-section-4">
                    <div class="container-fluid">
                        <div class="row flex-column-reverse flex-lg-row">
                            <div class="col-md-12 col-lg-6 tm-text-left-container">
                                <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
                                    <h2 class="tm-text-accent tm-section-title-mb">
                                        {{ $singlePost->title }}

                                    </h2>
                                    <h6 class="tm-text-accent tm-section-title-mb">
                                        {{ $singlePost->description }}
                                    </h6>
                                    <p class="mb-0">
                                        {{ $singlePost->body }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container">
                                <img height="400px" src="/news_image/{{ $singlePost->image }}" alt="Image"
                                    class="img-fluid tm-img-right" />
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @php $count++; @endphp
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
                            @foreach ($data as $singleData)
                                <figure class="effect-duke mb-3">
                                    <img width="300px" height="400px" src="/news_image/{{ $singleData->image }}"
                                        alt="Image" class="img-fluid" />
                                    <figcaption>
                                        <h2>{{ $singleData->title }}</h2>
                                        <p>{{ $singleData->description }}</p>
                                        <a href="#">View more</a>
                                    </figcaption>
                                </figure>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.columns-bg -->




    @include('blog-news.footer')


    @include('blog-news.script')


</body>

</html>
