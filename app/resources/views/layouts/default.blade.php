<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B7YRN4155S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-B7YRN4155S');
    </script>

    <!--
    SMart Look analytics
    -->
    <script type='text/javascript'>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '420864ad1eb8f45c6355383e5ed0953e34fb4a28', { region: 'eu' });
    </script>

 @include('includes.head')
</head>
<body class="home page-template page-template-elementor_header_footer page page-id-1799 boldgrid-ppb top-panel-invisible layout-fullwidth blog-default jet-desktop-menu-active elementor-default elementor-template-full-width elementor-kit-1687 elementor-page elementor-page-1799">

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    @include('includes.header')


    <div id="content" class="site-content">
        @yield('content')
    </div>

    <!-- #content -->
    @include('includes.footer')
    <!-- #colophon -->
</div>



@include('includes.scripts')
</body>
</html>
