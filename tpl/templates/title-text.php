<div class="title-text p-0 m-0 w-100{{#if theme_dark}} theme-dark{{/if}}{{#if theme_tint}} theme-tint{{/if}}">
{{#if margin}}
<div class="container py-5">
{{/if}}
    <div class="row justify-content-center gx-5 gy-4{{#if margin}} py-5{{/if}}">
    {{#if right}}
    {{#if image}}
        <div class="col-md-9 col-lg-6">
            <div class="title-text-image" style="background-image: url('{{image}}')"></div>
        </div>
    {{/if}}
    {{/if}}
        <div class="col-md-9 col-lg-6 align-content-center{{#if right}} text-right{{/if}}{{#if center}} text-center{{/if}}">
        {{#if heading}}
            <h2 class="section-heading">{{heading}}</h2>
        {{/if}}
        {{#if sub_heading}}
            <h3 class="section-sub-heading">{{sub_heading}}</h3>
        {{/if}}
        {{#if desc}}
            <p class="section-desc">{{desc}}</p>
        {{/if}}
        {{#if link_url}}
            <div>
                <a href="{{link_url}}">{{link_text}}</a>
            </div>
        {{/if}}
        </div>
    {{#if left}}
    {{#if image}}
        <div class="col-md-9 col-lg-6">
            <div class="title-text-image" style="background-image: url('{{image}}')"></div>
        </div>
    {{/if}}
    {{/if}}
    </div>
{{#if margin}}
</div>
{{/if}}
</div>