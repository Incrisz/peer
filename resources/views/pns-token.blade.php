<x-app-layout>
    {{-- PNS Token Section --}}
    <article data-history-node-id="8" class="node node--type-page node--view-mode-full clearfix">


        <div class="node__content clearfix">


            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">

                    <div class="paragraph paragraph--type--banner paragraph--view-mode--default">

                        <section class="hero ptb-100">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 col-lg-5 col-md-5 mt-5 mt-lg-0 ">
                                        <div class="d-flex justify-content-center mx-auto">
                                            <h2 class="mb-l text-md-center text-xl-center">PNS Token</h2>
                                        </div>
                                        <div class="d-flex justify-content-center mx-auto gap-2 pb-xl">
                                            <a target="blank" href="{{ $pns_token?->ico_button_url }}" class="primary-btn">{{ $pns_token?->ico_button_text ? $pns_token?->ico_button_text : 'Not active yet' }}</a>
                                            {{-- <a href="{{ $pns_token->ico_button_url }}" class="primary-btn">{{ $pns_token->ico_button_text }}</a> --}}
                                            {{-- <a href="{{ $pns_token->white_paper }}"
                                                class="transparent-btn"><img class="mr-18"
                                                    src="themes/custom/peernetics/images/file-icon.svg"
                                                    alt="">{{$pns_token->white_paper_button_text  }}</a> --}}
                                            <a target="blank" href="{{ $pns_token?->white_paper}}"
                                                class="transparent-btn"><img class="mr-18"
                                                    src="themes/custom/peernetics/images/file-icon.svg"
                                                    alt="">{{$pns_token?->white_paper_button_text  ? $pns_token?->white_paper_button_text : 'Not active yet.' }}</a>
                                        </div>
                                        <div class="d-flex justify-content-center mx-auto gap-2 pb-xl">
                                            <a target="blank"
                                                href="https://github.com/solidproof/projects/blob/main/Peernetics/SmartContract_Audit_Solidproof_Peernetics.pdf">
                                                <img class="w-md-100 mx-auto"
                                                    src="sites/default/files/2023-05/solid-proof.png"
                                                    alt="/solid-proof">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7 col-md-7">
                                        <img src="sites/default/files/2023-05/token-bnr.png"
                                            class="w-100 ps-2 wow bounceInUp" alt="/token-bnr">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>



                </div>
                <div class="field__item">


                    <div class="paragraph paragraph--type--two-column-content paragraph--view-mode--default">
                        <section class="light-grey">
                            {{-- <section class="ptb-100 light-grey"> --}}
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 right-expanded">
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
                                                                        src="{{ asset($pns->image) }}"
                                                                        alt="{{ $pns->title }}">

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
                                                                        <h3>{{ $pns->title }}</h3>
                                                                        <p>{!! $pns->description !!}</p>
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

                {{-- <div style="display: block" class=" field__item">

                    <div class="paragraph paragraph--type--text-columns paragraph--view-mode--default">
                        <section class="list-style v3 ptb-100  v4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <ul class="gap59-149">
                                            @foreach ($pnsItems as $pnsItem)
                                                <li>
                                                    <text>{{ $pnsItem->title }}</text>
                                                    <p>
                                                        {!! $pnsItem->description !!}
                                                    </p>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>



                </div> --}}

                {{-- Become a merchant --}}
                {{-- <div class="field__item">

                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width light-grey">
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

                </div> --}}

                <div class="field__item">
                    <div class="paragraph paragraph--type--icon-cards paragraph--view-mode--default">
                        <section class="pt-100  ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h2 class="pb-100">{{ $exchange->title }}</h2>
                                        <div class="row exchanges">
                                            <div class=" col-12 text-center">
                                                <img class="d-block m-auto wow bounceInUp"
                                                    src="{{ asset($exchange->image) }}" alt="{{ $exchange->title }}">

                                                <a href="{{ $exchange->link }}"
                                                    class="primary-btn d-inline-block mt-50">{{ $exchange->button_text }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                </div>

                <div class="field__item">
                    <div class="paragraph paragraph--type--icon-cards paragraph--view-mode--default">
                        <section class="pt-100 version-two ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h2 class="pb-100">{{ $wallets[0]->title }}</h2>
                                        <div class="row exchanges">
                                            @foreach ($wallets as $wallet)
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-12 text-center mb-4">
                                                    <img class="d-block m-auto wow bounceInUp"
                                                        src="{{ asset($wallet->image) }}" alt="{{ $wallet->image }}"
                                                        height="100" width="100">



                                                    <a href="#"
                                                        class="primary-btn d-inline-block mt-50">{{ $wallet->button_text }}</a>

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
                    <div class="paragraph paragraph--type--chart paragraph--view-mode--default">
                        <section class="pt-100 light-grey move-down">
                            <div style="margin-bottom: none" class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        
                                        <h2 class="wow fadeInUp">PNS TOKENOMICS</h2>
                                        <div style="margin-bottom: none" class="row align-items-center">
                                            <div class="col-md-3 col-12">
                                                <div class="graph-chart-desc">
                                                    <ul>
                                                        <li>
                                                            <h5>
                                                                Max Supply
                                                            </h5>
                                                            <p>
                                                            <p>1,000,000,000(1 Billion)</p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <h5>
                                                                Total Supply
                                                            </h5>
                                                            <p>
                                                            <p>1,000,000,000(1 Billion)</p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <h5>
                                                                ERC -20 Contract
                                                            </h5>
                                                            <p>
                                                            <p>0xf0d7cb66a2862533a35a6b06fa15d86ec<br>0e8774b</p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <h5>
                                                                Smart Contract
                                                            </h5>
                                                            <p>
                                                            <p>Audit by Solidproof</p>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div style="margin-bottom: none" class="col-md-9 col-12">
                                                {{-- <div id="piechart" style="height: 400px; width: 100%;"></div> --}}
                                                <div id="pie"  class="minimize-item" style="height: 500px; width: 100%; margin-bottom: none"></div>
                                                {{-- <div id="pie" class="minimize-item"></div> --}}

                                                <div class="token-tax">
                                                    <h3>
                                                        Token Tax
                                                    </h3>
                                                    <div class="text-left buy-sell">
                                                        <p>
                                                            BUY
                                                            5%
                                                        </p>
                                                        <p>
                                                            SELL
                                                            5%
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="mb-70 text-center">PNS TOKEN ALLOCATION VESTING</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h5>ALLOCATION</h5>
                                                        </th>
                                                        <th>
                                                            <h5>PERCENTAGE</h5>
                                                        </th>
                                                        <th style="display: none">
                                                            <h5>COLOR</h5>
                                                        </th>
                                                        <th>
                                                            <h5>TOKEN AMOUNT</h5>
                                                        </th>
                                                        <th>
                                                            <h5>VESTING PERIOD</h5>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allocations as $allocation)
                                                        <tr>
                                                            <td>{{ $allocation->allocation }}</td>
                                                            <td>{{ $allocation->perentage }}%</td>
                                                            <td style="display: none">{{ $allocation->color }}</td>
                                                            <td>{{ $allocation->token_amount }}</td>
                                                            <td>
                                                                <p>{{ $allocation->vesting_period }}</p>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

                <div class="field__item">
                    <div class="paragraph paragraph--type--simple-text paragraph--view-mode--default">
                        <section class="ptb-100 full_width light-grey">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="text-description v3">
                                            <h3>{{ $exclusive->title }}</h3>
                                            {!! $exclusive->description !!}
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
