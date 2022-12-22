@extends('layouts.default')
@section('content')


    <div class = "row page-header-bg" id = "iboga-index-page-header"></div>


    <div class = "row text-center">
        <!-- Osmi-denní léčebný Pobyt IBOGY -->
        <h1 class = "font-just-me color-iscz-red"><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.title'); ?></h1>
        <p>
            <?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.pars.0'); ?>
        </p>

        <p>
            <?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.pars.1'); ?>
        </p>
    </div>

    <div class = "row background-text-light-grey">
        <div class = "col-xl-5">
            <h3><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.title'); ?></h3>
                <ul id = "pobyty-list-overview">
                <li><span>1. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.1'); ?></li>
                <li><span>2. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.2'); ?></li>
                <li><span>3. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.3'); ?></li>
                <li><span>4. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.4'); ?></li>
                <li><span>5. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.5'); ?></li>
                <li><span>6. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.6'); ?></li>
                <li><span>7. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.7'); ?></li>
                <li><span>8. </span><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.schedule_days.items.8'); ?></li>
            </ul>

        </div>

        <div class = "col-xl-7">
            <p class = "p-5 font-just-me-small"><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.moughenda_design'); ?>
            </p>
        </div>
    </div>

    <div class = "row" id = "eight-day-retreat-includes-box">
        <div class = "row">
            <h2 class = "font-just-me font-size-60 text-center color-iscz-green"><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.title'); ?></h2>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/car-green.png" width = "64" />
                <p class = "text-uppercase"><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.0'); ?></p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/teachings-green.png" width = "64" />
                <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.1'); ?></p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/ceremony-green.png" width = "64" />
                <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.2'); ?></p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/provider-green.png" width = "64" />
                <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.3'); ?></p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/counseling-green.png" width = "64" />
                <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.4'); ?></p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/comment-green.png" width = "64" />

                <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.5'); ?></p>

            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/accommodation-green.png" width = "64" />
                <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.6'); ?></p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/salad-green.png" width = "64" />
                <p class = "text-uppercase"><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.7'); ?>.</p>
            </div>
        </div>



        <div class = "col-xl-3 col-xs-6">
                <div class = "item">
                    <img src = "/images/icons/leaf-green.png" width = "64" />
                    <p><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.8'); ?></p>
                </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/trips-green.png" width = "64" />
                <p>
                    <?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.9'); ?>
            </p>
            </div>
        </div>

        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/bath-green.png" width = "64" />
                <p>
                    <?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.10'); ?></p>
            </div>
        </div>


        <div class = "col-xl-3 col-xs-6">
            <div class = "item">
                <img src = "/images/icons/medical-green.png" width = "64" />
                <p class = "text-uppercase">
                    <?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.included.items.0'); ?></p>
            </div>
        </div>

    </div>


    <div class = "row">
            <div class = "col-xl-2">
                &nbsp;
            </div>

            <div class = "col-xl-8">
                <blockquote><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.eight_day_schedule.quote'); ?></blockquote>
            </div>

            <div class = "col-xl-2">
                &nbsp;&nbsp;
            </div>
    </div>


    <div class = "row">
        <div class = "col-xl-12">

            <h2 class = "font-just-me"><?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.eight_day_schedule.title'); ?></h2>

            <p>
                <?php echo __('pages/ceremonies/8-day-ceremony-schedule.content.sections.eight_day_schedule.par'); ?>
            </p>
        </div>
    </div>



    @include('pages.ceremonies.retreat-days.retreat-day-1')
    @include('pages.ceremonies.retreat-days.retreat-day-2')
    @include('pages.ceremonies.retreat-days.retreat-day-3')
    @include('pages.ceremonies.retreat-days.retreat-day-4')
    @include('pages.ceremonies.retreat-days.retreat-day-5')
    @include('pages.ceremonies.retreat-days.retreat-day-6')
    @include('pages.ceremonies.retreat-days.retreat-day-7')
    @include('pages.ceremonies.retreat-days.retreat-day-8')


    @stop
