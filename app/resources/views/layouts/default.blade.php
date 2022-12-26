<!DOCTYPE html>
<html lang="en">
<head>


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
</body>
</html>
