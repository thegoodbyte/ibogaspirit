@extends('layouts.default')

@section('content')


@include('pages.home.slider')
<div class = "row">
    <div class = "col-xl-12">
        <h2 class = "font-just-me color-iscz-red home-index-under-carousel"><?php echo __('pages/homepage.content.section_2_iboga.title'); ?></h2>
{{--        <p>--}}
{{--            <?php echo __('pages/homepage.content.section_2_iboga.pars.0'); ?>--}}
{{--            <?php echo __('pages/homepage.content.section_2_iboga.pars.1'); ?>--}}
{{--            <?php echo __('pages/homepage.content.section_2_iboga.pars.2'); ?>--}}
{{--        </p>--}}
        <p>
            <?php echo __('pages/homepage.content.what_iboga_does.pars.0'); ?>
        </p>
        <p>
            <?php echo __('pages/homepage.content.what_iboga_does.pars.1'); ?>
        </p>
        <p>
            <?php echo __('pages/homepage.content.what_iboga_does.pars.2'); ?>
        </p>
    </div>
</div>

    @include('pages.home.section-happily')
@include('pages.home.section-life-is-gift')



@include('pages.home.section-parallax')
@include('pages.home.section-home-bottom')

@stop
