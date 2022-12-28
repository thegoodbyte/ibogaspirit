a
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img
                srcset = "/images/home/slider/fire_circle-400w.jpg 400px,
                          /images/home/slider/fire_circle-600w.jpg 600px,
                          /images/home/slider/fire_circle-900w.jpg 900px"
                sizes = "(max-width: 400px) 400px, (min-width: 401px and max-width: 600px) 600px, (min-width: 601px and max-width: 900px) 900px, (min-width: 901px) 1200px,  "
                src="/images/home/slider/fire_circle-1200.jpg"
                alt="<?php echo __('seo/homepage.seo.content.slider.slide1.image'); ?>"
                class="d-block w-100"
            />

                <div class="carousel-caption text-start">
                    <h1>TRADIČNÍ  IBOGA  OBŘADY  V AFRICKÉ  TRADICI MISSOKO BWITI
                    </h1>
                    <p>Poskytuji tradiční <a href = "/iboga/bwiti-tradice">Bwiti</a> léčebné obřady Ibogy, jak mě učil v Gabonu <a href = "/onas/moughenda">šaman Moughenda 10. generace</a>.</p>

                </div>
        </div>


        <div class="carousel-item">
{{--            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>--}}
            <img
                srcset = "/images/home/slider/slide-pobyt-2-400w.jpeg 400px,
                        /images/home/slider/slide-pobyt-2-600w.jpeg 600px,
                        /images/home/slider/slide-pobyt-2-900w.jpeg 900px"
                sizes = "(max-width: 400px) 400px, (min-width: 401px and max-width: 600px) 600px, (min-width: 601px and max-width: 900px) 900px, (min-width: 901px) 1200px"
                src="/images/home/slider/slide-pobyt-2.jpeg"
                alt="<?php echo __('seo/homepage.seo.content.slider.slide2.image'); ?>"
                class="d-block w-100">


                <div class="carousel-caption">
                    <h1>EXKLUZIVNÍ &nbsp;8 DENNÍ POBYT PRO ZMĚNU ŽIVOTA</h1>
                    <p><a href = "/ceremonies/osmi-denni-iboga-wellness-pobyt">Týdenní pobyt</a> s dvěma psycho-spirituálními obřady Ibogy, duchovní sprchou, naukou Bwiti a mnohem vice...</p>
                </div>

        </div>


        <div class="carousel-item">
{{--            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>--}}
            <img
                srcset = "/images/home/slider/sebepoznani-400w.jpg 400px,
                /images/home/slider/sebepoznani-600w.jpg 600px,
                /images/home/slider/sebepoznani-900w.jpg 900px"
                sizes = "(max-width: 400px) 400px,
                (min-width: 401px and max-width: 600px) 600px,
                (min-width: 601px and max-width: 900px) 900px,
                (min-width: 901px) 1200px"
                src="/images/home/slider/sebepoznani.jpg"
                alt="<?php echo __('seo/homepage.seo.content.slider.slide3.image'); ?>"
                class="d-block w-100">


                <div class="carousel-caption text-end">
                    <h1>VYDEJTE  SE  NA CESTU SEBE POZNÁNÍ</h1>
                    <p>Vědět, kdo jste, je nejdůležitější součástí poznání. Umožňuje vám to dělat správná rozhodnutí, abyste žili šťastný život</p>
                </div>

        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
