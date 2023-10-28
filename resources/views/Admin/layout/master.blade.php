<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href={{ asset('assets/media/logos/favicon.ico') }} />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href={{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }} rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href={{ asset('assets/plugins/global/plugins.bundle.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('assets/css/style.bundle.css') }} rel="stylesheet" type="text/css" />

    <title>@yield('title')</title>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('admin.components.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('admin.components.navbar')
                <!-- Main Section-->
                @yield('admin-content')
                <!-- / Main Section-->
                @include('admin.components.footer')
            </div>
        </div>
    </div>
    <script src={{ asset('angular-1.8.2/angular.min.js') }}></script>
    @stack('scripts')
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src={{ asset('assets/plugins/global/plugins.bundle.js') }}></script>
    <script src={{ asset('assets/js/scripts.bundle.js') }}></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src={{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src={{ asset('assets/js/custom/widgets.js') }}></script>
    <script src={{ asset('assets/js/custom/apps/chat/chat.js') }}></script>
    <script src={{ asset('assets/js/custom/modals/create-app.js') }}></script>
    <script src={{ asset('assets/js/custom/modals/upgrade-plan.js') }}></script>
    <script src={{ asset('assets/js/custom/widgets.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
