{{-- <div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">

            <div class="col-lg-4 py-2 wow zoomIn">

                @foreach ($latest as $singleLatest)

                    <div class="card-blog">

                        <div class="header">
                            <a href="{{ url('news') }} class="post-thumb">
                                <img src="./news_image/{{ $singleLatest->image }}" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="{{ url('news') }}">{{ $singleLatest->title }}</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <span>{{ $singleLatest->name }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach


                <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">

                        <a href="blog-details.html" class="post-thumb">
                            <img src="../assets/img/blog/blog_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus
                                case</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="../assets/img/person/person_1.jpg" alt="">
                                </div>
                                <span>Roger Adams</span>
                            </div>
                            <span class="mai-time"></span> 1 week ago
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">

                        <a href="blog-details.html" class="post-thumb">
                            <img src="../assets/img/blog/blog_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus
                                case</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="../assets/img/person/person_1.jpg" alt="">
                                </div>
                                <span>Roger Adams</span>
                            </div>
                            <span class="mai-time"></span> 1 week ago
                        </div>
                    </div>
                </div>
            </div>


                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="{{ url('news') }}" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
    </div> --}}
    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                @foreach ($latest as $singleLatest)
                    <div class="col-lg-4 py-2 wow zoomIn">
                        <div class="card-blog">
                            <div class="header">
                                <a href="{{ url('news') }}" class="post-thumb">
                                    <img src="./news_image/{{ $singleLatest->image }}" style="object-fit: contain; width: 100%; height: 100%;" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="{{ url('news') }}">{{ $singleLatest->title }}</a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <span>{{ $singleLatest->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="{{ url('news') }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
