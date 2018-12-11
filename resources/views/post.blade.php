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
                            <div class="col-12">
                                <div class="body-post">
                                    <div class="header-post">
                                        <img src="{{ asset('images/advantages-bg.jpg') }}" alt="">
                                    </div>
                                    <div class="post-container">
                                        <div class="title-block d-flex flex-column justify-content-center align-items-center">
                                            <h2>
                                                <span class="modal-form-title">THE SITUATION ON THE IT MARKET</span>
                                                <br>
                                                <span class="modal-form-title">IN NORDIC COUTRIES</span>
                                            </h2>
                                        </div>
                                        <div class="single-post-content">
                                            <p>
                                                Sweden, Norway, Denmark, and Finland are countries with a great economy level. However, the
                                                situation on IT market is not that bright as it seems. Companies tend to experience the shortage of
                                                local tech talents.
                                                <br>
                                                <br>
                                                According to the Hays Global Skills Index 2016, Sweden is one of the first countries that face the
                                                worst skills lack.
                                                <br>
                                                <br>
                                                So, what are the reasons for such a situation there?
                                                <br>
                                                <br>
                                                education system struggles to adapt to the current market needs;
                                                <br>
                                                <br>
                                                available skills hardly match the current needs;
                                                <br>
                                                <br>
                                                wage pressure keeps growing.
                                            </p>

                                            <p>
                                                Another country that experiences the similar problem is Denmark. Hays Global Skills Index shows that
                                                Denmark faces serious talent mismatch. The situation is expected to end up in a shortage of 19000 IT
                                                specialists by 2030.
                                                <br>
                                                <br>
                                                When it comes to Finland, the country has an immediate need for 7000 software developers. As well as
                                                in Sweden, Finland’s education system cannot prepare enough professionals to cover all needs. In
                                                addition to this, more than 30 percent of students in Finland are not local which means that they
                                                don’t stay within the country after the graduation.
                                            </p>

                                            <p>
                                                There is no doubt that the lack of professionals can be really dangerous for the business as it may
                                                be a big obstacle to scale the company. As a way out, many Nordic companies are trying to educate
                                                professionals on site. Changing the education system may be a waste of time, that is why companies
                                                tend to create their own training programs.
                                                <br>
                                                <br>
                                                Some companies tend to relocate professionals from abroad. This option opens up many perks although
                                                it requires big investments. That’s why only large or enterprise-level companies with long-term
                                                growth outlook can afford this.
                                            </p>

                                            <p>
                                                We think that the best way to solve the problem with professionals shortage is to hire people
                                                remotely. Nordic companies already use this approach to expand their staff and Ukraine is one of the
                                                biggest pools to choose from.
                                                <br>
                                                <br>
                                                What about you, ever tried outstaffing or outsourcing to Ukraine? Please share your thoughts.
                                            </p>

                                            <a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4">DOWNLOAD PDF</a>
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
