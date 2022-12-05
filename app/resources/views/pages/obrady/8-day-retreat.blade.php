@extends('layouts.default')
@section('content')


    <div class = "row page-header-bg" id = "iboga-index-page-header"></div>


    <div class = "row text-center">
        <h1 class = "font-just-me color-iscz-red">Osmi-denní IBOGA léčebný Pobyt</h1>

        <p>
            V tradičním psycho-spirituálním obřadu IBOGY se o sobě učíme na všech úrovních; fyzicky, mentálně,
            emocionálně a duchovně.
            IBOGA pomáhá tím, že boří iluze ega, opouští minulost, falešná přesvědčení, traumata a lži, které jsme si
            doposud říkali.
        </p>

        <p>
            Celý plán pobytu navrhl náš učitel a šaman Moughenda. Harmonogram zajišťuje, že hosté mají dostatek času
            připravit se na obřad Ibogy a ziskat co nejvice z celeho pobytu. Patří mezi ně dny věnované zpracovávání
            zážitku Ibogy leceni a take dny integrace Ibogy zaxzitku a poznani do běžného života hosta.
        </p>
    </div>

    <div class = "row background-text-light-grey">
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

    <div class = "row" id = "eight-day-retreat-includes-box">
        <div class = "row">
            <h2 class = "font-just-me font-size-60 text-center color-iscz-green">Co je zahrnuto</h2>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/car-green.png" width = "64" />
                <p class = "text-uppercase">Vyzvednutí / odvoz z nejbližšího krajského města, NEBO LETIŠTĚ</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/teachings-green.png" width = "64" />
                <p>HLAVNÍ UČENÍ BWITI - ROZHOVORY OHNIVÉHO KRUHU</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/ceremony-green.png" width = "64" />
                <p>DVA OBŘADY IBOGA, VČETNĚ DETOXU A PSYCHO - DUCHOVNÍ CESTY</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/provider-green.png" width = "64" />
                <p>TRADIČNĚ VYŠKOLENÝ POSKYTOVATEL IBOGY ZAČNĚNÝ V TRADICI BWITI</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/counseling-green.png" width = "64" />
                <p>INTEGRACE / PORADENSTVÍ INDIVIDUÁLNÍ PODPORY</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/comment-green.png" width = "64" />
                <p>PŘED A PO IBOGA PYBYTU TELEFONNÍ ROZHOVORY</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/accommodation-green.png" width = "64" />
                <p>KRÁSNÉ UBYTOVÁNÍ SE SOUKROMÝM POKOJEM</p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/salad-green.png" width = "64" />
                <p class = "text-uppercase">ZDRAVÁ JÍDLA zahrnujÍcÍ většinu diet.</p>
            </div>
        </div>



        <div class = "col-xl-3 col-xs-6">
                <div class = "item">
                    <img src = "/images/icons/leaf-green.png" width = "64" />
                    <p>TRADIČNĚ PŘIPRAVOVANÁ A SLAVNOSTNĚ SKLIZENÁ IBOGA</p>
                </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/trips-green.png" width = "64" />
                <p>
                    JEDINEČNÉ MÍSTNÍ VÝLETY,  HOLOTROPNÍ DÝCHÁNÍ
            </p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/bath-green.png" width = "64" />
                <p>
                    TRADIČNÍ DUCHOVNÍ SPRCHA BWITI</p>
            </div>
        </div>


        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/medical-green.png" width = "64" />
                <p class = "text-uppercase">
                    Lékařské vyšetření k zajištění bezpečného pobytu</p>
            </div>
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
                &nbsp;&nbsp;
            </div>
    </div>


    <div class = "row">
        <div class = "col-xl-12">
            <h2 class = "font-just-me">OSMIDENNI  IBOGA RETREAT ROZVRH</h2>
            <p>
                Naše 8-denní vse-zahrnuto léčebné pobyty Ibogy jsou navrženy tak, aby podporovaly silný léčebný zážitek
                a sebeobjevování. Prostřednictvím posvátných obřadů při svíčkách, které pronikají do této neuvěřitelné rostlinné medicíny
                přirozenou inteligencí usnadňujeme cestu osobního léčení v pohodlném a bezpečném prostoru.
            </p>
        </div>
    </div>



    @include('pages.obrady.retreat-days.retreat-day-1')
    @include('pages.obrady.retreat-days.retreat-day-2')
    @include('pages.obrady.retreat-days.retreat-day-3')
    @include('pages.obrady.retreat-days.retreat-day-4')
    @include('pages.obrady.retreat-days.retreat-day-5')
    @include('pages.obrady.retreat-days.retreat-day-6')
    @include('pages.obrady.retreat-days.retreat-day-7')
    @include('pages.obrady.retreat-days.retreat-day-8')


    @stop
