<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kiyara IT Tours Admin Panel - Streamlined Tour Management</title>
    <meta charset="utf-8" />
    <meta name="description" content="Manage tours, bookings, and clients efficiently with the Kiyara IT Tours Admin Panel. Offering secure transactions, real-time data, and robust analytics." />
    <meta name="keywords" content="Kiyara IT Tours, admin panel, tour management, booking management, client management, analytics, secure transactions, Laravel 10" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Kiyara IT Tours Admin Panel - Manage Tours and Bookings" />
    <meta property="og:description" content="Explore the Kiyara IT Tours Admin Panel for a seamless tour and client management experience, featuring detailed analytics and secure booking." />
    <meta property="og:url" content="https://kiyaratours.com/" />
    <meta property="og:site_name" content="Kiyara IT Tours Admin" />
    <link rel="canonical" href="https://kiyaratours.com" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="backend/assets/media/logos/kiyara-logo.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle-->
    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>


<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url("{{ asset('backend/assets/media/auth/bg4.jpg') }}");
            }

            [data-bs-theme="dark"] body {
                background-image: url("{{ asset('backend/assets/media/auth/bg4.jpg') }}");
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="{{'/'}}" class="mb-7">
                        <h1 class="text-white m-0" style="font-size: xx-large;">Kiyara Tours & traveler</h1>

                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h2 class="text-white fw-normal m-0">Advanced Infra, Driven by VERVX</h2>
                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->

            @yield('contents')


        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('backend/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = "{{ session('status') }}";
            const errorMessage = "{{ session('error') }}";

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: successMessage,
                });
            } else if (errorMessage) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage,
                });
            }
        });
    </script>

</body>

</html>