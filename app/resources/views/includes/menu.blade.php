<div class="nav__container">
    <div class="nav__mobile">
        <div class="nav__logo">

                    <a href="/" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení">
                        <img src="/images/logo.png" id = "logo" alt="Iboga povodňové dávky ceremonie - Czech Republic" width="305" height="76">
                    </a>

        </div>
        <div class="nav__btn">
            <a aria-label="Mobile menu" class="nav-toggle"><span></span>
                <span class="mrg"></span>
                <span class="mrg"></span></a>
        </div>
    </div>
    @php
        $applocale = session('applocale') ?? 'cz';
        echo $applocale;
    @endphp


    <nav class="menu-toggle">
        <ul class="nav__menu">

            <li class = "menu-item"><a href="/"
                                       title = "<?php echo __('seo/menu-top.seo.menu.home'); ?>">HOME</a></li>

            <li class = "dropdown2 menu-item">
                <a href="#"><?php echo __('menu.menu_ceremonies.iboga.title'); ?></a>
                <ul>
                    <li><a href="{{ route('iboga-what-is_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.what_is_iboga'); ?></a></li>
                    <li><a href="{{ route('iboga-how-can-help_' . $applocale)  }}"  title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.how_iboga_can_help_you'); ?></a></li>
                    <li><a href="{{ route('iboga-bwiti-tradition_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.bwiti_tradition'); ?></a></li>
                    <li><a href="{{ route('iboga-iboga-vs-aya_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.iboga_vs_ayahuasca'); ?></a></li>
                    <li><a href="{{ route('iboga-gabon_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.gabon_africa'); ?></a></li>

                </ul>
            </li>

            <li class="dropdown menu-item"><a href="#"><?php echo __('menu.menu_ceremonies.ceremonies.title'); ?></a>
                <ul>

                    <li><a href="{{ route('ceremonies-first-ceremony_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata či sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.your_first_ceremony'); ?></a></li>
                    <li><a href="{{ route('ceremonies-prep_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.preparation'); ?></a></li>
                    <li>eb<a href="{{ route('ceremonies-retreat_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.eight_day_retreat'); ?></a></li>
                    <li><a href="{{ route('ceremonies-medical-guidelines_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.medical_guidelines'); ?></a></li>
                    <li><a href="{{ route('ceremonies-dates_' . $applocale) }}"><?php echo __('menu.menu_ceremonies.ceremonies.dates'); ?></a></li>

                </ul>
            </li>

            <li class = "dropdown3 menu-item">

                <a href="#" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.about_us.title'); ?></a>

                <ul>
                    <li><a href="{{ route('about-nganga_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.about_us.nganga'); ?></a></li>
                    <li><a href="{{ route('about-moughenda_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.about_us.moughenda'); ?></a></li>
                </ul>

            </li>
            <li class = "menu-item"><a href="{{ route('contact_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.contact'); ?></a></li>

        </ul>
    </nav>


</div>
