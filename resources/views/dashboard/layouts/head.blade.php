@if (App::getlocale() == 'ar')
    <!doctype html>
    <html lang="en" dir="rtl">

    <head>
        <meta charset="utf-8">
        <title>Dashboard | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard') }}/assets/images/favicon.ico">

        <link href="{{ asset('dashboard') }}/assets/libs/chartist/chartist.min.css" rel="stylesheet">

        {{-- Font Arabic font-family: DroidKufi-Regular; --}}
        <link href="{{ asset('dashboard') }}/assets/fonts_ar/stylesheet.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="{{ asset('dashboard') }}/assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet">

        <!-- Icons Css -->
        <link href="{{ asset('dashboard') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->

        {{-- RTL --}}
        <link href="{{ asset('dashboard') }}/assets/css/app-rtl.min.css" id="app-style" rel="stylesheet"
            type="text/css">

        <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/multi-select-tag.css">
    @else
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>Dashboard | @yield('title')</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
            <meta content="Themesbrand" name="author">
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('dashboard') }}/assets/images/favicon.ico">

            <link href="{{ asset('dashboard') }}/assets/libs/chartist/chartist.min.css" rel="stylesheet">

            <!-- Bootstrap Css -->
            <link href="{{ asset('dashboard') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
                type="text/css">
            <!-- Icons Css -->
            <link href="{{ asset('dashboard') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
            <!-- App Css-->
            <link href="{{ asset('dashboard') }}/assets/css/app.min.css" id="app-style" rel="stylesheet"
                type="text/css">

            <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/multi-select-tag.css">
@endif
