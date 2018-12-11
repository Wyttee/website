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
            @foreach ($humans->take(3) as $human)
                <div class="col-sm-6 col-md-6 col-lg-4 pt-1 pb-1 pt-sm-2 pb-sm-0 pl-sm-0 pr-sm-2 pb-md-0 pl-md-0 pr-md-2 pb-lg-2 pl-lg-0 pr-lg-2 ng-star-inserted">
                    <div class="profile-block">
                        <div class="profile-name">
                            <span>{{ $human->name }}</span>
                        </div>
                        <div class="profile-block_img text-center">
                            @isset ($human->photo)
                                <img alt="One Group Digital Solutions team photo" class="img-fluid first-image-team" src="{{ $human->photo }}">
                            @endisset

                            @isset ($human->additional_photo)
                                <img alt="One Group Digital Solutions team photo" class="img-fluid second-image-team" src="{{ $human->additional_photo }}">
                            @endisset
                        </div>
                        @isset ($human->position)
                            <div class="job-position">
                                <span>{{ $human->position->name }}</span>
                            </div>
                        @endisset
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row d-flex justify-content-sm-center justify-content-md-start justify-content-start">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-md-0 p-lg-0">
                <a class="btn-page d-flex justify-content-between align-items-center pt-2 pb-2 pl-4 pr-4 pr-md-4 mr-md-1 mr-lg-1" data-target="#teamModal" data-toggle="modal">
                    <span>show more</span>
                    <span class="arrow-icon">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="modal modal-fullscreen modal-form fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-block">
                <a aria-label="Close" class="glp-close" data-dismiss="modal"></a>
            </div>
            <div class="content-modal bg-preview-container">
                <div class="gl-preview">
                    <div class="container">
                        <div class="row">
                            @foreach ($humans as $human)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">
                                    <div class="profile-block">
                                        <div class="profile-name">
                                            <span>{{ $human->name }}</span>
                                        </div>
                                        <div class="profile-block_img text-center">
                                            @isset ($human->photo)
                                                <img alt="One Group Digital Solutions team photo" class="img-fluid first-image-team" src="{{ $human->photo }}">
                                            @endisset

                                            @isset ($human->additional_photo)
                                                <img alt="One Group Digital Solutions team photo" class="img-fluid second-image-team" src="{{ $human->additional_photo }}">
                                            @endisset
                                        </div>
                                        @isset ($human->position)
                                            <div class="job-position">
                                                <span>{{ $human->position->name }}</span>
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
