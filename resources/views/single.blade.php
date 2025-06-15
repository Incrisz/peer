<x-app-layout>
    {{-- Single News Section --}}
    <article class="node node--type-page node--view-mode-full clearfix">
        <div class="node__content clearfix">
            <div class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--views-reference paragraph--view-mode--default">
                        <div class="field field--name-field-views-reference field--type-viewsreference field--label-hidden field__item">
                            <div class="views-element-container">
                                <div class="image-card-sec view view-news view-id-news view-display-id-block_2 js-view-dom-id-88f3228f2863214e426b38a341ca523140e7671125b2ba0426e80d5727901670">
                                    <section class="image-card-sec ptb-100 light-grey">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h2>{{ $blog->title }}</h2>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img class="w-100" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}">
                                                </div>
                                            </div>
                                           <div class="row">
                                            <div class="col-12">
                                                <p>{{ $blog->user->name}}</p>
                                            </div>
                                           </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <span>{{ $blog->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>{{ $blog->title }}</h5>
                                                    <div class="article-text">
                                                        {!! $blog->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center"> <!-- Center aligning "Back to News" link -->
                                                    <a href="{{ url()->previous() }}" class="link-txt text-uppercase">Back to News</a>
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
        </div>
    </article>
</x-app-layout>
