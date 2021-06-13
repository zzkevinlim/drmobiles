<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
    <meta charset="{{ get_bloginfo('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="S6UYzFUQ-I7RdrG_4L1-mlGubitZ0ua2iixgngtK6Kw" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    @head
</head>
<body @php(body_class())>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
@footer
</body>
</html>
