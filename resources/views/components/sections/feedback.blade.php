<section class="feedback" id="feedback">
    <div class="container">
        <img alt="background image" class="feedback-bg" src="{{ asset('images/feedback-bg.png') }}">
        <div class="row">
            <div class="col col-md">
                <div class="title-block d-flex flex-column justify-content-center align-items-center">
                    <h2>Feedback</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md">
                <div class="slider-block">
                    <div class="calc-slider calc-top hidden-sm-down hidden-lg-up">
                        <span class="active-slide">1</span>
                        <span class="all-slide"></span>
                    </div>

                    <div id="feedbackCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($reviews as $review)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <div class="row">
                                        <div class="col-6 pr-1 pl-md-4 pl-lg-4 col-md-4">
                                            <img alt="Recent Feedback" class="feedback-img ng-star-inserted" src="{{ $review->author_photo }}">
                                        </div>
                                        <div class="col-6 p-1 pl-md-4 pl-lg-4 col-md-8">
                                            <div class="slider-content">
                                                <div class="slider-content_title">
                                                    <h4>{{ $review->author_name }}</h4>
                                                </div>
                                                <div class="slider-content_article">
                                                    <div class="item">
                                                        <p>{!! $review->body !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="nav-slider-block">
                            <div class="calc-slider hidden-sm-down hidden-md-down">
                                <span class="active-slide">1</span>
                                <span class="all-slide"></span>
                            </div>
                            <div class="nav-btn-content">
                                <button type="button" href="#feedbackCarousel" role="button" data-slide="prev" class="owl-prev disabled">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <div class="carousel-indicators btn-dots">
                                    @foreach ($reviews as $review)
                                        <button data-target="#feedbackCarousel" data-slide-to="{{ $loop->index }}" class="owl-dot @if ($loop->first) active @endif">
                                            <span></span>
                                        </button>
                                    @endforeach
                                </div>
                                <button type="button" href="#feedbackCarousel" role="button" data-slide="next" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
