<x-app-layout>
    <article data-history-node-id="15" class="node node--type-page node--view-mode-full clearfix">
        <div class="node__content clearfix">
            <section class="hero pt-100">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 text-center">
                            <div class="title-desc-image">
                                <h1 class="wow fadeInUp">Contact us</h1>
                                <p>If you have an query, please get in touch with us, we will revert back quickly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div
                class="field field--name-field-layout-components field--type-entity-reference-revisions field--label-hidden field__items">
                <div class="field__item">
                    <div class="paragraph paragraph--type--contact-us paragraph--view-mode--default">
                        <section class="ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="contact-form-wrap">
                                            <h3></h3>
                                            <p>
                                            <p>
                                                <meta charset="utf-8">
                                            </p>
                                            </p>
                                            <ul class="nav nav-tabs d-lg-flex mt-70" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link " id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#inquiry-tab-pane-1" type="button" role="tab"
                                                        aria-controls="inquiry-tab-pane-1"
                                                        aria-selected="false">Enquiry</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="Support-tab"
                                                        data-bs-toggle="tab" data-bs-target="#Support-tab-pane-2"
                                                        type="button" role="tab" aria-controls="Support-tab-pane-2"
                                                        aria-selected="false">Support</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link " id="Complaint-tab" data-bs-toggle="tab"
                                                        data-bs-target="#Complaint-tab-pane-3" type="button" role="tab"
                                                        aria-controls="Complaint-tab-pane-3"
                                                        aria-selected="false">Complaint</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content accordion" id="myTabContent">


                                                <div class="tab-pane fade  accordion-item" id="inquiry-tab-pane-1"
                                                    role="tabpanel" aria-labelledby="inquiry-tab" tabindex="0">
                                                    <div id="collapseOne"
                                                        class="accordion-collapse collapse   d-lg-block"
                                                        aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                                        <div class="accordion-body">
                                                            <div class="pt-xxxl">
                                                                <div id="block-webform"
                                                                    class="block block-webform block-webform-block">
                                                                    <div class="content">
                                                                        <span
                                                                            id="webform-submission-inquiry-node-15-form-ajax-content"></span>
                                                                        <div id="webform-submission-inquiry-node-15-form-ajax"
                                                                            class="webform-ajax-form-wrapper"
                                                                            data-effect="fade"
                                                                            data-progress-type="throbber">
                                                                            <form
                                                                                class="webform-submission-form webform-submission-add-form webform-submission-inquiry-form webform-submission-inquiry-add-form webform-submission-inquiry-node-15-form webform-submission-inquiry-node-15-add-form js-webform-details-toggle webform-details-toggle"
                                                                                novalidate="novalidate"
                                                                                data-drupal-selector="webform-submission-inquiry-node-15-add-form"
                                                                                action="{{ route('contactus') }}"
                                                                                method="post"
                                                                                id="webform-submission-inquiry-node-15-add-form"
                                                                                accept-charset="UTF-8">
                                                                                @csrf

                                                                                <x-form-component />

                                                                                <fieldset
                                                                                    data-drupal-selector="edit-country"
                                                                                    id="edit-country--wrapper"
                                                                                    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
                                                                                    <legend style="display:none">
                                                                                        <span
                                                                                            class="fieldset-legend"></span>
                                                                                    </legend>
                                                                                    <div class="fieldset-wrapper">

                                                                                        <div
                                                                                            class="mb-xs js-form-item js-form-type-textfield form-type-textfield js-form-item-website form-item-website form-no-label mb-3">


                                                                                            <input
                                                                                                class="js-webform-telephone-international webform-webform-telephone-international form-tel form-control"
                                                                                                data-drupal-selector="edit-phone"
                                                                                                type="tel" id="phone"
                                                                                                name="phone" value=""
                                                                                                size="30"
                                                                                                maxlength="128"/>

                                                                                            <textarea
                                                                                                data-counter-type="word"
                                                                                                data-counter-minimum="11"
                                                                                                class="js-webform-counter mt-4 webform-counter form-textarea required form-control resize-vertical"
                                                                                                data-drupal-selector="edit-your-message"
                                                                                                id="edit-your-message"
                                                                                                name="message" rows="5"
                                                                                                cols="60"
                                                                                                placeholder="Your message  *"
                                                                                                required="required"
                                                                                                aria-required="true"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <div id="edit-email-links"
                                                                                    class="js-form-item js-form-type-processed-text form-type-processed-text js-form-item- form-item- form-no-label mb-3">
                                                                                    {{-- <p>Email : info@peernetics.io</p> --}}
                                                                                    <p><a href="mailto:info@peernetics.io">Email: info@peernetics.io</a></p>
                                                                                    <span
                                                                                        class='alerts-container'></span>
                                                                                </div>
                                                                                <div class="col-12 pt-m form-actions webform-actions js-form-wrapper form-wrapper mb-3"
                                                                                    data-drupal-selector="edit-actions"
                                                                                    id="edit-actions">
                                                                                    <input
                                                                                        class="contact_form_submit webform-button--submit primary-btn border-0 button button--primary js-form-submit form-submit btn btn-primary form-control"
                                                                                        type="submit" id="submit-button"
                                                                                        value="SEND MESSAGE" />
                                                                                </div>
                                                                                <input
                                                                                    data-drupal-selector="edit-webform-submission-inquiry-node-15-add-form"
                                                                                    type="hidden" name="type"
                                                                                    value="enquiry"
                                                                                    class="form-control" />

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="tab-pane fade active show accordion-item"
                                                    id="Support-tab-pane-2" role="tabpanel"
                                                    aria-labelledby="Support-tab" tabindex="0">
                                                    <div id="collapseTwo"
                                                        class="accordion-collapse collapse  d-lg-block"
                                                        aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                                                        <div class="accordion-body">
                                                            <div class="pt-xxxl">
                                                                <div id="block-webform-2"
                                                                    class="block block-webform block-webform-block">
                                                                    <div class="content">
                                                                        <span
                                                                            id="webform-submission-support-node-15-form-ajax-content"></span>
                                                                        <div id="webform-submission-support-node-15-form-ajax"
                                                                            class="webform-ajax-form-wrapper"
                                                                            data-effect="fade"
                                                                            data-progress-type="throbber">
                                                                            <form
                                                                                class="webform-submission-form webform-submission-add-form webform-submission-inquiry-form webform-submission-inquiry-add-form webform-submission-inquiry-node-15-form webform-submission-inquiry-node-15-add-form js-webform-details-toggle webform-details-toggle"
                                                                                novalidate="novalidate"
                                                                                data-drupal-selector="webform-submission-inquiry-node-15-add-form"
                                                                                action="{{ route('contactus') }}"
                                                                                method="post"
                                                                                id="webform-submission-inquiry-node-15-add-form"
                                                                                accept-charset="UTF-8">
                                                                                @csrf

                                                                                <x-form-component />

                                                                                <fieldset
                                                                                    data-drupal-selector="edit-country"
                                                                                    id="edit-country--wrapper"
                                                                                    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
                                                                                    <legend style="display:none">
                                                                                        <span
                                                                                            class="fieldset-legend"></span>
                                                                                    </legend>
                                                                                    <div class="fieldset-wrapper">

                                                                                        <div
                                                                                            class="mb-xs js-form-item js-form-type-textfield form-type-textfield js-form-item-website form-item-website form-no-label mb-3">


                                                                                            <input
                                                                                                class="js-webform-telephone-international webform-webform-telephone-international form-tel form-control"
                                                                                                data-drupal-selector="edit-phone"
                                                                                                type="tel" id="phone2"
                                                                                                name="phone" value=""
                                                                                                size="30"
                                                                                                maxlength="128" />

                                                                                            <textarea
                                                                                                data-counter-type="word"
                                                                                                data-counter-minimum="11"
                                                                                                class="js-webform-counter mt-4 webform-counter form-textarea required form-control resize-vertical"
                                                                                                data-drupal-selector="edit-your-message"
                                                                                                id="edit-your-message"
                                                                                                name="message" rows="5"
                                                                                                cols="60"
                                                                                                placeholder="Your message *"
                                                                                                required="required"
                                                                                                aria-required="true"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>



                                                                                <div id="edit-email-links--2"
                                                                                    class="js-form-item js-form-type-processed-text form-type-processed-text js-form-item- form-item- form-no-label mb-3">
                                                                                    {{-- <p>Email : support@peernetics.io</p> --}}
                                                                                    <p><a href="mailto:support@peernetics.io">Email: support@peernetics.io</a></p>
                                                                                    <span
                                                                                        class='alerts-container'></span>
                                                                                </div>
                                                                                <div class="col-12 pt-m form-actions webform-actions js-form-wrapper form-wrapper mb-3"
                                                                                    data-drupal-selector="edit-actions"
                                                                                    id="edit-actions">
                                                                                    <input
                                                                                        class="contact_form_submit webform-button--submit primary-btn border-0 button button--primary js-form-submit form-submit btn btn-primary form-control"
                                                                                        type="submit" id="submit-button"
                                                                                        value="SEND MESSAGE" />
                                                                                </div>
                                                                                <input
                                                                                    data-drupal-selector="edit-webform-submission-inquiry-node-15-add-form"
                                                                                    type="hidden" name="type"
                                                                                    value="support"
                                                                                    class="form-control" />
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade  accordion-item" id="Complaint-tab-pane-3"
                                                    role="tabpanel" aria-labelledby="Complaint-tab" tabindex="0">
                                                    <div id="collapseThree"
                                                        class="accordion-collapse collapse  d-lg-block"
                                                        aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                                                        <div class="accordion-body">
                                                            <div class="pt-xxxl">
                                                                <div id="block-webform-3"
                                                                    class="block block-webform block-webform-block">
                                                                    <div class="content">
                                                                        <span
                                                                            id="webform-submission-complaint-node-15-form-ajax-content"></span>
                                                                        <div id="webform-submission-complaint-node-15-form-ajax"
                                                                            class="webform-ajax-form-wrapper"
                                                                            data-effect="fade"
                                                                            data-progress-type="throbber">
                                                                            <form
                                                                                class="webform-submission-form webform-submission-add-form webform-submission-inquiry-form webform-submission-inquiry-add-form webform-submission-inquiry-node-15-form webform-submission-inquiry-node-15-add-form js-webform-details-toggle webform-details-toggle"
                                                                                novalidate="novalidate"
                                                                                data-drupal-selector="webform-submission-inquiry-node-15-add-form"
                                                                                action="{{ route('contactus') }}"
                                                                                method="post"
                                                                                id="webform-submission-inquiry-node-15-add-form"
                                                                                accept-charset="UTF-8">
                                                                                @csrf

                                                                                <x-form-component />

                                                                                <fieldset
                                                                                    data-drupal-selector="edit-country"
                                                                                    id="edit-country--wrapper"
                                                                                    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
                                                                                    <legend style="display:none">
                                                                                        <span
                                                                                            class="fieldset-legend"></span>
                                                                                    </legend>
                                                                                    <div class="fieldset-wrapper">

                                                                                        <div
                                                                                            class="mb-xs js-form-item js-form-type-textfield form-type-textfield js-form-item-website form-item-website form-no-label mb-3">


                                                                                            <input
                                                                                                class="js-webform-telephone-international webform-webform-telephone-international form-tel form-control"
                                                                                                data-drupal-selector="edit-phone"
                                                                                                type="tel" id="phone3"
                                                                                                name="phone" value=""
                                                                                                size="30"
                                                                                                maxlength="128" />

                                                                                            <textarea
                                                                                                data-counter-type="word"
                                                                                                data-counter-minimum="11"
                                                                                                class="js-webform-counter mt-4 webform-counter form-textarea required form-control resize-vertical"
                                                                                                data-drupal-selector="edit-your-message"
                                                                                                id="edit-your-message"
                                                                                                name="message" rows="5"
                                                                                                cols="60"
                                                                                                placeholder="Your message"
                                                                                                required="required"
                                                                                                aria-required="true"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <div id="edit-email-links--3"
                                                                                    class="js-form-item js-form-type-processed-text form-type-processed-text js-form-item- form-item- form-no-label mb-3">
                                                                                    {{-- <p>Email : complaints@peernetics.io
                                                                                    </p> --}}
                                                                                    <p><a href="mailto:complaints@peernetics.io">Email: complaints@peernetics.io</a></p>

                                                                                    <span
                                                                                        class='alerts-container'></span>
                                                                                </div>
                                                                                <div class="col-12 pt-m form-actions webform-actions js-form-wrapper form-wrapper mb-3"
                                                                                    data-drupal-selector="edit-actions"
                                                                                    id="edit-actions">
                                                                                    <input
                                                                                        class="contact_form_submit webform-button--submit primary-btn border-0 button button--primary js-form-submit form-submit btn btn-primary form-control"
                                                                                        type="submit" id="submit-button"
                                                                                        value="SEND MESSAGE" />
                                                                                </div>
                                                                                <input
                                                                                    data-drupal-selector="edit-webform-submission-inquiry-node-15-add-form"
                                                                                    type="hidden" name="type"
                                                                                    value="complaint"
                                                                                    class="form-control" />
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div style="display: flex">

                                                    

                                                    <div style="width: 230px; margin: auto" class="col-lg-12 justify-content-center align-content-center">
                                                        
                                                        <a href="{{route('faq')}}"
                                                                                class=" primary-btn border-0 button button--primary js-form-submit form-submit btn btn-primary form-control">FAQ</a>

                                                    </div>

                                                </div>

                                            </div>
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





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
        $('.contact_form_submit').click(function(e) {
            e.preventDefault(); // Prevent default button behavior

            var form = $(this).closest('form'); // Find the closest form to the clicked button
            var formData = form.serialize(); // Serialize form data

            // Check for required fields
            var isValid = true;
            form.find('input, textarea').each(function() {
                if ($(this).prop('required') && $(this).val() === '') {
                    isValid = false;
                    showAlert('danger', $(this).attr('name') + ' is required.');
                    return false; // Break the loop
                }
            });

            if (!isValid) {
                return;
            }


            $.ajax({
                type: 'POST', // Form submission method
                url: '{{ route('contactus') }}', // Form submission URL
                data: formData, // Serialized form data
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // Add CSRF token to the headers
                },
                success: function(response) {
                    showAlert('success', 'Contact form submitted successfully! Thank you.');
                    console.log('Form submitted successfully');
                    form.trigger("reset");
                },
                error: function(error) {
                    showAlert('danger', 'An error occurred. Please try again.');
                    console.error('Error submitting form');
                    // Optionally, you can show an error message
                }
            });
        });

        function showAlert(type, message) {
            let alert = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                message +
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                '</div>';

            $('.alerts-container').html(alert); // Replace alerts container with new alert

            // Close the alert after 5 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 5000);
        }
    });
    </script>

</x-app-layout>