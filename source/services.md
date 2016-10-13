---
title: Services
author: Georgiana
layout: _services
menu_active: services
---
<section class="page-services-section">
<div class="section-intro">
  <h2 class="section-intro-title">{{page.title}}</h2>
  <div class="section-summary"><p>Our expertise put to practice.</p></div>
</div>
{% for service in site.company.services %}
    <div class="col-md-6 col-sm-6 col-xs-6 clear-2 margin-bottom text=center">
      <h4 class="text-center service-text {{service.title}}">{{ service.title }}</h4>
      <p class="service-description">{{service.description}}</p>
    </div>
{% endfor %}
</section>
