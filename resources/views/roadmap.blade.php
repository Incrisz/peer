<x-app-layout>
    {{-- Roadmap Section --}}
    <article data-history-node-id="10" class="node node--type-page node--view-mode-full clearfix">


        <div class="node__content clearfix">

            <section class="hero pt-100">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp">Roadmap</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="roadmap ptb-100">
                <div class="container">
                    <div class="marker-top"></div>
                    <div class="row">
                        <div class="col-12">
                            @foreach ($roadmaps as $index => $roadmap)
                                @if ($index % 2 == 0)
                                    <div class="timeline-block timeline-block-right">
                                        <div class="marker"></div>
                                        <div class="timeline-content">
                                            <div class="timeline-box card-shadow d-inline-block">
                                                <h5 class="wow fadeInRight animated"
                                                    style="visibility: visible; animation-name: fadeInRight;">
                                                    {{ $roadmap->title }}</h5>
                                                <ul class="wow fadeInRight animated"
                                                    style="visibility: visible; animation-name: fadeInRight;">
                                                    {!! $roadmap->description !!}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="timeline-block timeline-block-left">
                                        <div class="marker"></div>
                                        <div class="timeline-content">
                                            <div class="timeline-box card-shadow d-inline-block">
                                                <h5 class="wow fadeInLeft animated"
                                                    style="visibility: visible; animation-name: fadeInLeft;">
                                                    {{ $roadmap->title }}
                                                </h5>
                                                <ul class="wow fadeInLeft animated"
                                                    style="visibility: visible; animation-name: fadeInLeft;">
                                                    {!! $roadmap->description !!}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="marker-bottom"></div>
                </div>
            </section>

            {{-- <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--pipeline-tree paragraph--view-mode--default">
                        <section class="roadmap ptb-100">
                            <div class="container">
                                <div class="marker-top"></div>
                                <div class="row">
                                    <div class="col-12">
                                        @foreach ($roadmaps as $index => $roadmap)
                                            @if ($index % 2 == 0)
                                                <div class="timeline-block timeline-block-left">
                                                    <div class="marker"></div>
                                                    <div class="timeline-content">
                                                        <div class="timeline-box card-shadow d-inline-block">
                                                            <h5 class="wow fadeInLeft">{{ $roadmap->title }}</h5>
                                                            <ul class="wow fadeInLeft">
                                                                {!! $roadmap->description !!}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="timeline-block timeline-block-right">
                                                    <div class="marker"></div>
                                                    <div class="timeline-content">
                                                        <div class="timeline-box card-shadow d-inline-block">
                                                            <h5 class="wow fadeInRight">{{ $roadmap->title }}</h5>
                                                            <ul class="wow fadeInRight">
                                                                {!! $roadmap->description !!}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach


                                    </div>
                                </div>
                                <div class="marker-bottom"></div>
                            </div>
                        </section>
                    </div>

                </div>
            </div> --}}
        </div>
    </article>

</x-app-layout>
