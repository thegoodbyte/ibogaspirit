@extends('layouts.default')

@section('content')


@include('pages.home.slider')
<div class = "row">
    <div class = "col-xl-12">


        <div class = "col-xl-12 col-xs-12">
            <h1 class = "font-just-me color-iscz-red home-index-under-carousel"><?php echo __('pages/homepage.content.section_2_iboga.title'); ?></h1>
            <p>
                <?php echo __('pages/homepage.content.what_iboga_does.pars.0'); ?>
            </p>
            <p>
{{--                Šamanské léčení a učení k léčbě jakékoliv mentální, duševní nebo fyzické nemoci. Vydejte se na cestu sebepoznání--}}
{{--                a osvoboďte se od pout ega a vlastní mysli. Utěšte svou duši a žijte šťastný život. Jeden týdenní pobyt s dvěma obřady Ibogy může změnit--}}
{{--                váš život k lepšímu. Už žádné nešťastné smutné nebo popletené vy - jen nový a krásný život před vámi, A užívání si ho naplno.<br />--}}

                <!-- ENG
                If you lived an unhappy life until now and you have been fed up with how things have been - there is a
                possibility to turn your life around thanks to this amazing plant medicine from Africa. Ii can literally
                solve all your problems over night - anxiety, depression, PTSD, suicidal thoughts, long life trauma,
                even to find the cause of your physical ailment. I provide week long Iboga stay in Czech Republic with two Iboga ceremonites
                 offered in the thousand years Bwiti Tradition
                 You are probably thinking - Africa? isnt it the continent of big time disease? Is it even safe?
I can assure you that Africa is an amazing land full of life and love - afterall it is where life comes africa. Bwiti people have been working with
Iboga for thousands of years and developed a healing tradition where safety is the number one priority.this is the tradition I practice
                -->


            <p>
                <?php echo __('pages/homepage.content.index.pars.0'); ?>
            </p>


            <p>
                <?php echo __('pages/homepage.content.index.pars.1'); ?>
            </p>

            </p>


            <p>
                <?php echo __('pages/homepage.content.index.pars.2'); ?>
            </p>
        </div>

        <div class = "col-xl-12 col-xs-12">
{{--            <h1 class = "font-just-me color-iscz-red h1-heading">With Iboga, you can heal a lifetime trauma in one night if you are ready to bring the truth to your mind</h1>--}}
            <h1 class = "font-just-me  font-signature"><?php echo __('pages/homepage.content.index.par_quote'); ?></h1>
        </div>




        <p>
            <?php echo __('pages/homepage.content.what_iboga_does.pars.1'); ?>
        </p>
        <p>
            <?php echo __('pages/homepage.content.what_iboga_does.pars.2'); ?>
        </p>
    </div>
</div>

    @include('pages.home.section-happily')
@include('pages.home.section-life-is-gift')



@include('pages.home.section-parallax')
@include('pages.home.section-home-bottom')

@stop
