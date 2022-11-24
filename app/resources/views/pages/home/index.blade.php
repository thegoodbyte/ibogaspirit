@extends('layouts.default')

@section('content')


@include('pages.home.slider')
<div class = "row">
    <div class = "col-xl-12">
        <h2 class = "font-just-me font-size-60 color-iscz-red">IBOGA MEDICÍNA A BWITI UČENÍ</h2>
        <p>
            IBOGA MEDICINE NÁS UČÍ, JAK SI UŽÍVAT ŽIVOTA NAPLNO. DOKÁŽE VYLÉČIT JAKÉKOLI PSYCHICKÉ T
            RAUMA TÍM, ŽE NÁS PŘIVEDE KE KOŘENŮM PROBLÉMU A UKÁŽE NÁM, JAK SE S NÍM SMÍŘIT.
            JE TO OPRAVDOVÝ ZÁZRAK – NOVÉ ZROZENÍ
        </p>
    </h2>
</div>

    @include('pages.home.section-happily')
@include('pages.home.section-life-is-gift')



@include('pages.home.section-parallax');
@include('pages.home.section-kdo-jsme');

@stop
