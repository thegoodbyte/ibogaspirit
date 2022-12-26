@extends('layouts.default')
@section('content')

    <div class = "row">
        <img src = "/images/home/onas/moughenda-after-ceremony.jpeg" />
    </div>

    <div class = "row text-center">
        <h2 class = "font-just-me font-size-100 color-iscz-red"> <?php echo __('pages/about-us/moughenda.content.title'); ?></h2>
         <h4 class = "font-just-me font-size-40">
             <?php echo __('pages/about-us/moughenda.content.subtitle'); ?></h4>
    </div>



    <div class = "row">
        <div class = "col-xl-6">

            <p class = "text--justify mb-5">
                <?php echo __('pages/about-us/moughenda.content.pars.0'); ?>
            </p>

            <blockquote class="blockquote"><?php echo __('pages/about-us/moughenda.content.quotes.0.quote'); ?><cite><?php echo __('pages/about-us/moughenda.content.quotes.0.cite'); ?></cite></blockquote>


            <p class = "mb-6">
            <?php echo __('pages/about-us/moughenda.content.pars.1'); ?>
                <blockquote class="blockquote"><?php echo __('pages/about-us/moughenda.content.quotes.1.quote'); ?></blockquote>
            </p>
        </div>
        <div class = "col-xl-6">
            <img src = "/images/home/onas/moughenda.jpeg"/>
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-3 col-xs-6">
            <img src = "/images/home/onas/moughenda-civil.jpeg" />
        </div>

        <div class = "col-xl-9 coxs-6">
            <p><?php echo __('pages/about-us/moughenda.content.pars.2'); ?>
            </p>

            <blockquote><?php echo __('pages/about-us/moughenda.content.quotes.2.quote'); ?><cite><?php echo __('pages/about-us/moughenda.content.quotes.2.cite'); ?></cite></blockquote>

            <p><?php echo __('pages/about-us/moughenda.content.pars.3'); ?></p>

        </div>
    </div>




            <!--
                <blockquote class="blockquote">To me, living as a true shaman is the best thing that ever happened to me.</blockquote>
            -->





@stop
