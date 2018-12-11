@extends('layouts.app')

@section('content')
    @header(['type' => 'full'])

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

    @footer(['copyright' => 'One Group Digital Solutions 2018'])
        <button id="upTop" title="Go to top">
            <span>&uarr;</span>
        </button>
    @endfooter

@endsection
