@isset ($items)
    <section class="blog-section">
        <div class="top-container">
            <div class="top-bg-figure">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-block d-flex flex-column justify-content-center align-items-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-container">
            <div class="bottom-bg-figure">
                <div class="container">
                    <div class="row">
                        @foreach ($items as $post)
                            <div class="col-lg-6">
                                <div class="card-blog">
                                    <img class="card-img-top" src="{{ asset('images/advantages-bg.jpg') }}" alt="img post">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <a href="#" class="link-card">
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                            </a>
                                            <p class="card-text">{!! $post->body !!}</p>
                                        </div>
                                        <div class="card-bottom">
                                            <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4">Read more</a>
                                            <div class="time-post">10 mins for reading</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if (count($items) > 2)
                            <div class="d-flex justify-content-sm-center w-100">
                                <div class="col-sm-8 col-md-4 cust-col-4 p-sm-1 pt-md-0 pb-md-0 pl-md-1 pr-md-1 d-flex justify-content-center align-items-center">
                                    <a class="white-btn d-flex justify-content-between align-items-center pt-2 pb-2 pl-4 pr-4 mr-md-1 mr-lg-1" data-toggle="modal" data-target="#technologiesModal">
                                        <span>SHOW MORE</span>
                                        <span class="arrow-icon">→</span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
