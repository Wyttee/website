<section id="technologies" class="technologies">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="technologies-titles text-center">Technologies</h2>
            </div>

            @foreach ($technologies->take(3) as $technlogy)
                <div class="col-md-4 pt-0 pb-0 pl-1 pr-1">
                    <div class="technologies-block d-flex flex-column justify-content-center align-items-center">
                        <h5 class="technologies-block_name text-center">{{ $technlogy->name }}</h5>
                        @svg('resources/images/php-icon')
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-sm-center w-100">
                <div class="col-sm-8 col-md-4 cust-col-4 p-sm-1 pt-md-0 pb-md-0 pl-md-1 pr-md-1 d-flex justify-content-center align-items-center">
                    <a class="white-btn d-flex justify-content-between align-items-center pt-2 pb-2 pl-4 pr-4 mr-md-1 mr-lg-1" data-toggle="modal" data-target="#technologiesModal">
                        <span>more information</span>
                        <span class="arrow-icon">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal modal-fullscreen modal-form fade" id="technologiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-block">
                <a aria-label="Close" class="glp-close" data-dismiss="modal"></a>
            </div>
            <div class="content-modal bg-preview-container">
                <div class="gl-preview">
                    <div class="container">
                        @foreach ($technologies->groupBy('group') as $group => $items)
                            <div class="row">
                                <div class="col-12 green-circle">
                                    <div class="modal-title_technologies_grup mb-4">
                                        <h4>{{ strtoupper($group) }}</h4>
                                    </div>
                                </div>
                                @foreach ($items as $item)
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">
                                        <div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">
                                            <div class="title_technologies">{{ $item->name }}</div>
                                            @svg('resources/images/technologies/laravel-icon')
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        {{--<div class="row">--}}
                            {{--<div class="col-12 violet-trigle">--}}
                                {{--<div class="modal-title_technologies_grup mt-4 mb-4">--}}
                                    {{--<h4>JavaScript</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">Angular</div>--}}
                                    {{--@svg('resources/images/technologies/angular-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">JQuery</div>--}}
                                    {{--@svg('resources/images/technologies/jquery-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">Vue.js</div>--}}
                                    {{--@svg('resources/images/technologies/vue-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-12 red-trigle">--}}
                                {{--<div class="modal-title_technologies_grup mt-4 mb-4">--}}
                                    {{--<h4>DataBase</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">PostgreSQL</div>--}}
                                    {{--@svg('resources/images/technologies/postgre-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">MySQL</div>--}}
                                    {{--@svg('resources/images/technologies/mysql-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">mongoDB</div>--}}
                                    {{--@svg('resources/images/technologies/mongodb-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-12 violet-trigle">--}}
                                {{--<div class="modal-title_technologies_grup mt-4 mb-4">--}}
                                    {{--<h4>CSS</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">Bootstrap</div>--}}
                                    {{--@svg('resources/images/technologies/bootstrap-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">Skeleton</div>--}}
                                    {{--@svg('resources/images/technologies/skeleton-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">Foundation</div>--}}
                                    {{--@svg('resources/images/technologies/foundation-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-12 green-circle">--}}
                                {{--<div class="modal-title_technologies_grup mt-4 mb-4">--}}
                                    {{--<h4>Mobile</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">React</div>--}}
                                    {{--@svg('resources/images/technologies/react-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-sm-6 col-md-4 col-lg-4 p-1 p-md-1">--}}
                                {{--<div class="modal-technologies_block d-flex flex-column justify-content-center align-items-center">--}}
                                    {{--<div class="title_technologies">Ionic</div>--}}
                                    {{--@svg('resources/images/technologies/ionic-icon')--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
