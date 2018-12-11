<header @isset ($wrapper_class) class="{{ $wrapper_class }}" @endisset>
    @if (@isset($type) && $type === 'full')
        <div class="header-bg" id="header">
            <div class="container">
                <div class="row">
                    <div class="col col-md">
                        <nav class="navbar navbar-light" role="navigation">
                            <div class="navbar-header">
                                <span class="navbar-brand logo-block" href="{{ url('/') }}">
                                    <img src="{{ asset('images/logo.svg') }}" class="d-inline-block align-top" alt="One Group Digital Solution">
                                </span>
                                <button class="navbar-toggler-right btn-page btn-page-menu" type="button">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md">
                        <div class="title-info">
                            <h1>
                                one
                                group
                                <br class="">
                                <span>digital</span>
                                solutions
                            </h1>
                            <span class="subtitle">All that was conceived will be realized!</span>
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="media-block">
                            <div class="video-block">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe allow="encrypted-media" class="embed-responsive-item" frameborder="0" height="322" src="{{ $__header_video_link }}"></iframe>
                                </div>
                            </div>
                            <div class="title-block-media d-flex flex-row">
                                <h6>Watch the video</h6>
                                <div class="top-to-bottom"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <a class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4 scroll-link" href="#get-in-touch">
                            <span>Contact Us</span>
                            <span class="arrow-icon">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="header-content header-blog-bg">
            <div class="container custom-container">
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <div class="nav-blog-container">
                            <div class="logo-block">
                                <a href="{{ url('/') }}" class="d-block">
                                    <img src="{{ asset('images/logo.svg') }}" class="d-inline-block align-top" alt="{{ config('seotools.meta.defaults.title') }}">
                                </a>
                            </div>
                            <div class="nav-blog-block">
                                <button class="btn-page navbar-toggler-right btn-page-menu" type="button">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="nav-block">
        <div class="d-flex justify-content-center align-items-center hidden-scroll" style="height: 100%; min-height: 500px;">
            <a class="glp-close"></a>
            <ul class="nav d-flex flex-column justify-content-center align-items-center text-center">
                @foreach ($__menu as $key => $value)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $key }}">{{ $value }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
