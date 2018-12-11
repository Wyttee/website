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

                            @foreach ($vacancies as $vacancy)
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-4">
                                    <div class="join-info-block">
                                        <h3 class="join-info-block-title">{{ $vacancy->title }}</h3>
                                        <p class="join-info-block-subtitle">{!! $vacancy->body !!}</p>
                                        <div class="col-12 col-md-12 p-0 text-center">
                                            {{--<a href="#" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4 ml-lg-1" data-toggle="modal" data-target="#exampleModalCenter">--}}
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
        </div>

    </div>

    <div class="modal modal-fullscreen modal-form fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-block">
                    <a aria-label="Close" class="glp-close" data-dismiss="modal"></a>
                </div>

                <section class="join-modal modal-section-content">
                    <div class="modal-content-top">
                        <div class="figure-bg">
                            <div class="title-block d-flex flex-column justify-content-center align-items-center">
                                <h2>
                                    <span class="modal-form-title">Full Stack (React/Node.js)</span>
                                    <br>
                                    <span class="modal-form-title">Developer in Ukraine</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="modal-content-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content-form-block">
                                        <div class="bg-figure-form">
                                            <p><span>Full Stack (React/Node.js) Developer </span>is simply dummy text of the
                                                printing and
                                                typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining essentially
                                                unchanged. Lorem Ipsum has been the industry&apos;s standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and scrambled it
                                                to make a type specimen book. It has survived not only five centuries, but also
                                                the leap into electronic typesetting, remaining essentially unchanged.
                                            </p>
                                            <p>
                                                It was popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more recently with desktop publishing software like
                                                Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown printer
                                                took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged. It was popularised in the 1960s with the
                                                release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including versions of
                                                Lorem Ipsum
                                            </p>

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
                    </div>
                </section>
            </div>
        </div>
    </div>

    @footer(['copyright' => 'One Group Digital Solutions 2018'])
        <button id="upTop" title="Go to top">
            <span>&uarr;</span>
        </button>
    @endfooter

@endsection
