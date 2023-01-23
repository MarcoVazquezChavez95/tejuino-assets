@include('admin.base.partials.plugins')
@include('admin.base.partials.header')
@include('admin.base.partials.sidebar')

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>{{ config('app.name') }} - @yield('title', 'Admin')</title>

        <base href="{{ $base }}">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <link rel="icon" type="image/png" href="/admin_assets/images/icon.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="/admin_assets/plugins/pace/pace.min.js"></script>

        @yield('css')
    </head>
    <body>
        <div id="page-loader" class="fade show"><span class="spinner"></span></div>

        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed gradient-enabled page-content-full-height">

            <div id="header" class="header navbar-inverse">
                @yield('header')
            </div>

            <div id="sidebar" class="sidebar">
    			@yield('sidebar')
    		</div>
            <div class="sidebar-bg"></div>

            <div id="content" class="content @isset($full) content-full-width @endisset @isset($inbox) inbox @endisset @isset($dark) bg-dark bg-gradient-black  @endisset">
                @yield('content')
            </div>

            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>

        @yield('modals')

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyAinPAhhHjVEdfLUYDalukV1FZYxd4TpMM"></script>
        @yield('js')

        @if($errors->any())
            @foreach($errors->all() as $error)
                <script>
                    $(document).ready(function () {
                        swal('Error', '{{ $error }}', 'error');
                    });
                </script>
            @endforeach
        @endif
    </body>
</html>
