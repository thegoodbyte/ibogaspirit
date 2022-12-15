@extends('layouts.default')
@section('content')
<div class = "row page-header-bg" id = "iboga-vs-aya-page-header"></div>

    <div class = "row">
    <h1 class = "font-just-me color-iscz-red h1-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.title'); ?></h1>
    </div>

    <div class = "row">
        <div class = "col-xl-12">

            <p><?php echo __('pages/iboga/iboga_vs_aya.content.par'); ?></p>
            <h2><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_entheo.title'); ?></h2>


            <div class = "row page-header-bg" id = "iboga-vs-aya-page-pg-entheo"></div>

            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_entheo.par'); ?></p>

        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-6">
            <h2 class  = "font-just-me color-iscz-red"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.title'); ?></h2>
            <p>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.par'); ?>
            </p>
        </div>

        <div class = "col-xl-6">
            <p>

                <strong><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.0.title'); ?></strong><br/>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.0.par'); ?>
            </p>

            <p>
                <strong><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.1.title'); ?></strong><br />
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.0.par'); ?>
            </p>

            <p>
                <strong><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.2.title'); ?></strong><br />
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.2.par'); ?>
            </p>

            <p>
                <strong><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.3.title'); ?></strong><br />
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.3.par'); ?>
            </p>

            <p>
                <strong><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.4.title'); ?></strong><br />
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_aya.plants_used.4.par'); ?>
            </p>
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-12">
            <h3 class  = "font-just-me color-iscz-red h3-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.aya_origins.title'); ?></h3>
                <p>
                    <?php echo __('pages/iboga/iboga_vs_aya.content.sections.aya_origins.par'); ?></p>
            <h3 class  = "font-just-me color-iscz-red h3-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.aya_popularity.title'); ?></h3>
            <p>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.aya_popularity.par'); ?></p>

        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-12">
            <h2 class = "h2-heading font-just-me color-iscz-red"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_iboga.title'); ?></h2>
            <div class = "row">
                <img src = "/images/iboga/iboga-banner-1200.jpg" />
            </div>
            <br />
            <p>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.what_is_iboga.par'); ?>
            </p>
            <h2 class = "font-just-me h3-heading color-iscz-red"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.iboga_origins.title'); ?></h2>

        </div>
    </div>


    <div class = "row">
        <div class = "col-xl-12">
            <p>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.iboga_origins.par'); ?>
            </p>

            <h3  class = "font-just-me h3-heading color-iscz-red">
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.iboga_popularity.title'); ?></h3>
            <p>       <?php echo __('pages/iboga/iboga_vs_aya.content.sections.iboga_popularity.par'); ?>
            </p>
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-12">
        <h2 class = "font-just-me color-iscz-red h2-heading text-center mb-5"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.comparison_aya_iboga.title'); ?></h2>
            <p>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.comparison_aya_iboga.par'); ?></p>

        </div>
    </div>



    <div class = "row">
        <div class = "col-xl-12">
            <h3 class = "font-just-me color-iscz-red text-center"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.diet_reqs.title'); ?></h3>
        </div>
    </div>

    <div class = "row">
        <div class = "col-xl-6">
            <p>
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.diet_reqs.iboga'); ?>
            </p>

            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.diet_reqs.aya'); ?></p>


        </div>

        <div class = "col-xl-6">
            <img src = "/images/iboga/diet.jpeg" />
        </div>
    </div>

    <div class = "container background-text-light-okr">
        <div class = "row background-text-light-okr">
            <h2 class = "font-just-me h2-heading color-iscz-orange text-center"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.food_reqs.title'); ?></h2>
        </div>
        <div class = "row">
            <div class = "col-xl-6">

                <h2  class  = "font-just-me color-iscz-red h2-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.food_reqs.food_to_avoid.title'); ?></h2>
                <p>
                    <?php echo __('pages/iboga/iboga_vs_aya.content.sections.food_reqs.food_to_avoid.par_1'); ?>
                </p>

                <p>
                    <?php echo __('pages/iboga/iboga_vs_aya.content.sections.food_reqs.food_to_avoid.par_2'); ?>
                </p>
            </div>

            <div class = "col-xl-6">
                <h3 class = "font-just-me color-iscz-red h3-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.meds_to_avoid.title'); ?></h3>
                <p>
                    <?php echo __('pages/iboga/iboga_vs_aya.content.sections.meds_to_avoid.par'); ?>
                </p>


                <h3 class = "font-just-me color-iscz-red h3-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.drugs_to_avoid.title'); ?></h3>
                <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.drugs_to_avoid.par'); ?></p>

            </div>
        </div>
    </div>


    <div class = "row">
        <div class = "col-xl-12">
            <h2 class = "font-just-me color-iscz-red text-center h2-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.duration.title'); ?></h2>
            <h2  class  = "font-just-me color-iscz-red h2-heading">
                <?php echo __('pages/iboga/iboga_vs_aya.content.sections.duration.subtitle'); ?>
            </h2>


            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.duration.pars.iboga'); ?></p>
            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.duration.pars.aya'); ?></p>

            <h3 class = "font-just-me color-iscz-red"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.ceremonies_count.title'); ?></h3>
            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.ceremonies_count.pars.iboga'); ?></p>
            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.ceremonies_count.pars.aya'); ?></p>


        </div>
    </div>

    <div class = "container background-text-light-blue">
        <div class = "row">
            <h2 class = "font-just-me color-iscz-green text-center h2-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.body_effects.title'); ?></h2>
        </div>


        <div class = "row">
            <div class = "col-xl-6">
                <h3 class  = "font-just-me color-iscz-red">
                    <?php echo __('pages/iboga/iboga_vs_aya.content.sections.body_effects.aya.title'); ?>
                </h3>

                <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.body_effects.aya.par'); ?></p>

                <img src = "/images/iboga/iboga-vs-aya-aya-body.jpeg" />


            </div>

            <div class = "col-xl-6">
                <img src = "/images/iboga/iboga-vs-aya-effects-body.jpg" />
                <h3 class  = "font-just-me color-iscz-red">
                    <?php echo __('pages/iboga/iboga_vs_aya.content.sections.body_effects.iboga.title'); ?>
                </h3>

                <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.body_effects.aya.par'); ?></p>

            </div>
        </div>
    </div>

    <div class = "row">
        <h2 class = "font-just-me color-iscz-green text-center h2-heading"><?php echo __('pages/iboga/iboga_vs_aya.content.sections.medical_potential.title'); ?></h2>
    </div>

    <div class = "row">
        <div class = "col-xl-6">
            <h3  class  = "font-just-me color-iscz-red">Ayahuasca</h3>
            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.medical_potential.aya'); ?></p>
        </div>

        <div class = "col-xl-6">
            <h3 class  = "font-just-me color-iscz-red">Iboga</h3>
            <p><?php echo __('pages/iboga/iboga_vs_aya.content.sections.medical_potential.iboga'); ?></p>
        </div>
    </div>

    <div class = "col-xl-12">
        <h3>
            <?php echo __('pages/iboga/iboga_vs_aya.content.sections.references.title'); ?>
        </h3>

        <ul>
            <li>https://pubmed.ncbi.nlm.nih.gov/27918874/</li>
            <li>https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5952178/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/25806551/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/29903051/</li>
            <li>https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5895707/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/27230395/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/22451652/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/11303040/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/11906717/</li>
            <li>https://www.frontiersin.org/articles/10.3389/fphar.2019.00193/full</li>
            <li>https://www.sciencedirect.com/science/article/pii/S0165247820303977</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/9626931/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/15386189/</li>
            <li>https://cdnsciencepub.com/doi/10.1139/W08-029?mobileUi=0&</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/15947429/</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/30272050/</li>
            <li>https://www.tandfonline.com/doi/full/10.1080/00952990.2017.1310218</li>
            <li>https://pubmed.ncbi.nlm.nih.gov/11085338/</li>
            <li>https://journals.sagepub.com/doi/10.1177/2470547020939564</li>
        </ul>


    </div>
</div>

@stop
