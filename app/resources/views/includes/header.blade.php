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
                <div class = "languages">
                    @if (session('applocale'))
                    {{ session('applocale') }}
                    @endif
                        @if (session('applocale') == 'cz' || (empty (session('applocale'))))
                            <span class = "active">česky</span> |
                        @else
                            <a href = "/set-language/cz">česky</a> |
                        @endif
                    {{-- ====================================================== --}}
                        @if (session('applocale') == 'en')
                            <span class = "active">english</span> |
                        @else
                            <a href = "/set-language/en">english</a> |
                        @endif
                    {{-- ====================================================== --}}
                        @if (session('applocale') == 'de')
                            <span class = "active">auf Deutsch</span> |
                        @else
                            <a href = "/set-language/de">auf Deutsch</a> |
                        @endif
                     {{-- ====================================================== --}}

                        @if (session('applocale') == 'ru')
                            <span class = "active">на русском</span> |
                        @else
                            <a href = "/set-language/ru">на русском</a> |
                        @endif
                     {{-- ====================================================== --}}

                        @if (session('applocale') == 'pl')
                            <span class = "active">po polsku</span> |
                        @else
                            <a href = "/set-language/pl">po polsku</a> |
                        @endif
                        {{-- ====================================================== --}}

                        @if (session('applocale') == 'es')
                            <span class = "active">en español</span> |
                        @else
                            <a href = "/set-language/es">en español</a> |
                        @endif
                        {{-- ====================================================== --}}
                        @if (session('applocale') == 'fr')
                            <span class = "active">en francés</span> |
                        @else
                            <a href = "/set-language/fr">en francés</a> |
                        @endif
                        {{-- ====================================================== --}}
                        @if (session('applocale') == 'it')
                            <span class = "active">in italiano</span> |
                        @else
                            <a href = "/set-language/it">in italiano</a> |
                        @endif
                </div>

            </div>
        </section>

</header>
