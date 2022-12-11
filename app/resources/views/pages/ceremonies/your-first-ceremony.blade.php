@extends('layouts.default')
@section('content')




    <div class = "row page-header-bg" id = "iboga-index-page-header"></div>


    <div class = "row">
        <h1 class = "font-just-me color-iscz-red text-center h1-heading"><?php echo __('pages/ceremonies/your-first-ceremony.content.title');?></h1>
    </div>

    <div class = "row">
        <h3 class = "font-just-me font-size-40"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.what_to_expect.title');?></h3>
        <div class = "col-xl-6">

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.what_to_expect.pars.0');?>
            </p>

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.what_to_expect.pars.1');?>
            </p>

        </div>

        <div class = "col-xl-6">
            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.what_to_expect.pars.2');?>
            </p>
        </div>
    </div>


    <div class = "row">
        <h2 class = "font-just-me color-iscz-red"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.first_ceremony.title');?></h2>
        <div class = "col-xl-12">

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.first_ceremony.pars.0');?>
            </p>

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.first_ceremony.pars.1');?>
            </p>

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.first_ceremony.pars.2');?>
            </p>

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.first_ceremony.pars.3');?>
            </p>

            <p>
                <?php echo __('pages/ceremonies/your-first-ceremony.content.sections.first_ceremony.pars.4');?>
            </p>

            <p>
                <!--
                JAK SE PRIPRavit
            </p>

            <p>
                prubeh
            </p>

            <p>
                Recovery day-->
            </p>
        </div>
    </div>


    <div class = "row background-text-light-grey">
        <div class = "row">
            <h3 class = "font-just-me"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.title');?></h3>
        </div>
        <div class = "row">
            <div class = "col-xl-6">
                <ul>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.0');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.1');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.2');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.3');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.4');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.5');?></li>

                </ul>
            </div>

            <div class = "col-xl-6">
                <ul>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.6');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.7');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.8');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.9');?></li>
                    <li><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.you_can_experience.items.10');?></li>
                </ul>
            </div>
        </div>
    </div>



    <h2 class = "font-just-me font-size-80"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.title');?></h2>

    <div class = "row">
        <div class = "col-xl-6 col-xs-12">
            <p>
                <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.0.q');?></div>
                <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.0.a');?></div>
            </p>
        </div>

        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.1.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.1.a');?></div>
            </p>
        </div>
        <!-- 2-3-->
        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.2.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.2.a');?></div>
            </p>
        </div>

{{--        <div class = "col-xl-6 col-xs-12">--}}
{{--            <p>--}}
{{--            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.3.q');?></div>--}}
{{--            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.3.a');?></div>--}}
{{--            </p>--}}
{{--        </div>--}}

        <!-- 4 - 5 -->
{{--        <div class = "col-xl-6 col-xs-12">--}}
{{--            <p>--}}
{{--            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.4.q');?></div>--}}
{{--            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.4.a');?></div>--}}
{{--            </p>--}}
{{--        </div>--}}

        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.5.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.5.a');?></div>
            </p>
        </div>

        <!-- 6 - 7 -->
        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.6.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.6.a');?></div>
            </p>
        </div>

        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.7.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.7.a');?></div>
            </p>
        </div>

        <!-- 8 - 9 -->
        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.8.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.8.a');?></div>
            </p>
        </div>

        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.9.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.9.a');?></div>
            </p>
        </div>

        <!-- 10  - 11 -->
        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.10.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.10.a');?></div>
            </p>
        </div>

        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.11.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.11.a');?></div>
            </p>
        </div>

        <!-- 12 - 13 -->
        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.12.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.12.a');?></div>
            </p>
        </div>

        <div class = "col-xl-6 col-xs-12">
            <p>
            <div class = "font-just-me-small faq-question"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.13.q');?></div>
            <div class = "fax-answer"><?php echo __('pages/ceremonies/your-first-ceremony.content.sections.faq.questions.13.a');?></div>
            </p>
        </div>

    </div>


    <div class = "container">


        <p>
            Kromě toho je hlavním požadavkem pro úspěšnou zkušenost s Ibogou ochota léčit se tím, že přijmete pravdu a
            necháte jít. Toto je hlavní ukazatel, kdy je někdo připraven; pokud ano, zažijí silné uzdravení.
        </p>

        <p>
            V tradici Bwiti je Iboga pro každého a používá se při „zasvěcení“ nebo obřadech dospívání, které spojují
            chlapce a dívky s tradicí a komunitou. Iniciace pomáhají zakořenit je v sobě a zajišťují zdravý dospělý život.
            Také budou mít znovu obřady, když lidé sešli ze zdravé cesty a potřebují svůj život napravit nebo se nějak uzdravit.
        </p>

        <p>
            Jak je věrné naší tradici, věříme, že z obřadu Iboga mohou mít prospěch všichni lidé. Obvykle pracujeme s lidmi,
            kteří se potřebují vyléčit z deprese, úzkosti, ptsd, traumatu, závislostí, sebenenávisti, hněvu, traumatických
            poranění mozku, Parkinsonovy choroby, autoimunitních onemocnění a dalších.</p>

    </div>

@stop
