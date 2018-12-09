@isset($items)
    <section id="technologies" class="technologies">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="technologies-titles text-center">Technologies</h2>
                </div>

                @foreach ($items as $technology)
                    <div class="col-md-4 pt-0 pb-0 pl-1 pr-1">
                        <div class="technologies-block d-flex flex-column justify-content-center align-items-center">
                            <h5 class="technologies-block_name text-center">{{ $technology->title }}</h5>
                            @svg('resources/images/php-icon')
                        </div>
                    </div>
                @endforeach

                @if (count($items) > 2)
                    <div class="d-flex justify-content-sm-center w-100">
                        <div class="col-sm-8 col-md-4 cust-col-4 p-sm-1 pt-md-0 pb-md-0 pl-md-1 pr-md-1 d-flex justify-content-center align-items-center">
                            <a class="white-btn d-flex justify-content-between align-items-center pt-2 pb-2 pl-4 pr-4 mr-md-1 mr-lg-1" data-toggle="modal" data-target="#technologiesModal">
                                <span>more information</span>
                                <span class="arrow-icon">→</span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endisset
