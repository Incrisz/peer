<x-app-layout>




<article data-history-node-id="33" class="node node--type-article node--promoted node--view-mode-full clearfix">
  
  
  <div class="node__content clearfix">
  <div class="main-wrapper">
    <section class="ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="discount-wrap p48-41 bg-white border-radius20">
                                              <img class="w-100" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" />
                            <h3 class="mt-xl pb-xxl mb-0">
                                  {{ $blog->title }}
                              </h3>
                              

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'field' -->
<!-- FILE NAME SUGGESTIONS:
   * field--node--body--article.html.twig
   * field--node--body.html.twig
   * field--node--article.html.twig
   * field--body.html.twig
   x field--text-with-summary.html.twig
   * field.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/contrib/bootstrap_barrio/templates/field/field--text-with-summary.html.twig' -->

            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
            {!! $blog->content !!}
            </div>
      
<!-- END OUTPUT from 'themes/contrib/bootstrap_barrio/templates/field/field--text-with-summary.html.twig' -->


                          </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
</article>


</x-app-layout>
