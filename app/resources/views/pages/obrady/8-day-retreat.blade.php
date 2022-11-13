@extends('layouts.default')
@section('content')

    <div class = "row">
        <div class = "row page-header-bg" id = "iboga-index-page-header"></div>
    </div>

    <div class = "row text-center">
        <h2 class = "font-just-me">Osmidenní IBOGA Retreatační Pobyt</h2>

        <p>
            V tradičním psycho-spirituálním obřadu IBOGY se o sobě učíme na všech úrovních; fyzicky, mentálně,
            emocionálně a duchovně.
            IBOGA pomáhá tím, že boří iluze ega, opouští minulost, falešná přesvědčení, traumata a lži, které jsme si
            dposud říkali.
        </p>

        <p>
            Celý plán pobytu navrhl náš učitel a šaman Moughenda. Harmonogram zajišťuje, že hosté mají dostatek času
            připravit se na obřad Ibogy a ziskat co nejvice z celeho pobytu. Patří mezi ně dny věnované zpracovávání
            zážitku Ibogy leceni a take dny integrace Ibogy zaxzitku a poznani do běžného života hosta.
        </p>
    </div>

    <div class = "row">
        <div class = "col-xl-5">
            <h3>Rozvrh pobytu</h3>
                <ul id = "pobyty-list-overview">
                <li><span>1. </span> PŘÍJEZD / UBYTOVÁNÍ</li>
                <li><span>2. </span>PORADENSTVÍ / PRVNÍ CEREMONIÁL</li>
                <li><span>3. </span> DEN ZPRACOVÁNÍ A REALIZACE</li>
                <li><span>4. </span>DEN INTEGRACE / AKTIVITY</li>
                <li><span>5. </span>PORADENSTVÍ A DRUHÝ CEREMONIÁL</li>
                <li><span>6. </span>DEN ZPRACOVÁNÍ A REALIZACE</li>
                <li><span>7. </span>DEN INTEGRACE / AKTIVITY</li>
                <li><span>8. </span>LOUČENÍ / ODJEZD</li>
            </ul>

        </div>

        <div class = "col-xl-7">
            <p class = "p-5 font-just-me-small">Celý plán pobytu navrhl náš učitel a šaman Moughenda. Harmonogram zajišťuje, že hosté mají dostatek
                času připravit se na obřad Ibogy a ziskat co nejvice z celeho pobytu. Patří mezi ně dny věnované
                zpracovávání zážitku Ibogy leceni a take dny integrace Ibogy zaxzitku a poznani do běžného života hosta.
            </p>
        </div>
    </div>


    <div class = "row">
            <div class = "col-xl-2">
                &nbsp;
            </div>

            <div class = "col-xl-8">
                <blockquote>Iboga nás učí znovu získat kontrolu nad našimi myšlenkami a využít mysl ve svůj
                    prospěch</blockquote>
            </div>

            <div class = "col-xl-2">
                &nbsp;
            </div>

        </div>





    <h2 class = "font-just-me">OSMIDENNI  DAY IBOGA RETREAT SCHEDULE</h2>


        <div class = "row" id="accordion">
            <h3>Section 1</h3>
            <div class = "row" >
                <p>
                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
            </div>
            <h3>Section 2</h3>
            <div class = "row" >
                <p>
                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                    suscipit faucibus urna.
                </p>
            </div>
            <h3>Section 3</h3>
            <div class = "row" >
                <p>
                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                </p>
                <ul>
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three</li>
                </ul>
            </div>
            <h3>Section 4</h3>
            <div class = "row" >
                <p>
                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                    mauris vel est.
                </p>
                <p>
                    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos.
                </p>
            </div>
        </div>


{{--    @include('pages.obrady.retreat-days.retreat-day-1')--}}
{{--    @include('pages.obrady.retreat-days.retreat-day-2')--}}
    @include('pages.obrady.retreat-days.retreat-day-3')
    @include('pages.obrady.retreat-days.retreat-day-4')
    @include('pages.obrady.retreat-days.retreat-day-5')
    @include('pages.obrady.retreat-days.retreat-day-6')
{{--    @include('pages.obrady.retreat-days.retreat-day-7')--}}
{{--    @include('pages.obrady.retreat-days.retreat-day-8')--}}














    <div class = "row">
        <h4>Other activities</h4>
    Working with Iboga is incredibly powerful and amazing things will happen, but it’s also important for your wellness to have
        some activities that make it easier to relax and enjoy yourself. We have various activities that we offer to give you a little break.
    on-site activities: bird & and animal watching, plenty of space for yoga, hiking trails and walks to the river that runs
        behind the Iboga Wellness property.
    </div>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
    @stop
