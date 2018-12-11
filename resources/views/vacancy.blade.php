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
                            <h1 class="title">Career</h1>
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
                                <li class="active">
                                    <a href="#">All</a>
                                </li>
                                @foreach ($positions as $position)
                                    <li>
                                        <a href="#">{{ strtoupper($position->name) }}</a>
                                    </li>
                                @endforeach
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
                                    @foreach ($positions as $position)
                                        <a href="#">{{ strtoupper($position->name) }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </aside>

                    <div class="col px-0 px-lg-3">
                        <div class="row">

                            <div class="col-12">
                                <section class="join-single">
                                    <div class="content-bottom">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content-form-block">
                                                    <div class="bg-figure-form">
                                                        <div class="title-block d-flex flex-column justify-content-center align-items-center">
                                                            <h2>{{ $vacancy->title }}</h2>
                                                        </div>

                                                        <p>{!! $vacancy->body !!}</p>

                                                        <div class="title-form-block">
                                                            <div class="figure-block">
                                                                <img src="{{ asset('images/join us/red-trigle.svg') }}" alt="">
                                                            </div>
                                                            <div class="title-block d-flex flex-column justify-content-center align-items-center">
                                                                <h2>
                                                                    <span class="modal-form-title">Feel free to contact us</span>
                                                                </h2>
                                                            </div>
                                                        </div>

                                                        <form novalidate="">
                                                            <div class="row">
                                                                <div class="col-md-6 pl-lg-0">
                                                                    <div class="form-group pl-lg-4 pr-lg-4 text-left">
                                                                        <label class="form-control-label messages-label">Enter your first name*</label>
                                                                        <input class="form-control_messages ng-pristine ng-invalid has-error ng-touched" data-form-field="Name" formcontrolname="name" name="name" placeholder="Your first name" required="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 pr-lg-0">
                                                                    <div class="form-group pl-lg-4 pr-lg-4 text-left">
                                                                        <label class="form-control-label messages-label">Enter your last name*</label>
                                                                        <input class="form-control_messages ng-pristine ng-invalid has-error ng-touched" data-form-field="Name" formcontrolname="name" name="name" placeholder="Your last name" required="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 px-lg-0">
                                                                    <div class="form-group pl-lg-4 pr-lg-4 text-left">
                                                                        <label class="form-control-label messages-label">Enter your e-mail *</label>
                                                                        <input class="form-control_messages ng-pristine ng-invalid has-error ng-touched" data-form-field="Email" formcontrolname="email" name="email" placeholder="your e-mail" required="" type="email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 px-lg-0">
                                                                    <div class="form-group pl-lg-4 pr-lg-4 text-left">
                                                                        <label class="form-control-label messages-label">Enter your phone number</label>
                                                                        <input class="form-control_messages ng-untouched ng-pristine ng-valid" data-form-field="Phone" formcontrolname="phone" name="phone" ngxphonemask="" placeholder="+ _( ___ ) __-__-__" type="tel">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 px-lg-0">
                                                                    <div class="form-group pl-lg-4 pr-lg-4 text-left" data-for="message">
                                                                        <label class="form-label_content">Enter your massage*</label>
                                                                        <textarea autosize="" class="form-control_messages form-text_content ng-untouched ng-pristine ng-invalid" data-form-field="Message" formcontrolname="message" name="message" placeholder="Your messages" rows="1" type="text" style="overflow: hidden; height: 39px;"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-12 px-lg-0">
                                                                    <div class="btn-block-form pl-lg-4 pr-lg-4">
                                                                        <div class="form-group mb-0 position-relative">
                                                                            <span class="file-upload"></span>
                                                                            <input class="file" type="file" name="file" id="file">
                                                                            <label for="file" class="btn-upload pt-2 pb-2 pl-lg-4 pr-lg-4">ATTACH YOUR CV</label>
                                                                        </div>
                                                                        <button class="btn-page btn-contact pt-2 pb-2 pl-lg-4 pr-lg-4" type="submit">
                                                                            <span>send message</span>
                                                                            <span class="arrow-icon"><i class="fa fa-envelope ng-star-inserted"></i></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
