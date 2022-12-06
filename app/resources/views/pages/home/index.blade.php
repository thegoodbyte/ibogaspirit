@extends('layouts.default')

@section('content')


@include('pages.home.slider')
<div class = "row">
    <div class = "col-xl-12">
        <h2 class = "font-just-me color-iscz-red home-index-under-carousel">IBOGA MEDICÍNA A BWITI UČENÍ</h2>
        <p class = "text-uppercase">
            Šamanské léčení a učení k léčbě jakékoliv mentální, duševní nebo fyzické nemoci. Vydejte se na cestu sebepoznání
            a osvoboďte se z pout ega a mysli. Utěšte svou duši a žijte šťastný život. Jeden týdenní pobyt s dvěma obřady Ibogy může změnit
            váš život k lepšímu. Už žádné nešťastné smutné nebo popletené vy - jen nový a krásný život před vámi, A UŽívání si ho naplno.<br />
            IBOGA MEDICÍNA  MŮŽE VYLÉČIT KAŽDÉ DUŠEVNÍ TRAUMA
            TÍM ŽE NÁS PŘIVEDE KE KOŘENŮM PROBLÉMU A UKÁŽE NÁM, JAK SE S NÍM SMÍŘIT A ZÁROVEŇ NÁS VYLÉČÍ.
            JE TO SKUTEČNÝ ZÁZRAK – ZNOVUROZENÍ
        </p>
    </div>
</div>

    @include('pages.home.section-happily')
@include('pages.home.section-life-is-gift')



@include('pages.home.section-parallax')
@include('pages.home.section-home-bottom')

@stop
