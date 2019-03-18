<?php

/* home.html.twig */
class __TwigTemplate_ccfb4905ca8347344e0079b548519f414157888b463f5528a87a067e3662d932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
  ";
        // line 6
        echo "  ";
        $this->loadTemplate("partials/hero.html.twig", "home.html.twig", 6)->display(array_merge($context, ["title" => $this->getAttribute($this->getAttribute(        // line 7
($context["page"] ?? null), "header", []), "hero_title", []), "subtitle" => $this->getAttribute($this->getAttribute(        // line 8
($context["page"] ?? null), "header", []), "hero_subtitle", []), "image" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array"), "url", [])]));
        // line 11
        echo "
  ";
        // line 13
        echo "  ";
        $this->loadTemplate("partials/about.html.twig", "home.html.twig", 13)->display(array_merge($context, ["about_title" => $this->getAttribute($this->getAttribute(        // line 14
($context["page"] ?? null), "header", []), "how_title", []), "about_image_holly" => $this->getAttribute($this->getAttribute(        // line 15
($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "how_image_holly", []), [], "array"), "about_image_chris" => $this->getAttribute($this->getAttribute(        // line 16
($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "how_image_chris", []), [], "array"), "about_image_group" => $this->getAttribute($this->getAttribute(        // line 17
($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "how_image_group", []), [], "array")]));
        // line 19
        echo "
  ";
        // line 21
        echo "  ";
        $this->loadTemplate("partials/details.html.twig", "home.html.twig", 21)->display(array_merge($context, ["details_title" => $this->getAttribute($this->getAttribute(        // line 22
($context["page"] ?? null), "header", []), "details_title", []), "details_content" => $this->getAttribute($this->getAttribute(        // line 23
($context["page"] ?? null), "header", []), "details_editor", [])]));
        // line 25
        echo "
  ";
        // line 27
        echo "  ";
        $this->loadTemplate("partials/travel.html.twig", "home.html.twig", 27)->display(array_merge($context, ["travel_title" => $this->getAttribute($this->getAttribute(        // line 28
($context["page"] ?? null), "header", []), "travel_title", []), "travel_cards" => $this->getAttribute($this->getAttribute(        // line 29
($context["page"] ?? null), "header", []), "airports", [])]));
        // line 31
        echo "
  ";
        // line 33
        echo "  ";
        $this->loadTemplate("partials/accomodations.html.twig", "home.html.twig", 33)->display(array_merge($context, ["accomodations_title" => $this->getAttribute($this->getAttribute(        // line 34
($context["page"] ?? null), "header", []), "accomodations_title", []), "accomodations_cards" => $this->getAttribute($this->getAttribute(        // line 35
($context["page"] ?? null), "header", []), "hotel_list", [])]));
        // line 37
        echo "
  ";
        // line 39
        echo "  ";
        $this->loadTemplate("partials/activities.html.twig", "home.html.twig", 39)->display(array_merge($context, ["activities_title" => $this->getAttribute($this->getAttribute(        // line 40
($context["page"] ?? null), "header", []), "activities_title", []), "activities_cards" => $this->getAttribute($this->getAttribute(        // line 41
($context["page"] ?? null), "header", []), "activities_list", [])]));
        // line 43
        echo "
  ";
        // line 45
        echo "  ";
        $this->loadTemplate("partials/registry.html.twig", "home.html.twig", 45)->display(array_merge($context, ["registry_title" => $this->getAttribute($this->getAttribute(        // line 46
($context["page"] ?? null), "header", []), "registry_title", []), "zola_url" => $this->getAttribute($this->getAttribute(        // line 47
($context["page"] ?? null), "header", []), "registry_zola_url", []), "cb_url" => $this->getAttribute($this->getAttribute(        // line 48
($context["page"] ?? null), "header", []), "registry_cb_url", []), "ws_url" => $this->getAttribute($this->getAttribute(        // line 49
($context["page"] ?? null), "header", []), "registry_ws_url", []), "wayfair_url" => $this->getAttribute($this->getAttribute(        // line 50
($context["page"] ?? null), "header", []), "registry_wayfair_url", [])]));
        // line 52
        echo "
  


";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 52,  91 => 50,  90 => 49,  89 => 48,  88 => 47,  87 => 46,  85 => 45,  82 => 43,  80 => 41,  79 => 40,  77 => 39,  74 => 37,  72 => 35,  71 => 34,  69 => 33,  66 => 31,  64 => 29,  63 => 28,  61 => 27,  58 => 25,  56 => 23,  55 => 22,  53 => 21,  50 => 19,  48 => 17,  47 => 16,  46 => 15,  45 => 14,  43 => 13,  40 => 11,  38 => 9,  37 => 8,  36 => 7,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

  {# Hero Section #}
  {% include \"partials/hero.html.twig\" with {
    title: page.header.hero_title,
    subtitle: page.header.hero_subtitle,
    image: page.media[page.header.hero_image].url
  }%}

  {# How We Met Section #}
  {% include \"partials/about.html.twig\" with {
    about_title: page.header.how_title,
    about_image_holly: page.media[page.header.how_image_holly],
    about_image_chris: page.media[page.header.how_image_chris],
    about_image_group: page.media[page.header.how_image_group],
  }%}

  {# Details Section #}
  {% include \"partials/details.html.twig\" with {
    details_title: page.header.details_title,
    details_content: page.header.details_editor
  }%}

  {# Travel Section #}
  {% include \"partials/travel.html.twig\" with {
    travel_title: page.header.travel_title,
    travel_cards: page.header.airports
  }%}

  {# Accomodations Section #}
  {% include \"partials/accomodations.html.twig\" with {
    accomodations_title: page.header.accomodations_title,
    accomodations_cards: page.header.hotel_list
  }%}

  {# Things To Do Section #}
  {% include \"partials/activities.html.twig\" with {
    activities_title: page.header.activities_title,
    activities_cards: page.header.activities_list
  }%}

  {# Registry Section #}
  {% include \"partials/registry.html.twig\" with {
    registry_title: page.header.registry_title,
    zola_url: page.header.registry_zola_url,
    cb_url: page.header.registry_cb_url,
    ws_url: page.header.registry_ws_url,
    wayfair_url: page.header.registry_wayfair_url
  }%}

  


{% endblock %}
", "home.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/home.html.twig");
    }
}
