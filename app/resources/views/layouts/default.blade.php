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

    <script type = "text/javascript">
        import LogRocket from 'logrocket';
        LogRocket.init('zrzrpa/ibogaspiritcz');

        const store = createStore(
            reducer, // your app reducer

            // our middleware should go last
            applyMiddleware(middlewares, LogRocket.reduxMiddleware()),
        );
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

    @php
        /** PAge Title */
        if (empty($pageTitle))
        $pageTitle = 'TRADIČNÍ  IBOGA  OBŘADY   V AFRICKÉ  TRADICI MISSOKO BWITI - Česká republika';
    @endphp
 @include('includes.head', ['pageTitle' => $pageTitle])
</head>
<body class="">

<div id="page" class="site">

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
