---
title: Services
author: Georgiana
layout: page
menu_active: services
---

{% for service in site.company.services %}
<div class="panel">

<div class="panel-title">
  <h3>{{ service.title }}</h3>
</div>
<div class="panel-body">
  {{ service.description }}
</div>

</div>
{% endfor %}
