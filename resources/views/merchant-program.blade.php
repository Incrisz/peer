<x-app-layout>


    <article data-history-node-id="13" class="node node--type-page node--view-mode-full clearfix">


        <div class="node__content clearfix">

            <section class="hero pt-100">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp">{{ $merchantProgram->title }}</h1>
                                <p>{!! $merchantProgram->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--media paragraph--view-mode--default">
                        <section>
                            {{-- <section class="pb-100"> --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img class="w-50 wow bounceInUp" src="{{ asset($merchantProgram->image) }}"
                                                alt="{{ $merchantProgram->title }}">

                                        </div>
                                    </div>
                                </div>
                            </section>
                    </div>



                </div>

                <div class="field__item">
                    <div class="paragraph paragraph--type--two-column-row paragraph--view-mode--default">

                        <div
                            class="field field--name-field-two-column-content field--type-entity-reference-revisions field--label-hidden field__items">
                            <div class="field__item">


                                <div
                                    class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                                    <section class="ptb-100 light-grey">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 ">
                                                    <div class="left-content">


                                                        <div
                                                            class="field field--name-field-left-side field--type-entity-reference-revisions field--label-hidden field__item">
                                                            <div
                                                                class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                                                <section class="ptb-100 full_width ">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-12 text-center">
                                                                                <div class="text-description v3">
                                                                                    <h3>
                                                                                        <h3 data-animated="fadeInUp">
                                                                                            {{ $brand->title }}
                                                                                        </h3>
                                                                                    </h3>
                                                                                    <p>{!! $brand->description !!}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>

                                                            <!-- END OUTPUT from 'themes/custom/peernetics/templates/paragraphs/paragraph--simple-text.html.twig' -->

                                                        </div>

                                                        <!-- END OUTPUT from 'themes/contrib/bootstrap_barrio/templates/field/field.html.twig' -->


                                                    </div>
                                                    <div class="right-content">
                                                        <div
                                                            class="field field--name-field-right-side field--type-entity-reference-revisions field--label-hidden field__item">
                                                            <div
                                                                class="paragraph paragraph--type--media paragraph--view-mode--default">
                                                                <section>
                                                                    {{-- <section class="pb-100"> --}}
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-12 text-center">
                                                                                    <img class="w-100 wow bounceInUp"
                                                                                        src="{{ asset($brand->image) }}"
                                                                                        alt="{{ $brand->title }}">

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
                            <div class="field__item">
                                <div
                                    class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                                    <section class="ptb-100 light-grey">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 ">
                                                    <div class="left-content">


                                                        <div
                                                            class="field field--name-field-left-side field--type-entity-reference-revisions field--label-hidden field__item">
                                                            <div
                                                                class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                                                <section class="ptb-100 full_width ">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-12 text-center">
                                                                                <div class="text-description v3">
                                                                                    <h3>
                                                                                        <h3 data-animated="fadeInUp">
                                                                                            {{ $collab->title }}
                                                                                        </h3>
                                                                                    </h3>
                                                                                    <p>{{ $collab->description }}
                                                                                    </p>
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
                                                                    {{-- <section class="pb-100"> --}}
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-12 text-center">
                                                                                    <img class="w-100 wow bounceInUp"
                                                                                        src="{{ asset($collab->image) }}"
                                                                                        alt="{{ $collab->title }}">

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
                        </div>
                    </div>
                </div>


                <div class="field__item">

                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="pt-100 full_width " style="padding-bottom:50px; ">

                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="text-description v3">
                                            <h3>{{ $extensive->title }}</h3>
                                            <p>{!! $extensive->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="field__item">
                    <div class="paragraph paragraph--type--cards paragraph--view-mode--default">
                        <section>

                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">

                                        <div class="grid-column grid-five gap31">
                                            @foreach ($merchantItems as $merchantItem)
                                            <div class="icon-card">
                                                <div class="icon-wrap">

                                                    <img src="{{ asset($merchantItem->image) }}"
                                                        alt="{{ $merchantItem->title }}" height="70" width="68">
                                                </div>
                                                <h6>
                                                    <span>{{ $merchantItem->title }}</span>

                                                </h6>
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>




                </div>


                <div class="field__item">
                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="text-description v3">
                                            <p><strong>{!! $together->description !!}</strong></p>
                                            <a href="{{ $together->link }}" class="primary-btn plr">{{
                                                $together->button_text }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>



                </div>


                <article data-history-node-id="2" class="node node--type-page node--view-mode-full clearfix">


                    <div class="node__content clearfix">

                        <section class="hero pt-100 light-grey">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 text-center">
                                        <div class="title-desc-image">
                                            <h1 class="wow fadeInUp">{{ $merchant->title }}</h1>
                                            <p>{!! $merchant->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <div
                            class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                            <div class="field__item">

                                <div class="paragraph paragraph--type--media paragraph--view-mode--default">
                                    <section style="padding-top:0;padding-bottom:75px;" class="light-grey">
                                        {{-- <section class="pb-100"> --}}
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <img class="w-50 wow bounceInUp"
                                                            src="{{ asset($merchant->image) }}" alt="/erger1">

                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                </div>
                            </div>
                            <div class="field__item">
                                <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                    <section class="ptb-100 full_width">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <div class="text-description v3">
                                                        <h3>{{ $target_market->title }}</h3>
                                                        <p>{!! $target_market->description !!}</p>
                                                        <a href="{{ $target_market->link }}" class="primary-btn plr">{{
                                                            $target_market->button_text }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </div>
                            <div class="field__item">
                                <div class="paragraph paragraph--type--text-columns paragraph--view-mode--default">
                                    <section class="list-style v3 ptb-100  v4 light-grey">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <ul class="gap59-149">
                                                        @foreach ($merchant_market as $merchant)
                                                        <li>
                                                            <text>{{ $merchant->title }}</text>
                                                            <p>
                                                                {!! $merchant->description !!}
                                                            </p>
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
                                <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                    <section class="ptb-100 full_width ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <div class="text-description v3">
                                                        <h3>{{ $promote->title }}</h3>
                                                        <p>{{ $promote->description }}</p>
                                                        <a href="https://loyaltyclub.peernetics.io/login" class="primary-btn plr">Sign Up
                                                            Now</a>
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



                <div class="field__item">

                    <div class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                        <section class="ptb-50 light-grey">
                            {{-- <section class="ptb-100 light-grey"> --}}
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-12 left-expanded">
                                            <div class="left-content">

                                                <div
                                                    class="field field--name-field-left-side field--type-entity-reference-revisions field--label-hidden field__item">

                                                    <div
                                                        class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                                        <section class="ptb-100 full_width ">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-12 text-center">
                                                                        <div class="text-description v3">
                                                                            <h3 style="
                                                                            font-size: 30px !important;
                                                                                line-height: 1.5 !important;
                                                                                font-weight: bold !important;">
                                                                                {{ $mass->title }}
                                                                            </h3>
                                                                            <p style="font-weight: none !important">
                                                                                {!! $mass->description !!}
                                                                            </p>
                                                                            <a href="{{ $mass->link }}"
                                                                                class="primary-btn plr">{{
                                                                                $mass->button_text }}</a>
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
                                                            {{-- <section class="pb-100"> --}}
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-12 text-center">
                                                                            <img class="w-100 wow bounceInUp"
                                                                                src="{{ asset($mass->image) }}"
                                                                                alt="{{ $mass->title }}">

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
            </div>



        </div>
    </article>



</x-app-layout>