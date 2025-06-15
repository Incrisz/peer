<x-app-layout>

    {{-- Landing Section --}}
    <article data-history-node-id="11" class="clearfix node node--type-page node--view-mode-full">
        <div class="clearfix node__content">

            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--banner paragraph--view-mode--default">
                        <section class="ptb-100" id="particles-js">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 col-lg-6 col-md-6">
                                        <h2 class="mb-l">
                                            <p>{{ $banner->title ?? 'Not available' }}<br><span
                                                    class="wow fadeInUpBig">{{ $banner->middle_text ?? 'Not available'
                                                    }}</span><br>{{ $banner->subtitle ?? 'Not available' }}</p>

                                        </h2>

                                        <a href="{{$banner->loyalty_button_url}}" class="primary-btn plr">{{
                                            $banner->loyalty_button_text }}</a>
                                        <a href="{{$banner->ico_button_url}}" class="primary-btn plr">{{
                                            $banner->ico_button_text }}</a>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        <img src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp w-100">
                                        {{-- @foreach (json_decode($banner->images) as $image)
                                        <img src="{{ $image }}" alt="images" class="wow bounceInUp w-100">
                                        @endforeach --}}
                                    </div>
                                </div>
                            </div>


                            {{-- <img src="sites/default/files/2023-07/poligon-build.png" alt="logo"
                                class="position-absolute bottom-0 start-0 w-[20%] object-fit-cover" /> --}}
                        </section>

                    </div>

                </div>

                <div class="field__item">
                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width light-grey">
                            <div class="">
                                <section class="z-30 py-10 bg-white py-sm-32">
                                    <div class="container px-3 mx-auto">

                                        <div class="mx-auto text-center text-description v3">
                                            <h3 class="text-center">
                                                <h3>{{ $header[0]->title }} <span class="wow fadeInUpBig">
                                                        {{ $header[1]->title }}</span>
                                                </h3>
                                            </h3>
                                        </div>

                                        <div class="mt-5 row justify-content-center">
                                            <div class="col-lg-6">

                                                @foreach ($benefits as $index => $benefit)
                                                @switch($index % 3)
                                                @case(0)
                                                <!--1-->
                                                <div class="mb-4">
                                                    <div class="p-4 bg-white shadow-lg rounded-4">
                                                        <div class="gap-3 d-flex align-items-center">
                                                            <div class="rounded-btn" style="width: 5rem; height: 4rem;">
                                                                <span class="fw-bold fs-3">{{ $index + 1 }}</span>
                                                            </div>
                                                            <div>
                                                                <h2 id="font-size-1"
                                                                    class="text-[#426692] mb-2 fw-bold">
                                                                    {{ $benefit->title }}</h2>
                                                                <p id="font-size-2"
                                                                    class="text-md font-size-2 text-[#426692] fw-normal">
                                                                    {{ $benefit->description }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @break

                                                @case(1)
                                                <!--2-->
                                                <div class="mb-4 card-2">
                                                    <div class="p-4 bg-white shadow-lg rounded-4 card-2 position-relative end-1/4"
                                                        style="left: 10%;">
                                                        <style>
                                                            @media only screen and (max-width: 1024px) {
                                                                .card-2 {
                                                                    left: 0 !important;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="gap-3 d-flex align-items-center">
                                                            <div class="rounded-btn" style="width: 6rem; height: 4rem;">
                                                                <span class="fw-bold fs-3">{{ $index + 1 }}</span>
                                                            </div>
                                                            <div>
                                                                <h2 id="font-size-1"
                                                                    class="text-[#426692] mb-2 fw-bold">
                                                                    {{ $benefit->title }}</h2>
                                                                <p id="font-size-2"
                                                                    class="text-md font-size-2 text-[#426692] fw-normal">
                                                                    {{ $benefit->description }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @break

                                                @case(2)
                                                <!--3-->
                                                <div>
                                                    <div class="p-4 bg-white shadow-lg rounded-4">
                                                        <div class="gap-3 d-flex align-items-center">
                                                            <div class="rounded-btn" style="width: 5rem; height: 4rem;">
                                                                <span class="fw-bold fs-3">{{ $index + 1 }}</span>
                                                            </div>
                                                            <div>
                                                                <h2 id="font-size-1"
                                                                    class="text-[#426692] font-size-1 mb-2 fw-bold">
                                                                    {{ $benefit->title }}</h2>
                                                                <p id="font-size-2"
                                                                    class="text-md font-size-2 text-[#426692] fw-normal">
                                                                    {!! $benefit->description !!}
                                                                    </a>.
                                                                </p>
                                                                <style>
                                                                    #font-size-1 {
                                                                        font-size: 30px !important;
                                                                    }

                                                                    @media screen and (max-width: 900px) {
                                                                        #font-size-1 {
                                                                            font-size: 20px !important;
                                                                        }

                                                                        #font-size-2 {
                                                                            font-size: 13px !important;
                                                                        }
                                                                    }
                                                                </style>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @break
                                                @endswitch
                                                @endforeach


                                            </div>

                                            <div
                                                class="w-full h-full col-lg-6 d-flex flex-column align-items-center position-relative">

                                                <img src="sites/default/files/2023-07/loyalty-club.png"
                                                    alt="loyalty-club" class="position-absolute end-1/4 top-1/2 center2"
                                                    style="left: 16%;" />

                                                <style>
                                                    .rounded-btn {
                                                        background: -webkit-gradient(linear, left top, right top, color-stop(-4.87%, #02A9EB), to(#205AA6));
                                                        background: linear-gradient(90deg, #02A9EB -4.87%, #205AA6 100%);
                                                        border-radius: 10px;
                                                        font-family: "Poppins";
                                                        font-style: normal;
                                                        font-weight: 700;
                                                        font-size: 16px;
                                                        line-height: 26px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-radius: 9999px;
                                                        /* padding: 10px 30px */
                                                        /* display: inline-block; */
                                                        color: #fff;
                                                        text-decoration: none;
                                                        -webkit-transition: all ease-in-out 0.6s;
                                                        transition: all ease-in-out 0.6s
                                                    }

                                                    .rounded-btn:hover {
                                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(-4.87%, #02A9EB), to(#205AA6));
                                                        background: linear-gradient(180deg, #02A9EB -4.87%, #205AA6 100%);
                                                        color: #fff
                                                    }

                                                    @media only screen and (max-width: 1024px) {
                                                        .center2 {
                                                            position: static !important;
                                                            display: block !important;
                                                            margin: auto !important;
                                                            width: 100%;
                                                            margin-bottom: 10px;
                                                        }

                                                    }

                                                    /* @media only screen and (max-width: 300px) {
                                                        
                                                        .p{
                                                            position: absolute;
                                                        }
                                                    } */

                                                    @media only screen and (min-width: 992px) {

                                                        .p {
                                                            position: absolute;
                                                        }
                                                    }
                                                </style>

                                                <a href="https://loyaltyclub.peernetics.io/"
                                                    class="primary-btn btn plr justify-content-center d-flex p bottom-0">Explore</a>

                                                <style>
                                                    .custom-gradient {
                                                        background: linear-gradient(to left, #1B66B1, #0899DD);
                                                    }

                                                    @media screen and (max-width: 1024px) {
                                                        .custom-gradient {
                                                            position: static !important;
                                                            display: block;
                                                            margin: auto;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                            </div>
                        </section>
                    </div>

                </div>
                {{-- mobile view --}}
                <div class=" show field__item">
                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width">

                            <section class="z-30 py-10 py-sm-32">
                                <div class="container px-3 mx-auto">

                                    <div class="mt-5 row justify-content-center">

                                        <div
                                            class="w-full h-full col-lg-6 d-flex flex-column align-items-center position-relative">

                                            <div style="margin-top: 10px; margin-bottom: 50px" class="col-lg-6 col-md-6">


                                                <div>
                                                    <h4>
                                                        <span>
                                                            {{$dat?->description}}
                                                        </span>
                                                    </h4>
                                                </div>

                                            </div>

                                            <img src="{{$dat?->mobile_image}}" alt="loyalty-club"
                                                class="position-absolute end-1/4 top-1/2 center2" style="left: 16%;" />



                                            <div style="margin-top: 50px; margin-bottom: 50px;" class="col-lg-6 col-md-6">


                                                <a href="{{$dat?->btn_link}}" class="primary-btn plr">{{$dat?->btn_name
                                                    }}</a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>



                        </section>
                    </div>

                </div>

                {{-- web view --}}
                <div class="field__item notShow">
                    <div class="paragraph paragraph--type--banner paragraph--view-mode--default">

                        <section class="hero ptb-100">
                            <div class="container">
                                <div class="row d-flex align-items-center">

                                    <div style="position: relative;" class="col-12 col-lg-7 col-md-7">
                                        <div style="position: absolute; top: 140px; left: 200px;" class="ontop">

                                            <div>
                                                <h4>
                                                    <span class="des-text">{{$dat->description}}</span>
                                                </h4>

                                            </div>


                                        </div>
                                        <div style="position: absolute; top: 230px; left: 200px;" class="ontop">

                                            <a href="{{$dat?->btn_link}}" class="primary-btn plr">{{$dat?->btn_name
                                                }}</a>

                                            {{-- <a href="{{$dat->btn_link}}" target="_blank"
                                                style="text-decoration: none" rel="noopener noreferrer">
                                                <button
                                                    class="bottom-0 btn position-absolute d-flex justify-content-center prim-btn plr">{{$dat->btn_name}}</button>
                                            </a> --}}

                                        </div>

                                        <img src="{{$dat?->desktop_image}}" class="" alt="/Peernetics%20Dashnoard%20UI">

                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- <section class="hero ptb-100">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="text-center col-12 col-lg-5 col-md-5">
                                        <div class="d-flex align-items-center justify-content-sm-center gap39 pb-xl">
                                            <h2 class="mb-l">
                                                <p>{{ $dat->texti }}&nbsp;<br><span class="fadeInUp wow">{{ $dat->textii
                                                        }}</span>&nbsp;<br>{{ $dat->textiii }}&nbsp;<br><span
                                                        class="fadeInUp wow">{{ $dat->textiv }}</span>&nbsp;<br>{{
                                                    $dat->textv }}&nbsp;<br><span class="fadeInUp wow">{{ $dat->textvi
                                                        }}</span></p>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 col-md-7">
                                        <img src="{{ $dat->image }}" class="w-100 ps-2"
                                            alt="/Peernetics%20Dashnoard%20UI">
                                    </div>
                                </div>
                            </div>
                        </section> --}}
                    </div>

                </div>

                {{-- <div class="field__item">
                    <div class="paragraph paragraph--type--banner paragraph--view-mode--default">
                        <section class="hero ptb-100 position-relative" style="position: relative;">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="text-center col-12 col-lg-5 col-md-5">
                                        <div class="d-flex align-items-center justify-content-sm-center gap39 pb-xl">
                                            <h2 class="mb-l">
                                                <p><span class="fadeInUp wow">PLAY AND EARN PNS TOKENS</span>&nbsp;<br>
                                                <p style="font-size: small; font-weight: normal;">JOIN THE GLOBAL GAMING
                                                    CENTER -</p>
                                                <p style="font-size: small; font-weight: normal;">Turn your skills into
                                                    crypto Rewards, no matter where you play.</p> &nbsp;<br>
                                                </p>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 col-md-7 position-relative" style="position: relative;">
                                        <img style="height: 500px"
                                            src="sites/default/files/2023-09/banner-home-page-box-removebg-preview.png"
                                            class="w-100 ps-2 main-image" alt="Main Banner Image">
                                    </div>
                                </div>
                            </div>
                            <!-- Coin Images -->
                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 120px; left: 200px; width: 100px; height: 100px;">
                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 200px; left: 500px; width: 70px; height: 70px; transform: rotate(120deg);">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 80px; left: 800px; width: 50px; height: 70px; transform: rotate(120deg);">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 80px; left: 920px; width: 100px; height: 200px; transform: rotate(60deg);">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 300px; right: 150px; width: 100px; height: 50px; transform: rotate(60deg) ">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 430px; left: 1150px; width: 100px; height: 200px; transform: rotate(60deg);">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 370px; left: 500px; width: 50px; height: 70px; transform: rotate(120deg);">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 430px; left: 200px; width: 200px; height: 100px; transform: rotate(60deg);">

                            <img class="hide-on-large" src="sites/default/files/2023-09/coin-removebg-preview (1).png"
                                alt="Coin Image"
                                style="position: absolute; top: 300px; left: 100px; width: 100px; height: 50px; transform: rotate(60deg) ">


                        </section>
                    </div>
                </div> --}}
                {{-- <div class="field__item">
                    <div class="paragraph paragraph--type--checklist paragraph--view-mode--default">
                        <section class="list-style ptb-100 light-grey">
                            <div class="container">
                                <div class="row">
                                    <div class="text-center col-12">
                                        <ul class="gap55-222">
                                            @foreach ($section_iv as $sec)
                                            <li class="gap-2 d-flex items-align-center">
                                                <div>
                                                    <div class="px-1 svg-icon">
                                                        <img src="sites/default/files/2023-07/Tick-Square.svg"
                                                            alt="svg">
                                                    </div>
                                                </div>
                                                <div>
                                                    <text class="wow fadeInUpBig">{{ $sec->title }}</text>
                                                    <p>{{ $sec->description }}</p>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>



                </div> --}}
                {{-- Navigation --}}
                {{-- <div class="field__item">
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
                </div> --}}

                <div class="field__item">


                    <div class="paragraph paragraph--type--views-reference paragraph--view-mode--default">

                        <div
                            class="field field--name-field-views-reference field--type-viewsreference field--label-hidden field__item">
                            <div class="views-element-container">
                                <div
                                    class="image-card-sec view view-news view-id-news view-display-id-block_2 js-view-dom-id-be4405fb04609e80071bbdcf7f7d789c3fa43c4080e5bdf823c226ef960af928">
                                    <section class="image-card-sec light-grey ptb-100">
                                        <div class="container">
                                            <div class="text-center col-12 pb-70">
                                                <h2>Latest Posts</h2>
                                            </div>
                                            @if ($blogs->isEmpty())
                                            <div class="text-center">
                                                <!-- Display the SVG image -->
                                                <img src="{{ asset('images/no-blog-found.svg') }}" alt="No Blog Found"
                                                    class="img-fluid" width="300" height="200">
                                                <!-- Or display a text message -->
                                                <p>No blogs found.</p>
                                            </div>
                                            @else
                                            <div class="row">
                                                @foreach ($blogs as $blog)
                                                <div class="col-12 col-lg-4 col-md-6">
                                                    <div class="card">
                                                        <div class="card-image-block">
                                                            <a
                                                                href="{{ route('news.single', [$blog->id, $blog->title]) }}">
                                                                <img class="w-100"
                                                                    src="{{ asset($blog->featured_image) }}"
                                                                    alt="{{ $blog->title }}">
                                                                <span>{{ $blog->created_at->diffForHumans() }}</span>
                                                            </a>
                                                        </div>
                                                        <div class="card-description-block">
                                                            <h5><a
                                                                    href="{{ route('news.single', [$blog->id, $blog->title]) }}">{{
                                                                    $blog->title }}</a>
                                                            </h5>
                                                            <div
                                                                class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                {!! \Illuminate\Support\Str::limit($blog->content, 100)
                                                                !!}
                                                            </div>
                                                            <a href="{{ route('news.single', [$blog->id, $blog->title]) }}"
                                                                class="link-txt text-uppercase">READ
                                                                MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endif
                                        </div>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field__item">
                    <div class="paragraph paragraph--type--icon-cards paragraph--view-mode--default">
                        <section class="pt-100 ">
                            <div class="container">
                                <div class="row">
                                    <div class="text-center col-12">
                                        <h2 class="pb-100">Featured On</h2>

                                        <div class="slider-wrapper"
                                            style="overflow: hidden; width: 100%; position: relative; margin-bottom: 80px">
                                            <div class="slider-content d-flex" id="sliderContent">
                                                @foreach ($featureds as $fea)
                                                <div class="slider-item bounceInUp">
                                                    <img class="bounceInUp" src="{{ asset($fea->image) }}"
                                                        alt="{{ $fea->title }}" width="180" height="60"
                                                        style="margin-bottom: 50px !important">
                                                    <a href="#" class="primary-btn1 d-inline-block1 mt-50"></a>
                                                </div>
                                                @endforeach


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- <div class="d-flex">

                            @foreach ($featureds as $fea)

                            <div style="padding: 10px">

                                <img class="wow bounceInUp" src="{{ asset($fea->image) }}" alt="{{ $fea->title }}"
                                    width="180" height="60" style="margin-bottom: 50px !important">


                                <a href="#" class="primary-btn1 d-inline-block1 mt-50"></a>
                            </div>
                            @endforeach

                        </div> --}}


                    </div>

                </div>


                <div class="field__item">
                    <div class="paragraph paragraph--type--faq-cards paragraph--view-mode--default">
                        <section class="faq ptb-100 light-grey">
                            <div class="container">
                                <div class="row align-items-center">
                                    @foreach ($questions as $question)
                                    <div class="col-12 col-lg-5 col-md-12">
                                        <h3>
                                            {!! $question->title !!}
                                        </h3>
                                        <p class="font18">{!! $question->description !!}
                                        </p>
                                    </div>
                                    @endforeach

                                    <div class="col-12 col-lg-7 col-md-12">
                                        <div class="grid-column grid-two">
                                            @foreach ($questionItems as $questionItem)
                                            <div class="icon-card">
                                                <div class="icon-wrap mb-xs">
                                                    <img src="{{ asset($questionItem->icon) }}" alt="/new-client-icon">
                                                </div>
                                                <h6>{{ $questionItem->title }}</h6>
                                                <p>
                                                    {!! $questionItem->description !!}
                                                </p>
                                                <a href="{{ $questionItem->link }}">{{ $questionItem->link_text }}
                                                    &gt;</a>
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
                    @include('partials.newsletter')
                </div>
            </div>
        </div>
    </article>
    </div>
    </div>

    </div>
</x-app-layout>