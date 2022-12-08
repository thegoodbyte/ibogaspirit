<header id="masthead" class="site-header ">
        <section class="row">
            <div class="elementor-container elementor-column-gap-no">
                <div class="" data-id="713a3ea" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        @include('includes.menu')
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class = "header-bottom-row">
                <ol class = "languages">
                    @if (session('applocale'))
                    {{ session('applocale') }}
                    @endif
                    <a href = "/set-language/en">english</a> |
                    <a href = "/set-language/de">auf Deutsch</a> |
                    <a href = "/set-language/ru">на русском</a> |
                    <a href = "/set-language/pl">po polsku</a> |
                    <a href = "/set-language/es">en español</a> |
                    <a href = "/set-language/fr">en francés</a> |
                    <a href = "/set-language/it">in italiano</a> |
                </ol>

            </div>
        </section>

</header>
