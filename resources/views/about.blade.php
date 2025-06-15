<x-app-layout>

    {{-- About Section --}}
    <article data-history-node-id="9" class="node node--type-page node--view-mode-full clearfix">


        <div class="node__content clearfix">

            <section class="hero pt-100" style="background: white;">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp" style="padding: 0px;">{{ $about_header->title }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                        <section class="py-5 light-grey" style="padding: 0px;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 ">
                                        <div class="left-content">
                                            <div
                                                class="field field--name-field-left-side field--type-entity-reference-revisions field--label-hidden field__item">
                                                <div
                                                    class="paragraph paragraph--type--media paragraph--view-mode--default">
                                                    <section>
                                                        {{-- <section class="pb-100"> --}}
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <img class="w-100 wow bounceInUp"
                                                                        src="{{ asset($about_header->image) }}"
                                                                        alt="{{ $about_header->title }}">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="right-content">
                                            <div
                                                class="field field--name-field-right-side field--type-entity-reference-revisions field--label-hidden field__item">

                                                <div
                                                    class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                                    <section class="ptb-100 full_width ">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <div class="text-description v3">
                                                                        <p>{!! $about_header->description !!}</p>
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
                        </section>
                    </div>

                </div>
                
{{-- 
                <div class="field__item bg-primary">
                    <div class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                        <section class="py-1" style="background-color: #F4F9FE;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 left-expanded">
                                        <div class="left-content">

                                            <div
                                                class="field field--name-field-left-side field--type-entity-reference-revisions field--label-hidden field__item">
                                                <div
                                                    class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                                    <section class="ptb-100 full_width " style="padding-top: 50px; padding-bottom: 50px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <div class="text-description v3">
                                                                        <h3>
                                                                            <p>{!! $about_second->description !!}</p>
                                                                        </h3>
                                                                        <p><strong>{!! $about_second->sub_text !!}.</strong></p>
                                                                        <a href="{{ $about_second->link_url }}"
                                                                            class="primary-btn plr">{{ $about_second->button_text }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right-content">



                                            <div
                                                class="field field--name-field-right-side field--type-entity-reference-revisions field--label-hidden field__item">
                                                <div
                                                    class="paragraph paragraph--type--media paragraph--view-mode--default">
                                                    <section>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <img class="w-100 wow bounceInUp"
                                                                        src="{{ asset($about_second->image) }}"
                                                                        alt="{{ $about_second->title }}">
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
                        </section>
                    </div>
                </div>  --}}


                <div class="field__item">
                    <div class="paragraph paragraph--type--text-columns paragraph--view-mode--default">
                        <section class="list-style v3 ptb-100 v4">
                            <div class="container">
                                <div class="row">
                                    <div class="text-center col-12">
                                        <ul class="gap59-149">
                                            @foreach ($section_v as $sec)
                                                <li>
                                                    <text>{{ $sec->title }}</text>
                                                    <p> {!! $sec->description !!} </p>

                                                    <a href="{{config('app.url')}}/{{$sec->link}}">Learn more</a>

                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>


                <div class="field__item">
                    <div class="paragraph paragraph--type--image-cards paragraph--view-mode--default">
                        <section class="team ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h2 class="mb-xs">{{ $team_header->title }}</h2>
                                        <p>{!! $team_header->description !!}</p>
                                    </div>

                                    <div class="row mt-5 row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 g-lg-3">


                                        @foreach ($teams as $team)
                                            <div class="col">
                                                <div id="team-section" class="card bg-white py-4" style="height: 400px">
                                                    <div class="position-relative mx-auto mb-3"
                                                        style="height: 10rem; width: 10rem;">
                                                        <div class="position-absolute mx-auto inset-0 rounded-3"
                                                            style="height: 10rem; width: 10rem;">
                                                            <img class="object-fit-cover mx-auto rounded-circle"
                                                                src="{{ asset($team->image) }}"
                                                                alt="{{ $team->name }}" layout="fill"
                                                                style="height: 100%; width: 100%;" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-center gap-3 text-center flex-column align-items-center">

                                                        <p class="fs-4 fw-bold text-black lh-base">{{ $team->name }}
                                                        </p>
                                                        <p class="text-x text-secondary-emphasis text-center text-xl">
                                                            <strong>{{ $team->job_desc }}</strong>
                                                        </p>
                                                        <div class="d-flex w-full mt-2 justify-content-between">
                                                            <p>&nbsp;</p><a href="{{ $team->link }}"><img
                                                                    src="sites/default/files/inline-images/icons8-linkedin-48_1.png"
                                                                    data-entity-uuid="74eb53e1-2606-41c9-aefc-a045c197e46c"
                                                                    data-entity-type="file"
                                                                    alt="{{ $team->link }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="col-12 text-center mt-50">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="field__item">
                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width" style="background-color: #F4F9FE;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="text-description v3">
                                            <h3>{{ $merchant->title }}</h3>
                                            <p>{{ $merchant->description }}</p>
                                            <a href="{{ $merchant->link }}"
                                                class="primary-btn plr">{{ $merchant->button_text }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </article>

</x-app-layout>
