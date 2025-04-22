<div class="title-list p-0 m-0 w-100{{#if theme_dark}} theme-dark{{/if}}{{#if theme_tint}} theme-tint{{/if}}">
{{#if margin}}
<div class="container py-5">
{{/if}}
    <div class="row gy-4 gx-5{{#if margin}} py-5{{/if}}">
        <div class="col-md-6">
        {{#if heading}}
            <h2 class="section-heading">{{heading}}</h2>
        {{/if}}

        {{#if sub_heading}}
            <h3 class="section-sub-heading">{{sub_heading}}</h3>
        {{/if}}

        {{#if image}}
            <div class="title-list-image" style="background-image: url('{{image}}')"></div>
        {{/if}}
        </div>
        <div class="col-md-6">
            <ul class="obj">
            {{#each items}}
                <li>
                {{#if point}}
                    <span class="point">{{point}}</span>
                {{/if}}
                {{#if desc}}
                    <p class="desc">{{desc}}</p>
                {{/if}} 
                </li>
            {{/each}}
            </ul>
        </div>
    </div>
{{#if margin}}
</div>
{{/if}}
</div>