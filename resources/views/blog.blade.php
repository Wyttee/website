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
                                <li class="active">
                                    <a href="#">All</a>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#">{{ strtoupper($category->name) }}</a>
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
                                    @foreach ($categories as $category)
                                        <a href="#">{{ strtoupper($category->name) }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </aside>

                    <div class="col px-0 px-lg-3">
                        <div class="row">

                            @foreach ($posts as $post)
                                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-4">
                                    <div class="card-blog">
                                        <img class="card-img-top" src="{{ $post->image }}" alt="img post">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <a href="{{ route('post', ['post' => $post]) }}" class="link-card">
                                                    <h5 class="card-title">{{ $post->title }}</h5>
                                                </a>
                                                <p class="card-text">{!! $post->body !!}</p>
                                            </div>
                                            <div class="card-bottom">
                                                <a href="{{ route('post', ['post' => $post]) }}" class="btn-page btn-contact pt-2 pb-2 pl-4 pr-4">Read more</a>
                                                <div class="time-post">10 mins for reading</div>
                                            </div>
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

    @footer(['copyright' => 'One Group Digital Solutions 2018'])
        <button id="upTop" title="Go to top">
            <span>&uarr;</span>
        </button>
    @endfooter

@endsection
