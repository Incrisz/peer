<fieldset data-drupal-selector="edit-country" id="edit-country--wrapper"
    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
    <legend style="display:none">
        <span class="fieldset-legend"></span>
    </legend>
    <div class="fieldset-wrapper">

        <div
            class="mb-xs js-form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name form-no-label mb-3">
            <input pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" data-webform-pattern-error="Please enter valid name"
                data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60"
                maxlength="255" placeholder="Name*" class="required form-control" required="required"
                aria-required="true" />
        </div>


    </div>
</fieldset>


<fieldset data-drupal-selector="edit-country" id="edit-country--wrapper"
    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
    <legend style="display:none">
        <span class="fieldset-legend"></span>
    </legend>
    <div class="fieldset-wrapper">

        <div
            class="mb-xs js-form-item js-form-type-email form-type-email js-form-item-email form-item-email form-no-label mb-3">
            <input
                pattern="^[a-zA-Z0-9.!#$%&amp;&#039;*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$"
                data-webform-pattern-error="Please enter valid email address" data-drupal-selector="edit-email"
                type="email" id="edit-email" name="email" value="Email*" size="60" maxlength="254" placeholder="Email"
                class="form-email required form-control" required="required" aria-required="true" />
        </div>

    </div>
</fieldset>


<fieldset data-drupal-selector="edit-country" id="edit-country--wrapper"
    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
    <legend style="display:none">
        <span class="fieldset-legend"></span>
    </legend>
    <div class="fieldset-wrapper">

        <div
            class="mb-xs js-form-item js-form-type-textfield form-type-textfield js-form-item-company-name form-item-company-name form-no-label mb-3">
            <input data-drupal-selector="edit-company-name" type="text" id="edit-company-name" name="company" value=""
                size="60" maxlength="255" placeholder="Company Name" class="form-control" />
        </div>
    </div>
</fieldset>

<fieldset data-drupal-selector="edit-country" id="edit-country--wrapper"
    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
    <legend style="display:none">
        <span class="fieldset-legend"></span>
    </legend>
    <div class="fieldset-wrapper">
        <div
            class="js-form-item js-form-type-select form-type-select js-form-item-country-country form-item-country-country form-no-label mb-3">
            <label for="edit-country-country" class="visually-hidden">Country</label>

            <x-country-component />

        </div>
    </div>
</fieldset>


<fieldset data-drupal-selector="edit-country" id="edit-country--wrapper"
    class="webform-address--wrapper fieldgroup form-composite webform-composite-visible-title js-webform-type-webform-address webform-type-webform-address js-form-item form-item js-form-wrapper form-wrapper mb-3">
    <legend style="display:none">
        <span class="fieldset-legend"></span>
    </legend>
    <div class="fieldset-wrapper">

        <div
            class="mb-xs js-form-item js-form-type-textfield form-type-textfield js-form-item-website form-item-website form-no-label mb-3">
            <input data-drupal-selector="edit-website" type="text" id="edit-website" name="website" value="" size="60"
                maxlength="255" placeholder="Website" class="form-control" />
        </div>
    </div>
</fieldset>
{{-- <div class="js-form-item js-form-type-tel form-type-tel js-form-item-phone form-item-phone form-no-label mb-3">
    <input class="js-webform-telephone-international webform-webform-telephone-international form-tel form-control"
        data-drupal-selector="edit-phone" type="tel" id="edit-phone" name="phone" value="" size="30" maxlength="128" />
</div> --}}


