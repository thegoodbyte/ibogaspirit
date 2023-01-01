@extends('layouts.default')
@section('content')


    <section id = "iboga-bwiti-tradition">
    <div class = "row"  id = "iboga-bwiti-tradition-top-image">
        <h1 class = "font-just-me font-size-80"><?php echo __('pages/iboga/bwiti_tradition.content.section_top_image.title'); ?></h1>


            <div class = "text-box">
                <p><?php echo __('pages/iboga/bwiti_tradition.content.section_top_image.par'); ?></p>
                <h3><?php echo __('pages/iboga/bwiti_tradition.content.section_top_image.subtitle'); ?></h3>
            </div>
    </div>

    <div class = "row mt-5">
        <div class = "row">
            <h4 class = "font-just-me font-size-40"><?php echo __('pages/iboga/bwiti_tradition.content.section_traditional_path.title'); ?></h4>
        </div>

        <div class = "col-xl-1">
            &nbsp;
        </div>

        <div class = "col-xl-10">
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_traditional_path.par_1'); ?>
            </p>
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_traditional_path.par_2'); ?>
            </p>
        </div>

    </div>


    <div class = "row background-text-light-grey">



        <div class = "col-xl-12">
            <h3 class = "bwiti-tradice-h3 font-just-me">

                <?php echo __('pages/iboga/bwiti_tradition.content.section_missoko_bwiti.title'); ?></h3>

            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_missoko_bwiti.par_1'); ?> <br />
            </p>
            <div class = "row">
                <img src = "/images/iboga/bwiti-temple-1200.jpg" />
            </div>
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_missoko_bwiti.par_2'); ?>
            </p>
        </div>
    </div>



    <div class = "row">
        <h3 class = "bwiti-tradice-h3 font-just-me"><?php echo __('pages/iboga/bwiti_tradition.content.section_misinterpretation.title'); ?></h3>
        <div class = "col-xl-12">
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_misinterpretation.par_1'); ?><br />
            </p>

        </div>

    </div>




    <div class = "row background-text-light-grey">

        <div class = "col-xl-5 col-sxs-12 col-md-12">
            <img
                srcset="/images/iboga/bwiti/moughenda-torch-1200w.jpg 1200w,
                        /images/iboga/bwiti/moughenda-torch-400w.jpg 400w"
                sizes = "(max-width: 400px) 400px"
                src="/images/iboga/bwiti/moughenda-torch-1200w.jpg"
                alt = "Saman Moughenda - Iboga seance - Ceska Republika"
            >
        </div>


        <div class = "col-xl-7  col-xs-12 col-md-1">
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_misinterpretation.par_2'); ?>
            </p>
            <h4 class = "bwiti-tradice-h3 font-just-me"><?php echo __('pages/iboga/bwiti_tradition.content.section_rituals.title'); ?></h4>
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_rituals.par'); ?>
            </p>

            <h4 class = "bwiti-tradice-h3 font-just-me"><?php echo __('pages/iboga/bwiti_tradition.content.section_shaman.title'); ?></h4>
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_shaman.par_1'); ?>
            </p>

            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_shaman.par_2'); ?>
            </p>
        </div>
    </div>




    <div class = "row">

        <div class = "col-xl-7">
            <h4 class = "bwiti-tradice-h3 font-just-me">
                <?php echo __('pages/iboga/bwiti_tradition.content.section_nature.title'); ?></h4>
            <p>
                <?php echo __('pages/iboga/bwiti_tradition.content.section_nature.par_1'); ?>
            </p>

            <p>

                <?php echo __('pages/iboga/bwiti_tradition.content.section_nature.par_2'); ?>
                <!--
                This concept is such a powerful distillation of wisdom when explored. One quickly understands why people
                existing in the "modern world" they are so unhappy that their lives are the accumulation of material possessions and
                living in a whole structure that abuses the natural world and is deeply connected to the material
                the goods she mined. The Bwiti still live with the integrity that results from their respect for this proverb.
                They live a simpler life that is deeply connected to nature and community, making them incredibly happy.-->
            </p>


            <h4 class = "font-just-me mb-5"><?php echo __('pages/iboga/bwiti_tradition.content.section_prayer.title'); ?></h4>
            <blockquote class = "mt-5"><?php echo __('pages/iboga/bwiti_tradition.content.section_prayer.quote'); ?></blockquote>
        </div>

        <div class = "col-xl-5">
            <img src="/images/iboga/bwiti/bwiti-manima-1200w.jpeg">
        </div>
    </div>
    </section>
@stop
