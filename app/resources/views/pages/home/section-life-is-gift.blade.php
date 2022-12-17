<section id = "home-zijte-stastne">

    <div class = "row">
        <div class = "col-xl-6 ">
            <h2 class="p-3"><?php echo __('pages/homepage.content.section_get_to_know.left.title'); ?></h2>
            <p class  = "p-3 text-uppercase">
                <?php echo __('pages/homepage.content.section_get_to_know.left.par'); ?>
            </p>
        </div>


        <div class = "col-xl-6 p-3">
            <h2 class=""><?php echo __('pages/homepage.content.section_get_to_know.right.title'); ?></h2>
            <div class="menu-iboga-container">

                <div class="">

                    <a href ="{{ route('iboga-iboga-vs-aya_' . $applocale) }}" class="">
                        <?php echo __('pages/homepage.content.section_get_to_know.right.list_items.0'); ?>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('iboga-iboga-vs-aya_' . $applocale) }}" class="">
                        <?php echo __('pages/homepage.content.section_get_to_know.right.list_items.1'); ?>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('iboga-iboga-vs-aya_' . $applocale) }}" class="">
                        <?php echo __('pages/homepage.content.section_get_to_know.right.list_items.2'); ?>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('iboga-iboga-vs-aya_' . $applocale) }}" class="">
                        <?php echo __('pages/homepage.content.section_get_to_know.right.list_items.3'); ?>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('ceremonies-prep_' . $applocale) }}" class="">
                        <?php echo __('pages/homepage.content.section_get_to_know.right.list_items.4'); ?>
                    </a>
                </div>

                <!-- <div class=""><a href="services/door-to-door-delivery/index.html" class="jet-custom-nav__item-link">Termíny a Ceny</a></div> -->
                <div class="">
                    <a href="{{ route('ceremonies-first-ceremony_' . $applocale) }}"
                       class="jet-custom-nav__item-link"><?php echo __('pages/homepage.content.section_get_to_know.right.list_items.5'); ?></a>
                </div>
                <!-- <div class=""><a href="historie-pouzivani/index.html" class="jet-custom-nav__item-link">Historie používání</a></div> -->
            </div>
        </div>
    </div>
</section>
