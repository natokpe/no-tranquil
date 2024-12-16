<!-- <div class="container"> -->
    <div class="row gy-4 gx-5">
        {{#each this}}
        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <div class="person">
                <div class="person-photo">
                    <div class="person-photo-image">
                        <img src="{{photo}}" alt="" title="{{#if name_prefix}}{{name_prefix}} {{/if}}{{name}}{{#if name_suffix}} {{name_suffix}}{{/if}}" />
                    </div>
                </div>

                {{#if name}}
                <div class="person-name">{{#if name_prefix}}<span class="person-name-prefix">{{name_prefix}}</span> {{/if}}{{name}}{{#if name_suffix}} <span class="person-name-suffix">{{name_suffix}}</span> {{/if}}</div>
                {{/if}}

                {{#each roles}}
                <div class="person-role">{{this}}</div>
                {{/each}}

                {{#if links}}
                <ul class="person-links">
                    {{#each links}}
                    <li class="person-links-item">
                        <a href="{{this}}" target="_blank" rel="noopener noreferrer"><i class="{{@key}}"></i></a>
                    </li>
                    {{/each}}
                </ul>
                {{/if}}
            </div>
        </div>
        {{/each}}
    </div>
<!-- </div> -->