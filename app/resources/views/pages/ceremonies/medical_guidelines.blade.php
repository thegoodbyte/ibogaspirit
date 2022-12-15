@extends('layouts.default')
@section('content')
<div class = "container-fluid" id = "medical-quidelines-container">
    <div class = "row" id = "img-box-top-med-guidelines">
        <h1 class = "font-just-me font-size-80"><?php echo __('pages/ceremonies/medical-guidelines.content.title'); ?></h1>


        <blockquote><?php echo __('pages/ceremonies/medical-guidelines.content.quote'); ?></blockquote>

    </div>


    <!-- ----- SECTION --------------------- -->
    <div class = "row">
        <div class = "col-xl-12">

            <h2 class = "font-size-60 font-just-me"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.safety.title'); ?></h2>
            <p>

                <?php echo __('pages/ceremonies/medical-guidelines.content.sections.safety.pars.0'); ?>

            </p>

            <p>
                <?php echo __('pages/ceremonies/medical-guidelines.content.sections.safety.pars.1'); ?>
            </p>

            <p>
                <?php echo __('pages/ceremonies/medical-guidelines.content.sections.safety.pars.2'); ?>
            </p>
        </div>
    </div>
    <!-- ----- EOF SECTION --------------------- -->


    <div class = "row bg-container med-guidelines-box-reqs">
        <div class = "row">
            <div class = "col-xl-12">
                <h3 class = "font-just-me font-size-80"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.requirements.title'); ?></h3>
                <p>
                    <?php echo __('pages/ceremonies/medical-guidelines.content.sections.requirements.par'); ?>
                </p>
            </div>
        </div>

        <div class = "row">
            <div class = "col-xl-6">
                <h3 class = "font-just-me font-size-40"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.requirements.ekg.title'); ?></h3>
                <p>
                    <?php echo __('pages/ceremonies/medical-guidelines.content.sections.requirements.ekg.par'); ?>
                </p>
            </div>

            <div class = "col-xl-6">
                <h3 class = "font-just-me font-size-40"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.requirements.form.title'); ?></h3>
                <p>
                    <?php echo __('pages/ceremonies/medical-guidelines.content.sections.requirements.form.par'); ?>
                </p>
            </div>
        </div>
    </div>
    <!-- ---------------- EOF SECTION POZADAVKY --------------------------------->


