---
title: Services
subtitle: Our expertise put to practice.
author: Georgiana
layout: onecolumn
menu_active: services
---
<section class="page-services-section">
<div class="section-intro">
  <h2 class="section-intro-title">{{ page.title }}</h2>
  <div class="section-summary"><p>{{ page.subtitle }}</p></div>
</div>



<div class="card-deck">
{% for service in site.company.services %}
  <div class="card">
  <!-- <div class="card oneservice text-center w-50"> -->
    <div class="card-block">
      <h4 class="text-center service-text {{service.title}}">{{ service.title }}</h4>
    </div>
    <div class="card-block">
      <p class="service-description">{{ service.description }}</p>
    </div>
  </div>
{% endfor %}

</div>

</section>
