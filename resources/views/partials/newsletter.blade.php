<div class="paragraph paragraph--type--webform paragraph--view-mode--default">
    <section class="cta mtb-100 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-block">
                        <h3 class="mb-0 text-center text-white pb-m">Subscribe to our Newsletter</h3>
                        <span id='alerts-container'></span>
                        <form
                            class="webform-submission-form webform-submission-add-form webform-submission-newsletter-form webform-submission-newsletter-add-form webform-submission-newsletter-paragraph-109-form webform-submission-newsletter-paragraph-109-add-form js-webform-details-toggle webform-details-toggle"
                            action="{{ route('newsletter.subscribe') }}" method="post"
                            id="webform-submission-newsletter-paragraph-109-add-form" accept-charset="UTF-8">
                            @csrf
                            <div
                                class="mb-3 js-form-item js-form-type-email form-type-email js-form-item-subscribe-to-our-newsletter form-item-subscribe-to-our-newsletter form-no-label">
                                <input
                                    pattern="^[a-zA-Z0-9.!#$%&amp;&#039;*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$"
                                    data-webform-pattern-error="Please enter valid email address"
                                    data-drupal-selector="edit-subscribe-to-our-newsletter" type="email"
                                    id="edit-subscribe-to-our-newsletter" name="email" value="" size="60"
                                    maxlength="254" placeholder="Enter Your Email"
                                    class="form-email required form-control" required="required" aria-required="true" />
                            </div>

                            <div data-drupal-selector="edit-actions"
                                class="mb-3 form-actions webform-actions js-form-wrapper form-wrapper"
                                id="edit-actions">
                                <input
                                    class="webform-button--submit button button--primary js-form-submit form-submit btn btn-primary form-control"
                                    type="submit" />
                            </div>

                            <div
                                class="mb-0 mb-3 form-check pt-xs js-form-item js-form-type-checkbox checkbox js-form-item-i-agree-to-privacy-policy form-item-i-agree-to-privacy-policy">
                                <input class="form-check-input form-checkbox required"
                                    data-webform-required-error="Please agree to Privacy Policy "
                                    data-drupal-selector="edit-i-agree-to-privacy-policy" type="checkbox"
                                    id="edit-i-agree-to-privacy-policy" name="i_agree_to_privacy_policy" value="1"
                                    required="required" aria-required="true">
                                <label class="form-check-label" for="edit-i-agree-to-privacy-policy">
                                    I agree to Privacy Policy
                                </label>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#webform-submission-newsletter-paragraph-109-add-form').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                type: 'POST', // Form submission method
                url: '{{ route('newsletter.subscribe') }}', // Form submission URL
                data: formData, // Serialized form data
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token to the headers
                },
                success: function(response) {
                    // Handle success response here
                   showAlert('success', 'Subscription successful! Thank you.');
                    console.log('Form submitted successfully');
                    // Optionally, you can redirect or show a success message
                },
                error: function(error) {
                    // Handle error response here
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

            $('#alerts-container').html(alert); // Replace alerts container with new alert

            // Close the alert after 5 seconds
            setTimeout(function() {
                $('.alert').hide();
        }, 5000);
    }

    });

</script>