{{--    <div class = "row">--}}
{{--        <div class = "col-xl-12" id = "medical-guidelines-img-box">--}}
{{--            <blockquote>Iboga je neuvěřitelně bezpečný lék, pokud má uživatel zdravé srdce a neužívá žádné návykové látky</blockquote>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class = "row">
        <blockquote><?php echo __('pages/ceremonies/medical-guidelines.content.sections.quote'); ?></blockquote>
    </div>


    <!-- ---------------- SECTION MEDICATIONS --------------------------------->
    <section>
    <div class = "row bg-container-beige">

        <div class = "row">
            <img src = "/images/medical-guidelines/vitamins-1200.jpg" />
        </div>
        <div class = "row">

            <div class = "col-xl-6">
                <h3 class = "font-just-me font-size-60"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.title'); ?></h3>
                <p>
                    <?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.pars.0'); ?>
                    </p>

                    <p>
                        <?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.pars.1'); ?>
                    </p>

                    <p>
                        <?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.pars.2'); ?>
                    </p>

                    <p>
                        <?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.pars.3'); ?>

                    </p>
            </div>

            <div class = "col-xl-6">
                <div class = "row">

                    &nbsp;
                </div>
                <h3 class = "font-just-me font-size-40"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.title'); ?></h3>
                <ul class = "ul-padded">
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.0'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.1'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.2'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.3'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.4'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.5'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.6'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.7'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.8'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.9'); ?></li>
                    <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.meds.meds_to_avoid.items.10'); ?></li>
                </ul>
            </div>
        </div>
    </div>
    </section>

    <!-- ---------------- SECTION DRUGS  --------------------------------->
    <section class = "mecical-guidelines-section-drugs background-text-light-grey">
        <div class = "row">

            <div class = "row">
                <h3 class = "font-just-me font-size-60"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.title'); ?></h3>
            </div>

            <div class = "row">
                <div class = "col-xl-12">
                    <p><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.pars.0'); ?></p>
                    <h3 class = "font-just-me font-size-40"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.detox_warning'); ?></h3>
                    <p>
                        <?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.pars.1'); ?>
                    </p>

                </div>
            </div>

            <div class = "row">
                <div class = "row">
                    <h2 class = "font-just-me h-class-warning"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.title'); ?></h2>
                </div>

                <div class = "row">
                    <div class = "col-xl-6">
                        <h3 class = "font-just-me font-size-30"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.list_title'); ?></h3>
                        <ul>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.0'); ?></li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.1'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.2'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.3'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.4'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.5'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.6'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.7'); ?><</li>
                            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.items.8'); ?><</li>
                        </ul>
                        <h3 style = "color:darkred;"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.drugs.drugs_to_avoid.abstinence_period'); ?><</h3>
                    </div>

                    <div class = "col-xl-6">
                        <img src = "/images/medical-guidelines/medical-caution drugs.jpeg" />
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ---------------- SECTION Psychological --------------------------------->
    <section class = "medical-guidelines-psychological">
        <div class = "row">
            <h3 class = "font-just-me font-size-60"><?php echo __('pages/ceremonies/medical-guidelines.content.sections.psychology.title'); ?></h3>
            <p>
                <?php echo __('pages/ceremonies/medical-guidelines.content.sections.psychology.pars.0'); ?>
            </p>
        </div>

        <div class = "row">
            <img
                srcset = "medical-psychological-400w.jpeg 400w,
                /images/medical-guidelines/medical-psychological-600w.jpeg 600w,
                /images/medical-guidelines/medical-psychological-900w.jpeg 900w,
                /images/medical-guidelines/medical-psychological-narrow.jpeg 1200w"
                sizes  = "(max-width: 400px) 400w,
                (min-width: 401 px and max-width: 600px) 600w,
                (min-width: 601px and max-width: 400px) 900w,
                (min-width: 901px) 1200w"
                src = "/images/medical-guidelines/medical-psychological-narrow.jpeg" />
        </div>

        <div class = "row background-text-light-grey" >
            <div class = "col-xl-6">
                <p>
                    <?php echo __('pages/ceremonies/medical-guidelines.content.sections.psychology.pars.1'); ?>
                </p>


            </div>

            <div class = "col-xl-6">
                <p>
                    <?php echo __('pages/ceremonies/medical-guidelines.content.sections.notes.title'); ?><br />

                        <?php echo __('pages/ceremonies/medical-guidelines.content.sections.notes.par'); ?>

                </p>
            </div>
        </div>

        <div class = "row background-text-light-grey">
            <div class = "col-xl-12">
                    <p>
                        <?php echo __('pages/ceremonies/medical-guidelines.content.sections.notes.safety_warning'); ?>
                    </p>
                </div>
            </div>
            </div>
    </section>

<section>
    <div class = "row">
        <p>
            <!--
        Who Should Not Take Iboga
        Iboga use can be dangerous if you have the following conditions:
            -->
            <h5><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.title'); ?></h5>
            <?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.par'); ?>
        </p>
            <!--
        Seizures/ Epilepsy
        Cardiac issues (arrhythmias, abnormal heart rate, bradycardia, prolonged QT interval, embolism, history of
            heart attack)
        Major respiratory conditions (emphysema, chronic obstructive pulmonary disorder)
        Impaired Liver or Kidney Function
        Pregnancy
        Please let your facilitator know if you:
            -->
        <ul>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.0'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.1'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.2'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.3'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.4'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.5'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.6'); ?></li>

            <!--
            Are currently on SSRI or MAOI medications
            have history of mania (as this sacrament can precipitate manic symptoms)
            have active panic attacks
            have neurological or cardiac/heart conditions
            -->

            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.7'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.8'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.9'); ?></li>
            <li><?php echo __('pages/ceremonies/medical-guidelines.content.sections.who_should_not.items.10'); ?></li>
        </ul>

    </div>
</section>

</div>
@stop
