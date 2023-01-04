<header id="masthead" class="site-header    header-outer">
    <div class = "header-inner">
        <section class="row">
            <div>
                        @include('includes.menu')
            </div>
        </section>

        <section>
            <div class = "header-bottom-row">
                <div class = "languages">
                    @php
                        $applocale = session('applocale') ?? 'cz';
                    @endphp


                        @if (session('applocale') == 'cz' || (empty (session('applocale'))))
                            <span class = "active">česky <img alt= ""  src = "/images/icons/flags/cz.png"/></span> |
                        @else
                            <a href = "/set-language/cz">česky <img  alt= "" src = "/images/icons/flags/cz.png"/></a> |
                        @endif
                    {{-- ====================================================== --}}
                        @if (session('applocale') == 'en')
                            <span class = "active">english <img  alt= "" src = "/images/icons/flags/us.png"/></span> |
                        @else
                            <a href = "/set-language/en">english <img  alt= "" src = "/images/icons/flags/us.png"/></a> |
                        @endif
                    {{-- ====================================================== --}}
{{--                        @if (session('applocale') == 'de')--}}
{{--                            <span class = "active">auf Deutsch</span> |--}}
{{--                        @else--}}
{{--                            <a href = "/set-language/de">auf Deutsch</a> |--}}
{{--                        @endif--}}
{{--                     --}}{{-- ====================================================== --}}

{{--                        @if (session('applocale') == 'ru')--}}
{{--                            <span class = "active">на русском</span> |--}}
{{--                        @else--}}
{{--                            <a href = "/set-language/ru">на русском</a> |--}}
{{--                        @endif--}}
{{--                     --}}{{-- ====================================================== --}}

{{--                        @if (session('applocale') == 'pl')--}}
{{--                            <span class = "active">po polsku</span> |--}}
{{--                        @else--}}
{{--                            <a href = "/set-language/pl">po polsku</a> |--}}
{{--                        @endif--}}
{{--                        --}}{{-- ====================================================== --}}

{{--                        @if (session('applocale') == 'es')--}}
{{--                            <span class = "active">en español</span> |--}}
{{--                        @else--}}
{{--                            <a href = "/set-language/es">en español</a> |--}}
{{--                        @endif--}}
{{--                        --}}{{-- ====================================================== --}}
{{--                        @if (session('applocale') == 'fr')--}}
{{--                            <span class = "active">en francés</span> |--}}
{{--                        @else--}}
{{--                            <a href = "/set-language/fr">en francés</a> |--}}
{{--                        @endif--}}
{{--                        --}}{{-- ====================================================== --}}
{{--                        @if (session('applocale') == 'it')--}}
{{--                            <span class = "active">in italiano</span> |--}}
{{--                        @else--}}
{{--                            <a href = "/set-language/it">in italiano</a> |--}}
{{--                        @endif--}}
                </div>

            </div>
        </section>
    </div>
</header>
