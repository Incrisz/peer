<x-app-layout>
    {{-- News Section --}}
    <article data-history-node-id="7" class="node node--type-page node--view-mode-full clearfix">
        <div class="node__content clearfix">
            <div class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--views-reference paragraph--view-mode--default">
                        <div class="field field--name-field-views-reference field--type-viewsreference field--label-hidden field__item">
                            <div class="views-element-container">
                                <div class="image-card-sec view view-news view-id-news view-display-id-block_2 js-view-dom-id-88f3228f2863214e426b38a341ca523140e7671125b2ba0426e80d5727901670">
                                    <section class="image-card-sec ptb-100 light-grey">
                                        <div class="container">
                                            <div class="col-12 pb-70 text-center">
                                                <h2>Latest Posts</h2>
                                            </div>
                                            <div class="row">
                                                @if ($blogs->isEmpty())
                                                <div class="text-center">
                                                    <!-- Display the SVG image -->
                                                    <img src="{{ asset('images/no-blog-found.svg') }}"
                                                        alt="No Blog Found" class="img-fluid" width="300"
                                                        height="200">
                                                    <!-- Or display a text message -->
                                                    <p>No blogs found.</p>
                                                </div>
                                            @else

                                                @foreach ($blogs as $blog)

                                                <div class="col-12 col-lg-4 col-md-6">
                                                    <div class="card">
                                                        <div class="card-image-block">
                                                            <a
                                                                href="{{route('news.single',[$blog->id,$blog->title])}}">
                                                                <img class="w-100"
                                                                    src="{{ asset( $blog->featured_image) }}"
                                                                    alt="story1">
                                                                <span>{{ $blog->created_at->diffForHumans() }}</span>
                                                            </a>
                                                        </div>
                                                        <div class="card-description-block">
                                                            <h5><a
                                                                    href="{{route('news.single',[$blog->id,$blog->title])}}">{{$blog->title}}</a>
                                                            </h5>


                                                            <div
                                                                class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                {!! Str::limit($blog->content, 100) !!}
                                                            </div>

                                                            <a href="{{route('news.single',[$blog->id,$blog->title])}}"
                                                                class="link-txt text-uppercase">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            @endif
                                                




                                                

                                            </div>
                                        </div>
                                    </section>
                                </div>


                            </div>

                        </div>


                    </div>


                </div>
            </div>

        </div>
    </article>
</x-app-layout>
