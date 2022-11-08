@extends('layouts.default')

@section('content')


@include('pages.home.slider')

@include('pages.home.section-left-slide')

@include('pages.home.section-zijte-stastne')

@include('pages.home.section-parallax');
@include('pages.home.section-kdo-jsme');

{{--<div data-elementor-type="wp-page" data-elementor-id="1799" class="elementor elementor-1799">--}}
{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-12fa857 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="12fa857" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ef634d1" data-id="ef634d1" data-element_type="column">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}

{{--                    @include('pages.home.slider')--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-7507518 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7507518" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3ebbc8c elementor-invisible" data-id="3ebbc8c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-199481a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="199481a" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">--}}
{{--                        <div class="elementor-container elementor-column-gap-no">--}}
{{--                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bbf99a6" data-id="bbf99a6" data-element_type="column">--}}
{{--                                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                                    <div class="elementor-element elementor-element-becfa27 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading" data-id="becfa27" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <style>--}}
{{--                                                /*! elementor - v3.7.8 - 02-10-2022 */--}}
{{--                                                .elementor-heading-title {--}}
{{--                                                    padding: 0;--}}
{{--                                                    margin: 0;--}}
{{--                                                    line-height: 1--}}
{{--                                                }--}}

{{--                                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {--}}
{{--                                                    color: inherit;--}}
{{--                                                    font-size: inherit;--}}
{{--                                                    line-height: inherit--}}
{{--                                                }--}}

{{--                                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {--}}
{{--                                                    font-size: 15px--}}
{{--                                                }--}}

{{--                                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {--}}
{{--                                                    font-size: 19px--}}
{{--                                                }--}}

{{--                                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {--}}
{{--                                                    font-size: 29px--}}
{{--                                                }--}}

{{--                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {--}}
{{--                                                    font-size: 39px--}}
{{--                                                }--}}

{{--                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {--}}
{{--                                                    font-size: 59px--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                            <h1 class="elementor-heading-title elementor-size-default">POZNEJTE SVÉ PRAVÉ JÁ ... </h1>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="elementor-element elementor-element-7d2f13f elementor-widget__width-inherit elementor-widget-tablet__width-inherit elementor-widget elementor-widget-text-editor" data-id="7d2f13f" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <style>--}}
{{--                                                /*! elementor - v3.7.8 - 02-10-2022 */--}}
{{--                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {--}}
{{--                                                    background-color: #818a91;--}}
{{--                                                    color: #fff--}}
{{--                                                }--}}

{{--                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {--}}
{{--                                                    color: #818a91;--}}
{{--                                                    border: 3px solid;--}}
{{--                                                    background-color: transparent--}}
{{--                                                }--}}

{{--                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {--}}
{{--                                                    margin-top: 8px--}}
{{--                                                }--}}

{{--                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {--}}
{{--                                                    width: 1em;--}}
{{--                                                    height: 1em--}}
{{--                                                }--}}

{{--                                                .elementor-widget-text-editor .elementor-drop-cap {--}}
{{--                                                    float: left;--}}
{{--                                                    text-align: center;--}}
{{--                                                    line-height: 1;--}}
{{--                                                    font-size: 50px--}}
{{--                                                }--}}

{{--                                                .elementor-widget-text-editor .elementor-drop-cap-letter {--}}
{{--                                                    display: inline-block--}}
{{--                                                }--}}
{{--                                            </style>--}}
{{--                                            <div data-pm-slice="1 1 []" data-en-clipboard="true">Život je největší dar. <br /> Můžeme ho ctít tím, že budeme žít šťastně. Je to možné a naše vrozené právo. Medicína Iboga nás učí, jak si užívat života naplno. Dokáže vyléčit jakékoli psychické trauma tím, že nás přivede ke kořenům problému a ukáže nám, jak se s ním smířit. Je to opravdový zázrak – nové zrození </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="elementor-element elementor-element-9dbaa6c elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-text-editor" data-id="9dbaa6c" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div data-plaintext="true" data-pm-slice="1 1 [&quot;codeblock&quot;,{&quot;style&quot;:null,&quot;codeblock&quot;:true,&quot;textAlign&quot;:&quot;left&quot;}]" data-en-clipboard="true"> IBOGA <span style="letter-spacing: 0px;">--}}
{{--                                  <span style="letter-spacing: 0px;">MEDICÍNA A BWITI <span style="font-family: Consolas, Monaco, monospace;">UČENÍ</span>--}}
{{--                                    <br />--}}
{{--                                  </span>--}}
{{--                                </span>--}}
{{--                                                <span style="letter-spacing: 0px;">NÁS UČÍ, JAK SI UŽÍVAT ŽIVOTA NAPLNO. DOKÁŽE VYLÉČIT JAKÉKOLI PSYCHICKÉ TRAUMA TÍM, ŽE NÁS PŘIVEDE KE KOŘENŮM PROBLÉMU A UKÁŽE NÁM, JAK SE S NÍM SMÍŘIT. JE TO OPRAVDOVÝ ZÁZRAK – NOVÉ ZROZENÍ</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="elementor-element elementor-element-36f2e1e elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-jet-button" data-id="36f2e1e" data-element_type="widget" data-widget_type="jet-button.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-jet-button jet-elements">--}}
{{--                                                <div class="jet-button__container">--}}
{{--                                                    <a class="jet-button__instance jet-button__instance--icon- hover-effect-0" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/">--}}
{{--                                                        <div class="jet-button__plane jet-button__plane-normal"></div>--}}
{{--                                                        <div class="jet-button__plane jet-button__plane-hover"></div>--}}
{{--                                                        <div class="jet-button__state jet-button__state-normal">--}}
{{--                                                            <span class="jet-button__label">Read More</span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="jet-button__state jet-button__state-hover">--}}
{{--                                                            <span class="jet-button__label">Read More</span>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </section>--}}
{{--                    <div class="elementor-element elementor-element-f712b19 elementor-widget__width-initial elementor-absolute elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="f712b19" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <style>--}}
{{--                                /*! elementor - v3.7.8 - 02-10-2022 */--}}
{{--                                .elementor-widget-image {--}}
{{--                                    text-align: center--}}
{{--                                }--}}

{{--                                .elementor-widget-image a {--}}
{{--                                    display: inline-block--}}
{{--                                }--}}

{{--                                .elementor-widget-image a img[src$=".svg"] {--}}
{{--                                    width: 48px--}}
{{--                                }--}}

{{--                                .elementor-widget-image img {--}}
{{--                                    vertical-align: middle;--}}
{{--                                    display: inline-block--}}
{{--                                }--}}
{{--                            </style>--}}
{{--                            <img width="2560" height="2267" src="wp-content/uploads/2022/10/happy_XL-scaled.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="wp-content/uploads/2022/10/happy_XL-scaled.jpg 2560w, wp-content/uploads/2022/10/happy_XL-300x266.jpg 300w, wp-content/uploads/2022/10/happy_XL-1024x907.jpg 1024w, wp-content/uploads/2022/10/happy_XL-768x680.jpg 768w, wp-content/uploads/2022/10/happy_XL-1536x1360.jpg 1536w, wp-content/uploads/2022/10/happy_XL-2048x1813.jpg 2048w, wp-content/uploads/2022/10/happy_XL-600x531.jpg 600w, wp-content/uploads/2022/10/happy_XL-250x221.jpg 250w, wp-content/uploads/2022/10/happy_XL-550x487.jpg 550w, wp-content/uploads/2022/10/happy_XL-800x708.jpg 800w, wp-content/uploads/2022/10/happy_XL-203x180.jpg 203w, wp-content/uploads/2022/10/happy_XL-339x300.jpg 339w, wp-content/uploads/2022/10/happy_XL-565x500.jpg 565w" sizes="(max-width: 2560px) 100vw, 2560px" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-082c883 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="082c883" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;gradient&quot;}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5befcf3 elementor-invisible" data-id="5befcf3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-2824db8 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="2824db8" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-default">ŽIJTE ŠŤASTNĚ A NAPLNO <br>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-3d2756b elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="3d2756b" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <div data-codeblock="true" textalign="left" data-pm-slice="2 2 []" data-en-clipboard="true">--}}
{{--                                <div data-plaintext="true">ŽIVOT JE NEJVĚTŠÍ DAR.</div>--}}
{{--                                <div data-plaintext="true">MŮŽEME HO CTÍT TÍM, ŽE BUDEME ŽÍT ŠŤASTNĚ. <br />JE TO MOŽNÉ A NAŠE VROZENÉ PRÁVO </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-b6f866b elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="b6f866b" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> IBOGA <span style="letter-spacing: 0px;">MEDICÍNA A BWITI <span style="font-family: Consolas, Monaco, monospace;">UČENÍ</span>--}}
{{--                      </span>--}}
{{--                            <span style="letter-spacing: 0px;">NÁS UČÍ JAK SI UŽÍVAT ŽIVOTA NAPLNO. <br />DOKÁŽE VYLÉČIT JAKÉKOLI PSYCHICKÉ TRAUMA TÍM, ŽE NÁS PŘIVEDE KE KOŘENŮM PROBLÉMU A UKÁŽE NÁM, JAK SE S NÍM SMÍŘIT. <br />JE TO OPRAVDOVÝ ZÁZRAK – NOVÉ ZROZENÍ </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-669523a elementor-widget__width-initial elementor-widget elementor-widget-jet-button" data-id="669523a" data-element_type="widget" data-widget_type="jet-button.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <div class="elementor-jet-button jet-elements">--}}
{{--                                <div class="jet-button__container">--}}
{{--                                    <a class="jet-button__instance jet-button__instance--icon- hover-effect-0" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/services/">--}}
{{--                                        <div class="jet-button__plane jet-button__plane-normal"></div>--}}
{{--                                        <div class="jet-button__plane jet-button__plane-hover"></div>--}}
{{--                                        <div class="jet-button__state jet-button__state-normal">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="jet-button__state jet-button__state-hover">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a4c821e elementor-invisible" data-id="a4c821e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-de0466d elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="de0466d" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-large">IBOGA MEDICÍNA</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-77442ff elementor-widget elementor-widget-jet-custom-menu" data-id="77442ff" data-element_type="widget" data-widget_type="jet-custom-menu.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <div class="menu-iboga-container">--}}
{{--                                <div class="jet-custom-nav jet-custom-nav--dropdown-right-side jet-custom-nav--animation-none">--}}
{{--                                    <div class="menu-item menu-item-type-custom menu-item-object-custom jet-custom-nav__item jet-custom-nav__item-549">--}}
{{--                                        <a href="services/cargo/index.html" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Jak vám Iboga může pomoci</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item menu-item-type-custom menu-item-object-custom jet-custom-nav__item jet-custom-nav__item-550">--}}
{{--                                        <a href="services/worldwide-transport/index.html" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Vše o Obřadech</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item menu-item-type-custom menu-item-object-custom jet-custom-nav__item jet-custom-nav__item-551">--}}
{{--                                        <a href="http://www.ibogaspirit.cz/services/warehousing/" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Příprava a Průběžná péče</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item menu-item-type-custom menu-item-object-custom jet-custom-nav__item jet-custom-nav__item-552">--}}
{{--                                        <a href="services/ground-transport/index.html" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Bwiti Tradice</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item menu-item-type-custom menu-item-object-custom jet-custom-nav__item jet-custom-nav__item-553">--}}
{{--                                        <a href="services/door-to-door-delivery/index.html" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Termíny a Ceny</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item menu-item-type-custom menu-item-object-custom jet-custom-nav__item jet-custom-nav__item-554">--}}
{{--                                        <a href="services/packaging-storage/index.html" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Gabonské Pobyty a zasvěcení</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item menu-item-type-post_type menu-item-object-page jet-custom-nav__item jet-custom-nav__item-1970">--}}
{{--                                        <a href="historie-pouzivani/index.html" class="jet-custom-nav__item-link">--}}
{{--                              <span class="jet-menu-link-text">--}}
{{--                                <span class="jet-custom-item-label top-level-label">Historie používání</span>--}}
{{--                              </span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-60b33f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60b33f5" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-24525a7 elementor-hidden-tablet elementor-hidden-mobile" data-id="24525a7" data-element_type="column">--}}
{{--                <div class="elementor-widget-wrap"></div>--}}
{{--            </div>--}}
{{--            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3eeb7cf elementor-invisible" data-id="3eeb7cf" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-a7031f0 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="a7031f0" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-default">--}}
{{--                                <div data-pm-slice="1 1 []" data-en-clipboard="true">TRADIČNÍ BWITI LÉČENÍ A DUCHOVNÍ UČENÍ</div>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-69e8cef elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="69e8cef" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> Since the day 1 of our founding (which happened back in 1977), we’ve always had the same set of principles that we’ve cherished throughout all of our logistics &#038; transportation operations. That includes both our determination of being able to serve all clients across the globe, regardless of the location, just as well as our commitment to being able to offer all types of cargo shipment – from air &#038; railway all the way to trucking &#038; ocean freight. </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-898f81e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="898f81e" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-71d6d52 elementor-invisible" data-id="71d6d52" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-1e52df5 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="1e52df5" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-default">KDO JSME</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-ac5a4af elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="ac5a4af" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> WITH OUR TRUCKS RANGING FROM REGULAR HEAVY-DUTY ONES TO SPECIALIZED, WITH SPECIAL CONDITIONS FOR SPECIAL FREIGHT, WE CAN DELIVER IT ALL! </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-de9b744 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="de9b744" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> When we’re taking a new transportation order, we always make sure to provide both first-class servicing, clean equipment, professional lorry drivers and a professional back-office and sales personnel! </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-d06c4a3 elementor-widget__width-initial elementor-widget elementor-widget-jet-button" data-id="d06c4a3" data-element_type="widget" data-widget_type="jet-button.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <div class="elementor-jet-button jet-elements">--}}
{{--                                <div class="jet-button__container">--}}
{{--                                    <a class="jet-button__instance jet-button__instance--icon- hover-effect-0" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/">--}}
{{--                                        <div class="jet-button__plane jet-button__plane-normal"></div>--}}
{{--                                        <div class="jet-button__plane jet-button__plane-hover"></div>--}}
{{--                                        <div class="jet-button__state jet-button__state-normal">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="jet-button__state jet-button__state-hover">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-84b5b88 elementor-invisible" data-id="84b5b88" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-fc1ce12 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="fc1ce12" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-default">--}}
{{--                                <span style="text-align: inherit;">PROČ S NÁMI</span>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-101ab0d elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="101ab0d" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> EACH SINGLE MEMBER OF OUR TRUCKING COMPANY’S TEAM IS A SEASONED TRUCKIE, WITH TENS OF THOUSANDS OF MILES TRAVELED WHILE DELIVERING YOUR GOODS. </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-1e3abfe elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="1e3abfe" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <p>With our trucks fleet consisting of a few dozens of regular trucks, heavy duty trucks, controlled-temperature and refrigerator-</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-323d5a7 elementor-widget__width-initial elementor-widget elementor-widget-jet-button" data-id="323d5a7" data-element_type="widget" data-widget_type="jet-button.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <div class="elementor-jet-button jet-elements">--}}
{{--                                <div class="jet-button__container">--}}
{{--                                    <a class="jet-button__instance jet-button__instance--icon- hover-effect-0" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/contacts/">--}}
{{--                                        <div class="jet-button__plane jet-button__plane-normal"></div>--}}
{{--                                        <div class="jet-button__plane jet-button__plane-hover"></div>--}}
{{--                                        <div class="jet-button__state jet-button__state-normal">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="jet-button__state jet-button__state-hover">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5f14d92 elementor-invisible" data-id="5f14d92" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-5c461c3 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="5c461c3" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-default">--}}
{{--                                <span style="text-align: inherit;">JAK MŮŽEME POMOCI</span>--}}
{{--                            </h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-33ddd86 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="33ddd86" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> WE DO RECOGNIZE HOW IMPORTANT THE DELIVERY SCHEDULE IS, SO WE NEVER LOSE TIME IDLY AND 99% OF THE TIME WE ARRIVE AHEAD OF THE SCHEDULE. </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-46f3725 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="46f3725" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> With all of trucks enhanced by a state-of-the-art equipment and industry-leading technology from OrbComm©, we are able to track, monitor and control all electronic components of a refrigerated trailer in real-time. </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-2ed10eb elementor-widget__width-initial elementor-widget elementor-widget-jet-button" data-id="2ed10eb" data-element_type="widget" data-widget_type="jet-button.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <div class="elementor-jet-button jet-elements">--}}
{{--                                <div class="jet-button__container">--}}
{{--                                    <a class="jet-button__instance jet-button__instance--icon- hover-effect-0" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/services/">--}}
{{--                                        <div class="jet-button__plane jet-button__plane-normal"></div>--}}
{{--                                        <div class="jet-button__plane jet-button__plane-hover"></div>--}}
{{--                                        <div class="jet-button__state jet-button__state-normal">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="jet-button__state jet-button__state-hover">--}}
{{--                                            <span class="jet-button__label">Read More</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-5418dbf elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5418dbf" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1fab9de elementor-invisible" data-id="1fab9de" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-b5a59fd elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="b5a59fd" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">--}}
{{--                        <div class="elementor-container elementor-column-gap-no">--}}
{{--                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d8a5ea7 elementor-hidden-tablet elementor-hidden-mobile" data-id="d8a5ea7" data-element_type="column">--}}
{{--                                <div class="elementor-widget-wrap"></div>--}}
{{--                            </div>--}}
{{--                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ff26772" data-id="ff26772" data-element_type="column">--}}
{{--                                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                                    <div class="elementor-element elementor-element-cb33e4c elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="cb33e4c" data-element_type="widget" data-widget_type="icon-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">--}}
{{--                                            <div class="elementor-icon-box-wrapper">--}}
{{--                                                <div class="elementor-icon-box-icon">--}}
{{--                                                    <a class="elementor-icon elementor-animation-" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 40 32">--}}
{{--                                                            <title>comments</title>--}}
{{--                                                            <path d="M26 11c0-6.075-5.819-11-13-11s-13 4.925-13 11c0 2.473 0.976 4.747 2.604 6.587-1.024 2.047-2.452 3.582-2.474 3.605-0.131 0.138-0.167 0.342-0.090 0.522 0.079 0.179 0.248 0.285 0.439 0.285 2.397 0 4.423-0.695 5.984-1.503 1.925 0.946 4.15 1.503 6.538 1.503 7.181 0 13-4.925 13-11zM37.475 27.731c1.575-1.863 2.525-4.194 2.525-6.731 0-6.075-5.375-11-12-11-0.020 0-0.039 0.003-0.058 0.003 0.027 0.329 0.058 0.66 0.058 0.997 0 6.164-4.98 11.325-11.631 12.656 1.3 4.788 5.95 8.344 11.631 8.344 2.106 0 4.082-0.5 5.803-1.374 1.522 0.749 3.453 1.374 5.716 1.374 0.191 0 0.36-0.108 0.439-0.288 0.077-0.18 0.041-0.384-0.090-0.522-0.017-0.021-1.374-1.484-2.392-3.459z"></path>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="elementor-icon-box-content">--}}
{{--                                                    <h2 class="elementor-icon-box-title">--}}
{{--                                                        <a href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/"> POZNEJTE SVÉ PRAVÉ JÁ </a>--}}
{{--                                                    </h2>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="elementor-element elementor-element-24e48ff elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="24e48ff" data-element_type="widget" data-widget_type="icon-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-icon-box-wrapper">--}}
{{--                                                <div class="elementor-icon-box-icon">--}}
{{--                                                    <a class="elementor-icon elementor-animation-" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/services/">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 40 32">--}}
{{--                                                            <title>box-open</title>--}}
{{--                                                            <path d="M4.702 2.087l15.298 1.856 15.3-1.856c0.419-0.053 0.825 0.166 1.019 0.545l2.606 5.211c0.556 1.119-0.038 2.475-1.244 2.819l-10.206 2.919c-0.869 0.244-1.8-0.119-2.262-0.95l-5.212-8.688-5.213 8.688c-0.463 0.831-1.394 1.194-2.263 0.95l-10.208-2.919c-1.204-0.344-1.799-1.7-1.239-2.819l2.606-5.211c0.189-0.379 0.598-0.598 1.018-0.545v0zM20.069 8l3.425 5.713c0.931 1.55 2.788 2.231 4.531 1.787l7.975-2.275v10.431c0 1.375-0.938 2.575-2.275 2.913l-12.756 3.188c-0.637 0.163-1.3 0.163-1.938 0l-12.756-3.188c-1.338-0.337-2.275-1.538-2.275-2.913v-10.431l7.975 2.275c1.744 0.444 3.6-0.238 4.531-1.787l3.425-5.713h0.137z"></path>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="elementor-icon-box-content">--}}
{{--                                                    <h2 class="elementor-icon-box-title">--}}
{{--                                                        <a href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/services/"> VYLEČTE SE Z MINULÉHO TRAUMA </a>--}}
{{--                                                    </h2>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="elementor-element elementor-element-df615e0 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="df615e0" data-element_type="widget" data-widget_type="icon-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-icon-box-wrapper">--}}
{{--                                                <div class="elementor-icon-box-icon">--}}
{{--                                                    <a class="elementor-icon elementor-animation-" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 40 32">--}}
{{--                                                            <title>comments</title>--}}
{{--                                                            <path d="M26 11c0-6.075-5.819-11-13-11s-13 4.925-13 11c0 2.473 0.976 4.747 2.604 6.587-1.024 2.047-2.452 3.582-2.474 3.605-0.131 0.138-0.167 0.342-0.090 0.522 0.079 0.179 0.248 0.285 0.439 0.285 2.397 0 4.423-0.695 5.984-1.503 1.925 0.946 4.15 1.503 6.538 1.503 7.181 0 13-4.925 13-11zM37.475 27.731c1.575-1.863 2.525-4.194 2.525-6.731 0-6.075-5.375-11-12-11-0.020 0-0.039 0.003-0.058 0.003 0.027 0.329 0.058 0.66 0.058 0.997 0 6.164-4.98 11.325-11.631 12.656 1.3 4.788 5.95 8.344 11.631 8.344 2.106 0 4.082-0.5 5.803-1.374 1.522 0.749 3.453 1.374 5.716 1.374 0.191 0 0.36-0.108 0.439-0.288 0.077-0.18 0.041-0.384-0.090-0.522-0.017-0.021-1.374-1.484-2.392-3.459z"></path>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="elementor-icon-box-content">--}}
{{--                                                    <h2 class="elementor-icon-box-title">--}}
{{--                                                        <a href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/"> ZÍSKEJTE ODPOVĚDI NA VŠECHNY SVÉ OTÁZKY </a>--}}
{{--                                                    </h2>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="elementor-element elementor-element-c54c1f3 elementor-view-stacked elementor-shape-square elementor-position-left elementor-vertical-align-middle elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-mobile-position-top elementor-widget elementor-widget-icon-box" data-id="c54c1f3" data-element_type="widget" data-widget_type="icon-box.default">--}}
{{--                                        <div class="elementor-widget-container">--}}
{{--                                            <div class="elementor-icon-box-wrapper">--}}
{{--                                                <div class="elementor-icon-box-icon">--}}
{{--                                                    <a class="elementor-icon elementor-animation-" href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 40 32">--}}
{{--                                                            <title>comments</title>--}}
{{--                                                            <path d="M26 11c0-6.075-5.819-11-13-11s-13 4.925-13 11c0 2.473 0.976 4.747 2.604 6.587-1.024 2.047-2.452 3.582-2.474 3.605-0.131 0.138-0.167 0.342-0.090 0.522 0.079 0.179 0.248 0.285 0.439 0.285 2.397 0 4.423-0.695 5.984-1.503 1.925 0.946 4.15 1.503 6.538 1.503 7.181 0 13-4.925 13-11zM37.475 27.731c1.575-1.863 2.525-4.194 2.525-6.731 0-6.075-5.375-11-12-11-0.020 0-0.039 0.003-0.058 0.003 0.027 0.329 0.058 0.66 0.058 0.997 0 6.164-4.98 11.325-11.631 12.656 1.3 4.788 5.95 8.344 11.631 8.344 2.106 0 4.082-0.5 5.803-1.374 1.522 0.749 3.453 1.374 5.716 1.374 0.191 0 0.36-0.108 0.439-0.288 0.077-0.18 0.041-0.384-0.090-0.522-0.017-0.021-1.374-1.484-2.392-3.459z"></path>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="elementor-icon-box-content">--}}
{{--                                                    <h2 class="elementor-icon-box-title">--}}
{{--                                                        <a href="https://ld-wp73.template-help.com/wordpress/prod_3709/v1/about/"> SPOJTE SE SE SVOU DUŠÍ </a>--}}
{{--                                                    </h2>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-35fd16f elementor-hidden-tablet elementor-hidden-mobile elementor-invisible" data-id="35fd16f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">--}}
{{--                <div class="elementor-widget-wrap"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="elementor-section elementor-top-section elementor-element elementor-element-120945b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="120945b" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[],&quot;background_background&quot;:&quot;classic&quot;}">--}}
{{--        <div class="elementor-container elementor-column-gap-no">--}}
{{--            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-5bbc3dd elementor-invisible" data-id="5bbc3dd" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-9a16f3e elementor-widget elementor-widget-google_maps" data-id="9a16f3e" data-element_type="widget" data-widget_type="google_maps.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <style>--}}
{{--                                /*! elementor - v3.7.8 - 02-10-2022 */--}}
{{--                                .elementor-widget-google_maps .elementor-widget-container {--}}
{{--                                    overflow: hidden--}}
{{--                                }--}}

{{--                                .elementor-widget-google_maps iframe {--}}
{{--                                    height: 300px--}}
{{--                                }--}}
{{--                            </style>--}}
{{--                            <div class="elementor-custom-embed">--}}
{{--                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e6a45f5 elementor-invisible" data-id="e6a45f5" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">--}}
{{--                <div class="elementor-widget-wrap elementor-element-populated">--}}
{{--                    <div class="elementor-element elementor-element-f108bc1 elementor-widget elementor-widget-heading" data-id="f108bc1" data-element_type="widget" data-widget_type="heading.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <h2 class="elementor-heading-title elementor-size-default">CONTACTS</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-9845223 elementor-widget__width-inherit elementor-widget elementor-widget-text-editor" data-id="9845223" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> 4578 MARMORA ROAD, <br> GLASGOW D04 89GR </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-c6cfb33 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="c6cfb33" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                        <div class="elementor-widget-container"> We aim to make our service as reasonably priced, as possible, allowing multiple SMBs to use our trucking for good! </div>--}}
{{--                    </div>--}}
{{--                    <div class="elementor-element elementor-element-ca82f90 elementor-shape-square elementor-grid-3 e-grid-align-left e-grid-align-mobile-left elementor-widget elementor-widget-social-icons" data-id="ca82f90" data-element_type="widget" data-widget_type="social-icons.default">--}}
{{--                        <div class="elementor-widget-container">--}}
{{--                            <style>--}}
{{--                                /*! elementor - v3.7.8 - 02-10-2022 */--}}
{{--                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,--}}
{{--                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,--}}
{{--                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {--}}
{{--                                    line-height: 1;--}}
{{--                                    font-size: 0--}}
{{--                                }--}}

{{--                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {--}}
{{--                                    display: inline-grid--}}
{{--                                }--}}

{{--                                .elementor-widget-social-icons .elementor-grid {--}}
{{--                                    grid-column-gap: var(--grid-column-gap, 5px);--}}
{{--                                    grid-row-gap: var(--grid-row-gap, 5px);--}}
{{--                                    grid-template-columns: var(--grid-template-columns);--}}
{{--                                    -webkit-box-pack: var(--justify-content, center);--}}
{{--                                    -ms-flex-pack: var(--justify-content, center);--}}
{{--                                    justify-content: var(--justify-content, center);--}}
{{--                                    justify-items: var(--justify-content, center)--}}
{{--                                }--}}

{{--                                .elementor-icon.elementor-social-icon {--}}
{{--                                    font-size: var(--icon-size, 25px);--}}
{{--                                    line-height: var(--icon-size, 25px);--}}
{{--                                    width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));--}}
{{--                                    height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))--}}
{{--                                }--}}

{{--                                .elementor-social-icon {--}}
{{--                                    --e-social-icon-icon-color: #fff;--}}
{{--                                    display: -webkit-inline-box;--}}
{{--                                    display: -ms-inline-flexbox;--}}
{{--                                    display: inline-flex;--}}
{{--                                    background-color: #818a91;--}}
{{--                                    -webkit-box-align: center;--}}
{{--                                    -ms-flex-align: center;--}}
{{--                                    align-items: center;--}}
{{--                                    -webkit-box-pack: center;--}}
{{--                                    -ms-flex-pack: center;--}}
{{--                                    justify-content: center;--}}
{{--                                    text-align: center;--}}
{{--                                    cursor: pointer--}}
{{--                                }--}}

{{--                                .elementor-social-icon i {--}}
{{--                                    color: var(--e-social-icon-icon-color)--}}
{{--                                }--}}

{{--                                .elementor-social-icon svg {--}}
{{--                                    fill: var(--e-social-icon-icon-color)--}}
{{--                                }--}}

{{--                                .elementor-social-icon:last-child {--}}
{{--                                    margin: 0--}}
{{--                                }--}}

{{--                                .elementor-social-icon:hover {--}}
{{--                                    opacity: .9;--}}
{{--                                    color: #fff--}}
{{--                                }--}}

{{--                                .elementor-social-icon-android {--}}
{{--                                    background-color: #a4c639--}}
{{--                                }--}}

{{--                                .elementor-social-icon-apple {--}}
{{--                                    background-color: #999--}}
{{--                                }--}}

{{--                                .elementor-social-icon-behance {--}}
{{--                                    background-color: #1769ff--}}
{{--                                }--}}

{{--                                .elementor-social-icon-bitbucket {--}}
{{--                                    background-color: #205081--}}
{{--                                }--}}

{{--                                .elementor-social-icon-codepen {--}}
{{--                                    background-color: #000--}}
{{--                                }--}}

{{--                                .elementor-social-icon-delicious {--}}
{{--                                    background-color: #39f--}}
{{--                                }--}}

{{--                                .elementor-social-icon-deviantart {--}}
{{--                                    background-color: #05cc47--}}
{{--                                }--}}

{{--                                .elementor-social-icon-digg {--}}
{{--                                    background-color: #005be2--}}
{{--                                }--}}

{{--                                .elementor-social-icon-dribbble {--}}
{{--                                    background-color: #ea4c89--}}
{{--                                }--}}

{{--                                .elementor-social-icon-elementor {--}}
{{--                                    background-color: #d30c5c--}}
{{--                                }--}}

{{--                                .elementor-social-icon-envelope {--}}
{{--                                    background-color: #ea4335--}}
{{--                                }--}}

{{--                                .elementor-social-icon-facebook,--}}
{{--                                .elementor-social-icon-facebook-f {--}}
{{--                                    background-color: #3b5998--}}
{{--                                }--}}

{{--                                .elementor-social-icon-flickr {--}}
{{--                                    background-color: #0063dc--}}
{{--                                }--}}

{{--                                .elementor-social-icon-foursquare {--}}
{{--                                    background-color: #2d5be3--}}
{{--                                }--}}

{{--                                .elementor-social-icon-free-code-camp,--}}
{{--                                .elementor-social-icon-freecodecamp {--}}
{{--                                    background-color: #006400--}}
{{--                                }--}}

{{--                                .elementor-social-icon-github {--}}
{{--                                    background-color: #333--}}
{{--                                }--}}

{{--                                .elementor-social-icon-gitlab {--}}
{{--                                    background-color: #e24329--}}
{{--                                }--}}

{{--                                .elementor-social-icon-globe {--}}
{{--                                    background-color: #818a91--}}
{{--                                }--}}

{{--                                .elementor-social-icon-google-plus,--}}
{{--                                .elementor-social-icon-google-plus-g {--}}
{{--                                    background-color: #dd4b39--}}
{{--                                }--}}

{{--                                .elementor-social-icon-houzz {--}}
{{--                                    background-color: #7ac142--}}
{{--                                }--}}

{{--                                .elementor-social-icon-instagram {--}}
{{--                                    background-color: #262626--}}
{{--                                }--}}

{{--                                .elementor-social-icon-jsfiddle {--}}
{{--                                    background-color: #487aa2--}}
{{--                                }--}}

{{--                                .elementor-social-icon-link {--}}
{{--                                    background-color: #818a91--}}
{{--                                }--}}

{{--                                .elementor-social-icon-linkedin,--}}
{{--                                .elementor-social-icon-linkedin-in {--}}
{{--                                    background-color: #0077b5--}}
{{--                                }--}}

{{--                                .elementor-social-icon-medium {--}}
{{--                                    background-color: #00ab6b--}}
{{--                                }--}}

{{--                                .elementor-social-icon-meetup {--}}
{{--                                    background-color: #ec1c40--}}
{{--                                }--}}

{{--                                .elementor-social-icon-mixcloud {--}}
{{--                                    background-color: #273a4b--}}
{{--                                }--}}

{{--                                .elementor-social-icon-odnoklassniki {--}}
{{--                                    background-color: #f4731c--}}
{{--                                }--}}

{{--                                .elementor-social-icon-pinterest {--}}
{{--                                    background-color: #bd081c--}}
{{--                                }--}}

{{--                                .elementor-social-icon-product-hunt {--}}
{{--                                    background-color: #da552f--}}
{{--                                }--}}

{{--                                .elementor-social-icon-reddit {--}}
{{--                                    background-color: #ff4500--}}
{{--                                }--}}

{{--                                .elementor-social-icon-rss {--}}
{{--                                    background-color: #f26522--}}
{{--                                }--}}

{{--                                .elementor-social-icon-shopping-cart {--}}
{{--                                    background-color: #4caf50--}}
{{--                                }--}}

{{--                                .elementor-social-icon-skype {--}}
{{--                                    background-color: #00aff0--}}
{{--                                }--}}

{{--                                .elementor-social-icon-slideshare {--}}
{{--                                    background-color: #0077b5--}}
{{--                                }--}}

{{--                                .elementor-social-icon-snapchat {--}}
{{--                                    background-color: #fffc00--}}
{{--                                }--}}

{{--                                .elementor-social-icon-soundcloud {--}}
{{--                                    background-color: #f80--}}
{{--                                }--}}

{{--                                .elementor-social-icon-spotify {--}}
{{--                                    background-color: #2ebd59--}}
{{--                                }--}}

{{--                                .elementor-social-icon-stack-overflow {--}}
{{--                                    background-color: #fe7a15--}}
{{--                                }--}}

{{--                                .elementor-social-icon-steam {--}}
{{--                                    background-color: #00adee--}}
{{--                                }--}}

{{--                                .elementor-social-icon-stumbleupon {--}}
{{--                                    background-color: #eb4924--}}
{{--                                }--}}

{{--                                .elementor-social-icon-telegram {--}}
{{--                                    background-color: #2ca5e0--}}
{{--                                }--}}

{{--                                .elementor-social-icon-thumb-tack {--}}
{{--                                    background-color: #1aa1d8--}}
{{--                                }--}}

{{--                                .elementor-social-icon-tripadvisor {--}}
{{--                                    background-color: #589442--}}
{{--                                }--}}

{{--                                .elementor-social-icon-tumblr {--}}
{{--                                    background-color: #35465c--}}
{{--                                }--}}

{{--                                .elementor-social-icon-twitch {--}}
{{--                                    background-color: #6441a5--}}
{{--                                }--}}

{{--                                .elementor-social-icon-twitter {--}}
{{--                                    background-color: #1da1f2--}}
{{--                                }--}}

{{--                                .elementor-social-icon-viber {--}}
{{--                                    background-color: #665cac--}}
{{--                                }--}}

{{--                                .elementor-social-icon-vimeo {--}}
{{--                                    background-color: #1ab7ea--}}
{{--                                }--}}

{{--                                .elementor-social-icon-vk {--}}
{{--                                    background-color: #45668e--}}
{{--                                }--}}

{{--                                .elementor-social-icon-weibo {--}}
{{--                                    background-color: #dd2430--}}
{{--                                }--}}

{{--                                .elementor-social-icon-weixin {--}}
{{--                                    background-color: #31a918--}}
{{--                                }--}}

{{--                                .elementor-social-icon-whatsapp {--}}
{{--                                    background-color: #25d366--}}
{{--                                }--}}

{{--                                .elementor-social-icon-wordpress {--}}
{{--                                    background-color: #21759b--}}
{{--                                }--}}

{{--                                .elementor-social-icon-xing {--}}
{{--                                    background-color: #026466--}}
{{--                                }--}}

{{--                                .elementor-social-icon-yelp {--}}
{{--                                    background-color: #af0606--}}
{{--                                }--}}

{{--                                .elementor-social-icon-youtube {--}}
{{--                                    background-color: #cd201f--}}
{{--                                }--}}

{{--                                .elementor-social-icon-500px {--}}
{{--                                    background-color: #0099e5--}}
{{--                                }--}}

{{--                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {--}}
{{--                                    border-radius: 10%--}}
{{--                                }--}}

{{--                                .elementor-shape-circle .elementor-icon.elementor-social-icon {--}}
{{--                                    border-radius: 50%--}}
{{--                                }--}}
{{--                            </style>--}}
{{--                            <div class="elementor-social-icons-wrapper elementor-grid">--}}
{{--                        <span class="elementor-grid-item">--}}
{{--                          <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-4bc0e6f" href="#" target="_blank">--}}
{{--                            <span class="elementor-screen-only">Facebook-f</span>--}}
{{--                            <i class="fab fa-facebook-f"></i>--}}
{{--                          </a>--}}
{{--                        </span>--}}
{{--                                <span class="elementor-grid-item">--}}
{{--                          <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-fdcd10f" href="#" target="_blank">--}}
{{--                            <span class="elementor-screen-only">Twitter</span>--}}
{{--                            <i class="fab fa-twitter"></i>--}}
{{--                          </a>--}}
{{--                        </span>--}}
{{--                                <span class="elementor-grid-item">--}}
{{--                          <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-a49c682" href="#" target="_blank">--}}
{{--                            <span class="elementor-screen-only">Instagram</span>--}}
{{--                            <i class="fab fa-instagram"></i>--}}
{{--                          </a>--}}
{{--                        </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</div>--}}
@stop
