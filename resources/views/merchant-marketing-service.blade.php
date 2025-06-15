<x-app-layout>
    {{-- Merchant Marketing Service Section --}}

    <article data-history-node-id="11" class="clearfix node node--type-page node--view-mode-full">
        <div class="clearfix node__content">

            <div
                class="field field--name-field-layout-components  field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--banner paragraph--view-mode--default ">
                        <section class="ptb-100 light-grey ">
                            <div class="container">
                                <div class="row d-flex gaming-div align-items-center ">


                                    <div  class="col-12 col-lg-6 col-md-6">
                                        <img style="opacity: 0.1000009;"  src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp icon icon-1">
                                        <img style="opacity: 0.1000009;" src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp icon icon-2">
                                        
                                        {{--
                                        <img style="width: 100px; height: 100px" src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp icon icon-1">
                                        <img src="sites/default/files/css/gaming-folder/Component 18.png" alt="images"
                                            class="icon icon-1">
                                        <img src="sites/default/files/css/gaming-folder/Component 17.png" alt="images"
                                            class="icon icon-2">
                                        <img src="sites/default/files/css/gaming-folder/Component 18.png" alt="images"
                                            class="icon icon-3">
                                        <img src="sites/default/files/css/gaming-folder/Component 14.png" alt="images"
                                            class="icon icon-4">
                                        <img src="sites/default/files/css/gaming-folder/Component 16.png" alt="images"
                                            class="icon icon-5">
                                        <img src="sites/default/files/css/gaming-folder/Component 15.png" alt="images"
                                            class="icon icon-6">
                                        <img src="sites/default/files/css/gaming-folder/Component 6.png" alt="images"
                                            class="icon icon-7"> --}}
                                        <div class="row keep-content pt-5">
                                            <h6>{{$dat?->texti}}</h6>
                                            <h2 class="mb-l">

                                                <span>{{$dat?->textii}}<span style="font-size: 20px; font-weight: 100; margin: 10px">(Coming
                                                        Soon)</span></span>
                                            </h2>
                                        </div>

                                        <div  class="row above text-align-center">


                                            <div class="col-lg-6">
                                                <a href="{{$dat?->google_store_link}}"
                                                    class="primary-btn-game mb-4 plr"><img
                                                        src="sites/default/files/css/gaming-folder/logos_google-play-icon.png"
                                                        alt="images" class="">
                                                    Get it on <br>
                                                    <span class="">Google Play</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{$dat?->apple_store_link}}"
                                                    class="primary-btn-game mb-4 plr"><img
                                                        src="sites/default/files/css/gaming-folder/logos_apple-app-store.png"
                                                        alt="images" class="">
                                                    Get it on <br>
                                                    <span class="">Apple Store</span>
                                                </a>
                                            </div>
                                        </div>
                                        <img style="opacity: 0.1000009;"  src="sites/default/files/2023-07/PNS%20Icon%201%20n.png" alt="images"
                                            class="wow bounceInUp icon icon-3">

                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        
                                        <img src="{{$dat?->image}}" alt="images" class="bounceInUp control-image">

                                        <img src="{{$dat?->image}}" alt="mobile version" class="mobile-image">

                                        <div class="row below text-align-center">


                                            <div class="col-lg-6">
                                                <a href="{{$dat?->google_store_link}}"
                                                    class="primary-btn-game mb-4 plr"><img
                                                        src="sites/default/files/css/gaming-folder/logos_google-play-icon.png"
                                                        alt="images" class="">
                                                    Get it on <br>
                                                    <span class="">Google Play</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{$dat?->apple_store_link}}"
                                                    class="primary-btn-game mb-4 plr"><img
                                                        src="sites/default/files/css/gaming-folder/logos_apple-app-store.png"
                                                        alt="images" class="">
                                                    Get it on <br>
                                                    <span class="">Apple Store</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom: 100px;" class="col-lg-12 col-md-12 col-sm-12 container p-5 text-center">
                                <h4 class="">{{$dat?->hero_text}}</h4>
                            </div>  

                            


                            {{-- <img src="sites/default/files/2023-07/poligon-build.png" alt="logo"
                                class="position-absolute bottom-0 start-0 w-[20%] object-fit-cover" /> --}}
                        </section>

                    </div>
                </div>

            </div>
        </div>
    </article>

</x-app-layout>