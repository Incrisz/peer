<x-app-layout>
    {{-- Loyalty Program Section --}}
    <article data-history-node-id="3" class="node node--type-page node--view-mode-full clearfix">
        <div class="node__content clearfix">
            <section class="hero pt-100 light-grey">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp">{{ $loyaltyProgram->title }}</h1>
                                <p>{!! $loyaltyProgram->description !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </section>
            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--media paragraph--view-mode--default">
                        <section style="padding-bottom: 0px;padding-top:0px;" class="light-grey">
                            {{-- <section class="pb-100"> --}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img class="w-100 wow bounceInUp" src="{{ asset($loyaltyProgram->image) }}"
                                            alt="/token-bnr">
                                    </div>
                                    <div class="col-12">
                                        <a style="position: relative; left: 75%; bottom: 200%" target="blank" href="{{ $pns_token?->ico_button_url }}" class="primary-btn">{{ $pns_token?->ico_button_text ? $pns_token?->ico_button_text : 'Not fixed yet' }}</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="field__item">
                    <div class="paragraph paragraph--type--text-columns paragraph--view-mode--default">
                        <section class="list-style v3 ptb-100  v4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <ul class="gap59-149">
                                            @foreach ($loyaltyItems as $loyaltyItem)
                                                <li>
                                                    <text>{{ $loyaltyItem->title }}</text>
                                                    <p>
                                                        {{ $loyaltyItem->description }}
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
                                                                        <h3 id="text-heading" class="fs-1">
                                                                            {{ $offer->title }}</h3>
                                                                        <p>{{ $offer->description }}</p>
                                                                        <a href="{{ $offer->link }}"
                                                                            class="primary-btn plr">{{ $offer->button_text }}</a>

                                                                        <style>
                                                                            #text-heading {
                                                                                font-size: 30px !important;
                                                                                font-weight: 700 !important;
                                                                            }

                                                                            @media (max-width: 768px) {
                                                                                #text-heading {
                                                                                    font-size: 20px !important;
                                                                                }
                                                                            }
                                                                        </style>
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
                                                                        src="{{ asset($offer->image) }}"
                                                                        alt="{{ $offer->title }}">

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
                    @include('partials.newsletter')

                </div>
            </div>
        </div>
    </article>
</x-app-layout>
