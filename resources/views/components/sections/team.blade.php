@isset ($items)
    <section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="col col-md">
                    <div class="title-block d-flex flex-column justify-content-center align-items-center">
                        <h2>Team</h2>
                    </div>
                </div>
            </div>

            <div class="row margin-team-box">
                @foreach ($items as $user)
                    <div class="col-sm-6 col-md-6 col-lg-4 pt-1 pb-1 pt-sm-2 pb-sm-0 pl-sm-0 pr-sm-2 pb-md-0 pl-md-0 pr-md-2 pb-lg-2 pl-lg-0 pr-lg-2 ng-star-inserted">
                        <div class="profile-block">
                            <div class="profile-name">
                                <span>{{ $user->name }}</span>
                            </div>
                            <div class="profile-block_img text-center">
                                <img alt="One Group Digital Solutions team photo" class="img-fluid first-image-team" src="{{ asset('images/team/1P3A3051.png') }}">
                                <img alt="One Group Digital Solutions team photo" class="img-fluid second-image-team" src="{{ asset('images/team/1P3A3522.png') }}">
                            </div>
                            @isset ($user->team)
                                <div class="job-position">
                                    <span>{{ $user->team->name }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            @if (count($items) > 2)
                <div class="row d-flex justify-content-sm-center justify-content-md-start justify-content-start">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-md-0 p-lg-0">
                        <a class="btn-page d-flex justify-content-between align-items-center pt-2 pb-2 pl-4 pr-4 pr-md-4 mr-md-1 mr-lg-1" data-target="#teamModal" data-toggle="modal">
                            <span>show more</span>
                            <span class="arrow-icon">→</span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endisset
