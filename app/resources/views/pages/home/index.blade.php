@extends('layouts.default')

@section('content')


@include('pages.home.slider')
<div class = "row">
    <div class = "col-xl-12">
        <h2 class = "font-just-me color-iscz-red home-index-under-carousel">IBOGA MEDICÍNA A BWITI UČENÍ</h2>
        <p class = "text-uppercase">
            Šamanské léčení a učení k léčbě jakékoliv mentální, duševní nebo fyzické nemoci. Vydejte se na cestu sebepoznání
            a osvoboďte se z pout ega a mysli. Utěšte svou duši a žijte šťastný život. Jeden týdenní pobyt s dvěma obřady Ibogy může změnit
            váš život k lepšímu. Už žádné nešťastné smutné nebo popletené vy - jen nový a krásný život před vámi, A užívání si ho naplno.<br />
        </p>

        <p>
            Iboga je hluboce uzemňující medicína, který používá pravdu k léčení. Jejím cílem je vás přivést  zpět
            ke svému původnímu pravému já a znovu vás spojí s vaší duší. Dělá to tak, že nejprve vyčistí (detoxikuje)
            vše, co může, co fyzicky a duševně k vám nepatří . To je často zažíváno jako náhodné myšlenky,
            obrázky a takové proudění, které všechno vyčistí, je podobná k defragmentaci počítače.
        </p>

        <p>Iboga vám také ukáže jak funguje vaše mysl a odhalí vzorce myšlení, které jste možná pochytili
            během vašeho života. Vzorce které nejsou pravdivé nebo zdravé. Poté, co Iboga obnoví mír a pokoj ve vaší mysli,
            odhalí vám původ vašeho utrpení a   učí vás dále tím, že vám ukazuje pravdu. Zkrátka vám to
            pomáhá uvolnit vzorce, vzpomínky a traumata a osvobodí vás od nich – abyste mohli být tím svým pravým já. Po ceremoniálu,
            Iboga vám nadále pomáhá zlepšováním všímavosti a podporou neuroplasticity, abyste mohli vytvořit nový,
            zdravější život s lehkostí.
        </p>
    </div>
</div>

    @include('pages.home.section-happily')
@include('pages.home.section-life-is-gift')



@include('pages.home.section-parallax')
@include('pages.home.section-home-bottom')

@stop
