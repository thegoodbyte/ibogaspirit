@extends('layouts.default')
@section('content')
    <div class = "row" id = "img-box-iboga-helps" a;t = "Hello">
        <h2 class = "font-just-me font-size-80 color-iscz-red"><?php echo __('pages/iboga/how_iboga_can_help.content.section_top_image.title'); ?></h2>

        <blockquote><span><?php echo __('pages/iboga/how_iboga_can_help.content.section_top_image.quote'); ?></span></blockquote>

    </div>


    <div class = "container">
        <div class = "col-xl-12 col-xs-1" id = "how-iboga-helps-h2-who-is-for">
            <h3 class = "font-size-40 font-just-me color-iscz-green">
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.quote'); ?>
            </h3>
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-7 col-xs-12">
            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.0'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.1'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.2'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.3'); ?>
            </p>

            <blockquote>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.mid_text_quote'); ?>
            </blockquote>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.4'); ?>
            </p>
        </div>
        <div class = "col-xl-5 col-xs-12">
            <img
{{--                srcset = "/images/iboga/iboga-graphics-400w.jpeg 400w,--}}
{{--                          /images/iboga/iboga-graphics-400w.jpeg 600w,--}}
{{--                          /images/iboga/iboga-graphics-400w.jpeg 900w,--}}
{{--                          /images/iboga/iboga-graphics-400w.jpeg 1200w,"--}}
{{--                sizes = "(max-width: 400px) 400w,--}}
{{--                         (min-width: 401px and max-width: 600px) 600w,--}}
{{--                         (min-width: 601px and max-width: 900px) 900w,--}}
{{--                         (min-width: 901px) 1200w"--}}
                src = "/images/iboga/iboga-graphics-400w.jpeg" />
        </div>
    </div>


    <!------ -->
    <div class = "row col-xl-12">
        <blockquote><?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.quote_3'); ?></blockquote>

        <p>
            <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.5'); ?>
        </p>


        <p>
            <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_text.par_top.6'); ?>
        </p>
    </div>


<!------ -->


    <div class = "col-xl-12" id = "img-box-iboga-helps-middle">
        <blockquote><?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_image_and_bellow.quote'); ?></blockquote>
    </div>


    <div class = "row">

        <div class = "col-xl-12">section_mid_image_and_bellow
            <blockquote><?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_image_and_bellow.quote_bellow'); ?></blockquote>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_image_and_bellow.par.0'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_mid_image_and_bellow.par.1'); ?>
            </p>
        </div>
    </div>


    <div class = "row">
        <div class = "col-xl-12">
            <h3 class = "font-size-40 color-iscz-red font-just-me">
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.title'); ?>
            </h3>


            <ol>
                <li class = "font-size-30 color-iscz-green">
                    <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.items.0'); ?>

                </li>

                <li class = "font-size-30 color-iscz-green">
                    <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.items.1'); ?>
                </li>

                <li class = "font-size-30 color-iscz-green">
                    <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.items.2'); ?>
                </li>
            </ol>
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-12">
           <p> <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.pars.0'); ?></p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.pars.1'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.pars.2'); ?>
            </p>
        </div>
    </div>

    <diV class = "row" id = "iboga-benefits">
            <div class = "col-xl-3 col-sm-12 iboga-helps-block" style = "background-color: #DCF1F1;">
                <div class = "text-center">
                    <img src = "/images/icons/physical.png" width = "80" />
                </div>

                <h3 class =  "text-center"><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.title'); ?></h3>

                <ul>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.0'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.1'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.2'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.3'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.4'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.5'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.6'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.7'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_1.items.8'); ?></li>
                </ul>
            </div>

            <div class = "col-xl-3 col-sm-12 iboga-helps-block" style = "background-color: #Fffdf1;">
                <div class = "text-center">
                    <img src = "/images/icons/mental.png" width = "80" />
                </div>

                <h3 class =  "text-center"><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.title'); ?></h3>

                <ul>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.0'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.1'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.2'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.3'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.4'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.5'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.6'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_2.items.7'); ?></li>
                </ul>
            </div>

            <div class = "col-xl-3 col-sm-12 iboga-helps-block" style = "background-color: #F3eeec;">
                <div class = "text-center">
                    <img src = "/images/icons/emotional.png" width = "80" />
                </div>

                <h3 class =  "text-center"><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_3.title'); ?></h3>

                    <ul>
                        <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_3.items.0'); ?></li>
                        <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_3.items.1'); ?></li>
                        <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_3.items.2'); ?></li>
                        <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_3.items.3'); ?></li>
                    </ul>
            </div>


            <div class = "col-xl-3 col-sm-12 iboga-helps-block" style = "background-color: #E9f1e9;">
                <div class = "text-center">
                    <img src = "/images/icons/spiritual.png" width = "80" />
                </div>

                <h3 class =  "text-center"><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.title'); ?></h3>
                <ul>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.0'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.1'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.2'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.3'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.4'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.5'); ?></li>
                    <li><?php echo __('pages/iboga/how_iboga_can_help.content.section_why_participate.cols.col_4.items.6'); ?></li>

                </ul>
            </div>
   </div>


    <div class = "row">
        <div class = "col-xl-12">

            <p class = "pt-5"><?php echo __('pages/iboga/how_iboga_can_help.content.section_feedback.par'); ?></p>
            <blockquote class = "small-bq color-iscz-green feedback-green">

                <?php echo __('pages/iboga/how_iboga_can_help.content.section_feedback.body'); ?>
                <cite><?php echo __('pages/iboga/how_iboga_can_help.content.section_feedback.name'); ?></cite>

            </blockquote>


            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_bottom_text.par_1'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_bottom_text.par_2'); ?>.
            </p>
            <p>
                <?php echo __('pages/iboga/how_iboga_can_help.content.section_bottom_text.par_3'); ?>
            </p>

        </div>

        <div class = "col-xl-12">
            <!--
            <p>Helping people find clarity in who they are and what they want
                An Iboga Treatment should focus on connecting you to who you are and what you want because this is one of
                the biggest spiritual benefits the treatment offers. In a traditional Bwiti Iboga ceremony, individuals are brought
                to meet and reconnect with their soul. This connection (and knowing) instills an unwavering sense of confidence,
                self-love, and clarity to those who truly embrace it. This will then have a profound impact on their perspective and their
                entire external world. When you leave an Iboga treatment knowing who you are and what you want, there is no stopping you.
            </p>
            -->

        </div>

    </div>

@stop
