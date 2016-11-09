---
title: About
author: Georgiana
layout: simple
menu_active: about
use:
  - geeks

---

# We love legacy code

We bring new life to old software, making sure all the existing functionality stays in place, easing the process of adding new functionality and elliminating bugs. After conducting an audit, we deliver you a detailed insight of your current situation, with clear recommendations on what can be improved, and recommendations of steps to be taken.

After having successfully delivered several large-scale products on tight timeframes, we can help you with targeted advice and hands-on help on product creation, development, and maintenance, without any compromise to the quality.

# Our Process

We embrace your project from the quality perspective. Not being biased by having written the code, we focus on making sure it's stable, highly performant, and really meeting your needs.

* First, we discover it by performing manual testing and documenting it thoroughly.
* Then we analyse the packaging and shipping part.
* Next step is to automate the testing process, so that you can ensure new functionality is not breaking existing one.
* After that, we simplify and automate delivery. Continuously knowing you're meeting your goals is our main concern.

<div class="big-call-to-action">
    <a class="btn btn-block btn-lg btn-danger" href="/contact" role="button">Talk to us</a>
</div>

{% for geek in data.geeks %}
<div class="media geeks">
  <div class="media-left media-middle">
    <img class="media-object img-rounded" src="{{ site.url }}/avatars/{{ geek.avatar }}" />
  </div>
  <div class="media-body">
    <h2 class="media-heading">{{ geek.name }} <small>{{ geek.position }}</small></h2>
    {% if geek.linkedin %}
    <a href="{{ geek.linkedin }}"><i class="geek-icon ion-social-linkedin-outline"></i></a>
    {% endif %}
    {% if geek.twitter %}
    <a href="{{ geek.twitter }}"><i class="geek-icon ion-social-twitter-outline"></i></a>
    {% endif %}
    {% if geek.facebook %}
    <a href="{{ geek.facebook }}"><i class="geek-icon ion-social-facebook-outline"></i></a>
    {% endif %}
    {% if geek.skype %}
    <a href="{{ geek.skype }}"><i class="geek-icon ion-social-skype-outline"></i></a>
    {% endif %}
    
    {% if geek.tags | length %}
    <p>
    {% for tag in geek.tags %}
    <div><i class="ion-ios-pricetags-outline"></i>{{ tag }}</div>
    {% endfor %}
    </p>
    {% endif %}
  </div>
</div>
{% endfor %}
