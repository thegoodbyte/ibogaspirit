<section id = "home-kdo-jsme" class = "row">
        @php
            $applocale = session('applocale') ?? 'cz';
        @endphp
        <div class="who-we-are-col-1 col-xl-4 col-lg-4">
            <div class = "box-kdo-jsme">

                <h2 class="font-just-me text-center"><?php echo __('pages/homepage.content.section_bottom_about.col_1.title'); ?></h2>


                <div class="container">


                    <p class = " text-uppercase">
                        <?php echo __('pages/homepage.content.section_bottom_about.col_1.par.top'); ?>

                    </p>
                    <div class="container text-center">
                        <a href = "/iboga/co-je-iboga"><img src = "/images/home/iboga-bark.jpg"  width = "90%" /></a>
                    </div>

                    <p class = " text-uppercase">
                        <?php echo __('pages/homepage.content.section_bottom_about.col_1.par.bottom'); ?>

                    </p>
                </div>


                <div class = "button-show-more">
                    <a href = "{{ route('iboga-what-is_' . $applocale) }}"><img src = "/images/buttons/button_more{{ $applocale }}.png" /></a>
                </div>
            </div>
        </div>


        <div class="who-we-are-col-2 col-xl-4 col-lg-4">
                <div class = "box-kdo-jsme">

                    <h2 class="text-center"><?php echo __('pages/homepage.content.section_bottom_about.col_2.title'); ?></h2>

                    <div class="container">
                        <p>
                            <?php echo __('pages/homepage.content.section_bottom_about.col_2.par.top'); ?>
                        </p>
                        <div class = "container text-center">
                            <img src = "/images/home/onas/martin-circle.png" width = "80%"/>
                        </div>

                        <p class = "">
                            <?php echo __('pages/homepage.content.section_bottom_about.col_2.par.bottom'); ?>
                        </p>

{{--                        <p>Působím mezinárodně ... momentálně v Mexickém Kankunu v <a href = "www.bwitilife.com">Bwitilife.com</a> a začinám nabízet tuto léčebnou medicínu u nás v Čechách</p>--}}

                        <div class = "button-show-more">
                            <a href = "/onas/nganga"><img src = "/images/misc/button-more.png" /></a>
                        </div>
                    </div>

                </div>
        </div>



        <div class="who-we-are-col-3 col-xl-4 col-lg-4">

            <div class = "box-kdo-jsme">

                <h2 class="font-just-me text-center"><?php echo __('pages/homepage.content.section_bottom_about.col_3.title'); ?></h2>

                <div class="container">
                <p class = "">
                    <?php echo __('pages/homepage.content.section_bottom_about.col_3.par'); ?><br /><br />
                </p>
                </div>

                <div class="container">
                    <strong class = "text-uppercase align-content-center font-lato font-size-30"><?php echo __('pages/homepage.content.section_bottom_about.col_3.country'); ?></strong>
                    <a href = "/obrady/terminy-a-ceny">
                        <img src = "/images/promotions/cz/2023/06/banner-cs-june-upava-v2.jpg" width = "340"/>
                    </a>
                    <strong><?php echo __('pages/homepage.content.section_bottom_about.col_3.terms.0.date'); ?></strong><br />
                    <?php echo __('pages/homepage.content.section_bottom_about.col_3.terms.0.place'); ?><br /><br />
                </div>

                <div class="container">

                    <strong><?php echo __('pages/homepage.content.section_bottom_about.col_3.terms.1.date'); ?></strong><br />
                    <?php echo __('pages/homepage.content.section_bottom_about.col_3.terms.0.place'); ?>

                </div>

                <div class = "button-show-more">
                    <a href = "/obrady/terminy-a-ceny"><img src = "/images/misc/button-more.png" /></a>
                </div>
            </div>
        </div>

</section>
