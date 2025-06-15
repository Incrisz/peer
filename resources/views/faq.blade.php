<x-app-layout>
    {{-- FAQ Section --}}

    <article data-history-node-id="12" class="node node--type-page node--view-mode-full clearfix">
        <div class="node__content clearfix">
            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">

                    <div class="paragraph paragraph--type--accordion paragraph--view-mode--default">
                        <div class="main-wrapper">
                            <section class="ptb-100">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1 class="text-center mb-70"></h1>

                                            <style>
                                                .image-items {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                }
                                            </style>
                                            <div class="image-items">
                                                @forelse($faq_banner_images as $faq_banner_image)
                                                    <img src="{{ asset($faq_banner_image->image) }}"
                                                        alt="{{ $faq_banner_image->alt_text }}"
                                                        style="width: 65%; margin-top: -76px;">
                                                @empty
                                                    <p>No image</p>
                                                @endforelse
                                            </div>
                                            <div class="accordion" id="accordionExample">
                                                @if ($faqs->isEmpty())
                                                    <p>No FAQ Data Available.</p>
                                                @else
                                                    @foreach ($faqs as $key => $faq)
                                                        <div class="accordion-item">
                                                    {{-- <text>{{ $faq->title}}</text> --}}

                                                            <h5 class="accordion-header"
                                                                id="heading{{ $key + 1 }}">
                                                                <button style="font-size: 20px" class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse{{ $key + 1 }}"
                                                                    aria-expanded="{{ $key === 0 ? '' : 'false' }}"
                                                                    aria-controls="collapse{{ $key + 1 }}">
                                                                    {{ $faq->title }}
                                                                </button>
                                                            </h5>
                                                            <div id="collapse{{ $key + 1 }}"
                                                                class="accordion-collapse collapse {{ $key === 0 ? '' : '' }}"
                                                                aria-labelledby="heading{{ $key + 1 }}"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <p style="font-size: 15px">{{ $faq->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
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
    </article>

</x-app-layout>
