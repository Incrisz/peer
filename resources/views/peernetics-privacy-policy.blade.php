<x-app-layout>
    {{-- policy privacy Section --}}

<article data-history-node-id="35" class="node node--type-page node--view-mode-full clearfix">
    <div class="node__content clearfix">
        <section class="hero pt-100">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 text-center">
                        <div class="title-desc-image">
                            <h1 class="wow fadeInUp">Privacy Policy</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
            <div class="field__item">
                <div class="paragraph paragraph--type--inline-links paragraph--view-mode--default">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="menu-legal-en-container">
                                        <ul class="menu">

                                            <li class="menu-item">
                                                <a href="{{ asset('peernetics-terms-conditions') }}">Terms &amp;
                                                    Conditions</a>
                                            </li>

                                            <li class="menu-item active">
                                                <a href="{{ asset('peernetics-privacy-policy')}}">Privacy Policy</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="{{ asset('peernetics-cookie-policy')}}">Cookie Policy</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="{{ asset('risk-disclaimer')}}">Risk Disclaimer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="privacy-content">
                        <div class="container">
                            <div class="section_hero">
                                <h2 class="section_title"></h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="block_privacy_hero block_privacy_box">
                                <div class="block_privacy_box_left">
                                    {{-- <h2>
                                        Contents
                                    </h2> --}}
                                </div>
                                <div class="block_privacy_box_right">
                                    <div class="block_privacy_box_right_uniq">
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
                                        <div class="privacy-padding" name="termly-embed"
                                            data-id="03dec9c5-3227-4a69-aa46-2a76b92af430">&nbsp;</div>
                                        <script type="text/javascript">
                                            (function(d, s, id) {
                                                var js, tjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "https://app.termly.io/embed-policy.min.js";
                                                tjs.parentNode.insertBefore(js, tjs);
                                            }(document, 'script', 'termly-jssdk'));
                                        </script>
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