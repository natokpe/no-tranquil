{{#if link_url}}
<div class="cta-banner{{#if image_fixed}} image-fixed{{/if}}"{{#if image}} style="background-image: url('{{image}}');"{{/if}}>
    <div class="overlay">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-md-10 col-lg-9">
                {{#if title}}
                    <h2 class="title mb-3">{{title}}</h2>
                {{/if}}
                {{#if desc}}
                    <p class="desc">{{desc}}</p>
                {{/if}}
                    <a class="button" href="{{link_url}}">{{link_text}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{/if}}