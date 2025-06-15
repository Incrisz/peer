<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="Generator" content="" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="icon" href="{{ asset('themes/custom/peernetics/favicon.png') }}" type="image/png" />
    <link rel="alternate" hreflang="en" href="{{ asset('index.html') }}" />
    <link rel="alternate" hreflang="hi" href="{{ asset('hi.html') }}" />
    <link rel="alternate" hreflang="zh-hans" href="{{ asset('zh-hans.html') }}" />
    <link rel="alternate" hreflang="ru" href="{{ asset('ru.html') }}" />
    <link rel="canonical" href="{{ asset('home.html') }}" />
    <link rel="shortlink" href="{{ asset('node/11.html') }}" />
    <title>Home | Peernetics</title>

    <link rel="stylesheet"
        href="{{ asset('sites/default/files/css/css_1EcF1SD8uy7T2vUEULqUZyKf_ih7WgnXez3rawFcT28dc5a.css') }}" />
    {{--
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/jackocnr/intl-tel-input@v17.0.19/build/css/intlTelInput.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/css/intlTelInput.css">
    <link rel="stylesheet"
        href="{{ asset('sites/default/files/css/css_YKoeliwrLpg85blDPTN8WhRJBx6V0v-58KV4Vt1ev9M7099.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('sites/default/files/css/css_g6fBzeH65h1g7ZOqXhK5Tz_-elmS8lEERFO4w5bas0Y0ba6.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="{{ asset('sites/default/files/css/css_t8tsKaWX8k50P_QYo3dw8HXfshi6ERb6h8yvd8zaFPwf53b.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/custom/peernetics/css/hc-offcanvas-nav09bf.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/custom/peernetics/css/animate09bf.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('sites/default/files/css/css_ZFq7JwxHvHQJVIMqyEDEA5yP9_Eps6_NR3_yK5Hx2modc7f.css') }}" />
    <link rel="stylesheet" media="print"
        href="{{ asset('sites/default/files/css/css_zUZDBQgq9Jfxr-wynhJ4mP-K-T4P8DfVGCqERUbRUac113b.css') }}" />
    <link rel="stylesheet" media="print" href="{{ asset('sites/default/files/css/gaming-folder/gaming.css') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* .move-down {
        position: relative;
        top: 50px;  
    } */

        .token-tax {
            margin-left: 50%;
            position: relative;
            top: 0px;
            /* Default for mobile */
        }
        .minimize-item {
                width: 100%;
                height: 700px;
            }

        @media (min-width: 200px) {
            .token-tax {
                /* margin: auto; */
                /* top: -200px; */
                top: -5px;
                margin-bottom: 70px;
            }
            .minimize-item {
                margin-top: 50px;
                width: 100%;
                height: 100%;
            }
        }

        .slider-wrapper {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .slider-content {
            display: flex;
            width: max-content;
            gap: 30px;
            /* Space between items */
        }

        .slider-item {
            flex-shrink: 0;
            width: 250px;
        }
    </style>


    {{-- style for ioc page table nav header --}}
    <style>
        .nav-switch {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            margin-right: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .nav-switch.btn-primary {
            background-color: #007bff;
            color: white;
        }

        @media (max-width: 992px) {
            .hide-on-large {
                display: none;
            }
        }
    </style>

    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loader {
            width: 100px;
            height: 100px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader-border {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #3498db;
            animation: spin 1s linear infinite;
            position: absolute;
        }

        .loader-border:nth-child(2) {
            border-top-color: #3498db;
            animation: spin 2s linear infinite;
        }

        .loader-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-image: url('themes/custom/peernetics/logo.svg');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 2;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .preloader.fade-out {
            opacity: 0;
            pointer-events: none;
        }

        .below{
            display: none;
        }

        @media screen and (max-width: 760px) {
            .above {
                display: none;
            }
            .below{
                display: block;
            }
        }
    </style>



</head>

<body
    class="{{ Route::currentRouteName() === 'gaming-club' ? 'light-grey' : '' }} is-ultimenu-canvas is-ultimenu-canvas--active layout-no-sidebars page-node-11 path-frontpage node--type-page">

    <div style="z-index: 999999" class="preloader">
        <div class="loader">
            <div class="loader-border"></div>
            <div class="loader-border"></div>
            <div class="loader-logo"></div>
        </div>
    </div>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        {{-- Header --}}
        @include('includes.navigation')

        <div data-drupal-messages-fallback class="hidden"></div>
        <div class="main-wrapper">
            <div id="block-peernetics-content" class="block block-system block-system-main-block">
                <div class="content">
                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                    {{-- Page Content --}}
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('includes.footer')
    </div>

    {{-- Livewire scripts --}}
    @livewireScripts

    {{-- <script type="application/json" data-drupal-selector="drupal-settings-json">
        {
            "path": {
                "baseUrl": "\/",
                "pathPrefix": "",
                "currentPath": "node\/11",
                "currentPathIsAdmin": false,
                "isFront": true,
                "currentLanguage": "en"
            },
            "pluralDelimiter": "\u0003",
            "suppressDeprecationErrors": true,
            "ajaxPageState": {
                "libraries": "eJxtkGuOwyAMhC9E4UiRCbOEFjDCTrO9fd_qbugfW_pm_PTMKtqpTZ56T-z8GxzSzFWM3xt-uJeRxsye8kH0klONo36jpy_NCkQoQqZtSYpRrxxgGnWKN7iIC31tlO2H2LW21eckC4JpQK_QNMvnjGkO9a-wW1QuoijOk8CcEzZxj2jpSL__QOGwZpgN_v4A98pP3x4io6CqDVBKWazQeazcm5Rj_DLgbXt9atDv4QqoobJ3",
                "theme": "peernetics",
                "theme_token": null
            },
            "ajaxTrustedUrl": {
                "form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM": true,
                "\/home?ajax_form=1": true
            },
            "ajax": {
                "edit-actions-submit": {
                    "callback": "::submitAjaxForm",
                    "event": "click",
                    "effect": "fade",
                    "speed": 500,
                    "progress": {
                        "type": "throbber",
                        "message": ""
                    },
                    "disable-refocus": true,
                    "url": "\/home?ajax_form=1",
                    "httpMethod": "POST",
                    "dialogType": "ajax",
                    "submit": {
                        "_triggering_element_name": "op",
                        "_triggering_element_value": "Submit"
                    }
                }
            },
            "views": {
                "ajax_path": "\/views\/ajax",
                "ajaxViews": {
                    "views_dom_id:be4405fb04609e80071bbdcf7f7d789c3fa43c4080e5bdf823c226ef960af928": {
                        "view_name": "news",
                        "view_display_id": "block_2",
                        "view_args": "",
                        "view_path": "\/node\/11",
                        "view_base_path": null,
                        "view_dom_id": "be4405fb04609e80071bbdcf7f7d789c3fa43c4080e5bdf823c226ef960af928",
                        "pager_element": 0,
                        "viewsreference": {
                            "data": {
                                "pager": null,
                                "limit": null,
                                "offset": null,
                                "argument": null,
                                "title": null
                            },
                            "enabled_settings": [],
                            "parent_entity_type": "paragraph",
                            "parent_entity_id": "108",
                            "parent_field_name": "field_views_reference"
                        }
                    }
                }
            },
            "user": {
                "uid": 0,
                "permissionsHash": "9c174e9b7ddb5033e5dfa1a6e04f70142c84e2f1cd1190bcba961702f5525cc6"
            }
        }
    </script> --}}
    <script src="{{ asset('sites/default/files/js/js_8o8nUIK3ReSDFkqTe6hms4c0waRqHAVoLT4t9VQzIZ49313.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ asset('sites/default/files/js/js_guYWa37r4oI1lrRf_-qT4EPNV_LeJaiTNaRW1mnZAP4b183.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/jackocnr/intl-tel-input@v17.0.19/build/js/intlTelInput.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/jackocnr/intl-tel-input@v17.0.19/build/js/intlTelInput-jquery.min.js">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/js/intlTelInput.min.js"></script>

    <script src="{{ asset('themes/custom/peernetics/js/hc-offcanvas-nava0fc.js') }}"></script>
    <script src="{{ asset('themes/custom/peernetics/js/wowa0fc.js') }}"></script>
    <script src="{{ asset('sites/default/files/js/js_gR2QlfTHT5A7JbynRFpm0MsEkdruwjk1oTQSROkn_L0b8da.js') }}"></script>


    {{-- @php
    dd(asset('sites/default/files/js/js_gR2QlfTHT5A7JbynRFpm0MsEkdruwjk1oTQSROkn_L0b8da.js'));
    @endphp --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('sliderContent');
    const sliderWrapper = slider.parentElement;
    let step = 1;  // Sliding speed (increase for faster)
    let translate = 0;

    // Duplicate the slider items once to create a seamless loop effect
    slider.innerHTML += slider.innerHTML;

    function slide() {
        translate -= step;
        slider.style.transform = `translateX(${translate}px)`;

        // Reset when the first set of items has fully slid out
        if (Math.abs(translate) >= slider.scrollWidth / 2) {
            translate = 0;
        }

        requestAnimationFrame(slide);
    }

    slide();
});


    </script>

    <script>
        // JavaScript to hide preloader when page is loaded
    window.addEventListener('load', function() {
        setTimeout(function() {
            document.querySelector('.preloader').classList.add('fade-out');
        }, 1000); // Adjust time as needed
    });
    </script>

    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Initialize the data array with headers
        let chartData = [['Task', 'Percentage']];

        // Default color palette
        let colors = [];

        // Loop through the table rows to dynamically add data
        document.querySelectorAll('table.table tbody tr').forEach(function (row) {
            let allocation = row.querySelector('td:nth-child(1)').textContent; // Task name
            let color = row.querySelector('td:nth-child(3)').textContent.trim(); // Task name
            let percentage = parseFloat(row.querySelector('td:nth-child(2)').textContent.replace('%', '')); // Percentage

            // Add the row to the chart data
            chartData.push([allocation, percentage]);

            colors.push(color);
        });

        // Convert the data array into Google Charts DataTable
        let data = google.visualization.arrayToDataTable(chartData);

        // Set chart options
        let options = {
            title: 'Task Allocation',
            colors: colors.map((color, index) => ({ color })),
            fontSize: 12,
            tooltip: { isHtml: true, textStyle: { fontSize: 10 } },
            legend: { alignment: 'center', textStyle: { fontSize: 10 } },
            chartArea: { left: 15, top: 15, right: 15, bottom: 15 },
        };

        // Draw the chart
        let chart = new google.visualization.PieChart(document.getElementById('pie'));
        chart.draw(data, options);
    }

    // Helper function to generate random colors in HEX format
    function generateRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    </script>

    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "gb",
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/js/utils.js",
        });

        const inputi = document.querySelector("#phone2");
        window.intlTelInput(inputi, {
            initialCountry: "gb",
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/js/utils.js",
        });

        const inputii = document.querySelector("#phone3");
        window.intlTelInput(inputii, {
            initialCountry: "gb",
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.1.0/build/js/utils.js",
        });
    </script>


<script>
    const pie = document.getElementById("pie");
  
    if (window.innerWidth < 1024) {
      // Remove the entire inline style
      pie.removeAttribute("style");
    }
  </script>


    {{-- <script src="{{ asset('sites/default/files/phone.js') }}"></script> --}}
</body>

</html>