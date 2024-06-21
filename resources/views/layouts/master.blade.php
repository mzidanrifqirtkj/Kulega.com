<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ MetaTag::get('title') }}</title>

    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('image') !!}

    {!! MetaTag::openGraph() !!}

    {!! MetaTag::twitterCard() !!}

    {{--Set default share picture after custom section pictures--}}
    {!! MetaTag::tag('image', asset('assets/landing_page.jpg')) !!}

    <!-- Favicon -->
    <link rel="icon" type="" href="images/favicon/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File's Link -->
    @stack('head')
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WP4JMQ8Z');

    </script>
    <!-- End Google Tag Manager -->
    {{-- @include('layouts.metatag') --}}

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP4JMQ8Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        @include('layouts.navbar')
    </header>

    {{-- @include('layouts.content-wrapper') --}}

    @yield('konten')

    <footer class=" footer">
        @include('layouts.footer')
    </footer>

    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    <!-- Custom JS Link -->
    <script src="js/main.js"></script>

    <!-- Tambahkan jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Tambahkan Popper.js dan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WP4JMQ8Z');

    </script>
    <!-- End Google Tag Manager -->
    @stack('script')
</body>
</html>
