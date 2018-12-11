@extends('layouts.app')

@section('content')
    @header([
        'type' => 'full',
        'video' => 'https://www.youtube.com/embed/QwIEeuHqID8?rel=0&loop=1&rel=0&showinfo=0&color=white'
    ])

    @endheader

    <div class="main">
        @solution

        @endsolution

        @advantages

        @endadvantages

        @portfolio

        @endportfolio

        @development

        @enddevelopment

        @technologies

        @endtechnologies

        @feedback

        @endfeedback

        @blog

        @endblog

        @team

        @endteam

        @join

        @endjoin

        @touch

        @endtouch

        @contact([
            'address' => 'Ukraine, Lviv',
            'phones' => ['380956550837', '380990255116'],
            'email' => 'contact@ogd-solutions.com',
            'skype' => 'ogd.solutions'
        ])

        @endcontact
    </div>

    @footer([
        'copyright' => 'One Group Digital Solutions 2018',
        'links' => [
            'in' => 'https://www.linkedin.com/company/ogd-solutions/',
            'facebook' => 'https://www.facebook.com/OGD-Solutions-214552309144764/',
            'youtube' => 'https://www.youtube.com/channel/UCTzGIAGzUbUQGk3T5erBJzA',
            'insta' => 'https://www.instagram.com/ogd.solutions/'
        ]
    ])
        <button id="upTop" title="Go to top">
            <span>&uarr;</span>
        </button>
    @endfooter

@endsection
