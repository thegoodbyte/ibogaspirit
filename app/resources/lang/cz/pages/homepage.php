<?php

$locale = session('applocale') ?? 'cz';
$links = [
    'iboga-bwiti-tradition' => route('iboga-bwiti-tradition_' . $locale),
    'iboga-what-is' => route('iboga-what-is_' . $locale),
    'ceremonies-retreat' => route('ceremonies-retreat_' . $locale),
    'about-moughenda' => route('about-moughenda_' . $locale),
];

return  [
    'content' => [
        'slider' => [
            'slide_1' => [
                'title' => 'TRADIČNÍ IBOGA OBŘADY V AFRICKÉ TRADICI MISSOKO BWITI',
                'par' => 'Poskytuji tradiční <a href = "' . $links['iboga-bwiti-tradition'] . '">Bwiti</a> léčebné obřady Ibogy, jak mě učil v
                        Gabonu <a href = "' . $links['about-moughenda'] . '">šaman Moughenda 10. generace'
            ],
            'slide_2' => [
                'title' => 'EXKLUZIVNÍ 8 DENNÍ POBYT PRO ZMĚNU ŽIVOTA',
                'par' => '<a href = "' . $links['ceremonies-retreat'] . '">Týdenní pobyt</a> s dvěma psycho-spirituálními ceremoniemi
                    Ibogy, duchovní sprchou, naukou Bwiti a mnohem vice...'
            ],
            'slide_3' => [
                'title' => 'VYDEJ SE NA CESTU SEBE POZNÁNÍ',
                'par' => 'Týdenní pobyt s dvěmi psycho-spirituálními Iboga ceremoniemi, duchovní sprchou, BWITI učením a mnohem vice...'
            ]
        ],
        'index' => [
            'pars' => [
                0 => 'Pokud jsi až doteď žil/a nešťastný život a už tě omrzelo to, jak se věci mají, je tu možnost změnit svůj život díky této
                úžasné rostlinné medicíně z Afriky - <a href = "' . $links['iboga-what-is'] . '">Iboze</a>. Dokáže doslova přes noc
                vyřešit všechny tvoje problémy – úzkost, deprese, PTSD,
                sebevražedné myšlenky, celoživotní traumata, dokonce i najít příčinu tvého fyzického onemocnění.',

                1 => 'Poskytuji <a href = "{{ route(\'ceremonies-retreat_cz\') }}">týdenní Bwiti Iboga pobyty</a> v
                České republice se dvěma  Iboga ceremoniemi, Bwiti moudrost nabízené a prováděné v
                tisícileté a originální africké tradici <a href = "' . $links['iboga-bwiti-tradition'] . '">Missoko Bwiti</a>.',

                2 => 'Asi si říkáš – Afrika? není to kontinent velkých nemocí? Je to vůbec bezpečné?
                Můžu tě ujistit, že Afrika je úžasný kontinent  plný života a lásky – koneckonců právě z Afriky život pochází. ' . $links['iboga-bwiti-tradition'] . '
                lidé spolupracují s Ibogou již po tisíce let a rozvinuli
                léčebnou tradici, kde je bezpečnost na prvním místě. Toto je ta tradice, kterou praktikuji.',
            ],
            'par_quote' => 'S Ibogou můžete vyléčit celoživotní trauma během jedné noci, pokud jste připraveni přinést pravdu do své mysli'
        ],
        'section_2_iboga' =>[
            'title' => 'IBOGA MEDICÍNA A BWITI UČENÍ',
            'par' => 'Šamanské léčení a učení k léčbě jakékoliv mentální, duševní nebo fyzické nemoci. Vydejte se na cestu sebepoznání
            a osvoboďte se z pout ega a mysli. Utěšte svou duši a žijte šťastný život. Jeden týdenní pobyt s dvěma obřady Ibogy může změnit
            tvůj život k lepšímu. Už žádné nešťastné smutné nebo popletené ty - jen nový a krásný život před tebou, A užívání si ho naplno.<br />
            <!-- IBOGA MEDICÍNA  MŮŽE VYLÉČIT KAŽDÉ DUŠEVNÍ TRAUMA
            TÍM ŽE NÁS PŘIVEDE KE KOŘENŮM PROBLÉMU A UKÁŽE NÁM, JAK SE S NÍM SMÍŘIT A ZÁROVEŇ NÁS VYLÉČÍ.
            JE TO SKUTEČNÝ ZÁZRAK – ZNOVUROZENÍ -->'
        ],
        // TOD): add to do page
        'what_iboga_does' => [
            'title' => 'Jak Iboga funguje?',
            'pars' => [
                0 => 'Šamanské léčení a učení k léčbě jakékoliv mentální, duševní nebo fyzické nemoci. Vydejte se na cestu sebepoznání
                    a osvoboďte se z pout ega a mysli. Utěšte svou duši a žijte šťastný život. Jeden týdenní pobyt s dvěma obřady Ibogy může změnit
                    váš život k lepšímu. Už žádné nešťastné smutné nebo popletené vy - jen nový a krásný život před vámi, A užívání si ho naplno.',

                1 => 'Iboga je hluboce uzemňující medicína, který používá pravdu k léčení. Jejím cílem je tě přivést  zpět
                    ke tvému původnímu a pravému já a znovu tě spojí s tvojí duší. Dělá to tak, že nejprve vyčistí (detoxikuje)
                    vše, co může, co fyzicky a duševně ti nepatří. To je často zažíváno jako náhodné myšlenky,
                    a obrázky. Takové proudění, které všechno vyčistí, je podobné k defragmentaci počítače.',
                2 => 'Iboga ti také ukáže jak funguje tvoe mysl a odhalí vzorce myšlení, které jsi možná pochytili
                    během svého života. Vzorce které nejsou pravdivé či zdravé. Poté, co Iboga obnoví mír a pokoj v tvé mysli,
                    odhalí ti původ tvého utrpení a dále tě léčí a uči tím, že ti ukazuje pravdu. Zkrátka ti to
                    pomáhá uvolnit vzorce, vzpomínky a traumata a osvobodí tě od nich – abys mohl být sám sebou a svým pravým já. Po ceremonii,
                    Iboga ti nadále pomáhá zlepšováním pozornosti a podporou neuroplasticity, k vytoření nového,
                    zdravějšíhoa života v pohodě',

                3 => 'Zážitek Ibogy je pro každého člověka pokaždé jiný. A právě proto ta samá osoba, která projde
                    vícekrát ceremoniemi, bude mít pokaždé jiný zážitek. Stejně tak dva lidé, ve stejné ceremonii,  budou mít úplně
                    jiné zkušenosti. Diky tomu že Iboga je vysoce inteligentní duch, dává každému člověku jeho vlastní dokonalou
                    léčebnou zkušenost, Je to proto aby to vyhovovalo jejich specifickým potřebám. Dělá to způsobem, kterému bude daná osoba nejlépe rozumět.'
                ]
        ],
        'section_3_happily' => [
            'title_1' => 'ŽIJTE ŠŤASTNĚ A NAPLNO',
            'par_1' => 'ŽIVOT MŮŽEME CTÍT TÍM, ŽE BUDEME ŽÍT ŠŤASTNĚ. JE TO MOŽNÉ A NAŠE VROZENÉ PRÁVO.
            MEDICÍNA IBOGA NÁS UČÍ, JAK SI UŽÍVAT ŽIVOTA NAPLNO.',
            'title_2' => 'IBOGA MEDICÍNA',
            'par_2' => 'DOKÁŽE VYLÉČIT JAKÉKOLI PSYCHICKÉ TRAUMA TÍM, ŽE NÁS PŘIVEDE KE KOŘENŮM PROBLÉMU A
            UKÁŽE NÁM,JAK SE S NÍM SMÍŘIT. JE TO OPRAVDOVÝ ZÁZRAK – NOVÉ ZROZENÍ...',
            'section_4_get_to_know' => [

            ]

        ],
        'section_get_to_know' => [
            'left' => [
                'title' => 'POZNEJ SVÉ PRAVÉ JÁ',
                'par' => 'Vědět, kdo skutečně jsi, je ten skutečný svatý grál života. Můžeš si užívat svůj život naplno a
                dělat pro sebe správná rozhodnutí, která vedou ke šťastnému životu. S Iboga medicínou a správnou
                Bwiti ceremonií můžeš vyléčit během první ceremonie letitý pocit viny, hněv, popletení mysli nebo jakýkoli duševní stav tím,
                že se setkáš se svou duší a napravíš svůj vztah se sebou samým/samou. Osvobod se od negativnií mysli a objev
                lásku a mír, který pro tebe má tvá duše
                ',
            ],
            'right' => [
                'title' => 'IBOGA MEDICÍNA',
                'list_items' => [
                    0 => 'Co je IBOGA MEDICÍNA',
                    1 => 'Jak ti Iboga může pomoci',
                    2 => 'Bwiti Tradice',
                    3 => 'Iboga vs Ayahuasca',
                    4 => 'Příprava a Průběžná péče',
                    5 => 'TVOJE PRVNÍ IBOGA CEREMONIE',
                ]
            ]
        ],
        'section_bwiti' => [
            'title' => 'TRADIČNÍ BWITI LÉČENÍ A DUCHOVNÍ UČENÍ',
            'par' => 'Podle tradice, když se Iboga poprvé objevil, rozhodl se být s Bwiti lidmi.
                    Iboga respektoval jejich způsob života, a tak když se lidé začali ptát, odkud přišli a za co mohou
                    být tolik vděční, Iboga se představil a řekl: „Řekněte svým lidem, že až budou mít otázky,
                    at si mě vezmou a já jim ukážu." A v tomto příběhu je toho mnohem víc...'
        ],
        'section_bottom_about' => [
            'col_1' => [
                'title' => 'CO JE IBOGA',
                'par'   => [
                    'top' => 'IBOGA (TABERNATHE IBOGA) JE VYTRVALÝ KEŘ POCHÁZEJÍCÍ Z ROVNÍKOVÉ STŘEDOZÁPADNÍ AFRIKY.
                        KOŘENOVÁ KŮRA BYLA POUŽÍVÁNA ',
                    'bottom' => 'JAKO PŘÍRODNÍ ROSTLINNÁ MEDICÍNA PO TISÍCE A TISÍCE LET DOMORODÝMI OBYVATELI
                REGIONU. JE POVAŽOVÁNA ZA POSVÁTNOU SVÁTOST TĚCH, KTEŘÍ PRAKTIKUJÍ TRADICI ZNÁMOU JAKO BWITI.Iboga se používá v
                různých obřadních ...'
                ]
            ],
            'col_2' => [
                'title' => 'KDO JSEM',
                'par' => [
                    'top' => 'Vitejte - jmenuji se Martin a jsem Nganga - spirituálni léčitel a tradiční Bwiti Iboga facilitátor a poskytovatel.',
                    'bottom' => 'Studoval jsem bezpečné poskytování Ibogy medicíny a Bwiti učení a léčení v Gabonu,  středozápadní Africe, u šamana 10-té generace Moughendy Mikaly.
                            Učil jsem se tradiční  tisíce-letou praxi -  Missoko Bwiti.'
                ]
            ],
            'col_3' => [
                'title' => 'TERMÍNY',
                'par' => 'Čtyřikrát ročně poskytuji tradiční léčebné Iboga pobyty v České Republice.
                 Někdy i častěji, dle poptávky..
                    Další dva Iboga pobyty se budou konat:',
                'country' => 'Česká republika',
                'terms' => [
                    0 => [
                        'date' => '24 - 31 března 2023',
                        'place' => 'Železná Ruda, (Klatovy), Západočeský kraj'
                    ],
                    1 => [
                        'date' => '17.–24. června 2023',
                        'place' => 'Svoboda nad Úpou, Královéhradecký kraj'
                    ],
                ]
            ]
        ]
    ]
];
