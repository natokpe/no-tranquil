<section class="content-banner content-banner-hero no-select">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        {{#each slides}}
            <div class="swiper-slide content-banner-hero-item">
                <div class="image"{{#if image}} style="background-image: url('{{image}}')"{{/if}}>
                    <div class="overlay">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                                    <div class="content">
                                    {{#if title}}
                                        <h1>{{title}}</h1>
                                    {{/if}}

                                    {{#if desc}}
                                        <p>{{desc}}</p>
                                    {{/if}}

                                    {{#if link_url}}
                                        <div class="actions">
                                            <a class="button" href="{{link_url}}">{{link_text}}{{#unless link_text}}Learn More{{/unless}}</a>
                                        </div>
                                    {{/if}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{/each}}
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>