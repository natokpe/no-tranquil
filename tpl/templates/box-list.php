{{#if margin}}
<div class="container py-5">
{{/if}}
    <div class="row gy-4 gx-4{{#if margin}} py-5{{/if}}">
    {{#if image_start}}
        <div class="col-md-6 col-lg-4">
            <div class="box-list-image" style="background-image: url('{{image_start}}')"></div>
        </div>
    {{/if}}

    {{#each items}}
        <div class="col-md-6 col-lg-4">
            <div class="box-list-item{{#if style_solid}} solid{{/if}}">
                {{#if icon}}
                <div class="pt-2"><i class="box-list-item-icon fa {{icon}}"></i></div>
                {{/if}}

                {{#if title}}
                <h2 class="section-heading">{{title}}</h2>
                {{/if}}

                {{#if text}}
                <p>{{text}}</p>
                {{/if}}
            </div>
        </div>
    {{/each}}

    {{#if image}}
        <div class="col-md-6 col-lg-4">
            <div class="box-list-image" style="background-image: url('{{image}}')"></div>
        </div>
    {{/if}}

    </div>
{{#if margin}}
</div>
{{/if}}