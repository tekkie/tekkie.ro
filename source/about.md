---
title: About
author: Georgiana
layout: basic
html_id: page-about
menu_active: about
use:
  - geeks

---

<div class="ui vertical stripe text segment">
    <h1>Helping companies since 2011</h1>
    <p>
    During summer 2011 our founder, Georgiana Gligor, decided to return from rainy Amsterdam to sunny Alba Iulia.
    </p>
    <p>
    We love open-source, so the products we create are always stable, high-performing, and with a short time-to-market.
    </p>
    <p>
    Our small, well-glued, agile team, is always eager to discover the next challenge.
    </p>
    <h2>Organisers of the first Romanian conference dedicated to PHP</h2>
    <p>
    It's very important to us to give back to the community, so we bring the best European speakers in Cluj-Napoca 
    <a href="https://romaniaphp.ro/">early October 2017 for a PHP geek fest</a>.
    </p>
    <div class="ui center aligned vertical stripe segment">
        <a class="ui red huge button" href="/contact" role="button">
            <i class="ui talk outline icon"></i>
            Get in touch
        </a>
    </div>
</div><!-- .segment -->

<div class="ui centered vertical stripe segment">
    <h2>Meet the tekkies</h2>
    <div class="ui centered cards">
    {% for geek in data.geeks %}
      <div class="card">
        <div class="content">
            <a href="{{ geek.url }}">
                <div class="right floated meta">{{ geek.position }}</div>
                {{ geek.name }}
            </a>
        </div>
        <div class="image">
          <img class="media-object img-rounded" src="{{ site.url }}/avatars/{{ geek.avatar }}" />
        </div>
        <div class="extra centered content">
          {% if geek.linkedin %}
          <a href="{{ geek.linkedin }}"><i class="linkedin icon"></i></a>
          {% endif %}
          {% if geek.twitter %}
          <a href="{{ geek.twitter }}"><i class="twitter icon"></i></a>
          {% endif %}
          {% if geek.facebook %}
          <a href="{{ geek.facebook }}"><i class="facebook icon"></i></a>
          {% endif %}
          {% if geek.skype %}
          <a href="{{ geek.skype }}"><i class="skype icon"></i></a>
          {% endif %}
        </div>
      </div>
    {% endfor %}
    </div><!-- .cards -->
</div>
