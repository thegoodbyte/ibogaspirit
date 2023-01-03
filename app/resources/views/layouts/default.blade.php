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

    <!-- Google Tag Manager added 12/30/22 -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K9RW4TW');</script>
    <!-- End Google Tag Manager -->

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
        $pageTitle = 'Iboga terapie povodňové ceremonie Česká Republika. Alternativní léčba deprese, úzkosti, traumatu, sebevražedných myšlenek.Týdenní pobyty Čechy Česko';
    @endphp
 @include('includes.head', [
    'pageTitle' => $pageTitle,
    'metaDesc' => $metaDesc ?? 'Iboga terapie ceremonie Česká republika,  Iboga alternativní léčení depresí, úzkostí, traumat. Rozvíjení vědomí , duchovní transforamce Česko',
    'metaKws' => $metaKws ?? 'Iboga, Iboga terapie, Iboga ceremonie Česká republika,Ayahuasca,  Iboga alternativní léčení deprese, úzkostí, traumat. Rozvíjení vědomí, duchovní transforamce Česko'  ])
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9RW4TW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--Mouseflow-->
<script type="text/javascript">
    window._mfq = window._mfq || [];
    (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript"; mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/859f69f6-e3c4-432d-9dcb-8b9df6fad29d.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
    })();
</script>




@php
$applocale = session('applocale') ?? 'cz';
if ($applocale == 'cz') $applocale = 'cs';


@endphp
<!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
<script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function () {
        cookieconsent.run({
            "notice_banner_type":"interstitial",
            "consent_type":"express","palette":"light",
            "language":"{{ $applocale }}","page_load_consent_levels":["strictly-necessary"],
            "notice_banner_reject_button_hide":false,
            "preferences_center_close_button_hide":false,
            "page_refresh_confirmation_buttons":false,"website_privacy_policy_url":"privace.html"});
    });
</script>

<noscript>Free cookie consent management tool by <a href="https://www.termsfeed.com/" rel="nofollow noopener">TermsFeed Policy Generator</a></noscript>
<!-- End Cookie Consent by TermsFeed https://www.TermsFeed.com -->





<!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->

<a href="#" id="open_preferences_center">Update cookies preferences</a>


{{--<script--}}
{{--    type="text/javascript"--}}
{{--    src="https://app.termly.io/embed.min.js"--}}
{{--    data-auto-block="on"--}}
{{--    data-website-uuid="9626e32b-69dd-4f7d-9322-6eb6ed57d36e"--}}
{{--></script>--}}


</body>
</html>
