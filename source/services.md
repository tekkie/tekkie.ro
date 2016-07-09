---
title: Services
author: Georgiana
layout: services
menu_active: services
---
<div class="wrapper style3">
    <article id="portfolio">
        <header>
            <h2>Here’s some stuff I made recently.</h2>
            <p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat lorem ipsum dolore.</p>
        </header>
        <div class="container">
{% for skey,service in site.company.services %}
    {% set newRowStart, newRowEnd = false, false %}
    {% if skey % 3 == 0 %}{% set newRowStart = true %}{% endif %}
    {% if skey % 3 == 2 %}{% set newRowEnd = true %}{% endif %}

    {% if newRowStart %}
            <div class="row">
    {% endif %}

                <div class="4u 12u(mobile)">
                    <article class="box style2">
                        <div class="image featured"><img src="{{ theme_path('images/pic01.jpg') }}" alt="" /></div>
                        <h3>{{ service.title }}</h3>
                        <p>{{ service.description }}</p>
                    </article>
                </div>

    {% if newRowEnd %}
            </div>
    {% endif %}

{% endfor %}

        <footer>
            <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
            <a href="#contact" class="button big scrolly">Get in touch with me</a>
        </footer>
    </article>
</div>
