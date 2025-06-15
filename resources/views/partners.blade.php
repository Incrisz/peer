<x-app-layout>
    {{-- Partners Section --}}
    <article data-history-node-id="39" class="node node--type-page node--view-mode-full clearfix">
        <div class="node__content clearfix">

            <section class="hero pt-100">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp">Strategic Partners</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">

                    <div class="paragraph paragraph--type--image-cards paragraph--view-mode--default">
                        <section class="team ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                    </div>
                                    <div class="team-card">
                                        @foreach ($partners as $partner)
                                            <div class="card">
                                                <div class="image-wrap">
                                                    <img src="{{ asset($partner->image) }}" alt="{{ $partner->title }}"
                                                        style="border-radius: 20px">
                                                </div>
                                                <div class="desc-wrap">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="col-12 text-center mt-50">
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
