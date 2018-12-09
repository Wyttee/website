@isset($items)
    <section id="portfolio" class="portfolio">
        <div class="container p-0">
            <div class="row m-0">
                <div class="col col-md">
                    <div class="title-block d-flex flex-column justify-content-center align-items-center">
                        <h2>Portfolio</h2>
                    </div>
                </div>
            </div>

            <div class="row m-0">
                @foreach($items as $project)
                    <div class="col-sm-6 col-md-6 col-lg-4 pt-1 pb-1 pt-sm-2 pb-sm-0 pl-sm-1 pr-sm-1 pb-md-0 pl-md-1 pr-md-1 pb-lg-0 pl-lg-1 pr-lg-1">
                        <div class="portfolio-block" style="background-image: url({{ $project->image() }});" data-toggle="modal" data-target="#portfolioModal">
                            <div class="portfolio-img-overlay overlay-violet"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (count($items) > 2)
                <div class="row m-0">
                    <div class="col-12 col-md-12 p-0">
                        <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4 ml-lg-1">
                            <span>Load more</span>
                            <span class="arrow-icon">&rarr;</span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endisset
