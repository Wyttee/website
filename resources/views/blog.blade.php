@extends('layouts.app')

@section('content')
    @header(['wrapper_class' => 'header-blog'])

    @endheader

    <div class="main blog-main">
        <div class="main-bg">
            <div class="container custom-container">
                <div class="row mx-0 container-blog">

                    <aside class="blog-sidebar">
                        <div class="title-blog-page">
                            <h1 class="title">Blog</h1>
                            <p class="subtitle">Here you’ll find everything you need to learn about digital software technology, development trends and beyond</p>
                        </div>
                        <div class="sidebar-module category-blog d-none d-md-block d-lg-block">
                            <div id="pattern" class="pattern">
                                <form action="#" method="post" class="fix-btn">
                                    <label class="is-vishidden">Search the site</label>
                                    <input type="search" placeholder="Search the site" />
                                    <input type="submit" class="btn-page search-submit" value="Search">
                                </form>
                            </div>
                            <ol class="list-unstyled">
                                <li class="active"><a href="#">All</a></li>
                                <li><a href="#">DATA & ANALYTICS</a></li>
                                <li><a href="#">DEVOPS</a></li>
                                <li><a href="#">EXPERIENCE DESIGN</a></li>
                                <li><a href="#">FINANCIAL SERVICES</a></li>
                                <li><a href="#">HEALTHCARE</a></li>
                                <li><a href="#">INNOVATION PLATFORM</a></li>
                                <li><a href="#">IOT, AI & ML</a></li>
                                <li><a href="#">MEDIA</a></li>
                                <li><a href="#">QUALITY MANAGEMENT</a></li>
                                <li><a href="#">R&D</a></li>
                                <li><a href="#">RETAIL</a></li>
                                <li><a href="#">SECURITY</a></li>
                                <li><a href="#">SOFTWARE DEVELOPMENT</a></li>
                            </ol>
                        </div>

                        <div class="sidebar-module category-select d-block d-md-none d-lg-none">
                            <div id="pattern-mobile" class="pattern">
                                <form action="#" method="post" class="fix-btn">
                                    <label class="is-vishidden">Search the site</label>
                                    <input type="search" placeholder="Search the site" />
                                    <input type="submit" class="btn-page search-submit" value="Search">
                                </form>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn">All</button>
                                <div class="dropdown-content">
                                    <a href="#">All</a>
                                    <a href="#">DATA & ANALYTICS</a>
                                    <a href="#">DEVOPS</a>
                                    <a href="#">EXPERIENCE DESIGN</a>
                                    <a href="#">FINANCIAL SERVICES</a>
                                    <a href="#">HEALTHCARE</a></li>
                                    <a href="#">INNOVATION PLATFORM</a>
                                    <a href="#">IOT, AI & ML</a>
                                    <a href="#">MEDIA</a>
                                    <a href="#">QUALITY MANAGEMENT</a>
                                    <a href="#">R&D</a>
                                    <a href="#">RETAIL</a>
                                    <a href="#">SECURITY</a>
                                    <a href="#">SOFTWARE DEVELOPMENT</a>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <div class="col px-0 px-lg-3">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-4">
                                <div class="card-blog">
                                    <img class="card-img-top" src="{{ asset('images/advantages-bg.jpg') }}" alt="img post">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <a href="#" class="link-card">
                                                <h5 class="card-title">THE SITUATION ON THE IT MARKET IN NORDIC COUTRIES</h5>
                                            </a>
                                            <p class="card-text">Sweden, Norway, Denmark, and Finland are countries with a great economy level. However, the situation on IT market is not that</p>
                                        </div>
                                        <div class="card-bottom">
                                            <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4">Read more</a>
                                            <div class="time-post">10 mins for reading</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-4">
                                <div class="card-blog">
                                    <img class="card-img-top" src="{{ asset('images/advantages-bg.jpg') }}" alt="img post">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <a href="#" class="link-card">
                                                <h5 class="card-title">THE SITUATION ON THE IT MARKET IN NORDIC COUTRIES</h5>
                                            </a>
                                            <p class="card-text">Sweden, Norway, Denmark, and Finland are countries with a great economy level. However, the situation on IT market is not that</p>
                                        </div>
                                        <div class="card-bottom">
                                            <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4">Read more</a>
                                            <div class="time-post">10 mins for reading</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-4">
                                <div class="card-blog">
                                    <img class="card-img-top" src="{{ asset('images/advantages-bg.jpg') }}" alt="img post">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <a href="#" class="link-card">
                                                <h5 class="card-title">THE SITUATION ON THE IT MARKET IN NORDIC COUTRIES</h5>
                                            </a>
                                            <p class="card-text">Sweden, Norway, Denmark, and Finland are countries with a great economy level. However, the situation on IT market is not that</p>
                                        </div>
                                        <div class="card-bottom">
                                            <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4">Read more</a>
                                            <div class="time-post">10 mins for reading</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @footer(['copyright' => 'One Group Digital Solutions 2018'])
        <button id="upTop" title="Go to top">
            <span>&uarr;</span>
        </button>
    @endfooter

@endsection
