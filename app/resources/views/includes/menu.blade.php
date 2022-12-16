<div class="nav__container">
    <div class="nav__mobile">
        <div class="nav__logo">
            <div>
                <div class="">
                    <a href="/" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení">
                        <img src="/images/logo.png" class="" alt="Iboga povodňové dávky ceremonie - Czech Republic" width="305" height="76">
                    </a>
                </div>
            </div>
        </div>
        <div class="nav__btn">
            <a aria-label="Mobile menu" class="nav-toggle"><span></span>
                <span class="mrg"></span>
                <span class="mrg"></span></a>
        </div>
    </div>
    @php
        $applocale = session('applocale') ?? 'cz';

    @endphp


    <nav class="menu-toggle">
        <ul class="nav__menu">

            <li class = "menu-item"><a href="/" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení">HOME {{  $applocale }}</a></li>


            <li class = "dropdown2 menu-item">
                <a href="#"><?php echo __('menu.menu_ceremonies.iboga.title'); ?></a>
                <ul>
                    <li><a href="/iboga/jak-vam-iboga-muze-pomoci"  title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.how_iboga_can_help_you'); ?></a></li>
                    <li><a href="/iboga/bwiti-tradice" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.bwiti_tradition'); ?></a></li>
                    <li><a href="{{ route('iboga-what-is_' . $applocale) }}" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.what_is_iboga'); ?></a></li>
                    <li><a href="/iboga/iboga-vs-ayahuasca" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.iboga_vs_ayahuasca'); ?></a></li>
                    <li><a href="/iboga/gabon" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.iboga.gabon_africa'); ?></a></li>

                </ul>
            </li>

            <li class="dropdown menu-item"><a href="#"><?php echo __('menu.menu_ceremonies.ceremonies.title'); ?></a>
                <ul>

                    <li><a href="/obrady/prvni-ceremonial-a-co-ocekavat" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata či sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.your_first_ceremony'); ?></a></li>
                    <li><a href="/obrady/priprava" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.preparation'); ?></a></li>
                    <li><a href="/obrady/osmi-denni-iboga-wellness-pobyt" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.eight_day_retreat'); ?></a></li>
                    <li><a href="/obrady/lekarske-smernice" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.ceremonies.medical_guidelines'); ?></a></li>
                    <li><a href="/obrady/terminy-a-ceny"><?php echo __('menu.menu_ceremonies.ceremonies.dates'); ?></a></li>

                </ul>
            </li>
            <!-- <li class="dropdown menu-item"><a href="#">OBŘADY</a>-->
            <!--<li class="dropdown menu-item"><a href="#"><?php //echo __('menu.menu_ceremonies.ceremonies.ceremonies'); ?></a>-->

            <li class = "dropdown3 menu-item">

                <a href="#" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.about_us.title'); ?></a>

                <ul>
                    <li><a href="/onas/nganga" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.about_us.nganga'); ?></a></li>
                    <li><a href="/onas/moughenda" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.about_us.moughenda'); ?></a></li>

                </ul>
            </li>
            <li class = "menu-item"><a href="/kontakt" title = "Iboga rostlinná medicína léčí deprese, úzkosti, traumata, sebevražedné myšlenky. Alternativní holistické léčení"><?php echo __('menu.menu_ceremonies.contact'); ?></a></li>

        </ul>
    </nav>


</div>
