<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layouts.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('dashboard.layouts.preloader')
        @include('dashboard.layouts.navbar')
        @include('dashboard.layouts.sidebar')

        <div class="content-wrapper">
            @include('dashboard.layouts.content-header')

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('dashboard.layouts.footer')
    </div>

    @include('dashboard.layouts.scripts')
</body>

</html>
