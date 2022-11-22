<!DOCTYPE html>
<html lang="en">
<head>
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
