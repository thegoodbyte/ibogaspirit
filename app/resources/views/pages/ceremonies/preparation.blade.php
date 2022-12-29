@extends('layouts.default')
@section('content')

    <div class = "row page-header-bg" id = "iboga-index-page-header"></div>

    <div class = "row">
        <h1 class = "font-just-me h1-heading color-iscz-red"><?php echo __('pages/ceremonies/preparation.content.title') ?></h1>
    </div>


{{--    @include('pages.obrady.preparation.before-ceremony-bring-journal')--}}

    <div class = "row">
        <h3 class = "h3-heading"><?php echo __('pages/ceremonies/preparation.content.sections.before_ceremony.title') ?></h3>
    </div>

    @include('pages.ceremonies.preparation.before-ceremony.before-ceremony-bring-journal')
    @include('pages.ceremonies.preparation.before-ceremony.before-ceremony-body')


    @include('pages.ceremonies.preparation.before-ceremony.before-ceremony-mind')


    @include('pages.ceremonies.preparation.before-ceremony.before-ceremony-soul')
    @include('pages.ceremonies.preparation.before-ceremony.before-ceremony-start-the-process')
    @include('pages.ceremonies.preparation.before-ceremony.preparing-questions')

    <div class = "row">
        <h3 class = "h3-heading"><?php echo __('pages/ceremonies/preparation.content.sections.in_ceremony.title') ?></h3>
    </div>

    <div class = "row">
        @include('pages.ceremonies.preparation.in-ceremony.in-ceremony')
        @include('pages.ceremonies.preparation.in-ceremony.in-ceremony-dont-force');
    </div>


    <div class = "container background-text-light-okr2">
        <h3 class = "h3-heading"><?php echo __('pages/ceremonies/preparation.content.sections.after_ceremony.title') ?></h3>


        @include('pages.ceremonies.preparation.after-ceremony.after-ceremony-discovery-day')

        @include('pages.ceremonies.preparation.after-ceremony.after-ceremony-after')

    </div>

    <div class = "row mt-5">
        <div class = "class-xl-12">
            <p>
                <?php echo __('pages/ceremonies/preparation.content.sections.after_ceremony.sections.note.par'); ?>
            </p>

        </div>
    </div>

    <div class = "row">
    </div>
{{--    <div class = "row">--}}
{{--        <div class = "col-xl-12">--}}
{{--        <h3 class  = "font-just-me">Učte se od šamanských poskytovatelů</h3>--}}
{{--        <p>--}}
{{--        <p><!----}}
{{--        4. Learn From the Shamanic Providers — Our providers have trained with a 10th generation Missoko Bwiti Shaman--}}
{{--            and hold years of experience guiding people through their journeys. Iboga Wellness providers have traveled to--}}
{{--            Gabon, Africa multiple times — the birthplace of the Bwiti — and have been initiated into the tradition.--}}
{{--            During a retreat, they speak about this wisdom tradition during fire ceremonies and share their sacred shamanic--}}
{{--            knowledge with guests. Feel free to ask questions both during and between iboga ceremonies. You can learn all--}}
{{--            about how the Bwiti have used Iboga’s teachings to master the Art of Living.--}}

{{--            -->--}}

{{--            4. Učte se od šamanských poskytovatelů — Naši poskytovatelé trénovali s 10. generací Missoko Bwiti Shaman--}}
{{--            a mít dlouholeté zkušenosti s provázením lidí na jejich cestách. Iboga Wellness poskytovatelé cestovali do--}}
{{--            Gabon, Afrika několikrát — rodiště Bwiti — a byly zasvěceny do tradice.--}}
{{--            Během ústraní mluví o této tradici moudrosti během ohňových obřadů a sdílejí své posvátné šamanské--}}
{{--            znalosti s hosty. Neváhejte klást otázky během obřadů iboga i mezi nimi. Vše se můžete naučit--}}
{{--            o tom, jak Bwiti využili Ibogovo učení k zvládnutí umění žít.--}}
{{--        </p>--}}
{{--        </div>--}}
{{--    </div>--}}












<!-- -->
@stop
