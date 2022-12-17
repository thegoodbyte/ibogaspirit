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




    <!-- Hotjar Tracking Code for https://www.ibogaspirit.cz -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3275127,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!--
    <script async id="slcLiveChat" src="https://widget.sonetel.com/SonetelWidget.min.js" data-account-id="208133551"></script>
    -->

    @php
        /** PAge Title */
        if (empty($pageTitle))
        $pageTitle = 'Iboga obřady a ceremonie Česká Republika.Alternativní léčba deprese, úzkosti, předchozího traumatu.Týdenní pobyty Čechy Česko';
    @endphp
 @include('includes.head', ['pageTitle' => $pageTitle])
</head>
<body class="">

<div id="page" class="site">

    @include('includes.header')


    <div id="content" class="site-content">
        @yield('content')
    </div>
    @include('includes.cookie-consent');
    <!-- #content -->
    @include('includes.footer')
    <!-- #colophon -->
</div>



@include('includes.scripts')
</body>
</html>
