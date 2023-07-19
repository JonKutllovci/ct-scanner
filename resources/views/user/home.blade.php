<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>CT Scanner</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="icon" href="../logo_img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('user.header')
    @if (session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}

        </div>
    @endif

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/koveribaba.jpeg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Mirsevini ne faqen tone!</span>
                <h1 class="display-4">CT Scanner</h1>
                <a href="#contact" class="btn btn-primary">Beje terminin tend!</a>
            </div>
        </div>
    </div>


    {{-- <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section --> --}}


    <div class="page-section pb-0">
        <div id="about">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 py-3 wow fadeInUp">

                        <h1>Mirserdhet ne <br> CT Scanner</h1>
                        <p class="text-grey mb-4">Mirë se vini në Poliklinikën CT Scanner të Radiologjisë, një qendër e
                            shquar
                            ku shkenca, teknologjia dhe kujdesi bashkohen për t'ju ofruar shërbime radiologjie. Për vite
                            me radhë, ne kemi qenë të përkushtuar në diagnostikimin dhe trajtimin e
                            sëmundjeve duke përdorur teknika imazhore të avancuara. Poliklinika jonë është një farol i
                            shkëlqimit në radiologji, i përkushtuar në ofrimin e shërbimeve të sakta, efektive dhe në
                            kohë, në një ambient të ndjeshëm që thekson komoditetin dhe respektin e pacientit.</p>
                        {{-- <a href="about.html" class="btn btn-primary">Learn More</a> --}}

                        <p class="text-grey mb-4">Në zemër të institucionit tonë janë radiologët, teknologët dhe stafi i
                            mbështetjes së trajnuar lartë dhe me përvojë, të cilët punojnë në bashkëpunim për të
                            siguruar se ju merrni standardin më të lartë të kujdesit. Ne jemi të pajisur me teknologji
                            të sofistikuar dhe ofrojmë një gamë të gjërë shërbimesh radiologjike përfshirë rreze-X,
                            skanimin CT, RMN, Ultratingujt, Mjekësi Bërthamore dhe Radiologji Interventive. Të drejtuar
                            nga një angazhim i fortë për cilësinë dhe sigurinë, ne përpiqemi të reduktojmë ekspozimin
                            ndaj radiacionit ndërsa jemi duke ofruar imazhe të qarta, të sakta. Qëllimi ynë është të
                            punojmë në tandem me mjekun tuaj primar për të kuptuar nevojat tuaja, të ofrojmë diagnoza të
                            sakta dhe të hartojmë rrugën më të mirë të trajtimit për ju. Mirë se vini në Poliklinikën e
                            Radiologjisë, ku shëndeti juaj është prioriteti ynë më i lartë.</p>

                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/radio-bg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->
    @include('user.doctor')

    @include('user.latest')


    @include('user.appointment')
    <!-- .page-section -->

    <!-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
        <div class="container py-5 py-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-4 wow zoomIn">
                    <div class="img-banner d-none d-lg-block">
                        <img src="../assets/img/mobile_app.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                    <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                    <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div> .banner-home -->
    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
