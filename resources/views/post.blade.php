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
                            <div class="col-12">
                                <div class="body-post">
                                    <div class="header-post">
                                        <img src="{{ $post->image }}" alt="">
                                    </div>
                                    <div class="post-container">
                                        <div class="title-block d-flex flex-column justify-content-center align-items-center">
                                            <h2>{{ $post->title }}</h2>
                                        </div>
                                        <div class="single-post-content">{!! $post->body !!}</div>
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
