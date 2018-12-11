<section class="join-us">
    <div class="top-join-us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-block d-flex flex-column justify-content-center align-items-center">
                        <h2>JOIN US</h2>
                    </div>
                    <div class="subtitle-block">
                        <p>We want to invite you to our family: One Group Digital Solutions!<br>Here are some of the open positions : )</p>
                    </div>
                </div>
            </div>
            <div class="content-top-join">
                <div class="row">
                    @foreach ($vacancies->take(2) as $vacancy)
                        <div class="col-lg-6">
                            <div class="join-info-block">
                                <h3 class="join-info-block-title">{{ $vacancy->title }}</h3>
                                <p class="join-info-block-subtitle">{!! $vacancy->body !!}</p>
                                <div class="col-12 col-md-12 p-0 text-center">
                                    <a href="{{ route('vacancy', ['vacancy' => $vacancy]) }}" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4 ml-lg-1">
                                        <span>Apply</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-join-us">
        <div class="bottom-join-bg">
            <div class="container">
                <div class="row">
                    @foreach ($vacancies->slice(2)->take(2) as $vacancy)
                        <div class="col-lg-6">
                            <div class="join-info-block">
                                <h3 class="join-info-block-title">{{ $vacancy->title }}</h3>
                                <p class="join-info-block-subtitle">{!! $vacancy->body !!}</p>
                                <div class="col-12 col-md-12 p-0 text-center">
                                    <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4 ml-lg-1" data-toggle="modal" data-target="#exampleModalCenter">
                                        <span>apply</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
