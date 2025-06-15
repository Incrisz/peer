<x-app-layout>
    {{-- Crypto-payment-gateway Section --}}
    <article data-history-node-id="1" class="node node--type-page node--view-mode-full clearfix">


        <div class="node__content clearfix">

            <section class="hero pt-50 pb-50">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp">{{ $crypto->title }}</h1>
                                <p class="cpg-pb-70">{!! $crypto->description !!}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="" style="background: white;">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="field__item">

                                {{-- <div class="field__item"> --}}


                                <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                                    {{-- <section class="pt-5 pb-5 full_width light-grey"> --}}
                                    <section class="pt-5 full_width light-grey">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <div class="text-description v3">
                                                        <h4 class="cpg-sectitle-cus">{{ $exceptional->description }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                {{-- </div> --}}


                                <div
                                    class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                                    <section class="pb-5">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 left-expanded">
                                                    <div class="left-content">

                                                        <div
                                                            class="field field--name-field-left-side field--type-entity-reference-revisions field--label-hidden field__item">

                                                            <div
                                                                class="paragraph paragraph--type--media paragraph--view-mode--default">
                                                                <section class="pb-100">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-12 text-center">
                                                                                <img class="w-100 wow bounceInUp"
                                                                                    src="{{ asset($crypoImage->image) }}"
                                                                                    alt="/monitor">

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
                                                                class="paragraph paragraph--type--checklist paragraph--view-mode--default">
                                                                <section class="list-style ptb-100">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-12 text-center">
                                                                                <ul class="gap55-222">
                                                                                    @foreach ($cryptoBenefits as $cryptoBenefit)
                                                                                        <li class="d-flex gap-2">
                                                                                            <img src="sites/default/files/2023-07/Tick-Square.svg"
                                                                                                alt="svg">
                                                                                            <text
                                                                                                class="wow fadeInUpBig">{{ $cryptoBenefit->description }}</text>
                                                                                        </li>
                                                                                    @endforeach

                                                                                </ul>
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
            </section>


            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">


                <div class="field__item">

                    <!-- THEME DEBUG -->
                    <!-- THEME HOOK: 'paragraph' -->
                    <!-- FILE NAME SUGGESTIONS:
         * paragraph--text-columns--default.html.twig
         x paragraph--text-columns.html.twig
         * paragraph--default.html.twig
         * paragraph.html.twig
      -->
                    <!-- BEGIN OUTPUT from 'themes/custom/peernetics/templates/paragraphs/paragraph--text-columns.html.twig' -->
                    <div class="paragraph paragraph--type--text-columns paragraph--view-mode--default">
                        <section class="list-style v3 ptb-100  v4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <ul class="gap59-149">
                                            @foreach ($cryptoItems as $cryptoItem)
                                                <li>
                                                    <text>{{ $cryptoItem->title }}</text>
                                                    <p>
                                                        {!! $cryptoItem->description !!}
                                                    </p>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- END OUTPUT from 'themes/custom/peernetics/templates/paragraphs/paragraph--text-columns.html.twig' -->

                </div>
                <div class="field__item">

                    <!-- THEME DEBUG -->
                    <!-- THEME HOOK: 'paragraph' -->
                    <!-- FILE NAME SUGGESTIONS:
         * paragraph--simple-text--default.html.twig
         x paragraph--simple-text.html.twig
         * paragraph--default.html.twig
         * paragraph.html.twig
      -->
                    <!-- BEGIN OUTPUT from 'themes/custom/peernetics/templates/paragraphs/paragraph--simple-text.html.twig' -->
                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width light-grey">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="text-description v3">
                                            <h3>{{ $promoteBusiness->title }}</h3>
                                            <p>{!! $promoteBusiness->description !!}</p>
                                            <a href="{{ $promoteBusiness->link }}"
                                                class="primary-btn plr">{{ $promoteBusiness->button_text }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- END OUTPUT from 'themes/custom/peernetics/templates/paragraphs/paragraph--simple-text.html.twig' -->

                </div>
            </div>

            <!-- END OUTPUT from 'themes/contrib/bootstrap_barrio/templates/field/field.html.twig' -->


        </div>
    </article>

</x-app-layout>
