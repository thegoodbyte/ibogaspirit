@extends('layouts.default')
@section('content')

    <div class = "row">
        <h2 class = "font-just-me font-size-60 text-center color-iscz-red"><?php echo __('pages/about-us/nganga.content.title'); ?></h2>
    </div>


    <div class = "row">
        <div class = "col-xl-5">
            <img src  = "/images/home/onas/martin.jpg" alt   = "<?php echo __('seo/about/nganga.seo.images.martin_outfit'); ?>"/>
        </div>

        <div class = "col-xl-7">
            <p><?php echo __('pages/about-us/nganga.content.par_1'); ?></p>
            <p>
                <?php echo __('pages/about-us/nganga.content.par_2'); ?>
            </p>

            <p>
                <?php echo __('pages/about-us/nganga.content.par_3'); ?>
            </p>

            <p>
                <?php echo __('pages/about-us/nganga.content.par_4'); ?>
            </p>

            <!--
            á
            č
            ď
            ě
            é
            í
            ř
            š

            ú
            ú
            ů
            ž
            ý

            -->
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-12">
            <p>
                <?php echo __('pages/about-us/nganga.content.par_5'); ?>
            </p>
        </div>
    </div>


    <div class = "row">
        <div class = "col-xl-5">

            <p>
                <?php echo __('pages/about-us/nganga.content.par_6'); ?>
            </p>

            <p>
                <?php echo __('pages/about-us/nganga.content.par_7'); ?>
            </p>

            <blockquote>
                <?php echo __('pages/about-us/nganga.content.quote'); ?>
            </blockquote>
        </div>

        <div class = "col-xl-7">

            <div class = "row">
                <img src  = "/images/home/onas/moughenda-and-martin.jpg" alt = "S šamanem Moughendou před Bwiti kaplí v Gabou Afrika"/>
                <p class = "font-just-me color-iscz-red font-size-25"><?php echo __('pages/about-us/nganga.content.pic_desc'); ?></p>
            </div>

            <p>
                <?php echo __('pages/about-us/nganga.content.par_8'); ?>

            </p>

            <p>
                <?php echo __('pages/about-us/nganga.content.par_9'); ?>
            </p>

            <p><?php echo __('pages/about-us/nganga.content.par_10'); ?></p>

            <p><img src = "/images/home/onas/my-signture.png" alt = "<?php echo __('seo/about/nganga.seo.images.signature'); ?>"></p>
        </div>
    </div>


{{--    <div>--}}
{{--        <div class = "col-xl-12">--}}
{{--            <img src = "/images/home/onas/bwiti_martin_scotty-500w.jpg" />--}}
{{--        </div>--}}
{{--    </div>--}}

@stop
